<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

include("process/showdashboard.php");
$newObj = new Pasien();
$cust = $newObj->getPasien($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MABDANS</title>
    <link rel="stylesheet" href="assets/dashboard.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="topbar">
        <h3 class="text-topbar">Dashboard Pasien</h3>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#e2fcd6" fill-opacity="1" d="M0,192L60,192C120,192,240,192,360,208C480,224,600,256,720,261.3C840,267,960,245,1080,218.7C1200,192,1320,160,1380,144L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
    </svg>

    <div class="content">
        <div class="card-dashboard">
        <div class="card-main">
                <div class="card-header">Welcome, <?php echo $_SESSION['username']; ?></div>
                <?php foreach($cust as $key => $pasien) :?>
                <div class="card-body">
                    <form class="form-dashboard">
                        <label>Nomor Induk Kependudukan (NIK)</label>
                        <div class="box-label">
                            <label><span class="php-code"><?php echo $pasien['nik'] ?></span></label>
                        </div>
                        <label>Nama Lengkap</label>
                        <div class="box-label">
                            <label class="php-code"><?php echo $pasien['nama'] ?></label>
                        </div>

                        <label>Email</label>
                        <div class="box-label">
                            <label class="php-code"><?php echo $pasien['email'] ?></label>
                        </div>

                        <label>Nomor Telepon</label>
                        <div class="box-label">
                            <label class="php-code"><?php echo $pasien['telepon'] ?></label>
                        </div>

                        <label>Alamat</label>
                        <div class="box-label">
                            <label class="php-code"><?php echo $pasien['alamat'] ?></label>
                        </div>

                        <label>Username</label>
                            <div class="box-label">
                        <label class="php-code"><?php echo $pasien['username'] ?></label>
                        </div>
                        
                        <label>Password</label>
                            <div class="box-label">
                        <label class="php-code"><?php echo $pasien['password'] ?></label>
                        </div>

                        <a href="process/logout.php">KELUAR</a>

                    </form>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>

</body>
</html>