<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby & Kid Products</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            background: linear-gradient(to right, #ffecd2, #fcb69f);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }
        h1 {
            color: #ff6f61;
            font-size: 32px;
            margin-bottom: 10px;
        }
        p {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
        }
        .product-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            justify-content: center;
            margin-top: 20px;
        }
        .product-card {
            background: #fff3e6;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .btn {
            display: inline-block;
            background: #ff6f61;
            color: white;
            padding: 12px 20px;
            font-size: 16px;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s ease-in-out;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            margin: 10px;
        }
        .btn:hover {
            background: #e04e42;
            transform: scale(1.05);
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>🍼 Baby & Kid Products</h1>
        <p>Temukan produk terbaik untuk si kecil!</p>

        <div class="product-list">
            <div class="product-card">
                <h3>Popok Bayi</h3>
                <p>Nyaman dan lembut untuk bayi.</p>
            </div>
            <div class="product-card">
                <h3>Botol Susu</h3>
                <p>Material BPA-free, aman digunakan.</p>
            </div>
            <div class="product-card">
                <h3>Mainan Edukasi</h3>
                <p>Melatih kreativitas dan motorik anak.</p>
            </div>
            <div class="product-card">
                <h3>Pakaian Bayi</h3>
                <p>Lembut dan nyaman untuk si kecil.</p>
            </div>
        </div>

        <a href="{{ url('/category') }}" class="btn">🔙 Kembali ke Kategori</a>
        <a href="{{ url('/') }}" class="btn">🏠 Kembali ke Home</a>
    </div>

</body>
</html>
