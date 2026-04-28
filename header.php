<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'E-Portfolio Mahasiswa Pendidikan'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="w-full fixed top-0 z-50 backdrop-blur-xl border-b border-white/10 shadow-[0_16px_60px_-30px_rgba(0,0,0,0.6)]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <a href="index.php" class="flex items-center gap-3 text-white font-semibold uppercase tracking-[0.18em]">
                    <i class="fas fa-graduation-cap text-fuchsia-400"></i>
                    <span>E-Portfolio</span>
                </a>
                <div class="hidden lg:flex items-center gap-3">
                    <a href="index.php#profil" class="nav-menu-item">Profil</a>
                    <a href="artefak.php" class="nav-menu-item">Artefak</a>
                    <a href="penilaian.php" class="nav-menu-item">Penilaian</a>
                    <div class="relative group">
                        <a href="model-guru.php" class="nav-menu-item inline-flex items-center gap-2">Model Guru <i class="fas fa-chevron-down text-xs"></i></a>
                        <div class="absolute right-0 mt-3 w-44 rounded-3xl bg-slate-950/95 shadow-2xl border border-white/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            <a href="misi.php" class="dropdown-item">Misi</a>
                            <a href="kompetensi.php" class="dropdown-item">Kompetensi</a>
                            <a href="karakter.php" class="dropdown-item">Karakter</a>
                        </div>
                    </div>
                    <a href="kontak.php" class="nav-menu-item">Kontak</a>
                    <button id="themeToggle" class="inline-flex items-center gap-2 rounded-full border border-white/15 px-4 py-2 text-sm text-white transition hover:border-fuchsia-400 hover:text-fuchsia-300">
                        <i class="fas fa-moon"></i>
                        <span>Dark</span>
                    </button>
                </div>
                <button class="lg:hidden p-3 rounded-full bg-white/10 text-white border border-white/15" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        <div class="collapse lg:hidden" id="navbarNav">
            <div class="px-4 pb-4 space-y-3 bg-slate-950/95 backdrop-blur-xl rounded-b-3xl border-t border-white/10 shadow-2xl">
                <a href="index.php#profil" class="nav-menu-item block">Profil</a>
                <a href="artefak.php" class="nav-menu-item block">Artefak</a>
                <a href="penilaian.php" class="nav-menu-item block">Penilaian</a>
                <div class="space-y-1">
                    <div class="text-slate-300 uppercase tracking-[0.2em] text-xs">Model Guru</div>
                    <a href="misi.php" class="dropdown-item block">Misi</a>
                    <a href="kompetensi.php" class="dropdown-item block">Kompetensi</a>
                    <a href="karakter.php" class="dropdown-item block">Karakter</a>
                </div>
                <a href="kontak.php" class="nav-menu-item block">Kontak</a>
                <button id="themeToggleMobile" class="inline-flex w-full justify-center items-center gap-2 rounded-full border border-white/15 px-4 py-2 text-sm text-white transition hover:border-fuchsia-400 hover:text-fuchsia-300">
                    <i class="fas fa-moon"></i>
                    <span>Dark</span>
                </button>
            </div>
        </div>
    </nav>