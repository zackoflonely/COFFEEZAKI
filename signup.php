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
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: black;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">COFFESHOP </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: right;">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Sign In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Sign Up</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </header>
  <?php
      session_start();
      $_SESSION['email']=array();
      $_SESSION['nama']=array();
      $_SESSION['pw']=array();
      if(isset($_POST['submit'])) {
          $email = $_POST['email'];
          $username = $_POST['nama'];
          $password = $_POST['password'];
          array_push($_SESSION['email'],$email);
          array_push($_SESSION['nama'],$username);
          array_push($_SESSION['pw'],$password);
          header('Location: index.php');
      }
      ?>
  <div style="min-height: 90.5vh; background-image: url('assets/image/bg3.jpg'); background-size: cover;">
    <div style="padding-top: 7%; display: flex; height: 100%; justify-content: center; align-items: center;">
      <div class="box2">
      <form method="POST">
            <h1>Sign Up</h1>
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row">Email</th>
                  <td>:</td>
                  <td><input type="email" name="email" class="email"/></td>
                </tr>
                <tr>
                  <th scope="row">Username</th>
                  <td>:</td>
                  <td><input type="text" name="nama" class="email"/></td>
                </tr>
                <tr>
                  <th scope="row">Password</th>
                  <td>:</td>
                  <td><input type="password" name="password" class="email" /></td>
                </tr>
              </tbody>
            </table>
              <input type="checkbox">
              Remember me
              <br>
              <button style="margin-top: 0.5%; margin-bottom: 2%; width: auto;" type="submit" name="submit" class="btn btn-success">
                Sign Up
              </button>
            </form>
          </div>
        </div>
        <div style="color: white; padding-top: 0.5%;; text-align: center;">Already have an account?
          <a href="index.php" style="text-decoration: none;  color:#3498db;">Sign In</a>
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
  <!-- <script src="js/daftar.js"></script> -->
</body>
</html>