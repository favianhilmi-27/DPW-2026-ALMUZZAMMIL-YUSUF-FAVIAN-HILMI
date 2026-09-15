|  | Desain dan Pemrograman Web |
|---|---|
| NIM | 254107020115 |
| Nama | Almuzzammil Yusuf Favian Hilmi |
| Kelas | TI - 2F |
| Absen | 3 |
| Repository | [DPW-2026-ALMUZZAMMIL-YUSUF-FAVIAN-HILMI](https://github.com/favianhilmi-27/DPW-2026-ALMUZZAMMIL-YUSUF-FAVIAN-HILMI) |

# Jobsheet 5 — Interaktivitas dengan JavaScript

## Materi

Jobsheet 5 membahas penambahan **interaktivitas di sisi client** menggunakan JavaScript murni (vanilla JS, tanpa framework) pada halaman-halaman yang sebelumnya sudah dibuat: menu navigasi yang bisa dibuka/tutup, konfirmasi sebelum menghapus data, pencarian data secara real-time, dan validasi form sebelum dikirim.

## Konsep yang Digunakan

| Konsep | Fungsi |
|---|---|
| `DOMContentLoaded` | Memastikan JavaScript baru dijalankan setelah seluruh HTML selesai dimuat |
| `addEventListener` | Menangani event seperti `click`, `keyup`, dan `submit` |
| `classList.toggle()` | Menambah/menghapus class `nav-open` untuk buka-tutup menu |
| `closest()` | Mencari elemen `<tr>` induk dari tombol yang diklik |
| `querySelector` / `querySelectorAll` | Mengambil elemen form, baris tabel, dan kolom tertentu |
| `confirm()` | Menampilkan dialog konfirmasi bawaan browser sebelum data dihapus |
| `preventDefault()` | Membatalkan submit form kalau validasi gagal |
| `dataset` (`data-*`) | Menyimpan konfigurasi di HTML (kolom pencarian, label counter) yang dibaca lewat JS |
| Array + `forEach` | Menyimpan daftar aturan validasi agar tidak menulis blok `if` terpisah per field |

## Perubahan dari Jobsheet 4

* Menu hamburger tidak lagi memakai checkbox hack murni CSS — diganti tombol (`<button id="nav-toggle-btn">`) yang di-klik lewat JavaScript (`initNavToggle`), lalu men-toggle class `nav-open` pada `<nav>`. CSS di `style.css` juga disesuaikan agar bereaksi pada class tersebut, lengkap dengan animasi geser/fade saat menu dibuka-tutup di layar sempit.
* Tombol "Hapus" pada tabel buku dan anggota sekarang memunculkan dialog konfirmasi (`confirm()`) berisi nama data yang akan dihapus sebelum baris benar-benar dihapus dari tampilan (`initHapusConfirm`).
* Ditambahkan kotak pencarian (`#search-input`) di halaman Daftar Buku dan Daftar Anggota yang memfilter baris tabel secara real-time saat mengetik (`initTableFilter`). Pencarian dibatasi ke satu kolom saja (Judul untuk buku, Nama untuk anggota) lewat atribut `data-search-col`, bukan mencari ke seluruh teks baris.
* Ditambahkan counter `Menampilkan X dari Y` di atas tabel yang otomatis diperbarui setiap kali data difilter atau dihapus (`updateCounter`).
* Ditambahkan validasi form sebelum submit (`initValidasiForm`) untuk form Tambah Buku dan Tambah Anggota: field wajib (judul/nama, pengarang), rentang angka (tahun terbit, stok), dan format ISBN (hanya boleh angka dan tanda hubung `-`, sifatnya opsional). Semua aturan disimpan dalam satu array `aturanValidasi` dan diproses lewat `forEach`, sehingga menambah validasi field baru cukup menambah satu entri array tanpa menulis blok `if` baru.
* Pesan error validasi ditampilkan langsung di bawah field yang salah lewat elemen `<span class="error">` yang disisipkan/dihapus secara dinamis (`tampilkanError`, `hapusError`).

## Struktur File

```text
Jobsheet 5/
├── index.html
├── README.md
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── app.js
├── buku/
│   ├── list.html
│   └── tambah.html
└── anggota/
    ├── list.html
    └── tambah.html
```

## Cara Menjalankan

Buka `index.html` di browser, lalu coba fitur-fitur berikut:

* Perkecil lebar browser ke ≤480px, klik ikon ☰ untuk buka/tutup menu.
* Buka halaman Daftar Buku atau Daftar Anggota, ketik di kotak pencarian untuk melihat filter dan counter bekerja.
* Klik tombol "Hapus" pada salah satu baris untuk melihat dialog konfirmasi.
* Buka halaman Tambah Buku atau Tambah Anggota, coba submit form dengan field kosong atau ISBN berisi huruf untuk melihat pesan error.

## Materi yang Dipelajari

* Menghubungkan file JavaScript eksternal ke banyak halaman HTML
* Event handling (`click`, `keyup`, `submit`) dengan `addEventListener`
* Manipulasi DOM: menambah, mengambil, dan menghapus elemen secara dinamis
* Validasi form di sisi client sebelum data dikirim
* Menyimpan konfigurasi di atribut `data-*` agar satu fungsi JS bisa dipakai ulang di beberapa halaman dengan kebutuhan berbeda
* Refactor kode berulang (blok `if` per field) menjadi pola array + `forEach` yang lebih mudah dikembangkan

## Catatan

Penghapusan data pada Jobsheet 5 ini masih bersifat front-end saja (`row.remove()`), belum terhubung ke server atau database — baris yang terhapus akan kembali muncul jika halaman di-refresh.
