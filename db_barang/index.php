<?php
  session_start();
  if (isset($_SESSION['username'])){
  header("Location: tampilan.php");
  exit();
  }

?>

<!DOCTYPE html><html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login | BarangIn</title>
  <link rel="stylesheet" href="style.css">
</head>

  <style>
    body { 
      font-family: sans-serif; 
      background: #f4f4f4; 
      display: flex; 
      justify-content: center; 
      align-items: center; 
      height: 100vh; margin: 0; 
    }

    .login-container { 
      background: #fff; 
      padding: 25px; 
      border-radius: 10px; 
      box-shadow: 0 0 10px rgba(0,0,0,0.1); 
      width: 300px; 
    }

    input, button { 
      width: 100%; 
      padding: 10px; 
      margin-bottom: 15px; 
      border: 1px solid #ccc; 
      border-radius: 5px; 
    }

    button { 
      background-color: #007bff; 
      color: white; border: none; 
      cursor: pointer; 
    }

    button:hover {
      background-color:#0056b3;
    }
  </style>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="process_login.php" method="post"
        required autocomplete="off">
      <label for="name">Nama</label>
      <input type="text" name="name" required autocomplete="off" ><label for="email">Email</label>
  <input type="email" name="email" required autocomplete="new-password" >
      <label for="password">Password</label>
      <input type="password" name="password">
      <button type="submit">Masuk</button>
    </form>
  </div>
</body>
</html>