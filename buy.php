<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

// ambil game dari URL
$game = isset($_GET['game']) ? $_GET['game'] : "Unknown Game";
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Pembelian Berhasil</title>

<style>
body {
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:Arial;
    color:white;

    background: linear-gradient(-45deg, #0f172a, #1e3a8a, #0f172a, #020617);
    background-size: 400% 400%;
    animation: bg 10s ease infinite;
}

@keyframes bg {
    0% {background-position:0% 50%;}
    50% {background-position:100% 50%;}
    100% {background-position:0% 50%;}
}

.box {
    text-align:center;
    padding:30px;
    background: rgba(255,255,255,0.1);
    border-radius:15px;
    backdrop-filter: blur(10px);
    border:1px solid rgba(255,255,255,0.2);
    box-shadow:0 0 20px #00ffcc;
}

h1 {
    text-shadow:0 0 10px #00ffcc;
}

.game {
    font-size:22px;
    margin:10px 0;
    color:#00ffcc;
}

.btn {
    display:inline-block;
    margin-top:20px;
    padding:10px 20px;
    background:#00ffcc;
    color:black;
    border-radius:10px;
    text-decoration:none;
    font-weight:bold;
    box-shadow:0 0 10px #00ffcc;
}

.btn:hover {
    background:#00cc99;
}
</style>

</head>

<body>

<div class="box">

    <h1>Pembelian Berhasil!</h1>

    <p>Terima kasih, <b><?php echo htmlspecialchars($username); ?></b></p>

    <div class="game">
        <?php echo htmlspecialchars($game); ?>
    </div>


    <a href="home.php" class="btn">Kembali</a>

</div>

</body>
</html>