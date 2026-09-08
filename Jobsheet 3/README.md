
Claude selesai merespons
[PemogramanWeb2026/kode-praktikum/jobsheet-03 at main · dimas1984/PemogramanWeb2026](https://github.com/dimas1984/PemogramanWeb2026/tree/main/kode-praktikum/jobsheet-03)

baca jobsheet ini

Gagal Gagal
GitHub memblokir akses otomatis ke halaman tree-nya. Saya coba lewat GitHub API untuk melihat isi foldernya.

Mencari di web
Saya sudah coba beberapa cara untuk mengakses folder jobsheet-03 di repo tersebut, tapi ada kendala teknis:

Halaman tree/folder GitHub (/tree/main/...) diblokir oleh robots.txt GitHub untuk akses otomatis, jadi saya tidak bisa membuka listing foldernya langsung.
Pencarian web juga belum mengindeks isi file spesifik di dalam folder jobsheet-03 tersebut (repo-nya tergolong baru/kecil), jadi saya tidak menemukan nama file atau kontennya lewat search.
Yang berhasil saya dapatkan hanyalah README utama repo (RPS mata kuliah), yang menyebutkan cakupan jobsheet-03 secara ringkas:

Jobsheet-03 (bagian dari topik minggu ke-4: Tampilan Responsif) mencakup: media query, mobile-first, hamburger menu (CSS/checkbox hack) — CSS native tanpa framework.

Supaya saya bisa membaca isi lengkap jobsheet-03 (instruksi, kode, latihan di dalamnya), ada beberapa opsi:

Paste isi filenya langsung ke chat ini (misal isi README.md atau file HTML/CSS di folder itu).
Upload file-nya kalau sudah kamu download ke komputer.
Kasih saya link langsung ke file (bukan ke folder), contoh: https://github.com/dimas1984/PemogramanWeb2026/blob/main/kode-praktikum/jobsheet-03/nama-file.md — link ke file individual (blob) biasanya lebih mudah saya akses dibanding link folder (tree).
Mana yang paling gampang buat kamu?

2.rar
2.rar
RAR
3.rar
3.rar
RAR



Pesan diciutkan
Menjalankan 11 perintah, membuat file
Saya sudah bongkar isi 2.rar (Jobsheet 2) dan 3.rar (Jobsheet 3) dan bandingkan langsung kodenya. Ini penjelasan fungsi tiap perubahan berdasarkan diff yang sebenarnya:

1. <meta name="viewport">
Ditambahkan di <head> semua halaman:

html
<meta name="viewport" content="width=device-width, initial-scale=1">
Fungsi: Tanpa ini, browser mobile akan menganggap halaman punya lebar default ~980px lalu di-zoom out agar muat di layar — hasilnya teks jadi kecil semua dan media query kamu tidak akan pernah aktif karena browser tidak menganggap layarnya "sempit". Meta viewport ini memberi tahu browser: "render 1 CSS-pixel = 1 device-pixel, jangan di-zoom". Ini prasyarat mutlak sebelum media query bisa berfungsi sama sekali.

2. Hamburger menu — checkbox hack
HTML (ditambahkan di setiap header):

html
<input type="checkbox" id="nav-toggle" class="nav-toggle">
<label for="nav-toggle" class="nav-toggle-label">&#9776;</label>
CSS:

css
.nav-toggle { display: none; }
.nav-toggle-label { display: none; ... }

@media (max-width: 480px) {
    .nav-toggle-label { display: block; }
    header nav { display: none; ... }
    .nav-toggle:checked ~ nav { display: block; }
}
Fungsi: Ini trik CSS murni tanpa JavaScript untuk menu yang bisa dibuka/tutup:

Checkbox <input> disembunyikan (display:none), tapi statusnya (checked/tidak) tetap bisa dibaca CSS.
<label for="nav-toggle"> yang menampilkan ikon ☰ berfungsi sebagai "tombol" — klik label otomatis men-toggle checkbox terkait (relasi via for/id).
Selector .nav-toggle:checked ~ nav artinya "kalau checkbox ini tercentang, tampilkan elemen <nav> sesudahnya (sibling)".
Di layar ≤480px, nav disembunyikan secara default; begitu ☰ diklik → checkbox checked → nav muncul. Ini kenapa README bilang "akan diganti JS toggle di Jobsheet 5" — cara ini simpel tapi kurang fleksibel (tidak bisa animasi kompleks, sedikit "hack" secara semantik).
3. <div class="table-responsive"> pembungkus tabel
html
<div class="table-responsive">
    <table>...</table>
</div>
css
.table-responsive { overflow-x: auto; }
Fungsi: Tabel (terutama tabel data seperti daftar buku) sulit "diciutkan" secara vertikal tanpa merusak keterbacaan. Solusinya bukan mengecilkan tabel, tapi membiarkan tabel tetap lebar dan membungkusnya dalam container yang bisa di-scroll horizontal (overflow-x: auto) kalau lebih lebar dari layar. Jadi di HP, user tinggal geser tabel ke samping alih-alih kolom-kolomnya dipaksa tumpang tindih.

4. Grid kartu statistik: 3 → 2 → 1 kolom
Sebelumnya (Jobsheet 2) pakai flexbox arah kolom (statis, tidak berubah per layar):

css
main section:nth-of-type(2) {
    display: flex;
    flex-direction: column;
}
Sekarang pakai CSS Grid + media query:

css
main section:nth-of-type(2) {
    display: grid;
    grid-template-columns: repeat(3, 1fr);  /* default: desktop, 3 kolom */
    gap: 1rem;
}

@media (max-width: 768px) {
    main section:nth-of-type(2) { grid-template-columns: repeat(2, 1fr); } /* tablet: 2 kolom */
}

@media (max-width: 480px) {
    main section:nth-of-type(2) { grid-template-columns: 1fr; } /* mobile: 1 kolom */
}
Fungsi: repeat(3, 1fr) bikin 3 kolom sama lebar. Media query menimpa (override) jumlah kolom itu sesuai lebar layar — ini contoh klasik pendekatan mobile-first/breakpoint bertingkat: makin sempit layar, makin sedikit kolom, supaya tiap kartu statistik tetap cukup lebar untuk dibaca nyaman, bukan jadi gepeng.

5. Perubahan lain (bukan soal responsif, tapi housekeeping)
Path CSS: /Jobsheet 2/assets/style.css (absolute, rawan patah) → ../assets/style.css (relative) — supaya struktur folder proyek independen dari nama folder di komputer.
Nama file disederhanakan: buku_list.html → list.html, dst — karena sudah dipisah per folder (buku/, anggota/), jadi prefiks nama file jadi redundan.
Footer diupdate Jobsheet 1 → Jobsheet 3 (sepertinya sisa lupa update di versi sebelumnya, sekarang dibetulkan).
Beberapa styling non-esensial ikut dirapikan (warna header, ukuran font judul, dsb) — bukan bagian dari task responsif, kemungkinan cuma polesan.
Singkatnya: viewport = syarat mutlak agar responsif aktif, hamburger checkbox hack = navigasi ringkas di HP tanpa JS, table-responsive = scroll horizontal untuk data lebar, grid breakpoint = tata letak kartu yang menyesuaikan lebar layar.




Pesan diciutkan
Berpikir selama 14 detik
Berikut draft README Jobsheet 3 mengikuti format yang sama:

markdown
|  | Desain dan Pemrograman Web |
|---|---|
| NIM | 254107020115 |
| Nama | Almuzzammil Yusuf Favian Hilmi |
| Kelas | TI - 2F |
| Absen | 3 |
| Repository | [DPW-2026-ALMUZZAMMIL-YUSUF-FAVIAN-HILMI](https://github.com/favianhilmi-27/DPW-2026-ALMUZZAMMIL-YUSUF-FAVIAN-HILMI) |


# Jobsheet 3 — Responsive Design

## Materi

Jobsheet 3 membahas **tampilan responsif** — bagaimana halaman web menyesuaikan tata letak (layout) secara otomatis mengikuti ukuran layar perangkat (desktop, tablet, mobile) menggunakan CSS murni tanpa framework.

## Konsep yang Digunakan

| Konsep                        | Fungsi                                                                 |
| ------------------------------ | ----------------------------------------------------------------------- |
| `<meta name="viewport">`       | Memberi tahu browser mobile agar merender halaman sesuai lebar layar asli, bukan di-zoom out |
| Media Query (`@media`)         | Mengubah aturan CSS berdasarkan lebar layar (breakpoint)               |
| Mobile-first / breakpoint      | Layout menyesuaikan bertingkat: desktop → tablet → mobile               |
| Checkbox hack (hamburger menu) | Membuka/menutup menu navigasi di layar sempit tanpa JavaScript          |
| CSS Grid                       | Mengatur jumlah kolom kartu statistik secara dinamis                    |
| `.table-responsive`            | Membungkus tabel agar bisa di-scroll horizontal di layar sempit         |

## Perubahan dari Jobsheet 2

* Menambahkan `<meta name="viewport" content="width=device-width, initial-scale=1">` di semua halaman.
* Navbar diubah menjadi hamburger menu memakai teknik **checkbox hack** murni CSS (`input[type=checkbox]` + `label`), aktif otomatis di layar ≤480px.
* Tabel dibungkus `<div class="table-responsive">` agar bisa di-scroll horizontal di layar sempit.
* Menambahkan media query di `style.css` untuk grid kartu statistik: 3 kolom (desktop) → 2 kolom (tablet, ≤768px) → 1 kolom (mobile, ≤480px).

## Struktur File

```text
Jobsheet 3/
├── index.html
├── assets/
│   └── style.css
├── buku/
│   ├── list.html
│   └── tambah.html
└── anggota/
    ├── list.html
    └── tambah.html
```

## Cara Menjalankan

Buka `index.html` di browser, lalu uji tampilan menggunakan DevTools *responsive mode* pada 3 breakpoint:

* Mobile ≤480px
* Tablet ~768px
* Desktop ≥1024px

## Materi yang Dipelajari

* Penggunaan meta viewport untuk mengaktifkan rendering responsif
* Media query (`@media (max-width: ...)`) untuk mengubah layout per breakpoint
* Teknik hamburger menu murni CSS (checkbox hack)
* CSS Grid untuk layout kartu yang fleksibel
* Membuat tabel yang scrollable di layar sempit

## Catatan

Hamburger di jobsheet ini masih murni CSS (checkbox hack). Di Jobsheet 5 akan diganti dengan toggle berbasis JavaScript.


