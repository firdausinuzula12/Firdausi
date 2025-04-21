<?php 
    include 'koneksi.php'; 

    // $ = variable ()
    // post muncul
    // get ambil

    $id = $_POST['id']; 
    $nama = $_POST['nama']; 
    $harga = $_POST['harga']; 
    $stok = $_POST['stok']; 
 
    //mengupdate data yang telah diedit ke database  
    $query = "UPDATE tb_barang SET nama='$nama', harga='$harga', stok='$stok' WHERE id='$id'"; 
    mysqli_query($koneksi, $query); 

    //mengalihkan ke file index
    header('Location: tampilan.php'); //pindah kehalaman tampilan.php
?>