<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra Exitosa</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h1 {
            color: #4CAF50;
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2em;
            line-height: 1.6;
        }
        iframe {
            width: 100%;
            height: 500px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1em;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
        }
        .btn-download {
            background-color: #4CAF50;
        }
        .btn-whatsapp {
            background-color: #25D366;
        }
        .btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gracias por tu compra</h1>
        <p>Tu compra ha sido procesada exitosamente. Puedes ver y descargar tu boleto a continuación:</p>
        <iframe src="{{ $publicPath }}"></iframe>
        <p>
            <a href="{{ $publicPath }}" download="boleto.pdf" class="btn btn-download">Descargar Boleto</a>
            <a href="https://wa.me/?text=He%20comprado%20un%20boleto%20y%20puedo%20descargarlo%20aquí:%20{{ urlencode($publicPath) }}" target="_blank" class="btn btn-whatsapp">Compartir en WhatsApp</a>
            
        </p>
        <a href="/" class="btn btn-back btn-warning" style="color: #333; background-color: #f0ad4e; border-color: #eea236;">Volver al Inicio</a>

    </div>
</body>
</html>
