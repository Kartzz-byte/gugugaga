<!DOCTYPE html>
<html>
<head>
<title>Login Gagal</title>

<style>
body {
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:Arial;
    color:white;

    /* Background animasi */
    background: linear-gradient(-45deg, #0f172a, #1e3a8a, #0f172a, #020617);
    background-size: 400% 400%;
    animation: gradientBG 10s ease infinite;
}

@keyframes gradientBG {
    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}
}

/* Box */
.box {
    background: rgba(255,255,255,0.15);
    padding:60px;
    border-radius:14px;
    backdrop-filter:blur(10px);
    text-align:center;
    width:260px;
}

/* FOTO */
.photo-box {
    width:150px;
    height:150px;
    margin:0 auto 15px;
    border-radius:50%;
    overflow:hidden;

    border:3px solid #ff4e50;
    box-shadow:
        0 0 10px #ff4e50,
        0 0 20px #ff0000,
        0 0 40px #ff0000;
}

.photo-box img {
    width:100%;
    height:100%;
    object-fit:cover;
}

/* Judul */
h2 {
    color:white;
    margin-bottom:10px;
    text-shadow:
        0 0 5px #ff4e50,
        0 0 10px #ff4e50,
        0 0 20px #ff0000,
        0 0 40px #ff0000;
}

/* Text */
p {
    margin-bottom:20px;
    text-shadow:
        0 0 5px #fff;
}

/* Tombol */
a {
    text-decoration:none;
    padding:10px 20px;
    background:#ff4e50;
    color:white;
    border-radius:8px;
    display:inline-block;
    transition:0.3s;

    box-shadow:
        0 0 5px #ff4e50,
        0 0 10px #ff0000;
}

a:hover {
    background:#cc0000;
    transform: translateY(-2px);
    box-shadow:
        0 0 10px #ff4e50,
        0 0 20px #ff0000,
        0 0 30px #ff0000;
}
</style>

</head>
<body>

<div class="box">

    <!-- FOTO -->
    <div class="photo-box">
        <img src="images/error.png" alt="error">
    </div>

    <h2>Login Gagal</h2>
    <p>Username atau Password salah</p>

    <a href="index.php">Kembali</a>
</div>

</body>
</html>