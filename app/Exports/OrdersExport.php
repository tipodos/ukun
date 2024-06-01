<?php
namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class OrdersExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Order::with('orderDetails')->get(); // Incluye los detalles de la orden
    }

    public function headings(): array
    {
        return [
            'Nombre',
            'Email',
            'Telefono',
            'Direccion',
            'Ciudad',
            'Departamento',
            'Estado',
            'Postal',
            'Total',
            'Detalles',
        ];
    }

    public function map($order): array
    {
        return [
            $order->nombre,
            $order->email,
            $order->telefono,
            $order->direccion,
            $order->ciudad,
            $order->departamento,
            $order->estado, // Supongo que `estado` es un campo en tu tabla de órdenes
            $order->postal,
            $order->total,
            $order->orderDetails->map(function ($detail) {
                return 'Producto: ' . $detail->product_name . ', Precio: ' . $detail->price . ', Cantidad: ' . $detail->quantity;
            })->join('; '), // Ajusta el formato de los detalles como necesites
        ];
    }
}
