<?php
$page_title = "Beranda";
include __DIR__ . '/includes/header.php';

$totalBuku = count($_SESSION['buku'] ?? []);
$totalAnggota = count($_SESSION['anggota'] ?? []);
?>
        <section>
            <h2>Selamat Datang di Sistem Perpustakaan Mini Polinema</h2>
            <p>Aplikasi sederhana untuk mengelola data buku dan anggota perpustakaan.</p>
        </section>

        <section class="summary-container">
            <h2>Ringkasan</h2>
            
            <a href="buku/list.php" class="summary-card">
                <article>
                    <h3>Total Buku</h3>
                    <p><?php echo $totalBuku; ?></p>
                </article>
            </a>

            <a href="anggota/list.php" class="summary-card">
                <article>
                    <h3>Total Anggota</h3>
                    <p><?php echo $totalAnggota; ?></p>
                </article>
            </a>

            <a href="#" class="summary-card" onclick="return false;" style="cursor: default;">
                <article>
                    <h3>Sedang Dipinjam</h3>
                    <p>0</p>
                </article>
            </a>
        </section>
<?php include __DIR__ . '/includes/footer.php'; ?>