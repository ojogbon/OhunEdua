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
                        <h2>The voice from the builders of heritage</h2>
                        <!-- Breadcumb -->
                        <nav>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ****** Single Blog Area Start ****** -->
    <section class="single_blog_area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9 main-blog-list">

                </div>

                <!-- ****** Blog Sidebar ****** -->
                <div class="col-10 col-lg-3">
                    <div class="blog-sidebar">
                        <!-- Single Widget Area -->
                        <div class="single-widget-area popular-post-widget">
                            <div class="widget-title">
                                <h5>Recent Blog</h5>
                            </div>

                            <div class="blog_list">
                                <!-- Single Popular Post -->

                              <!-- Single Popular Post -->
                            </div>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area categories-widget mt-5">
                            <div class="widget-title">
                                <h5>Categories</h5>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i> Branding</a></li>
                                <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i> Design</a></li>
                                <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i> Illustration</a></li>
                                <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i> News</a></li>
                                <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i> Programming</a></li>
                                <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i> Trending</a></li>
                            </ul>
                        </div>

                        <!-- Single Widget Area -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Single Blog Area End ****** -->

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
    <!-- Active JS -->
    <script src="js/active.js"></script>

    <script src="../views/js/site_blog.js"></script>

</body>
