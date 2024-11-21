<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta de Compra - UKUN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .boleta {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        h1, h2, p {
            margin: 0;
            padding-bottom: 10px;
        }
        h1 {
            font-size: 24px;
            color: #333;
        }
        h2 {
            font-size: 20px;
            margin-top: 20px;
            color: #555;
        }
        .company-info, .customer-info, .details, .footer {
            margin-bottom: 20px;
        }
        .company-info p, .customer-info p {
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .total {
            text-align: right;
        }
        .total-row {
            font-weight: bold;
        }
        .footer {
            font-size: 12px;
            text-align: center;
            color: #777;
        }
    </style>
</head>
<body>

<div class="boleta">
    <div class="company-info">
        <h1>UKUN</h1>
        <p><strong>RUC:</strong> 123456789</p>
        <p><strong>Dirección:</strong> Av. Ejemplo 123, Ciudad</p>
        <p><strong>Teléfono:</strong> (01) 123-4567</p>
        <p><strong>Email:</strong> contacto@ukun.com</p>
    </div>

    <div class="customer-info">
        <h2>Boleta de Venta</h2>
        <p><strong>N° de Boleta:</strong>  #{{ $order->id }}</p>
        <p><strong>Fecha de Emisión:</strong> {{ $order->created_at }}</p>
        <p><strong>Cliente:</strong> {{ $order->nombre }}</p>
        <p><strong>Telefono:</strong> {{ $order->telefono }}</p>
        <p><strong>Dirección:</strong> {{ $order->direccion }}-{{ $order->ciudad }}</p>
    </div>

    <div class="details">
        <table>
            <thead>
                <tr>
                    <th>Cantidad</th>
                    <th>Descripción</th>
                    <th>Precio Unitario (S/.)</th>
                    <th>Total (S/.)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td>{{ $item['quantity'] }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ number_format($item['price'] )}}</td>
                    <td>{{ number_format($item['price'] *$item['quantity'])}}</td>
                </tr>
                @endforeach
                    <tr class="total-row">
                        <td colspan="3" class="total">Subtotal</td>
                        <td>S/. {{ number_format($order->total, 2) }}</td>
                    </tr>
                    <tr class="total-row">
                        <td colspan="3" class="total">IGV (18%)</td>
                        
                        <td>S/. {{ number_format($order->total * 0.18, 2) }}</td>
                    </tr>
                    <tr class="total-row">
                        <td colspan="3" class="total">Total a Pagar</td>
                        <td>S/. {{ number_format($order->total + ($order->total * 0.18), 2) }}</td>
                    </tr>
            </tbody>
        </table>
    </div>

    <div class="footer">
        <p>Gracias por su compra</p>
        <p>UKUN - Todos los derechos reservados</p>
    </div>
</div>

</body>
</html>
