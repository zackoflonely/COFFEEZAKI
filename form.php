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
    <title>Document</title>
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-white ">
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
    <div style="height: 100%;">
    <div class="card" style=" text-align: left;">
        <h1 style="text-align: center;">FORM</h1>
        <div class="table-responsive">
          <table class="table table-light table-striped">
            <form method="post" action="form.php" id="profile">
            <tbody>
              <tr>
                <th scope="row">Nama</th>
                <td>:</td>
                <td> <input id="nama" type="text"></td>
              </tr>
              <tr>
                <th scope="row">TTL</th>
                <td>:</td>
                <td><input id="ttl" type="text"></td>
              </tr>
              <tr>
                <th scope="row">Status</th>
                <td>:</td>
                <td><input id="status" type="text"></td>
              </tr>
              <tr>
                <th scope="row">Jenis Kelamin</th>
                <td>:</td>
                <td><input type="radio" name="sex" value="Laki-laki"><label for="ang1">Laki-laki</label>
                    <input type="radio" name="sex" value="Perempuan" ><label for="ang2">Perempuan</label>
                </td>
              </tr>
              <tr>
                <th scope="row">Posisi yang dinginkan</th>
                <td>:</td>
                <td><div>
                  <ul>
                      <input id="posisi" type="checkbox" value="Barista">Barista
                      <input id="posisi" type="checkbox" value="Marketing">Marketing
                      <input id="posisi" type="checkbox" value="Digital Designer">Digital Designer
                      <input id="posisi" type="checkbox" value="Kasir">Kasir
                  </ul>
              </div></td>
              </tr>
              <tr>
                <th scope="row">Pendidikan terakhir</th>
                <td>:</td>
                <td>
                  <select name="id" id="pendidikan">
                  <option value="None">None</option>
                  <option value="SMP">SMP</option>
                  <option value="SMA">SMA</option>
                  <option value="S1">S1/Lebih</option>
              </select></td>
              </tr>
              <tr>
                <th scope="row">Mengapa kami harus menerima anda</th>
                <td>:</td>
                <td><textarea name="id" cols="48" rows="15" id="alasan"></textarea></td>
              </tr>
            </tbody>
          </table>
        </div>
        <button class="btn btn-dark" id="finish">Submit</button>
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
<script src="js/form.js"></script>
</body>
</html>