<?php
// koneksi database
include './action/conn.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
mysqli_query($conn, "delete from mahasiswa where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
