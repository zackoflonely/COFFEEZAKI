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
              <a class="nav-link" href="profile.php">Data Pelamar</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>
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
        }else if($username == 'staff' ){
    ?>
  <div style="height: 100%; background-image: url('assets/image/bg10.png'); background-size: cover;">
    <div style="padding: 7%;">
        <table class="table table-dark table-striped" style="text-align: left;">
            <thead class="text-center">
            <tr>
                <th>ID Pesanan</th>
                <th>Pesanan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody id="target">
            </tbody>
          </table>
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
  <script src="js/staff.js"></script>
</body>
<?php
}?>
</html>