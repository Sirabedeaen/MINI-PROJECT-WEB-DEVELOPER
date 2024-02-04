<?php
session_start();
if(isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

$host = "localhost";
$port = "5432";
$dbname = "miniproject";
$user = "postgres";
$password = "1234"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);

if(isset($_POST['submit']) && !empty($_POST['submit'])){
    $plainPassword = $_POST['password'];

    $sql = "SELECT * FROM public.pasien WHERE username = $1";
    
    $stmt = pg_prepare($dbconn, "login_query", $sql);
    $result = pg_execute($dbconn, "login_query", array($_POST['username']));
    
    $user = pg_fetch_assoc($result);
    
    if($user) { 
        if($user['password'] === $plainPassword) {
            $_SESSION['username'] = $_POST['username'];
            header("Location: ../dashboard.php");
        } 
        else {
            echo '<script>alert("Password yang anda masukkan salah!");</script>';
            echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
        }
    } 
    else {
        echo '<script>alert("Username tidak terdaftar, cek kembali username anda atau silahkan daftar terlebih dahulu!");</script>';
        echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
    }
}

?>
