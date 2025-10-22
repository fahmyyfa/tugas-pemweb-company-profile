<?php
    $pageTitle = "Kontak & PPDB"; 
    include 'header.php';
?>

<div class="container contact-container">
    <h2>Kontak & Informasi PPDB</h2>
    <p>Ada pertanyaan tentang sekolah kami atau proses PPDB? Silakan isi form di bawah ini.</p>

    <form action="process.php" method="POST" id="contactForm">
        <div class="form-group">
            <label for="name">Nama Lengkap (Calon Siswa/Wali):</label>
            <input type="text" id="name" name="user_name" required>
        </div>
        <div class="form-group">
            <label for="email">Email Aktif:</label>
            <input type="email" id="email" name="user_email" required>
        </div>
        <div class="form-group">
            <label for="message">Pertanyaan:</label>
            <textarea id="message" name="user_message" rows="6" required placeholder="Tuliskan pertanyaan Anda..."></textarea>
        </div>
        <button type="submit" class="submit-button">Kirim Pertanyaan</button>
    </form>
</div>

<?php 
    include 'footer.php'; 
?>