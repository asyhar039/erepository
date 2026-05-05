# E-Portfolio Mahasiswa Pendidikan

Website portofolio elektronik untuk mengembangkan profesionalisme guru berdasarkan program PPL Terbimbing. Struktur proyek sekarang tertata dalam folder agar lebih rapi dan mudah dipelihara.

## Struktur Folder

- `index.php`: Halaman utama portofolio
- `pages/`: Halaman PHP tambahan
  - `pages/artefak.php`
  - `pages/penilaian.php`
  - `pages/model-guru.php`
  - `pages/misi.php`
  - `pages/kompetensi.php`
  - `pages/karakter.php`
  - `pages/kontak.php`
- `includes/`: Template reusable
  - `includes/header.php`
  - `includes/footer.php`
- `static/`: Salinan halaman HTML statis
  - `static/index.html`
  - `static/artefak.html`
  - `static/penilaian.html`
  - `static/model-guru.html`
- `styles.css`: Styling global
- `script.js`: JavaScript interaksi
- `dist/`: Aset dan build output tambahan

## Cara Menjalankan

1. Jalankan server PHP dari folder proyek.
2. Akses `index.php` untuk halaman PHP dinamis.
3. Akses `static/index.html` jika ingin melihat versi HTML statis.

## Catatan

- `includes/header.php` dan `includes/footer.php` sekarang digunakan oleh halaman PHP di `pages/`.
- Halaman statis HTML yang dipindahkan ke `static/` menggunakan path asset relatif yang benar.
- Gunakan `pages/` untuk halaman PHP baru jika ingin menjaga struktur tetap terorganisir.

