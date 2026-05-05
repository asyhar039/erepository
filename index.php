<?php
$pageTitle = 'Portofolio Mahasiswa Pendidikan Profesi Guru';
include 'includes/header.php';
?>

<div class="main-content">
<header class="hero-section">
    <div class="container hero-section-container">
        <div class="row justify-content-center align-items-center gx-3 gx-md-4 gx-lg-2">
            <div class="col-12 col-lg-6 col-xl-5 text-center text-lg-start hero-copy-col">
                <div class="hero-copy-panel">
                    <h1 class="display-4 fw-bold text-white mb-3 mb-md-4 ">Asyhar (KING) Qowim</h1>
                    <p class="lead text-white-50 mb-3 mb-md-4">Portofolio Digital untuk Mengembangkan Profesionalisme Guru</p>
                    <a href="#profil" class="btn btn-light btn-lg">Jelajahi Profil</a>
                </div>
            </div>
            <div class="col-12 col-lg-auto text-center hero-profile-col">
                <img src="dist/profile.png" alt="Foto Profil Abdur Rohim"
                    class="img-fluid profile-img hero-profile-img floating-img">
            </div>
        </div>
    </div>
</header>

<section class="container my-4 my-md-5 section-profil" id="profil">
    <div class="card shadow-sm profile-unified-card">
        <div class="card-body profile-unified-body">
            <header class="profile-unified-header mb-4">
                <span class="badge bg-primary-soft text-primary mb-3">Tentang Saya</span>
                <h2 class="section-title mb-0">Profil Mahasiswa</h2>
            </header>
            <div class="row g-4 g-lg-5 align-items-start">
                <div class="col-lg-7">
                    <div class="profile-unified-bio">
                        <p class="card-text mb-3">Nama saya <strong>KING QOWIM</strong>, berasal dari <strong>Malang</strong>. Keunikan daerah asal saya adalah keramahan masyarakat dan budaya edukasi yang kuat.</p>
                        <p class="card-text mb-3">Inspirasi saya untuk menjadi guru profesional dimulai dari kecintaan terhadap dunia pendidikan dan keinginan untuk mendampingi generasi muda meraih masa depan lebih baik. Tujuan saya adalah menjadi pendidik yang inovatif, berintegritas, dan mampu membangun karakter siswa.</p>
                        <p class="card-text mb-0">Saya berfokus pada pengembangan karakter, pembelajaran kreatif, dan kolaborasi dengan komunitas pendidikan untuk hasil yang lebih berdampak.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="profile-facts-grid" aria-label="Ringkasan profil">
                        <div class="profile-fact-item">
                            <span class="profile-fact-label">Nama</span>
                            <span class="profile-fact-value">Abdur Rohim</span>
                        </div>
                        <div class="profile-fact-item">
                            <span class="profile-fact-label">Asal</span>
                            <span class="profile-fact-value">Malang</span>
                        </div>
                        <div class="profile-fact-item">
                            <span class="profile-fact-label">Fokus</span>
                            <span class="profile-fact-value">Pendidikan &amp; Pengajaran</span>
                        </div>
                        <div class="profile-fact-item">
                            <span class="profile-fact-label">Nilai</span>
                            <span class="profile-fact-value">Integritas, inovasi, empati</span>
                        </div>
                    </div>
                </div>
            </div>
            <blockquote class="blockquote profile-quote profile-quote--unified mt-4 mb-0">
                <p class="mb-0">"Menjadi guru berarti membuka jendela dunia bagi setiap siswa."</p>
                <footer class="blockquote-footer text-end mt-3 mb-0">— Abdur Rohim</footer>
            </blockquote>
        </div>
    </div>
</section>
</div>

<?php include 'includes/footer.php'; ?>