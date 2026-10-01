|  | Desain dan Pemrograman Web |
|---|---|
| NIM | 254107020115 |
| Nama | Almuzzammil Yusuf Favian Hilmi |
| Kelas | TI - 2F |
| Absen | 3 |
| Repository | [DPW-2026-ALMUZZAMMIL-YUSUF-FAVIAN-HILMI](https://github.com/favianhilmi-27/DPW-2026-ALMUZZAMMIL-YUSUF-FAVIAN-HILMI) |

# Jobsheet 8 — Integrasi Database SQL & PHP Data Objects (PDO)

## Materi

Jobsheet 8 ini merupakan kelanjutan dari Jobsheet 7. Jika sebelumnya data hanya dikelola dan diproses secara *server-side* menggunakan *session* atau array sementara, pada praktikum kali ini aplikasi web dihubungkan ke dalam sebuah Database Relasional (SQL). Kita akan mempelajari konsep dasar skema database, cara menghubungkan aplikasi PHP dengan database menggunakan PDO (PHP Data Objects), hingga melakukan operasi CRUD dasar seperti menyimpan (*Insert*) dengan keamanan *Prepared Statement* dan menampilkan data (*Select*). 

## Konsep yang Digunakan

| Konsep | Fungsi |
|---|---|
| **Konsep Dasar & Skema Database SQL** | Memahami struktur tabel, relasi, dan penggunaan query SQL untuk mengelola data buku dan anggota. |
| **Koneksi PDO (PHP Data Objects)** | Menggunakan ekstensi PDO pada `koneksi.php` untuk menciptakan jembatan yang aman dan fleksibel antara aplikasi PHP dan server database (misal: MySQL/PostgreSQL). |
| **Insert & Prepared Statement** | Menangani proses input data dari form ke dalam database secara aman untuk mencegah serangan *SQL Injection*. |
| **Membaca Data (SELECT)** | Mengambil data yang sudah tersimpan di dalam tabel database untuk dirender secara dinamis ke dalam halaman web (seperti pada halaman `list.php`). |

## Perubahan dari Jobsheet 7

* **Integrasi Database**: Menambahkan folder `sql/` yang berisi file `01_buku_anggota.sql` untuk membangun skema awal tabel database aplikasi.
* **File Koneksi Khusus**: Penambahan file `koneksi.php` di dalam folder `includes/` yang berfungsi sebagai pusat konfigurasi untuk menyambungkan PHP dengan database.
* **Pembaruan Logika Proses Tambah**: File `proses_tambah.php` pada `/anggota` dan `/buku` kini diperbarui untuk melakukan query `INSERT` ke database menggunakan *Prepared Statement*.
* **Pembaruan Logika List (Select Data)**: File `list.php` kini diperbarui untuk mengambil data (query `SELECT`) secara langsung dari database, bukan lagi dari *Session* atau data statis.
* **Dokumentasi Database yang Ekstensif**: Folder `Dokumentasi/` kini memuat 8 tahapan baru, mulai dari konsep dasar SQL, persiapan database, koneksi PDO, implementasi query *Insert* & *Select*, hingga panduan instalasi PostgreSQL di Laragon.

## Struktur File

```text
jobsheet-08/
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
├── includes/
│   ├── footer.php
│   ├── header.php
│   └── koneksi.php
└── sql/
    └── 01_buku_anggota.sql