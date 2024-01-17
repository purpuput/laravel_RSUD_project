<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Janji Temu</title>
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
            <a class="nav-link ms-3" href="{{ route('beranda') }}" style="font-size: 17px;">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ms-3" href="{{ route('artikel') }}" style="font-size: 17px;">Artikel</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link ms-3 dropdown-toggle active" aria-current="page" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 17px;">
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

    <br>

    <!-- DataTable -->
    <div class="container">
        <table class="table table-striped table-hover datatab">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NAMA LENGKAP</th>
                    <th>TEMPAT LAHIR</th>
                    <th>TANGGAL LAHIR</th>
                    <th>PENYAKIT</th>
                    <th>DOKTER</th>
                    <th>TANGGAL JANJI TEMU</th>
                    <th>BIAYA</th>
                </tr>
            </thead>
            <tbody>
                @foreach($request as $key => $ambil)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $ambil->nama_lengkap }}</td>
                        <td>{{ $ambil->tempat_lahir }}</td>
                        <td>{{ $ambil->tanggal_lahir }}</td>
                        <td>{{ $ambil->penyakit }}</td>
                        <td>{{ $ambil->dokter }}</td>
                        <td>{{ $ambil->tanggal_janjitemu }}</td>
                        <td>{{ $ambil->biaya }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- DataTable -->

    @include('appointment.footer')

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- JavaScript -->
</body>

</html>
