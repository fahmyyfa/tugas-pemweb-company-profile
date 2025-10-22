document.addEventListener("DOMContentLoaded", function () {
  // --- 1. Logika Sticky Navbar ---
  const navbar = document.querySelector(".navbar");
  if (navbar) {
    // Cek dulu offsetTop, tapi beri nilai default jika halaman terlalu pendek
    const stickyOffset = navbar.offsetTop > 0 ? navbar.offsetTop : 60;
    function handleScroll() {
      if (window.pageYOffset > stickyOffset) {
        navbar.classList.add("sticky");
      } else {
        navbar.classList.remove("sticky");
      }
    }
    window.addEventListener("scroll", handleScroll);
  }

  // --- 2. Logika Hamburger Menu ---
  const navToggle = document.getElementById("nav-toggle");
  const navMenu = document.getElementById("nav-menu");

  if (navToggle && navMenu) {
    navToggle.addEventListener("click", function () {
      // Toggle class 'is-active' pada menu
      navMenu.classList.toggle("is-active");
      // Toggle class 'is-active' pada tombol hamburger (untuk animasi X)
      navToggle.classList.toggle("is-active");
    });
  }

  // --- 3. Logika Lightbox Modal Galeri ---
  const modal = document.getElementById("lightbox-modal");
  if (modal) {
    const modalImg = document.getElementById("lightbox-image");
    const galleryImages = document.querySelectorAll(
      ".gallery-grid .gallery-item img"
    );
    const closeModal = document.querySelector(".lightbox-close");

    // Saat gambar di galeri di-klik
    galleryImages.forEach((img) => {
      img.addEventListener("click", function () {
        modal.style.display = "block";
        modalImg.src = this.src;
      });
    });

    // Saat tombol (X) di-klik
    closeModal.addEventListener("click", function () {
      modal.style.display = "none";
    });

    // Saat area di luar gambar di-klik
    window.addEventListener("click", function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    });
  }
});
