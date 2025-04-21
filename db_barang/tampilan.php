<?php 
  include 'koneksi.php'; 
 
  $query = "SELECT * FROM tb_barang"; 
  $hasil = mysqli_query($koneksi, $query); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BarangIn</title>
</head>
<body>
  <h2> BARANG.IN</h2>
<style>
   body {
    font-family: 'Segoe UI', sans-serif;
    padding: 20px;
    background-color: #f4f4f4;
    }

  a {
    text-decoration: none;
    }

  .btn {
    padding: 6px 12px;
    border-radius: 4px;
    font-size: 14px;
    color: white;
    transition: 0.3s;
    margin-right: 5px;
    }

  .btn-add {
    background-color: #28a745;
    }

  .btn-add:hover {
    background-color: #218838;
    }

  .btn-edit {
    background-color: #007bff;
    }

  .btn-edit:hover {
    background-color: #0069d9;
    }

  .btn-delete {
    background-color: #dc3545;
    }

  .btn-delete:hover {
    background-color: #c82333;
    }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

  th, td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: center;
    }

  th {
    background-color: #343a40;
    color: white;
    }

  tr:nth-child(even) {
    background-color: #f9f9f9;
    }

  p a.btn-add {
    padding: 8px 14px;
    font-weight: bold;
    }
</style>
</body>
</html>

<p><a href="form_tambah.php" class="btn btn-add">+ Tambah Data</a></p> 
<table> 
  <tr> 
    <th>ID</th> 
    <th>Nama</th> 
    <th>Harga</th> 
    <th>Stok</th> 
    <th>Aksi</th> 
  </tr> 
 
  <?php 
  while ($row = mysqli_fetch_assoc($hasil)) { 
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>"; 
      echo "<td>" . $row['nama'] . "</td>"; 
      echo "<td> Rp " .number_format ( $row['harga'], 0, ',', '.'). "</td>"; 
      echo "<td>" . $row['stok'] . "</td>"; 
      echo '<td>
              <a href="form_edit.php?id=' . $row['id'] . '" class="btn btn-edit">Edit</a> 
              <a href="proses_hapus.php?id=' . $row['id'] . '" class="btn btn-delete">Hapus</a>
            </td>'; 
      echo "</tr>"; 
  } 
  ?> 
</table>