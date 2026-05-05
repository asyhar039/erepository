<?php
$pageTitle = 'Artefak - Portofolio';
$isInsidePages = true;
include '../includes/header.php';
?>

<div class="main-content">
<section class="container my-5">
    <h2 class="section-title text-center mb-5">Artefak Modul Ajar Kurikulum Merdeka</h2>
    <p class="text-center mb-4">Berikut adalah artefak yang saya kembangkan sebagai modul ajar berbasis Kurikulum Merdeka dan Deep Learning, meliputi strategi pembelajaran, media, produk siswa, dan refleksi implementasi.</p>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-file-alt me-2"></i>Modul Ajar Kurikulum Merdeka (Deep Learning)</h5>
                    <ul class="modul-details list-unstyled">
                        <li><strong>Konteks:</strong> Modul ini dirancang dalam kerangka Kurikulum Merdeka dengan fokus Deep Learning, menggabungkan eksplorasi, kolaborasi, dan refleksi autentik.</li>
                        <li><strong>Tujuan:</strong> Mendorong pembelajaran bermakna melalui proyek, diskusi, dan asesmen autentik yang mendukung profil pelajar Pancasila dan kompetensi abad 21.</li>
                        <li><strong>Kelebihan:</strong> Memperkuat kemandirian siswa, relevansi dunia nyata, serta pengembangan karakter dan kompetensi kritis.</li>
                        <li><strong>Kekurangan:</strong> Memerlukan literasi digital, dukungan sumber belajar adaptif, dan pendampingan guru yang konsisten.</li>
                        <li><strong>Analisis Teori:</strong> Berbasis prinsip Deep Learning, modul ini menekankan pembelajaran aktif, problem solving, dan refleksi hasil belajar.</li>
                    </ul>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#previewModulAjarModal"><i class="fas fa-eye me-2"></i>Preview Modul Ajar</button>
                </div>
            </div>
        </div>
        <!-- Tambahkan card lainnya untuk media, contoh hasil kerja siswa, dll. -->
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-video me-2"></i>Media Pembelajaran</h5>
                    <p class="card-text">[Deskripsi media]</p>
                    <a href="media.php" class="btn btn-secondary"><i class="fas fa-play me-2"></i>Lihat Media</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Preview Modul Ajar Modal -->
<div class="modal fade" id="previewModulAjarModal" tabindex="-1" aria-labelledby="previewModulAjarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-centered">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="previewModulAjarModalLabel">Preview Modul Ajar</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0 iframe-preview">
                <iframe src="../assets/docs/MODUL_AJAR_INFORMATIKA_1.pdf" frameborder="0" width="100%" height="100%"></iframe>
            </div>
            <div class="modal-footer border-0">
                <a href="../assets/docs/MODUL_AJAR_INFORMATIKA_1.pdf" class="btn btn-primary" download="MODUL AJAR INFORMATIKA (1).pdf"><i class="fas fa-download me-2"></i>Download Modul Ajar</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>

<?php include '../includes/footer.php'; ?>