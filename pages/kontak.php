<?php
$pageTitle = 'Kontak - Portofolio';
$isInsidePages = true;
include '../includes/header.php';
?>

<div class="main-content">
<section class="container my-5">
    <h2 class="section-title text-center mb-5">Hubungi Saya</h2>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-4"><i class="fas fa-address-card me-2"></i>Informasi Kontak</h5>
                    <div class="mb-3">
                        <i class="fas fa-user text-primary me-2"></i>
                        <strong>Nama:</strong> Asyhar Qowiim
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-envelope text-primary me-2"></i>
                        <strong>Email:</strong> kingqowim@gmail.com
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-phone text-primary me-2"></i>
                        <strong>Telepon:</strong> 081234567890
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-map-marker-alt text-primary me-2"></i>
                        <strong>Alamat:</strong> Lebakbulus, Yogyakarta
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-graduation-cap text-primary me-2"></i>
                        <strong>Institusi:</strong> Universitas Negeri Yogyakarta
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-4"><i class="fas fa-paper-plane me-2"></i>Kirim Pesan</h5>
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                        </div>
                        <div class="mb-3">
                            <label for="subjek" class="form-label">Subjek</label>
                            <input type="text" class="form-control" id="subjek" placeholder="Subjek pesan">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="4" placeholder="Tulis pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title mb-4">Media Sosial</h5>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-outline-primary mx-2">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="btn btn-outline-info mx-2">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-outline-danger mx-2">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-outline-primary mx-2">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="btn btn-outline-dark mx-2">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<?php include '../includes/footer.php'; ?>