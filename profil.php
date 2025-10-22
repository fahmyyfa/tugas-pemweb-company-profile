<?php
    $pageTitle = "Profil"; 
    include 'header.php';
?>

<header class="page-header">
    <div class="container">
        <h1>Profil Sekolah</h1>
    </div>
</header>

<section class="profile-content">
    <div class="container">
        <div class="visi-misi-section">
            <div class="visi-misi-card">
                <h3>Visi</h3>
                <p>"Terwujudnya lulusan yang cerdas, terampil, berkarakter mulia, dan mampu bersaing di era global."</p>
            </div>
            <div class="visi-misi-card">
                <h3>Misi</h3>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Menyelenggarakan pembelajaran aktif, inovatif, dan berbasis teknologi informasi.</li>
                    <li><i class="fas fa-check-circle"></i> Menumbuhkan semangat kewirausahaan dan kreativitas siswa.</li>
                    <li><i class="fas fa-check-circle"></i> Membina karakter siswa melalui kegiatan keagamaan dan budi pekerti.</li>
                    <li><i class="fas fa-check-circle"></i> Menjalin kemitraan strategis dengan dunia usaha dan industri (DUDI).</li>
                </ul>
            </div>
        </div>

        <h2 class="section-title">Fasilitas Sekolah</h2>
        <div class="programs-grid facilities-grid">
            <div class="program-card">
                <div class="program-icon"><i class="fas fa-laptop"></i></div>
                <h3>Laboratorium Komputer</h3>
                <p>Lab komputer modern dengan spesifikasi tinggi untuk mendukung pembelajaran coding, desain, dan jaringan.</p>
            </div>
            <div class="program-card">
                <div class="program-icon"><i class="fas fa-book-open"></i></div>
                <h3>Perpustakaan Digital</h3>
                <p>Perpustakaan nyaman dengan koleksi buku lengkap dan akses ke ribuan jurnal serta e-book digital.</p>
            </div>
            <div class="program-card">
                <div class="program-icon"><i class="fas fa-basketball-ball"></i></div>
                <h3>Lapangan Olahraga</h3>
                <p>Sarana olahraga lengkap, termasuk lapangan basket dan futsal, untuk mendukung kesehatan jasmani siswa.</p>
            </div>
        </div>
    </div>
</section>

<?php 
    include 'footer.php'; 
?>