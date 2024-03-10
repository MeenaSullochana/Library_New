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
        <div class="breadcrumb__area pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-breadcrumb__content">
                            <div class="tp-breadcrumb__list">
                                <span class="tp-breadcrumb__active"><a href="index.html">Home</a></span>
                                <span class="dvdr">/</span>
                                <span>Guidelines</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- faq-area-start -->
        <section class="faq-area pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-1">
                        <div class="tpfaq__content mr-50">
                            <h3 class="tpfaq__title text-danger">Publisher reset password guidelines</h3>
                            <!-- <p>Returns are free for orders shipped within the U.S. We include a UPS return label in
                                every package which is at no cost to use.</p>
                            <span>Follow the steps below for a seamless returns process:</span> -->
                            <ul>
                            @php
                                                $forgotpasswordhidelins_title = DB::table('forgotpasswordhidelins_title')->where('userType', '=', 'publisher')->first();

                                                if ($forgotpasswordhidelins_title !== null) {
                                                    $data77 = json_decode($forgotpasswordhidelins_title->hidelineContent);
                                                } else {
                                                    $data77 = [];
                                                }
                                            @endphp
                                            @if ($data77)
                                                @foreach($data77 as $val)
                                                   
                                                    <li>{{$val}}.</li>
                                                @endforeach
                                            @else
                                                <p>No data available for publisher.</p>
                                            @endif
                               
                            </ul>

                        </div>
                        <div class="tpfaq__content mr-50">
                            <h3 class="tpfaq__title text-danger">Distributor reset password guidelines</h3>
                            <!-- <p>Returns are free for orders shipped within the U.S. We include a UPS return label in
                                every package which is at no cost to use.</p>
                            <span>Follow the steps below for a seamless returns process:</span> -->
                            <ul>
                            @php
                                                $forgotpasswordhidelins_title1 = DB::table('forgotpasswordhidelins_title')->where('userType', '=', 'distributor')->first();

                                                if ($forgotpasswordhidelins_title1 !== null) {
                                                    $data14 = json_decode($forgotpasswordhidelins_title1->hidelineContent);
                                                } else {
                                                    $data14 = [];
                                                }
                                            @endphp
                                          
                                            @if ($data14)
                                                @foreach($data14 as $val)
                                                    <!-- hidelineContent -->
                                                    <li>{{$val}}.</li>
                                                @endforeach
                                            @else
                                                <p>No data available for distributor.</p>
                                            @endif
                            </ul>
                            <!-- <p>
                                You will receive an email once your return has been processed. Please allow 06 – 12
                                business days from the time your package arrives back to us for a refund to be issued.
                            </p> -->
                        </div>
                        <div class="tpfaq__content mr-10">
                            <h3 class="tpfaq__title text-danger">Publisher cum Distributor reset password guidelines
                            </h3>
                            <!-- <p>Returns are free for orders shipped within the U.S. We include a UPS return label in
                                every package which is at no cost to use.</p>
                            <span>Follow the steps below for a seamless returns process:</span> -->
                            <ul>
                            @php
                                                $forgotpasswordhidelins_title2 = DB::table('forgotpasswordhidelins_title')->where('userType', '=', 'publisher_distributor')->first();

                                                if ($forgotpasswordhidelins_title2 !== null) {
                                                    $data28 = json_decode($forgotpasswordhidelins_title2->hidelineContent);
                                                } else {
                                                    $data28 = [];
                                                }
                                            @endphp
                                            <div class="accordion-body">
                                            @if ($data28)
                                                @foreach($data28 as $val)
                                                    <!-- hidelineContent -->
                                                    <li>{{$val}}.</li>
                                                @endforeach
                                            @else
                                                <p>No data available for publisher cum distributor.</p>
                                            @endif
                            </ul>
                            <!-- <p>
                                You will receive an email once your return has been processed. Please allow 06 – 12
                                business days from the time your package arrives back to us for a refund to be issued.
                            </p> -->
                        </div>
                    </div>
                    <div class="col-lg-6 order-0">
                        <div class="tpfaq">
                            <div class="tpfaq__item mb-45">
                                <h4 class="tpfaq__title mb-40 text-danger fs-5">User Registration Guidelines</h4>
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                                aria-controls="panelsStayOpen-collapseOne">
                                                Publisher Registration Guideline?
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingOne" style="">
                                            <div class="accordion-body">
                                            @php
                                                $hidelins_title = DB::table('hidelins_title')->where('userType', '=', 'publisher')->first();

                                                if ($hidelins_title !== null) {
                                                    $data = json_decode($hidelins_title->hidelineContent);
                                                } else {
                                                    $data = [];
                                                }
                                            @endphp
                                            <div class="accordion-body">
                                            @if ($data)
                                                @foreach($data as $val)
                                                    <!-- hidelineContent -->
                                                    <li>{{$val}}.</li>
                                                @endforeach
                                            @else
                                                <p>No data available for publisher.</p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                                                aria-controls="panelsStayOpen-collapseTwo">
                                                Distributor Registration Guideline
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingTwo" style="">
                                            @php
                                                $hidelins_title1 = DB::table('hidelins_title')->where('userType', '=', 'distributor')->first();

                                                if ($hidelins_title1 !== null) {
                                                    $data1 = json_decode($hidelins_title1->hidelineContent);
                                                } else {
                                                    $data1 = [];
                                                }
                                            @endphp
                                            <div class="accordion-body">
                                            @if ($data1)
                                                @foreach($data1 as $val)
                                                    <!-- hidelineContent -->
                                                    <li>{{$val}}.</li>
                                                @endforeach
                                            @else
                                                <p>No data available for distributor.</p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                Publisher and Distributor guidelines?
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                            @php
                                                $hidelins_title2 = DB::table('hidelins_title')->where('userType', '=', 'publisher_distributor')->first();

                                                if ($hidelins_title2 !== null) {
                                                    $data2 = json_decode($hidelins_title2->hidelineContent);
                                                } else {
                                                    $data2 = [];
                                                }
                                            @endphp
                                            <div class="accordion-body">
                                            @if ($data2)
                                                @foreach($data2 as $val)
                                                    <!-- hidelineContent -->
                                                    <li>{{$val}}.</li>
                                                @endforeach
                                            @else
                                                <p>No data available for publisher cum distributor.</p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tpfaq__item mb-45">
                                <h4 class="tpfaq__title mb-20 text-danger fs-5">User Login Guidelines</h4>
                                <div class="accordion" id="accordionPanelsStayOpenExample2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                                Publishers login guidelines
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingFour">
                                            <div class="accordion-body">
                                            @php
                                                $loginhidelins = DB::table('loginhidelins_title')->where('userType', '=', 'publisher')->first();

                                                if ($loginhidelins !== null) {
                                                    $data3 = json_decode($loginhidelins->hidelineContent);
                                                } else {
                                                    $data3 = [];
                                                }
                                            @endphp
                                            <div class="accordion-body">
                                            @if ($data3)
                                                @foreach($data3 as $val)
                                                    <!-- hidelineContent -->
                                                    <li>{{$val}}.</li>
                                                @endforeach
                                            @else
                                                <p>No data available for publisher.</p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                                                Distributor login guidelines
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingFive">
                                            <div class="accordion-body">
                                            @php
                                                $loginhidelins1 = DB::table('loginhidelins_title')->where('userType', '=', 'distributor')->first();

                                                if ($loginhidelins1 !== null) {
                                                    $data4 = json_decode($loginhidelins1->hidelineContent);
                                                } else {
                                                    $data4 = [];
                                                }
                                            @endphp
                                            <div class="accordion-body">
                                            @if ($data4)
                                                @foreach($data4 as $val)
                                                    <!-- hidelineContent -->
                                                    <li>{{$val}}.</li>
                                                @endforeach
                                            @else
                                                <p>No data available for distributor.</p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                                                Publisher cum Distributor login guidelines
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingSix">
                                            <div class="accordion-body">
                                            @php
                                                $loginhidelins2 = DB::table('loginhidelins_title')->where('userType', '=', 'publisher_distributor')->first();

                                                if ($loginhidelins2 !== null) {
                                                    $data5 = json_decode($loginhidelins2->hidelineContent);
                                                } else {
                                                    $data5 = [];
                                                }
                                            @endphp
                                            <div class="accordion-body">
                                            @if ($data5)
                                                @foreach($data5 as $val)
                                                    <!-- hidelineContent -->
                                                    <li>{{$val}}.</li>
                                                @endforeach
                                            @else
                                                <p>No data available for publisher cum distributor.</p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tpfaq__item mb-45">
                                <h4 class="tpfaq__title mb-20 text-danger fs-5">User Email Verfication Guidelines</h4>
                                <div class="accordion" id="accordionPanelsStayOpenExample2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                                Publishers Email Verfication guidelines
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingFour">
                                            <div class="accordion-body">
                                            @php
                                                $mailconfirm_title = DB::table('mailconfirm_title')->where('userType', '=', 'publisher')->first();

                                                if ($mailconfirm_title !== null) {
                                                    $data33 = json_decode($mailconfirm_title->hidelineContent);
                                                } else {
                                                    $data33 = [];
                                                }
                                            @endphp
                                            <div class="accordion-body">
                                            @if ($data33)
                                                @foreach($data33 as $val)
                                                    <!-- hidelineContent -->
                                                    <li>{{$val}}.</li>
                                                @endforeach
                                            @else
                                                <p>No data available for publisher.</p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                                                Distributor Email Verfication guidelines
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingFive">
                                            <div class="accordion-body">
                                            @php
                                                $mailconfirm_title1 = DB::table('mailconfirm_title')->where('userType', '=', 'distributor')->first();

                                                if ($mailconfirm_title1 !== null) {
                                                    $data44 = json_decode($mailconfirm_title1->hidelineContent);
                                                } else {
                                                    $data44 = [];
                                                }
                                            @endphp
                                            <div class="accordion-body">
                                            @if ($data44)
                                                @foreach($data44 as $val)
                                                    <!-- hidelineContent -->
                                                    <li>{{$val}}.</li>
                                                @endforeach
                                            @else
                                                <p>No data available for distributor.</p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                                                Publisher cum Distributor Email Verfication guidelines
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingSix">
                                            <div class="accordion-body">
                                            @php
                                                $mailconfirm_title2 = DB::table('mailconfirm_title')->where('userType', '=', 'publisher_distributor')->first();

                                                if ($mailconfirm_title2 !== null) {
                                                    $data55 = json_decode($mailconfirm_title2->hidelineContent);
                                                } else {
                                                    $data55 = [];
                                                }
                                            @endphp
                                            <div class="accordion-body">
                                            @if ($data55)
                                                @foreach($data55 as $val)
                                                    <!-- hidelineContent -->
                                                    <li>{{$val}}.</li>
                                                @endforeach
                                            @else
                                                <p>No data available for publisher cum distributor.</p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tpfaq__item">
                                <h4 class="tpfaq__title mb-20 text-danger fs-5">Forgot password guidelines</h4>
                                <div class="accordion" id="accordionPanelsStayOpenExample3">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                                                Publisher guidelines
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingSeven">
                                            <div class="accordion-body">
                                            @php
                                                $forgothidelins_title = DB::table('forgothidelins_title')->where('userType', '=', 'publisher')->first();

                                                if ($forgothidelins_title !== null) {
                                                    $data6 = json_decode($forgothidelins_title->hidelineContent);
                                                } else {
                                                    $data6 = [];
                                                }
                                            @endphp
                                            <div class="accordion-body">
                                            @if ($data6)
                                                @foreach($data6 as $val)
                                                    <!-- hidelineContent -->
                                                    <li>{{$val}}.</li>
                                                @endforeach
                                            @else
                                                <p>No data available for publisher.</p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                                                Distributor guidelines
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingEight">
                                            <div class="accordion-body">
                                            @php
                                                $forgothidelins_title1 = DB::table('forgothidelins_title')->where('userType', '=', 'distributor')->first();

                                                if ($forgothidelins_title1 !== null) {
                                                    $data7 = json_decode($forgothidelins_title1->hidelineContent);
                                                } else {
                                                    $data7 = [];
                                                }
                                            @endphp
                                            <div class="accordion-body">
                                            @if ($data7)
                                                @foreach($data7 as $val)
                                                    <!-- hidelineContent -->
                                                    <li>{{$val}}.</li>
                                                @endforeach
                                            @else
                                                <p>No data available for  distributor.</p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
                                                Publisher cum Distributor guidelines
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingNine">
                                            <div class="accordion-body">
                                            @php
                                                $forgothidelins_title2 = DB::table('forgothidelins_title')->where('userType', '=', 'publisher_distributor')->first();

                                                if ($forgothidelins_title2 !== null) {
                                                    $data8 = json_decode($forgothidelins_title2->hidelineContent);
                                                } else {
                                                    $data8 = [];
                                                }
                                            @endphp
                                            <div class="accordion-body">
                                            @if ($data8)
                                                @foreach($data8 as $val)
                                                    <!-- hidelineContent -->
                                                    <li>{{$val}}.</li>
                                                @endforeach
                                            @else
                                                <p>No data available for publisher cum distributor.</p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-area-end -->
    </main>

    <!-- footer-area-start -->
    @include("footer.footer")
    <!-- footer-area-end -->
    <?php
         include "plugin/js.php";
      ?>

</body>

</html>