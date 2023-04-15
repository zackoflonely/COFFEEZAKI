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
                    <a class="nav-link" href="index.php">Log Out</a>
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
        session_destroy();
        header('Location: index.php');
      }else{
    ?>
    <div style="height: 100%; background-image: url('assets/image/bg10.png'); background-size: cover;">
    <div style="padding: 7%;">
        <table class="table table-dark table-striped" style="text-align: left;">
            <thead class="text-center">
            <tr>
                <th>Nama</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            <?php
              $panjang = count($_SESSION["nama_kopi"]);
              $i = 0;
              while ($i < $panjang) {
                echo "<tr>
                <td>".$_SESSION["nama_kopi"][$i]."</td>";
                echo "<td>".$_SESSION["stok_kopi"][$i]."</td>";
                echo "<td>"."Rp.".$_SESSION["harga_kopi"][$i]."</td>";
              ?>
              <td><button type="button"  class="btn" style="background-color:white;" data-bs-toggle="modal" 
              data-bs-target="#exampleModal<?php echo $i?>">
              Edit</button>
              <button class="btn btn-danger">Remove</button></td>
              <div  style="color:black;" class="modal fade" id="exampleModal<?php echo $i?>" tabindex="-1" aria-labelledby="exampleModalLabel<?php echo $i?>" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"><?php echo $_SESSION["nama_kopi"][$i]?></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <?php 
                        // ambil data dari form
                        if (isset($_POST['submit'])) {
                        $nama = $_POST['nama'];
                        $harga = $_POST['harga'];
                        $stok = $_POST['stok'];

                        // simpan data ke dalam session
                        $_SESSION['nama_kopi'][$i] = $nama;
                        $_SESSION['harga_kopi'][$i] = $harga;
                        $_SESSION['stok_kopi'][$i] = $stok;

                        // kembali ke halaman sebelumnya atau halaman tertentu
                        header('Location: admin.php');
                        exit();
                    }
                    ?>
                    <form method="POST">
                    <div class="modal-body">
                      Nama Kopi
                      <input type="text" name="nama" value=<?php echo $_SESSION["nama_kopi"][$i]?>>
                      <br>
                      Stok Kopi
                      <input style="margin-left: 2.5%;" type="text" name="harga" value=<?php echo $_SESSION["stok_kopi"][$i]?>>
                      <br>
                      Harga Kopi
                      <input type="text" name="stok" value=<?php echo $_SESSION["harga_kopi"][$i]?>>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <?php
                echo "</tr>";
                $i++;
              }
              ?>
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
  <script src="js/beranda.js"></script>
</body>
<?php
}?>
</html>