<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-top">
    <div class="container">
    <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Lev Computer</h3>
        <p>
            Jl. Sahabat 5 <br> Tamalanrea <br> Makassar<br>
            Sulawesi Selatan <br><br>
            <strong>Phone:</strong> 0822-5925-6328<br>
            <strong>Email:</strong> levafr369@gmail.com<br>
        </p>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#about-us">Tentang</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#services">Layanan</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#excellence">Keunggulan</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#clients">Pelanggan</a></li>

        </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
        <h4>Other</h4>
        <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="https://www.privacypolicyonline.com/live.php?token=22P0ECUaPJP40z5tSdvUDFRXCrcqvxHS">Privacy Policy</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="https://www.privacypolicyonline.com/live.php?token=3VJygFTCuXjcDGIwsraLBlguYN8RQNQT">Disclaimer</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="https://www.privacypolicyonline.com/live.php?token=q6BP2w4vbDjxXWI2RHiXEzzd1khnrt7H">Terms Of Service</a></li>
        </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join Our Newsletter</h4>
        <form action="{{ route('newsletter_save')}}" method="post">
            @csrf
            <input type="email" name="newsletter_email" placeholder="Email"><input type="submit" value="Subscribe" >
        </form>
        </div>

    </div>
    </div>
</div>

<div class="container d-md-flex py-4">

    <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
        &copy; Copyright <strong><span>2022 by <a href="https://bootstrapmade.com/">Bootstrap</a></span></strong>. All Rights Reserved
    </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.facebook.com/AdhityaFRD/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/lev_computer/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://wa.me/6282259256328/" class="twitter"><i class="bx bxl-whatsapp"></i></a>
        <a href="https://www.youtube.com/@LevComputer/featured" class="google-plus"><i class="bx bxl-youtube"></i></a>
    </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>