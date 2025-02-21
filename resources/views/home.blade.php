<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }
        h1 {
            color: #2c3e50;
        }
        p {
            font-size: 18px;
            color: #555;
        }
        .btn {
            display: inline-block;
            background: #3498db;
            color: white;
            padding: 10px 20px;
            margin-top: 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }
        .btn:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to POS System</h1>
        <p>Kelola transaksi dengan mudah dan cepat menggunakan sistem Point of Sales kami.</p>
        <p>Temukan berbagai fitur unggulan untuk membantu bisnis Anda berkembang.</p>
        <a href="{{ url('/sales') }}" class="btn">Mulai Penjualan</a>
    </div>

</body>
</html>