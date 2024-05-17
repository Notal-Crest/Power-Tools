<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>NC-Tools</h3>
        <p>
        House No: 0251<br>
        Angwan-Sariki Orozo<br>
          Abuja, Nigeria<br><br>
          <strong>Phone:</strong> +2348108929992, +2349022333202<br>
          <strong>Email:</strong> info@notalcrest.com.ng<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Social Networks</h4>
        <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> -->
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container footer-bottom clearfix">
  <div class="copyright">
    &copy; Copyright <strong><span>Notal-Crest</span></strong>. All Rights Reserved <span id="year"></span>
  </div>
  <div class="credits">
    Designed by <a href="omoniyi.netlify.app">Notal-Crest</a>
  </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->

<script src="assets/js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70.0-2014.11.23/jquery.blockUI.min.js" integrity="sha512-Z84iqqN8wVpPeBsDTKA6zWs3nguaCk7bvDD+KNLbDFNmWVLHsRDJd0Xr/wKrl95o7mSvN8YF69hXuZVzMGzgGw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>


<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/tools.js"></script>

<script>

  $(document).ready(function(){
    $('#privacy-policy').hide()
  });
  $(document).ready(function () {
    $('#gen').click(function () {
      // alert('Hello');
    var inp = $('#in1').val();
    // alert(inp);
    if (inp.is_null) {
      alert('Type in your company name please!');
    } else {
      if (inp === " " || inp === "") {
        alert('Type in your company name please!');
      } else {
        $('#privacy-policy').show()
      $('#gen').hide()
      }
    }
    })
  });
  

</script>
</body>

</html>