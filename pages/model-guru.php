<?php
$pageTitle = 'Model Guru - Portofolio';
$isInsidePages = true;
include '../includes/header.php';
?>

<div class="main-content">
<section class="container my-5">
    <h2 class="section-title text-center mb-5">Model Guru yang Dituju</h2>
    <p class="text-center mb-4">Mahasiswa merancang misi yang ingin dituju dan kompetensi serta karakter guru yang ingin dibangun untuk menuju guru profesional.</p>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card text-center h-100 shadow-sm">
                <div class="card-body">
                    <i class="fas fa-bullseye fa-3x text-primary mb-3"></i>
                    <h5 class="card-title text-dark">Misi</h5>
                    <p class="card-text">Misi saya sebagai guru adalah [Deskripsi misi]</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card text-center h-100 shadow-sm">
                <div class="card-body">
                    <i class="fas fa-cogs fa-3x text-success mb-3"></i>
                    <h5 class="card-title">Kompetensi</h5>
                    <ul class="list-unstyled">
                        <li><strong>Pedagogik:</strong> [Deskripsi]</li>
                        <li><strong>Kepribadian:</strong> [Deskripsi]</li>
                        <li><strong>Sosial:</strong> [Deskripsi]</li>
                        <li><strong>Profesional:</strong> [Deskripsi]</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card text-center h-100 shadow-sm">
                <div class="card-body">
                    <i class="fas fa-user-tie fa-3x text-warning mb-3"></i>
                    <h5 class="card-title">Karakter Guru</h5>
                    <p class="card-text">Karakter yang ingin saya bangun meliputi [Deskripsi karakter].</p>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<?php include '../includes/footer.php'; ?>