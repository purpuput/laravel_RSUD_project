<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tebusan Obat/Pembelian Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <style>
        #isi {
            border-style: solid;
            border-width: medium;
            margin: 50px;
            margin-top: 20px;
            padding: 10px;
        }

        input, select {
            height: 35px;
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

    <div class="container">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div id="isi">
                <a href="{{ route('dataObat') }}" class="btn btn-primary mb-2">Data Obat</a>
                <h3>Pembelian Obat</h3>
                <hr style="border-style: Double">
                <form action="{{ route('obatSave') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <table width="80%">
                        <tr>
                            <td class="fw-bold">Nama Pembeli</td>
                            <td><input type="text" name="nama_pembeli" size="50%"></td>
                        </tr>
                        <tr>
    <td class="fw-bold">Pilihan Obat</td>
    <td>
        <select name="obat1">
            <option value="Paracetamol">Paracetamol</option>
            <option value="Asam Mefenamat">Asam Mefenamat</option>
            <option value="Amoxilin">Amoxilin</option>
            <option value="Paratusin">Paratusin</option>
            <option value="Dexa">Dexa</option>
        </select>
        <input type="text" name="jumlah_obat1">
        <select name="obat2">
            <option value="Paracetamol">Paracetamol</option>
            <option value="Asam Mefenamat">Asam Mefenamat</option>
            <option value="Amoxilin">Amoxilin</option>
            <option value="Paratusin">Paratusin</option>
            <option value="Dexa">Dexa</option>
        </select>
        <input type="text" name="jumlah_obat2">
        <input type="hidden" name="total_biaya" id="total_biaya">
    </td>
</tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" name="simpan" class="fw-bold fst-italic btn btn-primary">Simpan</button>
                                <button type="reset" name="reset" class="fw-bold fst-italic btn btn-warning">Reset</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
