<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Pinjaman</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
            background-color: #e0f2f1;
        }
        .logout-btn {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .header-content {
            animation: slideInDown 1s ease-in-out;
        }
        .card {
            animation: fadeInUp 1s ease-in-out;
        }
        @keyframes slideInDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        @keyframes fadeInUp {
            from {
                transform: translateY(100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>

<header class="bg-success text-white text-center py-5 position-relative">
    <div class="container header-content">
        <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>, di Layanan Pinjaman Online</h1>
        <p>Solusi cepat dan mudah untuk kebutuhan finansial Anda</p>
        <a class="btn btn-warning mt-3" href="lihat_pinjaman.php">Lihat Pinjaman</a>
        <a class="btn btn-danger logout-btn" href="logout.php">Logout</a>
    </div>
</header>

<section id="features" class="py-5">
    <div class="container text-center">
        <h2>Keunggulan Kami</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Proses Mudah</h3>
                        <p class="card-text">Ajukan pinjaman dengan proses yang cepat dan mudah.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Bunga Rendah</h3>
                        <p class="card-text">Nikmati suku bunga pinjaman yang kompetitif.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Tanpa Jaminan</h3>
                        <p class="card-text">Pinjaman tanpa perlu jaminan apapun.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="how-it-works" class="bg-success py-5">
    <div class="container text-center">
        <h2>Cara Kerja</h2>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar</h5>
                        <p class="card-text">Buat akun Anda dengan mudah.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ajukan Pinjaman</h5>
                        <p class="card-text">Isi formulir pengajuan pinjaman.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Disetujui</h5>
                        <p class="card-text">Pinjaman Anda akan disetujui dengan cepat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Dana Cair</h5>
                        <p class="card-text">Terima dana pinjaman ke rekening Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="py-5">
    <div class="container text-center">
        <h2>Testimoni Pengguna</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">"Layanan yang sangat membantu, proses cepat dan mudah!"</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jane Smith</h5>
                        <p class="card-text">"Bunga rendah dan tanpa jaminan, sangat direkomendasikan."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Robert Brown</h5>
                        <p class="card-text">"Proses pinjaman yang cepat dan mudah, sangat memuaskan."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-dark text-white text-center py-3">
    <div class="container">
        <p>&copy; 2024 Layanan Pinjaman Online. All Rights Reserved.</p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
