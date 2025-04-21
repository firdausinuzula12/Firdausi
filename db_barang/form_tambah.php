<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah</title>
</head>

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
<body>
    <form action="proses_tambah.php" method="post">
        ID: <input type="text" name="id" /><br />  
        Nama: <input type="text" name="nama" /><br /> 
        Harga: <input type="text" name="harga" /><br /> 
        Stok: <input type="text" name="stok" /><br /> 
        <input type="submit" value="Tambah" /> 
    </form>
</body>
</html>