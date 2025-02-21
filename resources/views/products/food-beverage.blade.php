<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food & Beverage Products</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            background: #f8f9fa;
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
            max-width: 650px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }
        h1 {
            color: #e67e22;
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
            gap: 15px;
            justify-content: center;
            margin-top: 20px;
        }
        .product-card {
            background: #fef5e7;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .btn {
            display: inline-block;
            background: #e67e22;
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
            background: #d35400;
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
        <h1>🍔 Food & Beverage Products</h1>
        <p>Temukan berbagai pilihan makanan & minuman berkualitas tinggi.</p>

        <div class="product-list">
            <div class="product-card">
                <h3>Fast Food</h3>
                <p>Nikmati makanan cepat saji lezat dan praktis.</p>
            </div>
            <div class="product-card">
                <h3>Minuman Segar</h3>
                <p>Beragam pilihan minuman menyegarkan untuk Anda.</p>
            </div>
            <div class="product-card">
                <h3>Snack</h3>
                <p>Camilan enak untuk menemani aktivitas sehari-hari.</p>
            </div>
            <div class="product-card">
                <h3>Makanan Sehat</h3>
                <p>Pilihan makanan sehat untuk gaya hidup lebih baik.</p>
            </div>
        </div>

        <a href="{{ url('/category') }}" class="btn">🔙 Kembali ke Kategori</a>
        <a href="{{ url('/') }}" class="btn">🏠 Kembali ke Home</a>
    </div>

</body>
</html>

