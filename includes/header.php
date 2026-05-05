<?php
$isInsidePages = $isInsidePages ?? false;
$navPrefix = $isInsidePages ? '../' : '';
$pagesPrefix = $isInsidePages ? '' : 'pages/';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Portofolio Mahasiswa Pendidikan Profesi Guru'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= $navPrefix ?>styles.css">
</head>
<body>
    <nav class="site-nav fixed inset-x-0 top-0 z-50 w-full max-w-[100vw] backdrop-blur-xl border-b border-white/10 shadow-[0_16px_60px_-30px_rgba(0,0,0,0.6)]">
        <div class="site-nav-edge">
            <div class="site-nav-inner relative flex items-center justify-between gap-2 sm:gap-3 py-2">
                <a href="<?= $navPrefix ?>index.php" class="site-brand relative z-[5] flex items-center gap-2 sm:gap-2.5 rounded-xl px-2 py-1.5 sm:px-3 sm:py-2 no-underline min-w-0 max-w-[min(100%,20rem)] sm:max-w-[min(100%,24rem)] xl:max-w-[min(50%,28rem)]">
                    <img src="<?= $navPrefix ?>assets/logos/logo-ppg.png" alt="Logo PPG" class="site-brand-logo" decoding="async" sizes="120px">
                    <span class="site-brand-text flex flex-col justify-center min-w-0 text-start">
                        <span class="site-brand-title">Portofolio</span>
                        <span class="site-brand-tagline">Mahasiswa Pendidikan Profesi Guru</span>
                    </span>
                </a>
                <div class="site-nav-center hidden xl:flex pointer-events-none">
                    <div class="pointer-events-auto flex flex-nowrap items-center justify-center gap-1.5 2xl:gap-3">
                        <a href="<?= $navPrefix ?>index.php#profil" class="nav-menu-item">Profil</a>
                        <a href="<?= $pagesPrefix ?>artefak.php" class="nav-menu-item">Artefak</a>
                        <a href="<?= $pagesPrefix ?>penilaian.php" class="nav-menu-item">Penilaian</a>
                        <div class="relative group">
                            <a href="<?= $pagesPrefix ?>model-guru.php" class="nav-menu-item inline-flex items-center gap-2">Model Guru <i class="fas fa-chevron-down text-xs"></i></a>
                            <div class="absolute right-0 mt-3 w-44 rounded-3xl bg-slate-950/95 shadow-2xl border border-white/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-30">
                                <a href="<?= $pagesPrefix ?>misi.php" class="dropdown-item">Misi</a>
                                <a href="<?= $pagesPrefix ?>kompetensi.php" class="dropdown-item">Kompetensi</a>
                                <a href="<?= $pagesPrefix ?>karakter.php" class="dropdown-item">Karakter</a>
                            </div>
                        </div>
                        <a href="<?= $pagesPrefix ?>kontak.php" class="nav-menu-item">Kontak</a>
                        <button id="themeToggle" type="button" class="inline-flex items-center gap-2 rounded-full border border-white/15 px-4 py-2 text-sm text-white transition hover:border-fuchsia-400 hover:text-fuchsia-300">
                            <i class="fas fa-moon"></i>
                            <span>Dark</span>
                        </button>
                    </div>
                </div>
                <div class="site-nav-aside relative z-[5] flex items-center shrink-0 gap-2">
                    <div class="hidden xl:flex items-center">
                        <div class="header-campus-badge d-flex align-items-center gap-2">
                            <img src="<?= $navPrefix ?>assets/logos/logo-uny.png" alt="Logo UNY" class="header-campus-logo" decoding="async" sizes="80px">
                            <div class="text-end header-campus-text lh-sm">
                                <div class="header-campus-label">Institusi</div>
                                <div class="header-campus-name">YOGYAKARTA STATE UNIVERSITY</div>
                            </div>
                        </div>
                    </div>
                    <button class="xl:hidden p-2.5 sm:p-3 rounded-full bg-white/10 text-white border border-white/15 shrink-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="collapse xl:hidden site-nav-edge" id="navbarNav">
            <div class="site-nav-drawer px-2 sm:px-3 pb-4 space-y-3 bg-slate-950/95 backdrop-blur-xl rounded-b-3xl border-t border-white/10 shadow-2xl">
                <a href="<?= $navPrefix ?>index.php#profil" class="nav-menu-item block">Profil</a>
                <a href="<?= $pagesPrefix ?>artefak.php" class="nav-menu-item block">Artefak</a>
                <a href="<?= $pagesPrefix ?>penilaian.php" class="nav-menu-item block">Penilaian</a>
                <div class="space-y-1">
                    <div class="text-slate-300 uppercase tracking-[0.2em] text-xs">Model Guru</div>
                    <a href="<?= $pagesPrefix ?>misi.php" class="dropdown-item block">Misi</a>
                    <a href="<?= $pagesPrefix ?>kompetensi.php" class="dropdown-item block">Kompetensi</a>
                    <a href="<?= $pagesPrefix ?>karakter.php" class="dropdown-item block">Karakter</a>
                </div>
                <a href="<?= $pagesPrefix ?>kontak.php" class="nav-menu-item block">Kontak</a>
                <div class="header-campus-mobile xl:hidden pt-4 mt-1 border-t border-white/10">
                    <div class="header-campus-badge header-campus-badge--stack d-flex align-items-center gap-3 rounded-2xl">
                        <img src="<?= $navPrefix ?>assets/logos/logo-uny.png" alt="Logo UNY" class="header-campus-logo" decoding="async" sizes="72px">
                        <div class="header-campus-text text-start min-w-0 flex-grow-1">
                            <div class="header-campus-label">Institusi</div>
                            <div class="header-campus-name">UNIVERSITAS NEGERI YOGYAKARTA</div>
                        </div>
                    </div>
                </div>
                <button id="themeToggleMobile" class="inline-flex w-full justify-center items-center gap-2 rounded-full border border-white/15 px-4 py-2 text-sm text-white transition hover:border-fuchsia-400 hover:text-fuchsia-300">
                    <i class="fas fa-moon"></i>
                    <span>Dark</span>
                </button>
            </div>
        </div>
    </nav>