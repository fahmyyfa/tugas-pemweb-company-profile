<?php
// Cek apakah data dikirim menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Ambil data dari form dan bersihkan (basic security)
    $name = htmlspecialchars($_POST['user_name']);
    $email = htmlspecialchars($_POST['user_email']);
    $message = htmlspecialchars($_POST['user_message']);

    // --- MULAI HALAMAN HTML ---
    $pageTitle = "Terima Kasih";
    include 'header.php';
    ?>

    <div class="container success-message">
        <h1>Terima Kasih, <?php echo $name; ?>!</h1>
        <p>Pesan Anda telah kami terima. Kami akan segera membalas ke email <?php echo $email; ?>.</p>
        <p><b>Isi Pesan:</b><br><i>"<?php echo $message; ?>"</i></p>
        <a href="index.php" class="cta-button-outline">Kembali ke Beranda</a>
    </div>

    <?php
    // Panggil footer
    include 'footer.php';
    // --- SELESAI HALAMAN HTML ---

} else {
    // Jika ada yang akses file ini langsung tanpa submit form
    // Arahkan kembali ke form kontak
    header("Location: contact.php"); 
    exit;
}
?>