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
                    <a class="nav-link active" href="info.php">About</a>
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
    <main>
        <div id="content">
            <article id="caffein" class=" card">
            <h2>Kopi Tanpa Kafein</h2>
            <img src="assets/image/images(2).jpg" class="featured-image" alt="">
            <p>Kopi merupakan minuman yang sangat populer di kalangan masyarakat, 
                dimulai masyarakat muda hingga para lansia tidak akan melewatkan kesempatan untuk 
                meminum kopi. Namun dibalik hal itu ada beberapa efek samping dari kafein yang tidak bisa 
                dibantah. Sebagai balasan dari rasa tenang yang diberikan, realitanya kafein punya 
                dampak buruk kepada kesehatan lambung terlebih mereka yang memiliki riwayat 
                penyakit lambung tentu menjadi susah untuk menikmati kopi.</p>
                <p>Seiring berkembangnya zaman, varian dari jenis kopi terus bertambah, yang salah satunya sudah adanya varian 
                kopi tanpa kafein. Meskipun bukan 100% tanpa kafein namun tentu ini menjadi kabar 
                baik bagi pecinta kopi maupun yang ingin terjun ke dunia kopi untuk dapat 
                meminumnya tanpa kekhawatiran lebih terhadap dampak samping dari kafein.</p>
            </article>
            </div>
        </div>
        <aside>
            <article class="profile card">
                <header>
                    <figure>
                        <img src="assets/image/noffein (2).png" class="profile-image" alt="">
                    </figure>
                </header>
                <section>
                    <section>
                        <h3>Profile Perusahaan</h3>
                        <table>
                            <tr>
                                <th>Nama : </th>
                                <td>Noffein Coffee</td>
                            </tr>
                            <tr>
                                <th>Jenis : </th>
                                <td>Firma</td>
                            </tr>
                            <tr>
                                <th>Progres : </th>
                                <td>Perancangan</td>
                            </tr>
                        </table>
                    </section>
                </section>
            </article>
        </aside>
</main>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
</head>
<body>
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
</body>
<?php }?>
</html>