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
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-image: url('assets/image/bg3.jpg');">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">COFFESHOP</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: right;">
                <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="staff.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="profile.php">Data Pelamar</a>
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
    <div style="height: 100%; background-image: url(assets/image/bg3.jpg); background-size: cover;">
    <h1 style="color: white; text-align: center; padding-top: 5%;">Profile</h1>
    <div style="padding: 7%;">
        <table class="table table-dark table-striped" style="text-align: left;">
            <tbody>
              <tr>
                <th scope="row">Nama</th>
                <td>:</td>
                <td id="nama"></td>
              </tr>
              <tr>
                <th scope="row">TTL</th>
                <td>:</td>
                <td id="ttl"></td>
              </tr>
              <tr>
                <th scope="row">Status</th>
                <td>:</td>
                <td id="status"></td>
              </tr>
              <tr>
                <th scope="row">Jenis Kelamin</th>
                <td>:</td>
                <td id="sex"></td>
              </tr>
              <tr>
                <th scope="row">Posisi yang dinginkan</th>
                <td>:</td>
                <td id="posisi"></td>
              </tr>
              <tr>
                <th scope="row">Pendidikan terakhir</th>
                <td>:</td>
                <td id="pendidikan"></td>
              </tr>
              <tr>
                <th scope="row">Mengapa kami harus menerima anda</th>
                <td>:</td>
                <td id="alasan"></td>
              </tr>
            </tbody>
          </table>
          <button class="btn btn-danger" id="clear">Clear</button>
    </div>
    <footer>
      <div class="footers">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
  crossorigin="anonymous"></script>
  <script src="js/profile.js"></script>
</body>
<?php }?>
</html>
