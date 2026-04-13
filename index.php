<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>
body {
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:Arial;

    /* Background animasi */
    background: linear-gradient(-45deg, #0f172a, #1e3a8a, #0f172a, #020617);
    background-size: 400% 400%;
    animation: gradientBG 10s ease infinite;
}

/* FIX keyframes */
@keyframes gradientBG {
    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}
}

/* Box login */
.box {
    background:rgba(255,255,255,0.15);
    padding:30px;
    border-radius:15px;
    backdrop-filter:blur(10px);
    text-align:center;
    width:250px;
}

/* Judul LOGIN glow putih */
h2 {
    color: white;
    margin-bottom: 20px;
    text-shadow:
        0 0 2px #ffffff,
        0 0 5px #ffffff,
        0 0 20px #ffffff,
        0 0 40px #ffffff;
}

/* Input */
input {
    width:100%;
    padding:10px;
    margin:10px 0;
    border:none;
    border-radius:5px;
    outline:none;
}

/* Tombol */
button {
    padding:10px;
    width:107%;
    border:none;
    border-radius:5px;
    cursor:pointer;
    background:#00ffcc;
    font-weight:bold;
    transition:0.3s;

    box-shadow:
        0 0 5px #00ffcc,
        0 0 10px #00ffcc;
}

button:hover {
    background:#00cc99;
    transform: translateY(-2px);
    box-shadow:
        0 0 10px #00ffcc,
        0 0 20px #00ffcc,
        0 0 30px #00ffaa;
}
</style>

</head>
<body>

<div class="box">
    <h2>LOGIN</h2>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>