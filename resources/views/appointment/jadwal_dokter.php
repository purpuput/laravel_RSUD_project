<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jadwal Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <p class="text-center fs-2 fst-italic fw-bold text-warning">Jadwal Praktek Dokter RSUD Raden Mataher</p>
    <table class="table shadow-lg p-3 mb-2 bg-body rounded table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Dokter</th>
                <th scope="col">Spesialis</th>
                <th scope="col">Hari Praktek</th>
                <th scope="col">Jam Praktek</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Include file koneksi
            include 'koneksi.php';

            // Query Database
            $no = 1;
            $sql = "SELECT * FROM jadwal_dokter ORDER BY nama_dokter ASC";
            $result = $mysqli->query($sql);

            // Tampilkan Data di Halaman Web
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $row["nama_dokter"] . "</td>";
                    echo "<td>" . $row["spesialis"] . "</td>";
                    echo "<td>" . $row["hari_praktek"] . "</td>";
                    echo "<td>" . $row["jam_praktek"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data dalam tabel</td></tr>";
            }

            // Tutup koneksi ke Database
            $conn->close();
            ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
