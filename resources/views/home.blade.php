<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    
    <!-- Tambahkan CSS di sini -->
    <style>
        body {
            background-color: #1a1a2e; /* Warna latar belakang gelap */
            color: #ffffff; /* Warna teks putih */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            background-color: #16213e;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            border-left: 5px solid #0f3460;
        }
    </style>
</head>
<body>
    <h1>Selamat Pagi Dunia, {{ $nim }}</h1>
</body>
</html>