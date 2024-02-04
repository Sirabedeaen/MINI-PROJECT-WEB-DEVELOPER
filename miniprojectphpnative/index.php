<?php
session_start();
if(isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

include("function/dbcon.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MABDANS</title>
    <link rel="stylesheet" href="assets/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="topbar">
        <h3 class="text-topbar">Mini Project</h3>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ccecee" fill-opacity="1" d="M0,192L60,192C120,192,240,192,360,208C480,224,600,256,720,261.3C840,267,960,245,1080,218.7C1200,192,1320,160,1380,144L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
    </svg>

    <div class="content">
        <div class="card-login">
            <div class="card-main">
                <div class="card-header">Halaman Masuk</div>
                <div class="card-body">
                    <form class="form-login" method="post" action="process/login.php">
                        <label for="username">Username</label>
                        <input type="username" class="form-input" id="username" placeholder="Masukkan username" name="username" required>
                        <label for="password">Password</label>
                        <input type="password" class="form-input" id="password" placeholder="Masukkan password" name="password" required>
                        <input type="submit" name="submit" class="btn btn-login" value="MASUK">
                    </form>

                    <p style="text-align: center;">Belum punya akun? <span><a href="register.php" class="">Daftar disini</a></span></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>