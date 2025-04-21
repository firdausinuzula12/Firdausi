<?php 
  include 'koneksi.php';// untuk mengkoneksikan ke database

  $id = $_GET['id']; //mengambil variable id 

  $query = "SELECT * FROM tb_barang WHERE id='$id'"; 
  $hasil = mysqli_query($koneksi, $query); 
  $data = mysqli_fetch_assoc($hasil); 
?> 
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EDIT</title>
</head>
<body>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 30px;
      background-color: #f9f9f9;
      }

    form {
      background-color: white;
      padding: 50px;
      border-radius: 8px;
      width: 400px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      }

    form label {
      font-weight: bold;
      display: block;
      margin-top: 10px;
      }

    form input[type="text"],
    form input[type="number"] {
      width: 90%;
      padding: 10px;
      margin-top: 20px;
      border: 5px solid #ccc;
      border-radius: 20px;
      }

    form input[type="submit"] {
      margin-top: 20px;
      background-color: #28a745;
      color: white;
      padding: 10px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
      }

    form input[type="submit"]:hover {
      background-color: #218838;
      }
  </style>

      <form action="proses_edit.php" method="post"> 
          <input type="hidden" name="id" value="<?php echo $data['id']; ?>" /> 

          <label>ID:</label>
            <input type="text" name="id" value="<?php echo $data['id']; ?>" />
          <label>Nama:</label>
            <input type="text" name="nama" value="<?php echo $data['nama']; ?>" />
          <label>Harga:</label>
            <input type="text" name="harga" value="<?php echo $data['harga']; ?>" />
          <label>Stok:</label>
            <input type="text" name="stok" value="<?php echo $data['stok']; ?>" />
            <input type="submit" value="Update" /> 
      </form>
  </body>
</html>