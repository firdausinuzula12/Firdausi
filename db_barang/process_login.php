<?php 
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "barangin"; //nama database
  $conn = new mysqli($host, $user, $pass, $db);
  if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
  }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO tb_login (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
    header("Location: tampilan.php"); //pindah ke halaman tampilan.php

    exit();
    } else {
      echo "Gagal login: " . $conn->error;
      }
$conn->close();
?>