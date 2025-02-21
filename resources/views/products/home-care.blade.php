<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Care Products</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            background: #e3f2fd;
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
            color: #1e88e5;
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
            background: #bbdefb;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .btn {
            display: inline-block;
            background: #1e88e5;
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
            background: #1565c0;
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
        <h1>🧴 Home Care Products</h1>
        <p>Temukan berbagai produk perawatan rumah terbaik untuk kenyamanan keluarga Anda.</p>

        <div class="product-list">
            <div class="product-card">
                <h3>Detergen & Pewangi</h3>
                <p>Membersihkan pakaian dan memberikan aroma segar.</p>
            </div>
            <div class="product-card">
                <h3>Pembersih Lantai</h3>
                <p>Menjaga kebersihan lantai rumah dari kuman.</p>
            </div>
            <div class="product-card">
                <h3>Alat Kebersihan</h3>
                <p>Berbagai peralatan kebersihan rumah tangga.</p>
            </div>
            <div class="product-card">
                <h3>Pengharum Ruangan</h3>
                <p>Memberikan kesegaran di setiap sudut rumah.</p>
            </div>
        </div>

        <a href="{{ url('/category') }}" class="btn">🔙 Kembali ke Kategori</a>
        <a href="{{ url('/') }}" class="btn">🏠 Kembali ke Home</a>
    </div>

</body>
</html>

