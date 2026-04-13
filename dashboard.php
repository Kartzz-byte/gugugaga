<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<style>
body {
    font-family: Arial;
    margin: 0;
    text-align: center;
    color: white;

    background: linear-gradient(-45deg, #0f172a, #1e3a8a, #0f172a, #020617);
    background-size: 400% 400%;
    animation: gradientBG 10s ease infinite;
}

@keyframes gradientBG {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.container {
    margin-top: 120px;
}

h1 {
    text-shadow: 
        0 0 5px #00ffcc,
        0 0 10px #00ffcc,
        0 0 20px #00ffcc;
}

p {
    margin-bottom: 20px;
}

/* FOTO BULAT */
.photo-box {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin: 0 auto 20px;
    overflow: hidden;

    border: 3px solid #00ffcc;
    box-shadow:
        0 0 10px #00ffcc,
        0 0 20px #00ffcc;
}

.photo-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* tombol */
.btn-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 40px;
}

.btn {
    padding: 10px 20px;
    background: #00ffcc;
    color: black;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;

    box-shadow:
        0 0 5px #00ffcc,
        0 0 10px #00ffcc;
}

.btn:hover {
    transform: translateY(-3px);
    background: #00cc99;
}
</style>
</head>

<body>

<div class="container">
    <h1>Selamat Datang, <?php echo htmlspecialchars($username); ?>!</h1>
    <p>ANDA BERHASIL LOGIN</p>

    <div class="photo-box">
        <img src="foto.jpg">
    </div>

    <div class="btn-container">
        <a href="home.php" class="btn">Masuk</a>
    </div>
</div>

</body>
</html>
