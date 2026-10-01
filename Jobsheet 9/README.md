|  | Desain dan Pemrograman Web |
|---|---|
| NIM | 254107020115 |
| Nama | Almuzzammil Yusuf Favian Hilmi |
| Kelas | TI - 2F |
| Absen | 3 |
| Repository | [DPW-2026-ALMUZZAMMIL-YUSUF-FAVIAN-HILMI](https://github.com/favianhilmi-27/DPW-2026-ALMUZZAMMIL-YUSUF-FAVIAN-HILMI) |

# Jobsheet 9 — Penyelesaian CRUD, Pagination, & Pencarian Server-Side

## Materi

Jobsheet 9 ini merupakan tahap penyempurnaan dari operasi database pada Jobsheet 8. Jika sebelumnya kita berfokus pada operasi dasar menyambungkan PDO, menyimpan data (*Create*), dan membaca data (*Read*), pada praktikum kali ini aplikasi disempurnakan dengan fitur modifikasi (*Update*) dan penghapusan data (*Delete*) sehingga melengkapi siklus CRUD. Selain itu, terdapat penambahan fitur konfirmasi antarmuka menggunakan JavaScript, penomoran halaman (*pagination*), serta fitur pencarian data secara *server-side*.

## Konsep yang Digunakan

| Konsep | Fungsi |
|---|---|
| **Penyempurnaan CRUD (Update & Delete)** | Menggunakan query SQL `UPDATE` dan `DELETE` dengan *Prepared Statement* untuk mengedit atau menghapus data spesifik dari database tanpa rentan terhadap *SQL Injection*. |
| **Konfirmasi JavaScript (JS)** | Memanfaatkan interaktivitas sisi klien (JavaScript) untuk memunculkan dialog konfirmasi (seperti peringatan sebelum menghapus data) agar mencegah penghapusan yang tidak disengaja. |
| **Pencarian Server-Side** | Memproses parameter pencarian (biasanya dari URL `GET`) langsung di dalam query SQL (menggunakan `LIKE`) untuk memfilter tabel sebelum ditampilkan ke halaman. |
| **Pagination** | Membagi set data yang besar menjadi beberapa halaman (menggunakan SQL `LIMIT` dan `OFFSET`) agar waktu muat aplikasi (*load time*) lebih efisien dan antarmuka tidak sesak. |

## Perubahan dari Jobsheet 8

* **Penambahan File Edit & Hapus**: Pada setiap modul (`/anggota` dan `/buku`), ditambahkan file baru yaitu `edit.php`, `proses_edit.php`, dan `hapus.php` untuk menangani modifikasi dan penghapusan data.
* **Pembaruan Aksi di Halaman List**: File `list.php` diperbarui untuk menampilkan tombol edit dan hapus, mengaktifkan fitur *pagination*, dan memfasilitasi bar pencarian.
* **File JavaScript Interaktif**: Implementasi skrip pada `assets/js/app.js` ditujukan untuk menangani *prompt* atau konfirmasi ketika proses pembaruan dan penghapusan data dipicu oleh pengguna.
* **Pembaruan Folder Dokumentasi**: Menyediakan modul materi baru secara berurutan mencakup konsep dasar CRUD, *edit/update*, hapus data, konfirmasi JS, *pagination* dan pencarian server, hingga CSS pendukung.

## Struktur File

```text
jobsheet-09/
├── index.php
├── README.md
├── anggota/
│   ├── edit.php
│   ├── hapus.php
│   ├── list.php
│   ├── proses_edit.php
│   ├── proses_tambah.php
│   └── tambah.php
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── app.js
├── buku/
│   ├── edit.php
│   ├── hapus.php
│   ├── list.php
│   ├── proses_edit.php
│   ├── proses_tambah.php
│   └── tambah.php
├── includes/
│   ├── footer.php
│   ├── header.php
│   └── koneksi.php
└── sql/
    └── 01_buku_anggota.sql