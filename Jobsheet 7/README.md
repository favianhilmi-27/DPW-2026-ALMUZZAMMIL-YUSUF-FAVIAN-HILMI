|  | Desain dan Pemrograman Web |
|---|---|
| NIM | 254107020115 |
| Nama | Almuzzammil Yusuf Favian Hilmi |
| Kelas | TI - 2F |
| Absen | 3 |
| Repository | [DPW-2026-ALMUZZAMMIL-YUSUF-FAVIAN-HILMI](https://github.com/favianhilmi-27/DPW-2026-ALMUZZAMMIL-YUSUF-FAVIAN-HILMI) |

# Jobsheet 7 — Konsep Dasar PHP & Server-Side Rendering

## Materi

Jobsheet 7 ini mengalihkan pengelolaan data halaman dari yang tadinya menggunakan JavaScript di sisi *client* menjadi menggunakan logika pemrosesan dari *server-side* dengan bahasa PHP. Praktikum kali ini mengajarkan pembuatan sistem dinamis melalui fitur "includes" untuk komponen *header* dan *footer*, manipulasi alur data memakai *session*, penanganan validasi server saat proses tambah data, hingga penggunaan CSS untuk perenderan *flash message*.

## Konsep yang Digunakan

| Konsep | Fungsi |
|---|---|
| **Konsep Dasar PHP** | Beralih menggunakan file ekstensi `.php` alih-alih HTML murni untuk menampilkan konten statis secara server-side. |
| **Includes (Header & Footer)** | Memisahkan blok layout yang dipakai berulang kali ke dalam subfile khusus (`header.php` dan `footer.php`) untuk mempermudah struktur halaman. |
| **Session & Alur Data** | Memanfaatkan fungsi session dalam bahasa PHP untuk mengatur dan menjaga transisi data selama berada dalam aplikasi. |
| **Proses Tambah & Validasi Server** | Menangani logika *submission* secara *backend* lewat `proses_tambah.php` serta melakukan validasi form dari server. |
| **List PHP Render & Flash Message** | Menerapkan tabel dinamis lewat server (PHP Render) dan menangani umpan balik (notifikasi aksi berhasil/gagal) pada UI aplikasi dalam bentuk *Flash Message*. |

## Perubahan dari Jobsheet 6

* **Peralihan Ekstensi File**: File dasar halaman seperti `index.html` dan `list.html` pada modul anggota/buku seluruhnya digantikan oleh file `index.php`, `list.php`, dan `tambah.php`.
* **Pemisahan Elemen Berulang**: Pembuatan folder `includes/` untuk memasukkan pecahan template `header.php` dan `footer.php` yang dipanggil pada setiap tampilan.
* **Sub-Proses Tambah Data**: Modul di dalam `/anggota` dan `/buku` kini memiliki file logika khusus, yakni `proses_tambah.php`, untuk merespons form *submit* dari luar `tambah.php`.
* **Keberadaan Panduan Desain**: Disisipkan satu file rancangan antarmuka berupa `wireframe.md` yang berada di dalam folder `docs/`.
* **Penambahan Folder Dokumentasi**: Menyediakan direktori `Dokumentasi/` untuk modul pedoman per-tahapan yang komprehensif, mulai dari `01-konsep-dasar-php.md` hingga `07-rangkuman-latihan.md`.
* **Modifikasi Gaya (CSS)**: Berdasarkan modul yang ada, disertakan penjelasan kustomisasi `06-css-flash-message.md` untuk membantu memanipulasi *style* pada notifikasi *flash message*.

## Struktur File

```text
jobsheet-07/
├── index.php
├── README.md
├── anggota/
│   ├── list.php
│   ├── proses_tambah.php
│   └── tambah.php
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── app.js
├── buku/
│   ├── list.php
│   ├── proses_tambah.php
│   └── tambah.php
└── includes/
    ├── footer.php
    └── header.php
```

## Cara Menjalankan

**Penting:** karena struktur ini telah berpindah ke teknologi *server-side* PHP, kamu tidak dapat lagi menggunakan **Live Server** biasa. Jalankan sistem ini menggunakan server PHP mandiri, misal dengan *command*:

```bash
php -S localhost:8000
```
Lalu buka `http://localhost:8000/index.php` pada peramban webmu. Alternatif lainnya, masukkan kerangka repositori ini ke dalam direktori `htdocs` atau `www` pada aplikasi seperti XAMPP atau Laragon.

## Materi yang Dipelajari

* Mengenal cara kerja logika render dasar pada PHP.
* Melakukan penyederhanaan manajemen *layout* UI dengan pemanggilan modular (includes *header/footer*).
* Memanajemen data menggunakan fungsionalitas `Session` pada aliran data antar-halaman.
* Melakukan tangkapan lalu memvalidasi input (*server-side validasi*) dari form HTML ke pengolahan PHP menggunakan `proses_tambah.php`.
* Menerapkan dan memanipulasi *Flash Message* CSS untuk menunjukkan pemberitahuan singkat saat manipulasi data sukses maupun gagal.

## Catatan

* Semua sub-materi telah dipisahkan menjadi modul rapi di direktori `Dokumentasi/` untuk dibaca satu persatu.
* Silakan baca file utama referensi untuk petunjuk selengkapnya dari repositori ini, file tersebut disimpan secara khusus dengan nama README.md.