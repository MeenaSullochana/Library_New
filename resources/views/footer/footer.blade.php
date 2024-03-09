        <!-- feature-area-start -->
        <section style="background-image: url(assets/img/footer/footer-shape-1.svg);"
            class="feature-area mainfeature__bg grey-bg pt-50 pb-40"
            data-background="assets/img/footer/footer-shape-1.svg">
            <!-- <div class="container">
                <div class="mainfeature__border pb-15">
                    <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2">
                        <div class="col">
                           <a href="#">
                              <div class="mainfeature__item text-center mb-30">
                                 <div class="mainfeature__icon">
                                       <img src="assets/img/icon/feature-icon-1.svg" alt="">
                                 </div>
                                 <div class="mainfeature__content">
                                       <h4 class="mainfeature__title">Help</h4>
                                       <p>Across West & East India</p>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="col">
                           <a href="#">
                              <div class="mainfeature__item text-center mb-30">
                                <div class="mainfeature__icon">
                                    <img src="assets/img/icon/feature-icon-2.svg" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">Support</h4>
                                    <p>100% Secure Payment</p>
                                </div>
                              </div>
                           </a>
                        </div>
                        <div class="col">
                           <a href="#">
                              <div class="mainfeature__item text-center mb-30">
                                 <div class="mainfeature__icon">
                                       <img src="assets/img/icon/feature-icon-3.svg" alt="">
                                 </div>
                                 <div class="mainfeature__content">
                                       <h4 class="mainfeature__title">Privacy Policy</h4>
                                       <p>Add Multi-buy Discount </p>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="col">
                           <a href="#">
                              <div class="mainfeature__item text-center mb-30">
                                 <div class="mainfeature__icon">
                                       <img src="assets/img/icon/feature-icon-4.svg" alt="">
                                 </div>
                                 <div class="mainfeature__content">
                                       <h4 class="mainfeature__title">Term & Conditions</h4>
                                       <p>Dedicated 24/7 Support </p>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="col">
                           <a href="">
                              <div class="mainfeature__item text-center mb-30">
                                 <div class="mainfeature__icon">
                                       <img src="assets/img/icon/feature-icon-5.svg" alt="">
                                 </div>
                                 <div class="mainfeature__content">
                                       <h4 class="mainfeature__title">Help & Support</h4>
                                       <p>From Handpicked Sellers</p>
                                 </div>
                              </div>
                           </a>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>
        <!-- feature-area-end -->
        @php
        $homefooter = DB::table('homefooter')->first();

        @endphp
        <footer>
            <div class="tpfooter__area theme-bg-2">
                <div class="tpfooter__top pb-15">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="tpfooter__widget mb-50">
                                    <!--<div class="tpfooter__widget footer-col-1 mb-50">-->
                                    <h4 class="tpfooter__widget-title">About</h4>
                                    <p style="padding-right: 20px !important;" class="p-3"> {{$homefooter->about}}.<br>
                                        <!-- <a href="mailto:support@example.com">support@example.com</a> -->
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="tpfooter__widget footer-col-2 mb-50">
                                    <h4 class="tpfooter__widget-title"> Address Details</h4>
                                    <p><i class="fa fa-map-marker text-white" aria-hidden="true"></i>
                                        {{$homefooter->address}}</p><br>
                                    <p><i class="fa fa-phone-square text-white" aria-hidden="true"></i>
                                        {{$homefooter->phoneNumber}} Fax: {{$homefooter->faxNumber}}</p><br>
                                    <p><a href="mailto:support@example.com"> <i class="fa fa-envelope-open text-white"
                                                aria-hidden="true"></i> {{$homefooter->email}}</a></p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="tpfooter__widget mb-50">
                                    <!--<div class="tpfooter__widget footer-col-3 mb-50">-->
                                    <h4 class="tpfooter__widget-title">Quick links</h4>
                                    <div class="tpfooter__widget-links">
                                        <ul>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Contact</a></li>
                                            <li><a href="#">Guidelines</a></li>
                                            <!-- <li><a href="#">Rental Detail</a></li> -->
                                            <li><a href="#">Staff</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="tpfooter__widget mb-50">
                                    <!--<div class="tpfooter__widget footer-col-4 mb-50">-->
                                    <h4 class="tpfooter__widget-title">Social Media</h4>
                                    <div class="tpfooter__widget-newsletter">
                                        <div class="tpfooter__widget-social mt-45">
                                            <!-- <span class="tpfooter__widget-social-title mb-5">:</span> -->
                                            <a href="{{$homefooter->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                            <a href="{{$homefooter->twitter}}"><i class="fab fa-twitter"></i></a>
                                            <a href="{{$homefooter->youtube}}"><i class="fab fa-youtube"></i></a>
                                        </div>

                                    </div>
                                    <!-- <div class="tpfooter__widget-time-info mt-35">
                                        <span>Monday – Friday: <b>8:10 AM – 6:10 PM</b></span>
                                        <span>Saturday: <b>10:10 AM – 06:10 PM</b></span>
                                        <span>Sunday: <b>Close</b></span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tpfooter___bottom pt-40 pb-40">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="tpfooter__copyright text-center">
                                    <span class="tpfooter__copyright-text">Copyright © <a
                                            href="#">{{$homefooter->copyright}}.</a> all rights
                                        reserved. Powered by <a href="#">Gladindia</a>.</span>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-md-5 col-sm-12">
                                <div class="tpfooter__copyright-thumb text-end">
                                    <img src="assets/img/shape/footer-payment.png " alt="">
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>