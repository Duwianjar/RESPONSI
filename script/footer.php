<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center"></div>
        </div>
    </div>
    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright 2022 <strong><span>Akatsuki</span></strong>. All Rights Reserved
        </div>
        <div class="credits">Designed by @Akatsuki</div>
    </div>
</footer>
<!-- End Footer -->

<!-- Script Pesan dan kesan -->
<script>
const scriptURL =
    "https://script.google.com/macros/s/AKfycbxJB32YoyZNECjciPOiasIT78TYhx8pvd8kI3M68QfkZJV6HrebROnTLU48snwWuTAe/exec";
const form = document.forms["ditz-contact-form"];
const btnKirim = document.querySelector(".btn-kirim");
const btnLoading = document.querySelector(".btn-loading");
const myAlert = document.querySelector(".my-alert");

form.addEventListener("submit", (e) => {
    e.preventDefault();
    //ketika tombol submit di klik
    //tampilkan loading hilangkan kirim
    btnLoading.classList.toggle("d-none");
    btnKirim.classList.toggle("d-none");
    fetch(scriptURL, {
            method: "POST",
            body: new FormData(form)
        })
        .then((response) => {
            //tampilkan kirim hilangkan loading
            btnLoading.classList.toggle("d-none");
            btnKirim.classList.toggle("d-none");
            //tampilkan alert
            myAlert.classList.toggle("d-none");
            //reset form
            form.reset();
            console.log("Success!", response);
        })
        .catch((error) => console.error("Error!", error.message));
});
</script>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>

</html>