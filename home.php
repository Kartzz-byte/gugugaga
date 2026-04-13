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
<title>Steam Game Store</title>

<style>
body {
    margin:0;
    font-family: Arial;
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

.header {
    text-align:center;
    padding:25px;
}

.header h1 {
    text-shadow: 0 0 10px #00ffcc;
}

.user {
    text-align:center;
    margin-bottom:20px;
    color:#cbd5e1;
}

.title span {
    display:inline-block;
    animation: bounce 1.5s infinite, glow 2s infinite;
}

@keyframes glow {
    0% { text-shadow: 0 0 5px #00ffcc; }
    50% { text-shadow: 0 0 20px #00ffcc; }
    100% { text-shadow: 0 0 5px #00ffcc; }
}

/* HEADER CENTER */
.header {
    display:flex;
    justify-content:center;
    align-items:center;
    padding:30px;
}

/* ANIMASI MUNCUL UTAMA */
.title {
    text-align:center;
    opacity:0;
    transform: scale(0.5);
    animation: intro 1.5s ease-out forwards;
}

/* ANIMASI INTRO (ZOOM + FADE) */
@keyframes intro {
    0% {
        opacity:0;
        transform: scale(0.5);
        filter: blur(10px);
    }
    100% {
        opacity:1;
        transform: scale(1);
        filter: blur(0);
    }
}

/* PER HURUF */
.title span {
    display:inline-block;
    font-size:40px;
    font-weight:bold;
    color:ffffff;

    text-shadow:
        0 0 10px #00ffcc,
        0 0 20px #00ffcc;

    animation: bounce 1.5s infinite;
}

/* GERAK PER HURUF */
@keyframes bounce {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

/* DELAY PER HURUF (EFEK LOADING BERURUTAN) */
.title span:nth-child(1) { animation-delay: 0.0s; }
.title span:nth-child(2) { animation-delay: 0.05s; }
.title span:nth-child(3) { animation-delay: 0.1s; }
.title span:nth-child(4) { animation-delay: 0.15s; }
.title span:nth-child(5) { animation-delay: 0.2s; }
.title span:nth-child(6) { animation-delay: 0.25s; }
.title span:nth-child(7) { animation-delay: 0.3s; }
.title span:nth-child(8) { animation-delay: 0.35s; }
.title span:nth-child(9) { animation-delay: 0.4s; }
.title span:nth-child(10) { animation-delay: 0.45s; }
.title span:nth-child(11) { animation-delay: 0.5s; }
.title span:nth-child(12) { animation-delay: 0.55s; }
.title span:nth-child(13) { animation-delay: 0.6s; }
.title span:nth-child(14) { animation-delay: 0.65s; }
.title span:nth-child(15) { animation-delay: 0.7s; }

/* animasi naik turun */
@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.title span:nth-child(1) { animation-delay: 0s; }
.title span:nth-child(2) { animation-delay: 0.1s; }
.title span:nth-child(3) { animation-delay: 0.3s; }
.title span:nth-child(4) { animation-delay: 0.5s; }
.title span:nth-child(5) { animation-delay: 0.7s; }
.title span:nth-child(6) { animation-delay: 0.9s; }
.title span:nth-child(7) { animation-delay: 0.11s; }
.title span:nth-child(8) { animation-delay: 0.13s; }
.title span:nth-child(9) { animation-delay: 0.14s; }
.title span:nth-child(10) { animation-delay: 0.9s; }
.title span:nth-child(11) { animation-delay: 1s; }

/* GRID */
.grid {
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap:15px;
    width:95%;
    max-width:1200px;
    margin:auto;
}

/* CARD */
.card {
    background: rgba(255,255,255,0.1);
    border-radius:15px;
    overflow:hidden;
    text-align:center;
    backdrop-filter: blur(10px);
    border:1px solid rgba(255,255,255,0.2);
    box-shadow:0 0 10px #00ffcc;
    transition:0.3s;

    display:flex;
    flex-direction:column;
}

.header {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 25px;
}

.title {
    text-align: center;
}

.card:hover {
    transform:scale(1.05);
    box-shadow:0 0 20px #00ffcc;
}

.card img {
    width:100%;
    height:120px;
    object-fit:cover;
}
.card h3,
.card p {
    margin:5px 0;
}

.card p {
    font-size:12px;
    color:#cbd5e1;
}
.card h3 {
    margin:10px 0 5px;
}

.card p {
    font-size:12px;
    color:#cbd5e1;
}

.btn {
    display:block;
    margin:15px auto 15px auto;
    padding:8px 15px;
    background:#00ffcc;
    color:black;
    text-decoration:none;
    border-radius:8px;
    font-weight:bold;
    width:80%;
    text-align:center;

    margin-top:auto; /* INI YANG BIKIN NAIK KE BAWAH CARD */
}
.btn:hover {
    background:#00cc99;
}

/* logout */
.logout {
    text-align:center;
    margin:40px;
}

.logout a {
    padding:10px 20px;
    background:#ff4e50;
    color:white;
    border-radius:10px;
    text-decoration:none;
    box-shadow:0 0 10px #ff4e50;
}
</style>

</head>

<body>

<h1 class="title">
  <span>S</span><span>T</span><span>E</span><span>A</span><span>M</span>
  <span> </span>
  <span>G</span><span>A</span><span>M</span><span>E</span>
  <span> </span>
  <span>S</span><span>T</span><span>O</span><span>R</span><span>E</span>
</h1>
<div class="user">
    Welcome, <b><?php echo htmlspecialchars($username); ?></b>
</div>

<div class="grid">

    <div class="card">
        <img src="images/gta 5.png">
        <h3>GTA V</h3>
        <p>Open World</p>
        <a href="buy.php?game=GTA V" class="btn">Buy</a>
    </div>

    <div class="card">
        <img src="images/re.png">
        <h3>Resident Evil Requiem</h3>
        <p>Adventure</p>
        <a href="buy.php?game=Resident Evil Requiem" class="btn">Buy</a>
    </div>

    <div class="card">
        <img src="images/rdr2.png">
        <h3>Red Dead Redemption</h3>
        <p>Open World</p>
        <a href="buy.php?game=Red Dead Redemption" class="btn">Buy</a>
    </div>

    <div class="card">
        <img src="images/outlast.png">
        <h3>Outlast</h3>
        <p>Horror</p>
        <a href="buy.php?game=Outlast" class="btn">Buy</a>
    </div>

    <div class="card">
        <img src="images/re4.png">
        <h3>Resident Evil 4</h3>
        <p>Adventure</p>
        <a href="buy.php?game=Resident Evil 4" class="btn">Buy</a>
    </div>

    <div class="card">
        <img src="images/elden.png">
        <h3>Elden Ring</h3>
        <p>Dark Fantasy RPG</p>
        <a href="buy.php?game=Elden Ring" class="btn">Buy</a>
   </div>

    <div class="card">
        <img src="images/ets.png">
        <h3>Europe Truck Simulator</h3>
        <p>Simulation</p>
        <a href="buy.php?game=Europe Truck Simulator" class="btn">Buy</a>
    </div>

    <div class="card">
        <img src="images/spiderman.png">
        <h3>Spiderman 2</h3>
        <p>Action</p>
        <a href="buy.php?game=Spiderman 2" class="btn">Buy</a>
    </div>

    <div class="card">
        <img src="images/pragmata.png">
        <h3>Pragmata</h3>
        <p>Adventure</p>
        <a href="buy.php?game=Pragmata" class="btn">Buy</a>
    </div>

    <div class="card">
        <img src="images/silent.png">
        <h3>Silent Hill</h3>
        <p>Horror</p>
        <a href="buy.php?game=Silent Hill" class="btn">Buy</a>
    </div>

    <div class="card">
        <img src="images/forza.png">
        <h3>Forza Horizon 5</h3>
        <p>Racing</p>
        <a href="buy.php?game=Forza Horizon 5" class="btn">Buy</a>
    </div>

    <div class="card">
        <img src="images/cp.png">
        <h3>Cyberpunk 2077</h3>
        <p>RPG</p>
        <a href="buy.php?game=Cyberpunk 2077" class="btn">Buy</a>
    </div>

    <div class="card">
        <img src="images/cp.png">
        <h3>Cyberpunk 2077</h3>
        <p>RPG</p>
        <a href="buy.php?game=Cyberpunk 2077" class="btn">Buy</a>
    </div>

    <div class="card">
        <img src="images/cp.png">
        <h3>Cyberpunk 2077</h3>
        <p>RPG</p>
        <a href="buy.php?game=Cyberpunk 2077" class="btn">Buy</a>
    </div>

    <div class="card">
        <img src="images/cp.png">
        <h3>Cyberpunk 2077</h3>
        <p>RPG</p>
        <a href="buy.php?game=Cyberpunk 2077" class="btn">Buy</a>
    </div>

    <div class="card">
        <img src="images/cp.png">
        <h3>Cyberpunk 2077</h3>
        <p>RPG</p>
        <a href="buy.php?game=Cyberpunk 2077" class="btn">Buy</a>
    </div>

    <div class="card">
        <img src="images/cp.png">
        <h3>Cyberpunk 2077</h3>
        <p>RPG</p>
        <a href="buy.php?game=Cyberpunk 2077" class="btn">Buy</a>
    </div>

    <div class="card">
        <img src="images/cp.png">
        <h3>Cyberpunk 2077</h3>
        <p>RPG</p>
        <a href="buy.php?game=Cyberpunk 2077" class="btn">Buy</a>
    </div>


</div>

<div class="logout">
    <a href="logout.php">Logout</a>
</div>

</body>
</html>