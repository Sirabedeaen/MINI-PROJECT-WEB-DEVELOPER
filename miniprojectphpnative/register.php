<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MABDANS</title>
    <link rel="stylesheet" href="assets/register.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="topbar">
        <h3 class="text-topbar">Mini Project</h3>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f1f9ff" fill-opacity="1" d="M0,192L60,192C120,192,240,192,360,208C480,224,600,256,720,261.3C840,267,960,245,1080,218.7C1200,192,1320,160,1380,144L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
    </svg>

    <div class="content">
        <div class="card-register">
            <div class="card-main">
                <div class="card-header">Halaman Pendaftaran Akun</div>
                <div class="card-body">
                    <form class="form-register" method="post" action="process/insertdata.php">

                        <label for="nik">Nomor Induk Kependudukan (NIK)</label>
                        <input type="nik" class="form-input" id="nik" placeholder="Masukkan NIK yang terdiri dari 16 di angka" name="nik" required pattern="\d{16}" maxlength="16">

                        <label for="nama">Nama Lengkap (sesuai dengan KTP)</label>
                        <input type="nama" class="form-input" id="nama" placeholder="Masukkan nama lengkap" name="nama" required>

                        <label for="email">Email</label>
                        <input type="email" class="form-input" id="email" placeholder="Masukkan email" name="email" required>
                        
                        <label for="telepon">Nomor Handphone/Telepon</label>
                        <input type="telepon" class="form-input" id="telepon" pattern="[0-9]{10,13}" placeholder="Masukkan nomor handphone/telepon aktif" name="telepon" required>

                        <label for="alamat">Alamat</label>
                        <input type="alamat" class="form-input" id="alamat" placeholder="Masukkan alamat" name="alamat" required>

                        <label for="username">Username</label>
                        <input type="username" class="form-input" id="username" placeholder="Masukkan username" name="username" required>

                        <label for="password">Password</label>
                        <input type="password" class="form-input" id="password" placeholder="Masukkan password" name="pass" required>

                        <input type="submit" name="submit" class="btn btn-daftar" value="DAFTAR">

                        <a href="index.php">KEMBALI</a>

                    </form>

                </div>
            </div>
        </div>
    </div>

</body>
</html>