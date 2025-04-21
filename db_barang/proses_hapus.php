<?php 
    include 'koneksi.php'; 
    $id = $_GET['id']; 
 
    $query = "DELETE FROM tb_barang WHERE id='$id'"; 
    mysqli_query($koneksi, $query); 
 
    header('Location: tampilan.php'); //pindah kehalaman tampilan.php
?> 