<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
  crossorigin="anonymous">
</head>
<body>
  <header>
  <?php
      session_start();
      $kopi = array(
        "nama_kopi" => ["affogato","cappuccino","americano","cortado","espresso","flat-white","latte","macchiato","mocaccino","ristretto"],
        "stok_kopi" => [10,15,20,10,15,20,10,15,20,15],
        "harga_kopi" => [15000,15000,13000,15000,15000,13000,15000,15000,13000,15000],
      );
      $panjang = count($kopi['nama_kopi']);
      $i = 0;
      $_SESSION['nama_kopi']=array();
      $_SESSION['stok_kopi']=array();
      $_SESSION['harga_kopi']=array();
      while ($i < $panjang) {
        array_push($_SESSION['nama_kopi'],$kopi["nama_kopi"][$i]);
        array_push($_SESSION['stok_kopi'],$kopi["stok_kopi"][$i]);
        array_push($_SESSION['harga_kopi'],$kopi["harga_kopi"][$i]);
        $i++;
      }
      $nama_kopi = json_encode($_SESSION['nama_kopi']);
      $stok_kopi = json_encode($_SESSION['stok_kopi']);
      $harga_kopi = json_encode($_SESSION['harga_kopi']);
      echo "<script>
      localStorage.setItem('nama_kopi'," .$nama_kopi.");
      localStorage.setItem('stok_kopi'," .$stok_kopi.");
      localStorage.setItem('harga_kopi'," .$harga_kopi.");
      </script>";
      if(isset($_POST['submit'])) {
          $username = $_POST['nama'];
          $password = $_POST['password'];
          if(isset($_POST['role'])) { 
            $selectedOption = $_POST['role']; 
            $_SESSION['role'] = $selectedOption; 
          }
          foreach ($_SESSION['nama'] as $nama){
            foreach($_SESSION['pw'] as $pw){  
              if($username == $nama && $password == $pw && $selectedOption=="User"){
                  $_SESSION['username'] = $username;
                  header('Location: home.php');
              }
            }
          }
          if($username == "admin" && $password == "admin" && $selectedOption=="Admin"){
            $_SESSION['username'] = $username;
            header('Location: admin.php');
          }
          else if($username == "staff" && $password == "123" && $selectedOption=="Staff"){
            $_SESSION['username'] = $username;
            header('Location: staff.php');
          }
          echo '<script type ="text/JavaScript">';  
          echo 'alert("Inputan salah bro")';  
          echo '</script>'; 
        }
      ?>
      <nav class="navbar navbar-expand-md navbar-dark" style="background-color: black;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">COFFESHOP </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: right;">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Sign In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </header>
  <div style="min-height: 90.5vh; background-image: url(assets/image/bg3.jpg); background-size: cover;">
  <div style="padding-top: 8%; display: flex; height: 100%; justify-content: center; align-items: center;">
      <form method="POST" id="login">
        <div class="box1 container-fluid">
        <h1>Sign In</h1>
        <table class="table">
          <tbody>
            <tr>
              <th scope="row">Username</th>
              <td>:</td>
              <td><input type="text" name="nama" class="email"/></td>
            </tr>
            <tr>
              <th scope="row">Password</th>
              <td>:</td>
              <td><input type="password" name="password" class="email"/></td>
            </tr>
            <tr>
                <th scope="row">Role</th>
                <td>:</td>
                <td>
                  <select name="role">
                  <option value="None">None</option>
                  <option value="Admin">Admin</option>
                  <option value="Staff">Staff</option>
                  <option value="User">User</option>
              </select></td>
            </tr>
          </tbody>
        </table>
        <div style="color: black;">
          <input type="checkbox">
          Remember me
        </div>
        <button style="margin-bottom: 2%;" type="submit" name="submit"
        class="btn btn-success">
          Sign In
        </button>
      </div>
      </form>
    </div>
    <div style="color: white; padding-top: 1%; text-align: center;">Dont have an account?
      <a href="signup.php" style="text-decoration: none;  color:#3498db;">Sign Up</a>
    </div>
    <footer>
      <div class="footers" style="position: absolute; bottom: 0; width: 100%;">
        <a href="#" style="color: white;"><i class="fa fa-facebook"></i></a>
        <a href="#" style="color: white;"><i class="fa fa-instagram"></i></a>
        <a href="#" style="color: white;"><i class="fa fa-youtube"></i></a>
        <a href="#" style="color: white;"><i class="fa fa-twitter"></i></a>
        <div class="cp" style="color: white;">Tasty and Healthy - Zakifr</div>
      </div>
    </footer>
  </div>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
  <!-- <script src="js/index.js"></script> -->
</body>
</html>