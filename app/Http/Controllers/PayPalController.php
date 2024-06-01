<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use Gloudemans\Shoppingcart\Facades\Cart;
use Barryvdh\DomPDF\Facade\PDF;
use Twilio\Rest\Client as TwilioClient;
use PayPalHttp\HttpException;

class PayPalController extends Controller
{
    private $client;

    public function __construct()
    {
        $clientId = config('paypal.sandbox.client_id');
        $clientSecret = config('paypal.sandbox.secret');
        $environment = new SandboxEnvironment($clientId, $clientSecret);
        $this->client = new PayPalHttpClient($environment);
    }

    public function createOrder(Request $request)
    {
        $billingInfo = $request->only(['nombre', 'email', 'telefono', 'direccion', 'ciudad', 'departamento', 'postal']);
        session()->put('billing_info', $billingInfo);

        $items = $request->input('items');
        $subtotal = $request->input('subtotal');
        $shippingCost = $request->input('shipping_cost');
        $total = $request->input('total');
        session()->put('items', $items);
        session()->put('subtotal', $subtotal);
        session()->put('shipping_cost', $shippingCost);
        session()->put('total', $total);

        $orderRequest = new OrdersCreateRequest();
        $orderRequest->prefer('return=representation');
        $orderRequest->body = [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "amount" => [
                    "currency_code" => "USD",
                    "value" => $total
                ]
            ]],
            "application_context" => [
                "cancel_url" => route('paypal.cancel'),
                "return_url" => route('paypal.success')
            ]
        ];

        try {
            $response = $this->client->execute($orderRequest);

            foreach ($response->result->links as $link) {
                if ($link->rel == 'approve') {
                    return redirect($link->href);
                }
            }
        } catch (HttpException $ex) {
            return response()->json(['error' => $ex->getMessage()]);
        }
    }

    public function paymentSuccess(Request $request)
    {
        if (!session()->has(['billing_info', 'items', 'subtotal', 'shipping_cost', 'total'])) {
            return redirect()->route('checkout')->with('error', 'Error al procesar la orden. Por favor, inténtalo de nuevo.');
        }

        $billingInfo = session('billing_info');
        $items = session('items');
        $subtotal = session('subtotal');
        $shippingCost = session('shipping_cost');
        $total = session('total');

        $order = Order::create([
            'nombre' => $billingInfo['nombre'],
            'email' => $billingInfo['email'],
            'telefono' => $billingInfo['telefono'],
            'direccion' => $billingInfo['direccion'],
            'ciudad' => $billingInfo['ciudad'],
            'departamento' => $billingInfo['departamento'],
            'postal' => $billingInfo['postal'],
            'subtotal' => $subtotal,
            'shipping_cost' => $shippingCost,
            'total' => $total
        ]);

        foreach ($items as $item) {
            OrderDetail::create([
                'order_id' => $order->id,
                'product_name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity']
            ]);
        }

        $pdf = PDF::loadView('pdf.pdf', compact('order', 'items'));
        $output = $pdf->output();
        
        // Crear un nombre de archivo único basado en el ID de la orden
        $fileName = 'boleto_' . $order->id . '.pdf';
        $filePath = storage_path('app/public/' . $fileName);
        file_put_contents($filePath, $output);

        $publicPath = url('storage/boleto_' . $order->id . '.pdf');//enlace del pdf

        

        Cart::destroy();
       

        return view('paypal.success', ['publicPath' => $publicPath]);
        
    }

    protected function sendWhatsAppLink($to, $message)
{
    $whatsappUrl = 'https://wa.me/' . $to . '?text=' . urlencode($message);
    return redirect($whatsappUrl);
}

    public function paymentCancel()
    {
        return view('paypal.cancel');
    }

    public function enviarPdf()
    {
    }
}
