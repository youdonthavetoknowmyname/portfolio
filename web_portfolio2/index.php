<?php 
try{

  $db = new mysqli("localhost","root","","contact");

}catch(Exception $exc){
  echo $exc->getTraceAsString();
}

if(isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['msg'])){

  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $msg = $_POST['msg'];

  $insert = $db -> query("INSERT INTO `data`( `nama`, `email`, `msg`) VALUES ('$nama','$email','$msg')");

  if($insert == true){
    echo "Terimakasih, tanggapan anda sudah dikirim!";
    exit();
  }

}


?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>Hello, world!</title>

  <style>
    body {
      background-color: #DCDCDC;
    }

    .about {
      padding-top: 80px;
      font-size: 15px;
    }

    footer {
      position: relative;
      bottom: 0;
      width: 100%;
      background-color: #333;
    }

    footer p {
      color: #aaa;
    }
  </style>

</head>

<body>
  <!--Nav-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
    <div class="container-fluid text-white">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#contact">contact us</a>
          </li>


        </ul>
      </div>
    </div>
  </nav>
  <!--Nav end-->

  <!--Jumbotron-->
  <div class="jumbotron text-center mt-5 mb-5 pt-5">
    <img src="fotoku.jpeg" class="rounded-circle" style="width:175px; height:160px;">
    <h1>Kelvyn Nathanael Maulana</h1>
    <p>Programmer</p>
  </div>
  <!--Jumbotron end-->

  <!--About-->
  <section class="about bg-light pb-5" id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">About</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <p>Kelvyn Nathanael Maulana lahir di Palangkaraya pada tanggal 15 september.
            Bersekolah di SMK Taruna Bhakti Depok jurusan Rekayasa Perangkat Lunak.
            Beragama Kristen dan tinggal di Jl.Haji Dimun</p>
        </div>
        <div class="col-sm-4">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, in quo hic debitis alias sint
            inventore magni quisquam ipsum magnam adipisci ea ratione sit dicta.</p>
        </div>
        <div class="col-sm-4">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora vero perferendis inventore similique
            suscipit nostrum, quo impedit tenetur eos, cum aliquid. Mollitia quod sit reiciendis!</p>
        </div>
      </div>
    </div>
  </section>
  <!--About end-->

  <!--contact-->
  <section class="contact bg-light pt-5" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Contact Us</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <form method="POST">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control" placeholder="nama anda">
            </div>

            <div class="form-group">
              <label >Email</label>
              <input type="email" name="email" class="form-control" placeholder="email aktif anda">
            </div>

            <div class="form-group">
              <label>Pesan</label>
              <textarea class="form-control" name="msg" rows="10" placeholder="ketikkan pesan anda"></textarea>
            </div>

            <button type="submit" class="btn btn-outline-secondary">Kirim Pesan</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--contact end-->

  <footer>
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-12">
          <p>&copy; copyright 2021 | kelvyn nathanael maulana</p>
        </div>
      </div>
    </div>
  </footer>



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>

</body>

</html>