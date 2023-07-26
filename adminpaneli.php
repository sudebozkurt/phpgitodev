<!DOCTYPE html>
<html>
<head>
    <style>
       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f4f4f4;
        }
        .header {
            width: 100%;
            height: 60px;
            background-color: #2c3e50;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 30px;
            box-sizing: border-box;
        }
        .header h1 {
            font-size: 24px;
        }
        .header .logout {
            background-color: #e74c3c;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .sidebar {
            height: 50px;
            background-color: #34495e;
            color: white;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        .content {
            padding: 30px;
            color: #2c3e50;
        }
        .content h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Admin Paneli</h1>
        <a href="index.php" class="logout">Çıkış Yap</a>
    </div>
    <div class="sidebar">
        <a href="adminpaneli.php">Ana Sayfa</a>
        <a href="message.php">Mesajlar</a>
    </div>
    <div class="content">
        <h2>Hoşgeldiniz!</h2>
        <p>Bu basit admin paneline hoşgeldiniz. İçerik kısmını kendi ihtiyaçlarınıza göre düzenleyebilirsiniz.</p>
    </div>
</body>
</html>