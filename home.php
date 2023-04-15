<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE</title>
    <link rel="stylesheet" href="assets\style.css">
    <script src="https://kit.fontawesome.com/5c90e171df.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">COFFESHOP </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: right;">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="info.php">About</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      More
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="form.php">Form</a></li>
                      <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <?php
        session_start();
        $username = $_SESSION['username'];
        if($username == '' ){
          header('location:logout.php');
        }else{
    ?>
    <div style="height: 100%; background-image: url('assets/image/bg10.png'); background-size: cover;">
    <div id="menu" class="cardintro">
        <h2 style="color: white;" id="salam">
            <?php
              $nama=$_SESSION['username'];
              echo "SELAMAT DATANG ". strtoupper($nama) ;
            ?>
        </h2>
        <!-- <p>Selamat datang di Coffeeshop kami! Kami bangga menjadi bagian dari komunitas kopi yang semakin berkembang, 
            dan selalu berusaha untuk memberikan pengalaman kopi yang luar biasa untuk pelanggan kami.</p> -->
    <button class="btn btn-dark">
        <a href="menu.php" style="text-decoration: none; color: rgb(255, 255, 255);">Buy Now</a>
    </button>
    </div>
  </div>
  <div id="news" style="height: 100vh;">
    <div class="container-fluid">
      <img src="assets/image/bg8.jpg" alt="" style="width: 60%; float: left; padding: 5% 5% 0 5%;">
      <div style="color: black; float: right; padding: 13% 0 0 0; font-size: larger; font-weight: bold">
          Selamat datang di dunia kopi yang penuh dengan
          <br>aroma dan cita rasa yang menggugah selera! 
          <br>Ayo mulai jelajahi dunia kopi <br>
          dan jadilah bagian dari barista yang semakin berkembang!
          <br>
          <button class="btn btn-dark"><a href="form.php" style="padding-top: 3%; text-decoration: none; color: white; font-weight: 100;">Join Now</a></button>
        </div>
    </div>
  </div>
  <h1 style="text-align:center;padding: 3%; font-weight:bold;">FOR YOU</h1>
  <div class="row" style="margin:0% 0 0 16%;">
  <div class="col-sm-3" style="margin-right:2%;">
    <div class="card" style="width: 18rem;">
      <img src="assets/image/Menu/affogato.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Affogato</h5>
        <h6 class="card-title text-center">Rp. 15.000</h6>
      </div>
      <ul class="text-center">
        <button class="btn btn-success" onclick="alert('fitur masih dalam tahap pengembangan')">Buy</button>
        <button class="btn btn-dark">Information</button>
      </ul>
    </div>
  </div>
  <div class="col-sm-3" style="margin-right:2%;">
    <div class="card" style="width: 18rem;">
      <img src="assets/image/Menu/americano.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Americano</h5>
        <h6 class="card-title text-center">Rp. 15.000</h6>
      </div>
      <ul class="text-center">
        <button class="btn btn-success" onclick="alert('fitur masih dalam tahap pengembangan')">Buy</button>
        <button class="btn btn-dark">Information</button>
      </ul>
    </div>
  </div>
  <div class="col-sm-3" style="margin-right:2%;">
    <div class="card" style="width: 18rem;">
      <img src="assets/image/Menu/cappuccino.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Cappucino</h5>
        <h6 class="card-title text-center">Rp. 15.000</h6>
      </div>
      <ul class="text-center">
        <button class="btn btn-success" onclick="alert('fitur masih dalam tahap pengembangan')">Buy</button>
        <button class="btn btn-dark">Information</button>
      </ul>
    </div>
  </div>
  </div>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
  <footer>
    <div class="footers">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
      <a href="#"><i class="fa fa-youtube"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <div class="cp">Tasty and Healthy - Zakifr</div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
  crossorigin="anonymous"></script>
</body>
<?php
}?>
</html>