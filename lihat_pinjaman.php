<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pinjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            text-align: center;
            color: #333;
        }

        .table {
            margin-top: 20px;
        }

        .btn {
            margin-top: 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #218838;
        }

        .photo-container {
            text-align: center;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 20px;
        }

        .photo-container img {
            max-width: 100%;
            max-height: 400px; /* Limit the height to make the image smaller */
            width: auto;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <?php
    include 'C:/xampp/htdocs/proyek/config.php';

    $sql = "SELECT * FROM loans";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $produk = htmlspecialchars($row['produk']);
        $no = htmlspecialchars($row['no']);
        $nama = htmlspecialchars($row['nama']);
        $jumlah_pinjaman = htmlspecialchars($row['jumlah_pinjaman']);
        $tenor_pinjaman = htmlspecialchars($row['tenor_pinjaman']);
        $tanggal_pengajuan = htmlspecialchars($row['tanggal_pengajuan']);
        $tanggal_jatuh_tempo = htmlspecialchars($row['tanggal_jatuh_tempo']);
        $metode_pembayaran_1 = htmlspecialchars($row['metode_pembayaran_1']);
        $metode_pembayaran_2 = htmlspecialchars($row['metode_pembayaran_2']);
        $metode_pembayaran_3 = htmlspecialchars($row['metode_pembayaran_3']);
        $metode_pembayaran_4 = htmlspecialchars($row['metode_pembayaran_4']);
        $nomor_rekening_1 = htmlspecialchars($row['nomor_rekening_1']);
        $nomor_rekening_2 = htmlspecialchars($row['nomor_rekening_2']);
        $nomor_rekening_3 = htmlspecialchars($row['nomor_rekening_3']);
        $nomor_rekening_4 = htmlspecialchars($row['nomor_rekening_4']);
        $photo = base64_encode($row['photo']);
        echo "
        <section id='loan-details' class='py-5 bg-light'>
            <div class='container'>
                <h2 class='text-center'>$produk</h2>
                <div class='table-responsive mt-4'>
                    <table class='table table-striped'>
                        <tr><th>No Pinjaman</th><td>$no</td></tr>
                        <tr><th>Nama Lengkap</th><td>$nama</td></tr>
                        <tr><th>Jumlah Pinjaman (Rp)</th><td>Rp$jumlah_pinjaman</td></tr>
                        <tr><th>Tenor Pinjaman</th><td>$tenor_pinjaman Hari</td></tr>
                        <tr><th>Tanggal Pengajuan</th><td>$tanggal_pengajuan</td></tr>
                        <tr><th>Tanggal Jatuh Tempo</th><td>$tanggal_jatuh_tempo</td></tr>
                        <tr><th>Metode Pembayaran</th><td>$metode_pembayaran_1</td></tr>
                        <tr><th>Nomor Rekening / Akun</th><td>$nomor_rekening_1</td></tr>
                        <tr><th>Metode Pembayaran</th><td>$metode_pembayaran_2</td></tr>
                        <tr><th>Nomor Rekening / Akun</th><td>$nomor_rekening_2</td></tr>
                        <tr><th>Metode Pembayaran</th><td>$metode_pembayaran_3</td></tr>
                        <tr><th>Nomor Rekening / Akun</th><td>$nomor_rekening_3</td></tr>
                        <tr><th>Metode Pembayaran</th><td>$metode_pembayaran_4</td></tr>
                        <tr><th>Nomor Rekening / Akun</th><td>$nomor_rekening_4</td></tr>
                    </table>
                </div>
                <div class='photo-container'>
                    <img src='data:image/jpg;base64,$photo' alt='Loan Image'>
        </section>";
    } else {
        echo "<section id='loan-details' class='py-5 bg-light'>
                <div class='container'>
                    <p class='text-center'>Data tidak ditemukan.</p>
                </div>
              </section>";
    }

    $conn->close();
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
