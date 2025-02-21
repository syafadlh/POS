<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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
            max-width: 500px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }
        h1 {
            color: #1e88e5;
            font-size: 28px;
            margin-bottom: 10px;
        }
        .profile-info {
            font-size: 18px;
            color: #555;
            margin-bottom: 15px;
        }
        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 3px solid #1e88e5;
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
        <h1>👤 User Profile</h1>
        <p class="profile-info">🆔 ID: <strong>{{ $id }}</strong></p>
        <p class="profile-info">📛 Name: <strong>{{ $name }}</strong></p>

        <a href="{{ url('/') }}" class="btn">🏠 Kembali ke Home</a>
        <a href="{{ url('/sales') }}" class="btn">💰 Ke Halaman Penjualan</a>
    </div>

</body>
</html>

