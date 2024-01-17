<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <title>Informasi Dan Artikel</title>
  </head>
  <body>
    <!-- Navbar-->
  <nav class="navbar navbar-expand-lg" style="background-color: #ffffff;">
    <div class="container">
      <img src="{{ asset('gambar/logo.png') }}" width="140" height="50" alt="Logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"> 
            <a class="nav-link ms-3" href="{{ route('beranda') }}" style="font-size: 17px;">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ms-3 active" href="{{ route('artikel') }}" style="font-size: 17px;">Artikel</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link ms-3 dropdown-toggle" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 17px;">
              Pelayanan Medis
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('janjiTemu') }}">Janji Dokter</a></li>
              <li><a class="dropdown-item" href="{{ route('beliObat') }}">Pembelian obat</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('riwayat') }}">Data Janji Temu</a></li>
              <li><a class="dropdown-item" href="{{ route('dataObat') }}">Data Obat</a></li>
            </ul>
          </li>
        </ul>
        <a href="{{ route('register') }}" class="btn btn-warning me-3"><b>Register</b></a>
        <a href="{{ route('login') }}" class="btn btn-primary"><b>Login</b></a>
      </div>
    </div>
  </nav>
  <!-- Navbar-->

      <!--Perpindahan-->
      <div style="background-color: #fffff;">
      <div class="container fluid">
      <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Artikel</li>
        </ol>
      </div>
      </div>
      <!--Perpindahan-->
      <div class="container">  
      <!--Search-->
        <br>      
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
          </form>
      <!--Search-->
      
      <!--Pilihan-->
      <br>
      <p class="fs-1 font-style fw-semibold">Topik Terkini</p>
      <div class="d-grid gap-50 d-md-block">
        <a type="submit" class="btn btn-outline-primary" href="#">Corona Virus</a>
        <button type="submit" class="btn btn-outline-primary">Demam Berdarah</button>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary me-md-2" type="button">Selengkapnya</button>
      </div>
      </div>
      <br>
      <br>
      <!--Pilihan-->

      <!--Slider-->
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active " data-bs-interval="100">
            <img src="{{ asset('gambar/slider1.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('gambar/slider2.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('gambar/slider3.jpg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br>
      <br>
      <!--Slider-->

      <!--Card Horizontal-->
      <div class="shadow p-3 mb-2 bg-body rounded">
      <div class="container">
      <div class="card">
        <div class="row g-0">
          <div class="col">
            <img src="{{ asset('gambar/card1.jpg') }}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title fs-3 fw-bold">Meningkatkan Kesehatan Mental dengan Meditasi</h5>
              <p class="card-text">Setiap orang memiliki masalah hidup yang kadang membuatnya merasa stres. Jika kondisi ini tidak diatasi, maka akan timbul gejala depresi yang membahayakan kesehatan mental.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              <a href="#" class="btn btn-warning">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('gambar/card2.jpg') }}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title fs-3 fw-bold">Pijat Bayi untuk Meringankan Penyakit Bilirubinuria (Penyakit Kuning)</h5>
              <p class="card-text">Beberapa bayi yang baru lahir diketahui menderita penyakit bilirubinuria, yaitu penyakit kuning yang ditandai dengan adanya kandungan bilirubin pada urin. Terdapat penelitian yang meneliti mengenai cara meringankan penyakit kuning pada bayi.</p>
              <p class="card-text"><small class="text-muted">Last updated 10 mins ago</small></p>
              <a href="#" class="btn btn-warning">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
      <!--Card Horizontal-->
      

      <!--Card title-->
      <br>
      <div class="shadow p-3 mb-2 bg-body rounded">
        <p class="fs-1 font-style fst-italic" >Artikel Baru</p>
        <div class="row row-cols-1 row-cols-md-4 g-8">
          <div class="col">
            <div class="card mb-5">
              <img src="{{ asset('gambar/card1.jpg') }}" class="card-img-top" alt="..." height="200" width="100">
              <div class="card-body">
              <h5 class="card-title  fw-bold">Meningkatkan Kesehatan Mental dengan Meditasi</h5>
              <p class="card-text">Setiap orang memiliki masalah hidup yang kadang membuatnya merasa stres. Jika kondisi ini tidak diatasi, maka akan timbul gejala depresi yang membahayakan kesehatan mental.</p>
                <a href="#" class="btn btn-warning">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card " >
              <img src="{{ asset('gambar/card2.jpg') }}" class="card-img-top" alt="..." height="200" width="100">
              <div class="card-body">
              <h5 class="card-title fw-bold">Pijat Bayi untuk Meringankan Penyakit Bilirubinuria (Penyakit Kuning)</h5>
              <p class="card-text">Beberapa bayi yang baru lahir diketahui menderita penyakit bilirubinuria, yaitu penyakit kuning yang ditandai dengan adanya kandungan bilirubin pada urin.</p>
                <a href="#" class="btn btn-warning">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="col">
              <div class="card">
                <img src="{{ asset('gambar/card3.jpg') }}" class="card-img-top" alt="..." height="200" width="100">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <a href="#" class="btn btn-warning">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="{{ asset('gambar/card4.jpg') }}" class="card-img-top" alt="..." height="200" width="100">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-warning">Go somewhere</a>
              </div>
            </div>
          </div>
          <br>
          <div class="col">
            <div class="card">
              <img src="{{ asset('gambar/card5.jpg') }}" class="card-img-top" alt="..." height="200" width="100">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-warning">Go somewhere</a>
              </div>
            </div>
          </div>
          <br>
          <div class="col">
            <div class="card" >
              <img src="{{ asset('gambar/card6.jpg') }}" class="card-img-top" alt="..." height="200" width="100">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-warning">Go somewhere</a>
              </div>
            </div>
          </div>
          <br>
          <div class="col">
            <div class="card">
              <img src="{{ asset('gambar/card7.jpg') }}" class="card-img-top" alt="..." height="200" width="100">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-warning">Go somewhere</a>
              </div>
            </div>
          </div>
          <br>
          <div class="col">
            <div class="card">
              <img src="{{ asset('gambar/card8.jpg') }}" class="card-img-top" alt="..." height="200" width="100">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-warning">Go somewhere</a>
              </div>
            </div>
          </div>
            <div class="d-grid mx-auto p-5">
              <button class="btn btn-warning" type="button">Selengkapnya</button>
            </div>
        </div>
        </div>
      </div>
      <!--Card title-->
      </div>
      </body>

      <!--Footer-->
      @include('appointment.footer')
        <!-- Footer -->
      </section>
      <!--Footer-->

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