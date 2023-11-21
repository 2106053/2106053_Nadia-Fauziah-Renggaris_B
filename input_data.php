<?php

include './koneksi.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$tanggal_pesan = $_POST['tanggal_pesan'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$tiketpesan = $_POST['tiketpesan'];



$query = "INSERT INTO tiket_konser VALUES('$id','$username','$password','$tanggal_pesan','$email','$alamat','$tiketpesan')";



mysqli_query($koneksi, $query);

header("location: ./index.php");
exit;
