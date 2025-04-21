<?php 
    include 'koneksi.php'; //untuk meng koneksikan ke database
    $id = $_POST['id'];
    $nama = $_POST['nama']; 
    $harga = $_POST['harga']; 
    $stok = $_POST['stok']; 
 
    $query = "INSERT INTO tb_barang (id, nama, harga, stok) VALUES ('$id','$nama', '$harga', '$stok')"; 
    mysqli_query($koneksi, $query); 
 
    header('Location: tampilan.php');// berpindah ke halaman tampilan.php
?>