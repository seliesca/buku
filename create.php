<?php
// Include konenksi database
include './config.php';

//menangkap data di kirim dari form
$id = $_POST['id'];
$nama_buku = $_POST['nama_buku'];
$kategori_buku = $_POST['kategori_buku'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];

//Menginput data ke database
mysqli_query($koneksi, "update buku set id='$id',nama_buku='$nama_buku', kategori_buku='$kategori_buku', penerbit='$penerbit', harga='$harga', diskon='$diskon'");
//Mengembalikan ke halaman awal
header("location:./index.php");


