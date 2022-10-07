<?php
session_start();
// cek apakah ada useername
if(!isset($_SESSION['username'])){
    header('Location:login-page.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="style/style.css">

    <title>edotronik.com</title>
  </head>
  <body>

    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">Navbar</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kategori Pilihan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Rekomendasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      </nav>



      <!-- slider -->
      <div class="container slide">
        <div class="row">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/h1.jpg" class="d-block w-100 img-fluid imageslider" alt="..." class="img-fluid">
              </div>
              <div class="carousel-item">
                <img src="img/h2.jpg" class="d-block w-100 img-fluid imageslider" alt="..." height="200">
              </div>
              <div class="carousel-item"> 
                <img src="img/h3.jpg" class="d-block w-100 img-fluid imageslider" alt="..." height="200">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    
      <!-- end slider -->

      <!--Kategori  -->
      <div class="container tabnew">
        <div class="row">
          <div class="col-md-12">
            <div class="row text-center">

                <h3>Kategori Pilihan</h3>
                <div class="col-md-3 kategoriproduk">
                  <img src="img/laptop.jpg" class="img-fluid">

                  <h5 class="laptop">Laptop</h5>
                </div>
                <div class="col-md-3 kategoriproduk">
                  <img src="img/handphone.jpg" class="img-fluid">

                  <h5 class="handphone">HP</h5>
                </div>
                <div class="col-md-3 kategoriproduk">
                  <img src="img/ipad.jpg" class="img-fluid">

                  <h5 class="ipad">Ipad</h5>
                </div>
                <div class="col-md-3 kategoriproduk">
                  <img src="img/headphone.jpg" class="img-fluid">

                  <h5 class="aksesoris">Aksesoris</h5>
                </div>
            </div>

          </div>

      <!-- end kategori -->
      <!-- produk -->
    <div class="container produk">
      <div class="row">
          <div class="row text-center">
        <h3>Rekomendasi</h3>
          <div class="col-md-4">
            <div class="card">
              <img src="img/redmi9t.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Xiaomi Redmi 9T 6/128 GB</h5>
                <h4>Rp1.999.000</h4>
               
                <a href="#" class="btn btn-primary">Add To Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="img/hdphone1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Headphone UBL A35</h5>
                <h4>Rp115.000</h4>
                
                <a href="#" class="btn btn-primary">Add To Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="img/acer3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Laptop Acer Anspire 3</h5>
                <h4>Rp4.899.000</h4>
               
                <a href="#" class="btn btn-primary">Add To Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="img/ipadmini.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-title">iPad Mini (Gen 5) 7,9" 256GB Wifi</p>
                <h4>Rp9.699.000</h4>
                
                <a href="#" class="btn btn-primary">Add To Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="img/mouse1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Mouse Logitech G502 HERO</h5>
                <h4>Rp1.199.000</h4>
               
                <a href="#" class="btn btn-primary">Add To Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="img/kyboard1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"> Keyboard K95 RGB PLATINUM</h5>
                <h4>Rp 2.149.000</h4>
               
                <a href="#" class="btn btn-primary">Add To Cart</a>
              </div>
            </div>
          </div>
          
      </div>
    </div>




      <!-- end Produk -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>