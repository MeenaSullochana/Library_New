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
        <!-- slider-area-start -->
        @include("slider.slider")
        <!-- slider-area-end -->
        @php
        $categories = DB::table('special_categories') ->where('status', '=', '1')->get();
        @endphp

        @if($categories->isNotEmpty())
        <section tion class="category-area grey-bg pb-40">
            <div class="container">
                <div class="swiper-container category-active">

                    <div class="swiper-wrapper">
                        @foreach($categories as $val)
                        <div class="swiper-slide custm-slide-item">
                            <div class="category__item mb-30 cover-photo shadow-lg">
                                <div class="category__thumb fix mb-15">
                                    <a href="#"><img src="{{ asset('admin/categorieImage/' . $val->categorieImage) }}"
                                            alt="category-thumb"></a>
                                </div>
                                <div class="category__content">
                                    <h5 class="category__title"><a href="#">{{$val->name}} </a></h5>
                                    <!-- <span class="category__count">05-06-22</span> -->
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>


        @endif

        <!-- category-area-end -->


        <!-- about-area-start -->
        <section class="about-area grey-bg pt-100 pb-60">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="tpabout__inner-thumb-2 p-relative mb-30">
                            <img src="/images/bg6.png" alt="">
                            <div class="tpabout__inner-thumb-shape d-none d-md-block">
                                <div class="tpabout__inner-thumb-shape-one">
                                    <!-- <img src="assets/img/shape/tree-leaf-6.png" alt=""> -->
                                    <img src="assets/img/about/12.png" alt="">
                                </div>
                                <div class="tpabout__inner-thumb-shape-two">
                                    <!-- <img src="assets/img/shape/tree-leaf-7.png" alt=""> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tpabout__inner-2 mb-30">
                            <div class="tpabout__inner-tag mb-10">
                                <span class="active">About us</span>
                                <span>Welcome to Book Procurement</span>
                            </div>
                            <h4 class="tpabout__inner-title-2 fs-3 mb-25">WELCOME TO DIRECTORATE OF PUBLIC LIBRARIES
                            </h4>
                            <p>Public Libraries were opened in Tamil Nadu as per the “Tamil Nadu Public Libraries Act,
                                1948”. <br>The Directorate of Public Libraries was formed in 1972 in order to improve
                                the library services.<br> The following libraries are functioning in the State under the
                                control of the Directorate of Public Libraries. Public Libraries were opened in Tamil
                                Nadu as per the “Tamil Nadu Public Libraries Act, 1948”.<br>
                                The Directorate of Public Libraries was formed in 1972 in order to improve the library
                                services. The following libraries are functioning in the State under the control of the
                                Directorate of Public Libraries.
                            </p>
                            <!--<div class="tpabout__inner-list">-->
                            <!--    <ul>-->
                            <!--        <li><i class="icon-check"></i> Track your daily activity.</li>-->
                            <!--        <li><i class="icon-check"></i> Start a private group video call.</li>-->
                            <!--        <li><i class="icon-check"></i> All the lorem ipsum generators on the Internet.</li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- choose-area-start -->
        <section class="choose-area tpchoose__bg pb-80 grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="tpsection mb-35 pt-75 mt-100">
                            <h4 class="tpsection__title">User Registration Portal</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="tpchoose__item text-center mb-30">
                            <div class="tpchoose__icon mb-20">
                                <img src="assets/img/icon/choose-icon1.svg" alt="">
                            </div>
                            <div class="tpchoose__content">
                                <h4 class="tpchoose__title">Publisher</h4>
                                <p>Authorized Publisher Register Click to go</p>
                                <a href="/register"
                                    class="tpchoose__details d-flex align-items-center justify-content-center text-primary">Register
                                    Now<i class="icon-chevrons-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="tpchoose__item text-center mb-30">
                            <div class="tpchoose__icon mb-20">
                                <img src="assets/img/icon/choose-icon2.svg" alt="">
                            </div>
                            <div class="tpchoose__content">
                                <h4 class="tpchoose__title">Distributor</h4>
                                <p>Authorized Distributor Register Click to go</p>
                                <a href="/register"
                                    class="tpchoose__details d-flex align-items-center justify-content-center text-primary">Register
                                    Now<i class="icon-chevrons-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="tpchoose__item text-center mb-30">
                            <div class="tpchoose__icon mb-20">
                                <img src="assets/img/icon/choose-icon3.svg" alt="">
                            </div>
                            <div class="tpchoose__content">
                                <h4 class="tpchoose__title">Publisher cum Distributor</h4>
                                <p>Authorized Publisher cum Distributor Register Click to go</p>
                                <a href="#"
                                    class="tpchoose__details d-flex align-items-center justify-content-center text-primary">Register
                                    Now<i class="icon-chevrons-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="tpchoose__item text-center mb-30">
                            <div class="tpchoose__icon mb-20">
                                <img src="assets/img/icon/choose-icon4.svg" alt="">
                            </div>
                            <div class="tpchoose__content">
                                <h4 class="tpchoose__title">Other user login</h4>
                                <p>if Other user Click here register</p>
                                <a href="/register"
                                    class="tpchoose__details d-flex align-items-center justify-content-center text-primary">Register
                                    Now<i class="icon-chevrons-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- choose-area-end -->

        @php
        $homepagebooks = DB::table('homepagebooks')->where('type', '=', 'topratedbooks')->where('status', '=',
        '1')->get();
        @endphp
        @if($homepagebooks->isNotEmpty())

        <!-- product-area-start -->
        <section class="product-area grey-bg pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="tpsection mb-35">
                            <!--<h4 class="tpsection__sub-title">~ Procurement ~</h4>-->
                            <h4 class="tpsection__title">Popular Books</h4>
                            <!--<p>The liber tempor cum soluta nobis eleifend option congue doming quod mazim.</p>-->
                        </div>
                    </div>
                </div>
                <div class="tpproduct__arrow p-relative">
                    <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                        <div class="swiper-wrapper">
                            @foreach($homepagebooks as $val)
                            <div class="swiper-slide">
                                <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                        <a href="#"><img src="{{ asset('admin/bookImage/' . $val->bookImage) }}"
                                                alt=""></a>
                                        <a class="tpproduct__thumb-img" href="#"><img
                                                src="{{ asset('admin/bookImage/' . $val->bookImage) }}" alt=""></a>

                                    </div>
                                    <div class="tpproduct__content">
                                        <span class="tpproduct__content-weight">
                                            <a href="#">{{$val->category}}</a>

                                        </span>
                                        <h4 class="tpproduct__title">
                                            <a href="#">{{$val->booktitle}}</a>
                                        </h4>
                                        @if($val->booktitle !=null)
                                        <h4 class="tpproduct__title">
                                            <a href="#">{{$val->subtitle}}</a>

                                        </h4>
                                        @endif
                                        <div class="tpproduct__price">
                                            <p class="small">{{$val->description}}.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tpproduct-btn">
                        <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i class="icon-chevron-left"></i></a>
                        </div>
                        <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i
                                    class="icon-chevron-right"></i></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-area-end -->
        @endif

        <!-- banner-area-start -->
        <section class="banner-area pb-60 grey-bg">
            <div class="container">
                <div class="row">
                    <img src="assets/img/banner/2.png" alt="">
                </div>
            </div>
        </section>
        <!-- banner-area-end -->
        <div class="container mb-45">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tpvideo__wrapper p-4">
                        <div class="tpvideo__icon mb-5">
                            <i>
                                <img src="assets/img/shape/video-dots.svg" alt=""> 5465+
                            </i>
                        </div>
                        <div class="tpvideo__content">
                            <h4 class="tpvideo__title">Publisher</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tpvideo__wrapper p-4">
                        <div class="tpvideo__icon mb-5">
                            <i>
                                <img src="assets/img/shape/video-dots.svg" alt=""> 4968+
                            </i>
                        </div>
                        <div class="tpvideo__content">
                            <h4 class="tpvideo__title">Distributor</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tpvideo__wrapper p-4">
                        <div class="tpvideo__icon ">
                            <i>
                                <img src="assets/img/shape/video-dots.svg" alt=""> 565+
                            </i>
                        </div>
                        <div class="tpvideo__content">
                            <h4 class="tpvideo__title">Publisher cum Distributor</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="tpvideo__wrapper mb-30">
                        <div class="tpvideo__icon mb-5">
                            <i>
                                <img src="assets/img/shape/video-dots.svg" alt=""> 495+
                            </i>
                        </div>
                        <div class="tpvideo__content">
                            <h4 class="tpvideo__title">other User</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @php
        $homepagebooks = DB::table('homepagebooks')->where('type', '=', 'popularcategory')->where('status', '=',
        '1')->get();
        @endphp
        @if($homepagebooks->isNotEmpty())
        <!-- product-area-start -->
        <section class="weekly-product-area grey-bg pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="tpsection mb-20">
                            <h4 class="tpsection__title">Latest Top Rated Books</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tpnavtab__area pb-40">

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-all" role="tabpanel"
                                    aria-labelledby="nav-all-tab" tabindex="0">
                                    <div class="tpproduct__arrow p-relative">
                                        <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                                            <div class="swiper-wrapper">
                                                @foreach($homepagebooks as $val)
                                                <div class="swiper-slide cutm-min-slider-height">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="{{ asset('admin/bookImage/' . $val->bookImage) }}"
                                                                    alt=""></a>
                                                            <a class="tpproduct__thumb-img" href="#"><img
                                                                    src="{{ asset('admin/bookImage/' . $val->bookImage) }}"
                                                                    alt=""></a>

                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <span class="tpproduct__content-weight">
                                                                <a href="#">{{$val->category}}</a>

                                                            </span>

                                                            <h4 class="tpproduct__title">
                                                                <a href="#">{{$val->booktitle}}</a>

                                                            </h4>
                                                            @if($val->booktitle !=null)
                                                            <h4 class="tpproduct__title">
                                                                <a href="#">{{$val->subtitle}}</a>

                                                            </h4>
                                                            @endif
                                                            <div class="tpproduct__price">
                                                                <p class="small">{{$val->description}}.</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                @endforeach
                                                <!-- <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                                href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <span class="tpproduct__content-weight">
                                                                <a href="#">Fiction</a>
                                                            
                                                            </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="#">Tamil Section</a>
                                                            </h4>
                                                            <div class="tpproduct__price">
                                                                <p class="small">Second Floor of this library is
                                                                    dedicated to “Classical
                                                                    Language (Semmozhi)” Tamil.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                                href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <span class="tpproduct__content-weight">
                                                                <a href="#">Fiction</a>
                                                        
                                                            </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="#">Tamil Section</a>
                                                            </h4>
                                                            <div class="tpproduct__price">
                                                                <p class="small">Second Floor of this library is
                                                                    dedicated to “Classical
                                                                    Language (Semmozhi)” Tamil.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                                href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <span class="tpproduct__content-weight">
                                                                <a href="#">Fiction</a>
                                                      
                                                            </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="#">Tamil Section</a>
                                                            </h4>
                                                            <div class="tpproduct__price">
                                                                <p class="small">Second Floor of this library is
                                                                    dedicated to “Classical
                                                                    Language (Semmozhi)” Tamil.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                                href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <span class="tpproduct__content-weight">
                                                                <a href="#">Fiction</a>
                                                       
                                                            </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="#">Tamil Section</a>
                                                            </h4>
                                                            <div class="tpproduct__price">
                                                                <p class="small">Second Floor of this library is
                                                                    dedicated to “Classical
                                                                    Language (Semmozhi)” Tamil.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                                href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <span class="tpproduct__content-weight">
                                                                <a href="#">Fiction</a>
                                                        
                                                            </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="#">Tamil Section</a>
                                                            </h4>
                                                            <div class="tpproduct__price">
                                                                <p class="small">Second Floor of this library is
                                                                    dedicated to “Classical
                                                                    Language (Semmozhi)” Tamil.</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="tpproduct-btn">
                                            <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i
                                                        class="icon-chevron-left"></i></a></div>
                                            <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i
                                                        class="icon-chevron-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="tpproduct__all-item text-center">
                            <span>Discover thousands of other quality products.
                                <a href="#">Shop All Products <i class="icon-chevrons-right"></i></a>
                            </span>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        @endif
        <!-- product-area-end -->

        <!-- product-coundown-area-start -->
        <!-- <section class="product-coundown-area tpcoundown__bg grey-bg pb-25"
            data-background="assets/img/banner/1.png"> -->
        <section class="product-coundown-area tpcoundown__bg grey-bg pb-25">
            <div class="container">
                <div class="row">
                    <img src="assets/img/banner/1.png" alt="">
                </div>
            </div>
        </section>
        <!-- product-coundown-area-end -->

    </main>

    <!-- footer-area-start -->
    @include("footer.footer")
    <!-- footer-area-end -->
    <?php
         include "plugin/js.php";
      ?>
    <script>
    $(document).ready(function() {
        var items = ["var(--tp-grey-1)", "var(--tp-grey-2)", "var(--tp-grey-3)", "var(--tp-grey-4)",
            "var(--tp-grey-5)", "var(--tp-grey-6)", "var(--tp-grey-7)", "var(--tp-grey-8)",
            "var(--tp-grey-9)"
        ];
        var index = 0;
        var color;
        $(".cover-photo").each(function() {
            if (index == items.length)
                index = 0;

            color = items[index];
            $(this).css('background', color);
            index++;
        });
    });
    </script>
</body>

</html>
<style>
.cutm-min-slider-height {
    asd
}

.custm-slide-item {
    max-height: 250px !important;
    min-height: 250px !important;
}

strong.edate {
    display: block;
    color: #d94148;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
}

strong.etime {
    display: block;
    color: #aaaaaa;
    font-size: 16px;
    font-weight: 500;
    text-transform: uppercase;
}

a.title_up {
    color: #222222;
    margin: 0 0 7px;
    font-weight: 600;
    line-height: 22px;
}

a.joinnow {
    background: #fafafa;
    border: 1px solid #e1e1e1;
    line-height: 28px;
    display: inline-block;
    text-transform: uppercase;
    font-size: 14px;
    color: #a0a0a0;
    padding: 0 20px;
    border-radius: 15px;
}

a.joinnow:hover {
    background: #d94148;
    border-color: #d94148;
    color: #fff;
}
</style>