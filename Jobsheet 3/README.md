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


