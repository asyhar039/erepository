<?php
$pageTitle = 'Media Pembelajaran - Portofolio';
$isInsidePages = true;

$mediaDir = realpath(__DIR__ . '/../assets/media');
$mediaFiles = [];

if ($mediaDir && is_dir($mediaDir)) {
    $entries = scandir($mediaDir);
    if ($entries !== false) {
        foreach ($entries as $entry) {
            if ($entry === '.' || $entry === '..') {
                continue;
            }

            $filePath = $mediaDir . DIRECTORY_SEPARATOR . $entry;
            if (!is_file($filePath)) {
                continue;
            }

            $relativePath = '../assets/media/' . rawurlencode($entry);
            $extension = strtolower(pathinfo($entry, PATHINFO_EXTENSION));
            $sizeMb = round(filesize($filePath) / 1024 / 1024, 2);

            $mediaFiles[] = [
                'name' => $entry,
                'path' => $relativePath,
                'extension' => $extension,
                'size' => $sizeMb
            ];
        }
    }
}

usort($mediaFiles, static function ($a, $b) {
    return strcasecmp($a['name'], $b['name']);
});

include '../includes/header.php';
?>

<div class="main-content">
    <section class="container my-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
            <div>
                <h2 class="section-title mb-2">Media Pembelajaran</h2>
            </div>
            <a href="artefak.php" class="btn btn-outline-primary">
                <i class="fas fa-arrow-left me-2"></i>Kembali ke Artefak
            </a>
        </div>

        <?php if (empty($mediaFiles)): ?>
            <div class="alert alert-warning mb-0">
                Belum ada file media pada folder <code>assets/media</code>.
            </div>
        <?php else: ?>
            <div class="row g-4">
                <?php foreach ($mediaFiles as $file): ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-break"><?php echo htmlspecialchars($file['name']); ?></h5>
                                <p class="text-muted mb-4">
                                    Tipe: <strong><?php echo htmlspecialchars(strtoupper($file['extension'] ?: 'FILE')); ?></strong><br>
                                    Ukuran: <strong><?php echo htmlspecialchars((string) $file['size']); ?> MB</strong>
                                </p>
                                <div class="mt-auto d-flex gap-2">
                                    <a href="<?php echo htmlspecialchars($file['path']); ?>" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">
                                        <i class="fas fa-eye me-1"></i>Lihat
                                    </a>
                                    <a href="<?php echo htmlspecialchars($file['path']); ?>" class="btn btn-outline-secondary btn-sm" download>
                                        <i class="fas fa-download me-1"></i>Download
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>
</div>

<?php include '../includes/footer.php'; ?>
