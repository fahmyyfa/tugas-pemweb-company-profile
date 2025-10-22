<?php
    // Set judul halaman
    $pageTitle = "Beranda"; 
    // Panggil header
    include 'header.php';
?>

<header class="hero">
    <div class="container">
        <h1>Membentuk Generasi Unggul, Berkarakter, & KreatIF</h1>
        <p>Selamat datang di sekolah kami, tempat terbaik untuk mengembangkan potensi diri.</p>
        <a href="contact.php" class="cta-button">Daftar Sekarang (PPDB)</a>
    </div>
</header>

<section class="welcome-section">
    <div class="container">
        <div class="welcome-content">
            <div class="welcome-text">
                <h2>Sambutan dari Kepala Sekolah</h2>
                <p>
                    Selamat datang di website resmi SMA/SMK [Nama Sekolah]. Kami bangga menjadi lembaga pendidikan yang tidak hanya fokus pada pencapaian akademik, tetapi juga pada pembentukan karakter.
                </p>
                <p>
                    Dengan semangat <strong>Tut Wuri Handayani</strong>, kami berkomitmen menjadi teladan di depan, pembangun semangat di tengah, dan pendorong dari belakang. Silakan jelajahi website kami untuk mengenal lebih jauh program-program unggulan yang kami tawarkan.
                </p>
                <a href="profil.php" class="cta-button-outline">Baca Profil Lengkap</a>
            </div>
            <div class="welcome-image">
                <img src="images/kepala sekolah.JPG" alt="Kepala Sekolah">
            </div>
        </div>
    </div>
</section>

<section class="programs-section">
    <div class="container">
        <h2>Program Jurusan Unggulan</h2>
        <div class="programs-grid">
            <div class="program-card">
                <div class="program-icon"><i class="fas fa-laptop-code"></i></div>
                <h3>Rekayasa Perangkat Lunak</h3>
                <p>Belajar menjadi programmer handal dengan kurikulum berbasis industri terkini.</p>
            </div>
            <div class="program-card">
                <div class="program-icon"><i class="fas fa-network-wired"></i></div>
                <h3>Teknik Komputer & Jaringan</h3>
                <p>Menjadi ahli infrastruktur jaringan, keamanan siber, dan administrasi server.</p>
            </div>
            <div class="program-card">
                <div class="program-icon"><i class="fas fa-paint-brush"></i></div>
                <h3>Desain Komunikasi Visual</h3>
                <p>Mengasah kreativitas dalam desain grafis, animasi, dan multimedia.</p>
            </div>
        </div>
        <div class="section-cta">
            <a href="jurusan.php" class="cta-button">Lihat Semua Jurusan</a>
        </div>
    </div>
</section>

<section class="gallery-section">
    <div class="container">
        <h2>Galeri Kegiatan</h2>
        <div class="gallery-grid">
            <div class="gallery-item"><img src="images/gambar osis.jpg" alt="Kegiatan Osis"></div>
            <div class="gallery-item"><img src="images/gambar pramuka.jpg" alt="Pramuka"></div>
            <div class="gallery-item"><img src="images/kegiatan 17an.JPG" alt="Lomba 17an"></div>
            <div class="gallery-item"><img src="images/workshop coding.jpeg" alt="Workshop Coding"></div>
        </div>
        <div class="section-cta">
            <a href="galeri.php" class="cta-button">Lihat Galeri Lengkap</a>
        </div>
    </div>
</section>

<?php
    // Panggil footer
    include 'footer.php'; 
?>