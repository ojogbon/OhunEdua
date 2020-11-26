<!DOCTYPE html>
<html lang="en">

<?php
    include "./nav/head.php";
?>

<body>
    <!-- Preloader Start -->
    <?php
        include "./nav/nav.php";
    ?>
    <!-- ***** Breadcumb Area Start ***** -->
    <div class="fancy-breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/ata.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>About Us</h2>
                        <p>We Are the advocate of the heritage.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="fancy-about-us-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about-us-text">
                        <h2>We Are the advocate of the heritage</h2>
                        <p>What is fundational is all that  matters to us, we are who we are.
                          What export heritage and inport value to it, we are simply a valid representative of culture.</p>
                        <p>Peace is all that we support and uplift, just for the sake ozf the silent voices, hand of whom can't be seen and for the faces that are yet to be recorgnized.</p>
                        <a href="aboutus.php" class="btn fancy-btn fancy-dark">Read More</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-5 ml-xl-auto">
                    <div class="about-us-thumb wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/bg-img/ate.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="fancy-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Google Map -->
                    <div id="googleMap"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6">
                    <!-- Contact Details -->
                    <div class="contact-details-area">
                        <div class="section-heading">
                            <h2>Contact Us</h2>
                            <p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most.</p>
                        </div>
                        <p>+237 708 1738 828 <br> info.ohunedua@gmail.com
                        </p>
                        <p>1 Akinwunmi close <br> Abeokuta, Ogun, NIgeria.</p>
                        <p>Open hours: 8.00-18.00 Mon-Sunday.</p>
                    </div>
                    <!-- Follow Us -->

                </div>
                <div class="col-12 col-md-6">
                    <!-- Contact Form -->
                    <div class="contact-form-area">
                        <div class="section-heading">
                            <h2>E konsiwa!</h2>
                            <p>Contact us via this plateforms.</p>
                        </div>
                        <div class="contact-form">
                          <div class="follow-us-area">

                              <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                              <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                              <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                              <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
        <?php include "./nav/foot.php";?>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Google Maps js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk"></script>
    <script src="js/google-map/map-active.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>
