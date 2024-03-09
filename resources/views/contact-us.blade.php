<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Directorate of Public Libraries</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
         include "plugin/css.php";
      ?>
</head>

<body>


    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="icon-chevrons-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <header>
        <!-- header-area-start -->
        <!-- Start Top Header -->

        @include("header.top_header")
        <!-- End Top Header -->
        <!-- User Desktop navigation System -->

        @include("header.middile_navigation")
        @include("header.navigation")
        <!-- End User Desktop navigation System -->

        <!-- mobile-menu-area -->

        @include("header.mobile_navigation")
        <!-- mobile-menu-area-end -->
    </header>
    <!-- header-area-end -->

    <main>

        <!-- breadcrumb-area-start -->
        <div class="breadcrumb__area grey-bg pt-50 pb-55">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-breadcrumb__content text-center">
                            <h4 class="tp-breadcrumb__title"> Contact Us</h4>
                            <div class="tp-breadcrumb__list">
                                <span class="tp-breadcrumb__active"><a href="index.html">Home</a></span>
                                <span class="dvdr">/</span>
                                <span>Address</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- location-area-start -->
        <div class="location-area pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tplocation mb-30">
                            <div class="tplocation__thumb w-img">
                                <img src="images/bg6.png" alt="">
                            </div>
                            <div class="tplocation__content">
                                <ul>
                                    <li>
                                        <a href="#">Add: Gandhi Mandapam Rd, Surya Nagar, Kotturpuram, Chennai, Tamil
                                            Nadu 600085</a>
                                    </li>
                                    <li>
                                        <a href="tel:012345678">Phone: (+100) 123 456 7890</a>
                                    </li>
                                    <li>
                                        <a href="mailto:orfarm@google.com">Email: </a>
                                    </li>
                                    <li>
                                        <a href="#">Website: </a>
                                    </li>
                                    <li>

                                    </li>
                                    <!-- <li>
                                        Opening Hours: <span> 09:00 AM - 18:00 PM</span>
                                    </li> -->
                                    <li>
                                        <a class="tplocation__button mt-15" href="#">Get Directions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tpcontactmap mb-30">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.29118718848!2d80.23738257454724!3d13.017119813879743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526772eb0d4451%3A0xcfc3c35cdd3a47d3!2sAnna%20Centenary%20Library!5e0!3m2!1sen!2sin!4v1709980128274!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- location-area-end -->
    </main>

    <!-- footer-area-start -->
    @include("footer.footer")
    <!-- footer-area-end -->
    <?php
         include "plugin/js.php";
      ?>

</body>

</html>