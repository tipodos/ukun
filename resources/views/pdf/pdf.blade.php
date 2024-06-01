<!DOCTYPE html>
<html>
<head>
    <title>Boleto de Compra</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        h1, h2 {
            color: #333;
            margin-bottom: 10px;
        }
        p, ul {
            margin-bottom: 15px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 5px;
        }
        strong {
            font-weight: bold;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f0ad4e;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #eea236;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalle de la Orden</h1>
        <p><strong>Número de Pedido:</strong> #{{ $order->id }}</p>
        <p><strong>Fecha y Hora de Compra:</strong> {{ $order->created_at }}</p>
        <hr>
        <p><strong>Nombre:</strong> {{ $order->nombre }}</p>
        <p><strong>Email:</strong> {{ $order->email }}</p>
        <p><strong>Teléfono:</strong> {{ $order->telefono }}</p>
        <p><strong>Dirección:</strong> {{ $order->direccion }}</p>
        <p><strong>Ciudad:</strong> {{ $order->ciudad }}</p>
        <p><strong>Departamento:</strong> {{ $order->departamento }}</p>
        <p><strong>Código Postal:</strong> {{ $order->postal }}</p>
        <p><strong>Total:</strong> {{ $order->total }}</p>

        <h2>Productos</h2>
        <ul>
            @foreach ($items as $item)
                <li>
                    <strong>Nombre del Producto:</strong> {{ $item['name'] }} <br>
                    <strong>Precio:</strong> {{ $item['price'] }} <br>
                    <strong>Cantidad:</strong> {{ $item['quantity'] }}
                </li>
            @endforeach
        </ul>
</body>
</html>
