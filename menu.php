<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>NOFFEIN COFFEE</title>
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
        <a class="nav-link" aria-current="page" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="info.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          More
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="profile.php">Profile</a></li>
          <li><a class="dropdown-item" href="index.php">Log Out</a></li>
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
<body>
<div style="margin-top: 5%;">
<h1 style="padding: 3%; text-align: center;">ALL MENU</h1>
<div class="row" style="margin:0 0 0 15vw;">
<?php
  $panjang = count($_SESSION['nama_kopi']);
  $i = 0;
  while ($i < $panjang) {
  echo '<div class="col-sm-3" style="margin-right:1.5vw;">
    <div class="card" style="width: 18rem;">
      <img src="assets/image/Menu/'.$_SESSION['nama_kopi'][$i].'.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center" id="nama'.$i.'">'.$_SESSION['nama_kopi'][$i].'</h5>
        <h6 class="card-title text-center" id="harga'.$i.'">'."Rp.".$_SESSION['harga_kopi'][$i].'</h6>
      </div>';
      echo '<ul class="text-center">
        <button class="btn btn-success" onclick="beli('.$i.')">Buy</button>
        <button class="btn btn-dark">Information</button>
      </ul>';
      ?>
    </div>
  </div>
  <?php
  $i++;
  }
?> 
</div>
</div>
<button type="button" class="pesanan btn btn-warning" data-bs-toggle="modal" 
  data-bs-target="#exampleModal" onclick='tampil()'>
  <img src="assets/image/keranjang.png" style="width: 35px; margin-right:5px;" alt="">
  <span class="badge bg-secondary" id="krj">
  0</span>
</button>
<div  style="color:black;" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Lanjutkan Transaksi?</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="button" class="btn btn-success" onclick="window.location.href='kasir.php'">Konfirmasi</button>
    </div>
  </div>
</div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
<footer>
  <div class="footers" style="padding-bottom: 3vh;">
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
<script src="js/keranjang.js"></script>
</body>
<?php }?>
</html>