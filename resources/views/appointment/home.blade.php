<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
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
            <a class="nav-link ms-3 active" href="{{ route('beranda') }}" style="font-size: 17px;">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ms-3" href="{{ route('artikel') }}" style="font-size: 17px;">Artikel</a>
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

    <!-- Card+Button -->
    <div class="bg-img d-flex align-items-center" style="background: url('{{ asset('gambar/bg.jpg') }}') center/cover; height: 450px;">
      <div class="container" style="color: #272323;">
        <h4 class="display-6"><b>Solusi Kesehatan Terlengkap</b></h4>
        <p>Chat dokter, kunjungi rumah sakit, beli obat, dan update informasi seputar kesehatan, semua bisa di Online Appointment RSUD Raden Mattaher!</p>
        <div class="row">
          <div class="col-md-4">
            <button type="button" class="btn btn-lg" style="background-color: #ffffff;">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('gambar/jantung.jpg') }}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h6 class="card-title" style="text-align: justify;"><marquee>Sambungkan Asuransimu</marquee></h6>
                      <p class="card-text" style="font-size: 14px; text-align: justify  ;">Dapatkan manfaat asuransi secara langsung untuk layanan Online Appointment.</p>
                    </div>
                  </div>
                </div>
              </div>  
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Card+Button -->

    <br>

    <div class="container">
      <div class="row align-items-start">
        <div class="col-6">
          <h3>Baca 100+ Artikel Baru</h3>
        </div>
        <div class="col-6" style="text-align: right;">
          <p><a href="{{ route('artikel') }}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Lihat Semua</a></p>
        </div>
      </div>
        <button type="button" class="btn btn-outline-warning">Terbaru</button>
        <button type="button" class="btn btn-outline-warning">Populer</button>
        <button type="button" class="btn btn-outline-warning">Pneumonia</button>
        <button type="button" class="btn btn-outline-warning">Coronavirus</button>
        <button type="button" class="btn btn-outline-warning">Kecantikan</button>
        <button type="button" class="btn btn-outline-warning">Batuk</button>
          <div class="row row-cols-1 row-cols-md-4 g-3">
            <div class="col"><br>
              <div class="card">
                <a href=""><img src="{{ asset('gambar/mata.png') }}" class="card-img-top" alt="..."></a>
                <div class="card-body" style="text-align: justify;">
                  <h5 class="card-title" style="font-size: 17px;">Ini Penyebab Kanker Mata yang Perlu Diketahui</h5>
                  <p class="card-text" style="font-size: 14px;">"Kanker mata bisa disebabkan oleh banyak faktor, mulai dari keturunan sampai gaya hidup. Riwayat perawatan radiasi sebelumnya juga bisa meningkatkan risiko...</p>
                </div>
              </div>
            </div>
            <div class="col"><br>
              <div class="card">
                <a href=""><img src="{{ asset('gambar/perut.png') }}" class="card-img-top" alt="..."></a>
                <div class="card-body" style="text-align: justify;">
                  <h5 class="card-title" style="font-size: 17px;">Ini Obat Perut Begah yang Aman dan Bisa Dikonsumsi</h5>
                  <p class="card-text" style="font-size: 14px;">"Obat perut begah dapat dokter rekomendasikan jika kondisi ini dipicu oleh masalah pencernaan. Beberapa jenis obatnya yaitu, suplemen probiotik, bismuth subsalisi...</p>
                </div>
              </div>
            </div>
            <div class="col"><br>
              <div class="card">
                <a href=""><img src="{{ asset('gambar/telinga.png') }}" class="card-img-top" alt="..."></a>
                <div class="card-body" style="text-align: justify;">
                  <h5 class="card-title" style="font-size: 17px;">Penyebab Telinga Kiri Berdenging dan Cara Mengobatinya</h5>
                  <p class="card-text" style="font-size: 14px;">“Berdenging telinga kiri dapat terjadi akibat infeksi, paparan suara keras, kotoran telinga, cedera, dan efek samping pengobatan. Perawatannya tergantung pada penyebab...</p>
                </div>
              </div>
            </div>
            <div class="col"><br>
              <div class="card">
                <a href=""><img src="{{ asset('gambar/jerawat.png') }}" class="card-img-top" alt="..."></a>
                <div class="card-body" style="text-align: justify;">
                  <h5 class="card-title" style="font-size: 17px;">7 Kandungan Skincare untuk Kulit Berjerawat yang Aman Digunakan</h5>
                  <p class="card-text" style="font-size: 14px;">“Memilih skincare untuk kulit berjerawat harus selektif dan hati-hati. Sebab, jika salah justru bisa membuat jerawat semakin meradang.”</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    
    <br>

      @include('appointment.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
