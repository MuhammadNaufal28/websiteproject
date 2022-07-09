<?php 
// koneksi database
require 'functions.php';

$id = $_GET["id"];

 
// menangkap data yang di kirim dari form

$id = $_POST['id'];
$namateam = $_POST['nama_Team'];
$waktubooking = $_POST['waktubooking'];
$pembayaran = $_POST['pembayaran'];
$status = $_POST['status'];

 
// update data ke database
mysqli_query($conn, "UPDATE `futsal_database` SET `nama_Team`='$namateam',`waktubooking`='$waktubooking',`pembayaran`='$pembayaran',`status`='$status' WHERE id = $id ");

header("location:index.php");
 
?>