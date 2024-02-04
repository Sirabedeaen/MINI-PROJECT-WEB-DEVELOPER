<?php
$host = "localhost";
$port = "5432";
$dbname = "miniproject";
$user = "postgres";
$password = "1234"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
if(isset($_POST['submit']) && !empty($_POST['submit'])){
    
    $sql = "INSERT INTO public.pasien(nik, nama, email, telepon, alamat, username, password) VALUES ('".$_POST['nik']."','".$_POST['nama']."','".$_POST['email']."','".$_POST['telepon']."','".$_POST['alamat']."','".$_POST['username']."','".$_POST['pass']."')";
    $ret = pg_query($dbconn, $sql);
    if($ret){
        echo '<script>alert("Data Berhasil Terdaftar, Silahkan Masuk.");</script>';
        echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
    } else{
        echo '<script>alert("Terjadi Kesalahan!");</script>';
        echo '<meta http-equiv="refresh" content="0;URL=../register.php">';
    }
}
?>
