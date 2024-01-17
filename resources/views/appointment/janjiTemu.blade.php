<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Janji Temu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <style>
        #isi {
            border-style: double;
            border-width: medium;
            margin: 50px;
            margin-top: 20px;
            padding: 10px;
        }

        input,
        select {
            height: 38px;
            margin-bottom: 10px;
        }
    </style>
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

  <div class="container">
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
    
    <!--Form-->
    <div id="isi" >
    <a  href="{{ route('riwayat') }}" class="btn btn-warning mb-2" >
    Data Online Appointment
      </a>
      <h3>Pendaftaran Online Appointment</h3>
      <hr style="border-style:solid;">
      <form action="{{ route('pasienSave') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <table width="70%">
        <tr>
          <td>Nama Lengkap</td>
          <td><input type="text" name="nama_lengkap" size="50%"></td>
        </tr>
        
        <tr>
          <td>Tempat/Tanggal Lahir</td>
          <td><input type="text" name="tempat_lahir">
          <input type="date" name="tanggal_lahir"></td>
        </tr>

        <tr>
          <td class="">Jenis Kelamin</td>
          <td>
          <select name="jenis_kelamin">
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>Alamat</td>
          <td>
            <textarea name="alamat" cols="50" rows="2"></textarea>
          </td>
        </tr>

        <tr>
          <td>No Identitas</td>
          <td>
            <select name="no_identitas">
              <option value="KTP">KTP</option>
              <option value="SIM">SIM</option>
              <option value="BPJS">BPJS</option>
              <option value="Lainnya">Lainnya</option>
              <input type="text">
            </select>
          </td>
        </tr>

        <tr>
          <td>No HP</td>
          <td><input type="text" name="no_hp" size="50%"></td>
        </tr>

        <tr>
          <td>Penyakit</td>
          <td><input type="text" name="penyakit" size="50%"></td>
        </tr>

        <tr>
          <td>Pilihan Dokter</td>
          <td>
            <select name="dokter">
              <option value="DR. Rizal">DR. Rizal | Spesialis Anak</option>
              <option value="DR. Rita">DR. Rita | Spesialis Penyakit Dalam</option>
              <option value="DR. Firman">DR. Firman | Spesialis Jantung</option>
              <option value="DR. Sinta">DR. Sinta | Umum</option>
              <option value="DR. Mega">DR. Mega | Spesialis Gigi</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Tanggal Janji Temu</td>
          <td><input type="date" name="tanggal_janjitemu"></td>
        </tr>

        <tr>
          <td></td>
          <td>
            <button type="submit" name="simpan" class=" fw-bold fst-italic btn btn-primary">Simpan</button>
            <button type="submit" name="reset" class=" fw-bold fst-italic btn btn-warning">Reset</button>
          </td>
        </tr>
      </table>
      </form>
    </div>
    <!--Form-->
  </div>
  </div>

  @include('appointment.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>