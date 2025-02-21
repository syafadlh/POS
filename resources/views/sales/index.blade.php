<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi POS</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #e3f2fd;
            text-align: center;
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
            max-width: 400px; 
            width: 90%; 
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            color: #1e88e5;
            font-size: 28px;
            margin-bottom: 15px;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            display: block;
        }
        input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
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
            margin-top: 15px;
            cursor: pointer;
            border: none;
        }
        .btn:hover {
            background: #1565c0;
            transform: scale(1.05);
        }
        .total {
            font-size: 20px;
            font-weight: bold;
            margin-top: 15px;
            color: #2c3e50;
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
        <h1>🛒 Transaksi POS</h1>
        <form id="transactionForm">
            <div class="form-group">
                <label for="product">Nama Barang:</label>
                <input type="text" id="product" name="product" required>
            </div>
            <div class="form-group">
                <label for="price">Harga Satuan:</label>
                <input type="number" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="quantity">Jumlah:</label>
                <input type="number" id="quantity" name="quantity" required>
            </div>
            <button type="button" class="btn" onclick="calculateTotal()">Hitung Total</button>
        </form>
        <p class="total">Total Harga: <span id="totalPrice">Rp 0</span></p>
        <a href="{{ url('/') }}" class="btn">🏠 Kembali ke Home</a>
    </div>

    <script>
        function calculateTotal() {
            let price = document.getElementById('price').value;
            let quantity = document.getElementById('quantity').value;
            let total = price * quantity;
            document.getElementById('totalPrice').innerText = "Rp " + total.toLocaleString();
        }
    </script>

</body>
</html>
