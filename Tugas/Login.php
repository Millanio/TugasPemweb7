<?php 
include 'Cek_Koneksi.php';
// Menyimpan data ke dalam variable
$username = $_POST['username'];
$password = $_POST['password'];
// Query untuk memilih data
$sql = "SELECT * FROM admin WHERE username='$username' AND pass ='$password'";
$result = mysqli_query($koneksi, $sql );
if (mysqli_num_rows($result)>0){
    session_start();
    $_SESSION['username']=$username;
    // Mengalihkan ke halaman tampilkontak.php
    header ("Location: Tampil_Kontak.php");    
    }else {
        echo "<h1> Login Gagal<?h1>";
    }
?>