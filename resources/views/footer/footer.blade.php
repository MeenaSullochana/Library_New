        <!-- feature-area-start -->
        <section style="background-image: url(assets/img/footer/footer-shape-1.png);"
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
                    <div class="container p-5">
                        <div class="row">
                            <div class="col-xl-4 col-lg-5 col-md-7 col-sm-6">
                               <div class="tpfooter__widget footer-col-1 mb-50">
                                    <h4 class="tpfooter__widget-title"> Address Details</h4>
                                    <p class="p-2"><i class="fa fa-map-marker text-white" aria-hidden="true"></i>
                                        {{$homefooter->address}}</p><br>
                                    <p><i class="fa fa-phone text-white" aria-hidden="true"></i> Phone :
                                        {{$homefooter->phoneNumber}} </p><br>
                                        <p><i class="fa fa-phone-square text-white" aria-hidden="true"></i> Fax : {{$homefooter->faxNumber}}</p><br>
                                    <p><a href="mailto:support@example.com"> <i class="fa fa-envelope-open text-white"
                                                aria-hidden="true"></i> Email :  {{$homefooter->email}}</a></p>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-6">
                               <div class="tpfooter__widget footer-col-2 mb-50">
                                  <h4 class="tpfooter__widget-title">Quick links</h4>
                                  <div class="tpfooter__widget-links">
                                    <ul>
                                       <li><a href="/"><i class="fa fa-angle-double-right text-white" aria-hidden="true"></i> Home</a></li>
                                       <li><a href="/about"><i class="fa fa-angle-double-right text-white" aria-hidden="true"></i> About Us</a></li>
                                       <li><a href="/procurement-policy"><i class="fa fa-angle-double-right text-white" aria-hidden="true"></i> Procurement Policy</a></li>
                                       <li><a href="/faq"><i class="fa fa-angle-double-right text-white" aria-hidden="true"></i> Guidelines</a></li>
                                       <li><a href="/contact-us"><i class="fa fa-angle-double-right text-white" aria-hidden="true"></i> Contact Us</a></li>
                                    </ul>
                                 </div>
                              </div>
                            </div>
                            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-5">
                               <div class="tpfooter__widget footer-col-3 mb-50">
                                  <h4 class="tpfooter__widget-title">Login</h4>
                                  <div class="tpfooter__widget-links">
                                     <ul>
                                        <li><a href="/admin/login"><i class="fa fa-angle-double-right text-white" aria-hidden="true"></i> Admin Login</a></li>
                                        <li><a href="/member/login"><i class="fa fa-angle-double-right text-white" aria-hidden="true"></i> Reviewer Login</a></li>
                                        <li><a href="/member/login"><i class="fa fa-angle-double-right text-white" aria-hidden="true"></i> Librarian Login</a></li>
                                        <li><a href="/register"><i class="fa fa-angle-double-right text-white" aria-hidden="true"></i> Publisher Register</a></li>
                                        <li><a href="/register"><i class="fa fa-angle-double-right text-white" aria-hidden="true"></i> Distributor Register</a></li>
                                        <li><a href="/register"><i class="fa fa-angle-double-right text-white" aria-hidden="true"></i> Publisher Cum Distributor Register</a></li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-8 col-sm-7">
                               <div class="tpfooter__widget footer-col-4 mb-50">
                                  <h4 class="tpfooter__widget-title">Directorate of Public libraries</h4>
                                  <div class="tpfooter__widget-newsletter">
                                     {{-- <p>{!! $homefooter->about !!}</p> --}}
                                     <p>Public Libraries were opened in Tamil Nadu as per the “Tamil Nadu Public Libraries Act, 1948”. The Directorate of Public Libraries was formed in 1972 in order to improve the library services.</p>
                                     <a href="https://tamilnadupubliclibraries.org/" class="text-white">Read more...</a>
                                     <div class="tpfooter__widget-social mt-45">
                                        <span class="tpfooter__widget-social-title mb-5">Social Media</span>
                                        <a href="{{$homefooter->facebook}}"><i class="fab fa-facebook-f"></i> Facebook</a>
                                        <a href="{{$homefooter->twitter}}"><i class="fab fa-twitter"></i> Twitter</a>
                                        <a href="{{$homefooter->youtube}}"><i class="fab fa-youtube"></i> Youtube</a>
                                     </div>
                                  </div>
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
        <style>
         i.fab.fa-facebook-f {
            color: #1873eb;
         }
         i.fab.fa-twitter {
            color: #0097e7;
         }
         i.fab.fa-youtube {
            color: red;
         }
         i.fab.fa-pinterest-p {
            color: #ef0000;
         }
         i.fab.fa-instagram {
            color: #ff00a3;
         }
        </style>
