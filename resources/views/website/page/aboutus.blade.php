@extends('website.include.master')
@push('css')
<link rel="stylesheet" href="{{asset('frontend')}}/{{asset('frontend')}}/assets/css/swiper-bundle.min.css">
@endpush
@section('body')
    <header class="page-header bg-gradient-body">
        <div class="container">
            <h1 class="page-title mb-15" data-aos="fade-down">ABOUT US</h1>
            <nav class="breadcrumb p-y-0 p-x-0" data-aos="fade-right">
                <a class="breadcrumb-item" href="index.html">Home</a>
                <span class="breadcrumb-item active">About-Us</span>
            </nav><!--  SRCodeX bradcrumb -->
        </div><!--  SRCodeX container -->
    </header>

    <div class="main-container p-0">
        <section class="lg bg-gradient-body">
            <div class="container mb-4">
                <div class="row">
                    <div class="col-lg-4 sidebar">
                        <div class="widget mt-0" data-aos="fade-up" data-aos-delay="400">
                            <div class=" p-x-0 p-y-0 mb-0 promo-left bg-transparent no-shadow">
                                <div class="" >
                                    <div class="" style="display: flex; justify-content: center; align-items: center;">
                                        <img style="width: 85%; max-width: 400px; height: auto;" src="{{asset('frontend')}}/assets/images/mypro.png" alt="" class="promo-box-image circle raised-xs">
                                    </div><!-- / promo-big -->
                                    <br>
                                    <h4 class="box-title">SR Hidoy Rahman</h4>
                                    <p class="fs-20">CEO of SRCodeX LTD </p>
                                </div><!-- / promo-container -->
                            </div>
                        </div><!-- / widget -->


                        <div class="widget" data-aos="fade-up" data-aos-delay="600">
                            <h6 class="widget-title">Message from CEO</h6>
                            <p class=" fs-10 text-white mb-14">Honored and Grateful: Receiving the award from the Bangladesh Association of Software & Information Services (BASIS).</p>
                            <p class=" fs-10 text-white mb-14">I extend my heartfelt thanks to Mr. Russell T. Ahmed, President of BASIS, for gracing the occasion and presenting me with this prestigious award. </p>
                        </div><!-- / widget -->


                        <div class="widget" data-aos="fade-up" data-aos-delay="700">
                            <h6 class="widget-title">My Certificate's</h6>
                            <p class=" fs-14 text-white mb-14">I am a certified Software Developer with 4 years of experience in PHP and Laravel.</p>
                            <div class="row">
                                <div class="col-12 fs-14 text-white">
                                    <ul class="list-unstyled list-icon list-arrow list-primary list-has-link menu-list mb-0 tablet-lg-top">
                                        <li class="mb-10"><a class="text-white" href="#x">Professional English Communication</a><p class="fs-10"> &nbsp;&nbsp;&nbsp;&nbsp; FROM: WSDA ( New Zealand )</p></li>
                                        <li class="mb-10"><a class="text-white" href="#x">Advanced Web Designing</a><p class="fs-10"> &nbsp;&nbsp;&nbsp;&nbsp; FROM: Anudip Foundation ( India )</p></li>
                                        <li class="mb-10"><a class="text-white" href="#x">Diploma in Professional WAD</a><p class="fs-10"> &nbsp;&nbsp;&nbsp;&nbsp; FROM: IsDB-BISEW </p></li>
                                        <li class="mb-10"><a class="text-white" href="#x">PHP with Laravel Framework</a><p class="fs-10"> &nbsp;&nbsp;&nbsp;&nbsp; FROM: BASIS-BITM</p></li>
                                        <li class="mb-10"><a class="text-white" href="#x">Web Design & Development</a><p class="fs-10"> &nbsp;&nbsp;&nbsp;&nbsp; FROM: Daffodil Institute of IT</p></li>
                                        <li class="mb-10"><a class="text-white" href="#x">Diploma in Computer Engineering</a><p class="fs-10"> &nbsp;&nbsp;&nbsp;&nbsp; FROM: ICT-Bangladesh ( 4 year's Diploma)</p></li>
                                        
                                    </ul><!-- / list-unstyled -->
                                </div><!-- / column -->
                            </div><!-- / row -->
                        </div><!-- / widget -->

                        

                    </div><!-- / column -->
                    <div class="col-lg-8 tablet-lg-top-30 page-content">
                        <div class="blog-post mb-50">
                            <div class="page-content" data-aos="fade-up" data-aos-delay="300">
                                <img src="{{asset('frontend')}}/assets/images/basis.jpeg" alt="" class="raised-sm rounded-10">
                                <p class="fs-12 bt-1 bb-1 border-secondary p-15 m-y-10"><i class="far fa-user mr-5 fs-30"></i>  <span class="fs-30">Who are we..? </span>  <span class="pull-right"></span></p>
                                <br>
                                <h3 class="fab fs-26 text-white va-top mr-5 mb-5">SRCodeX LTD: Your Partner in Digital Success.</h3>
                                <br><br>
                                <h4 class="fab fs-20 text-white">We're a Bangladeshi company passionate about bridging the gap between cutting-edge technology and real-world solutions. We offer a comprehensive range of services, including:</h4>
                                <li class="fs-14 text-white">Facebook Marketing: Boost sales & simplify operations.</li>
                                <li class="fs-14 text-white">Graphics Design: Our creative team crafts stunning visuals that elevate your brand.</li>
                                <li class="fs-14 text-white">Web Application Development: We build user-friendly web applications for your business.</li>
                                
                                <br>
                                <h3 class="fab fs-26 text-white va-top mr-5 mb-5">Our Mission: Your Success.</h3>
                                <h4 class="fab fs-20 text-white">At SRCodeX LTD, our goal is 100% client satisfaction. We achieve this by:</h4>
                                <li class="fs-14 text-white">Collaborating closely with you to understand your unique needs.</li>
                                <li class="fs-14 text-white">Delivering innovative and reliable solutions that meet your specific requirements.</li>
                                <li class="fs-14 text-white">Utilising a talented team of software architects, engineers, and designers.</li>
                                <li class="fs-14 text-white">Employing versatile project management to ensure smooth execution.</li>
                                <br>
                                <h3 class="fab fs-26 text-white va-top mr-5 mb-5">Beyond Software:</h3>
                                <h4 class="fab fs-20 text-white">While software development is our core expertise, we also offer additional services like 3D & 2D Graphics Design, Facebook marketing, keeping an eye on global trends and client needs.</h4>
                                <br>
                                <br>
                                <h3 class="fab fs-26 text-white va-top mr-5 mb-5">Ready to take your business digital..?</h3>
                                
                            </div><!-- / post-content -->
                        </div><!-- / blog-post -->


                    </div><!-- / column -->


                </div><!-- / row -->
            </div><!-- / container -->

            <!-- ############################################## -->
            <section id="sliders">
                <div class="container" data-aos="fade-up" data-aos-delay="400">
                    <div class="row">
                        <div class="col-lg-12 minh-100 mb-50">
                            <div id="flow-swiper" class="flow-swiper swiper-container pagination-down">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide rounded" style="background-image:url({{asset('frontend')}}/assets/images/info-0.jpeg)"></div>
                                    <div class="swiper-slide rounded" style="background-image:url({{asset('frontend')}}/assets/images/info-3.jpeg)"></div>
                                    <div class="swiper-slide rounded" style="background-image:url({{asset('frontend')}}/assets/images/info-2.jpeg)"></div>
                                    <div class="swiper-slide rounded" style="background-image:url({{asset('frontend')}}/assets/images/info-4.jpeg)"></div>
                                    <div class="swiper-slide rounded" style="background-image:url({{asset('frontend')}}/assets/images/info-5.jpeg)"></div>
                                    <div class="swiper-slide rounded" style="background-image:url({{asset('frontend')}}/assets/images/info-6.jpeg)"></div>
                                </div><!-- / swiper-wrapper -->
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                            </div><!-- / flow-swiper -->
                        </div><!-- / column -->
    
                    </div><!-- / row -->
                </div><!-- / container -->
            </section>
            <!-- / sliders -->
            <!-- ############################################## -->
            {{-- <section class="lg bg-img">
                <div class="container">
                    <h1 class="p-y-40 p-x-0 promo-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        Our Team
                    </h1>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card card-w-raised-img-top" data-aos="fade-up">
                                <div class="card-body text-center">
                                    <img class="card-raised-img-top mb-30 circle raised-sm w-50" src="{{asset('frontend')}}/assets/images/1.jpg" alt="">
                                    <p class="ratings mb-0"><i class="fas fa-star fs-12 va-middle"></i> <i class="fas fa-star va-middle"></i> <i class="fas fa-star fs-20 va-middle"></i> <i class="fas fa-star va-middle"></i> <i class="fas fa-star fs-12 va-middle"></i></p>
                                    <p class="card-text mb-15">Etiam in gravida ligula. Phasellus a blandit lectus. Sed in libero ac ex pulvinar accumsan at at justo.</p>
                                    <p class="mb-0 fs-12 fw-regular">- Jacob Ginnish | Google.com</p>
                                </div><!-- / card-body -->
                            </div><!-- / card -->
                        </div><!-- / column -->
    
                        <div class="col-lg-4">
                            <div class="card card-w-raised-img-top" data-aos="fade-up" data-aos-delay="100">
                                <div class="card-body text-center">
                                    <img class="card-raised-img-top mb-30 circle raised-sm w-50" src="{{asset('frontend')}}/assets/images/1.jpg" alt="">
                                    <p class="ratings mb-0"><i class="fas fa-star fs-12 va-middle"></i> <i class="fas fa-star va-middle"></i> <i class="fas fa-star-half-alt fs-20 va-middle"></i> <i class="fas fa-star va-middle"></i> <i class="fas fa-star fs-12 va-middle"></i></p>
                                    <p class="card-text mb-15">Etiam in gravida ligula. Phasellus a blandit lectus. Sed in libero ac ex pulvinar accumsan at at justo.</p>
                                    <p class="mb-0 fs-12 fw-regular">- Merida Swan | Airbnb.com</p>
                                </div><!-- / card-body -->
                            </div><!-- / card -->
                        </div><!-- / column -->
    
                        <div class="col-lg-4">
                            <div class="card card-w-raised-img-top" data-aos="fade-up" data-aos-delay="200">
                                <div class="card-body text-center">
                                    <img class="card-raised-img-top mb-30 circle raised-sm w-50" src="{{asset('frontend')}}/assets/images/3.jpg" alt="">
                                    <p class="ratings mb-0"><i class="fas fa-star fs-12 va-middle"></i> <i class="fas fa-star va-middle"></i> <i class="fas fa-star fs-20 va-middle"></i> <i class="fas fa-star va-middle"></i> <i class="fas fa-star fs-12 va-middle"></i></p>
                                    <p class="card-text mb-15">Etiam in gravida ligula. Phasellus a blandit lectus. Sed in libero ac ex pulvinar accumsan at at justo.</p>
                                    <p class="mb-0 fs-12 fw-regular">- Larry Lin | Facebook.com</p>
                                </div><!-- / card-body -->
                            </div><!-- / card -->
                        </div><!-- / column -->
                    </div><!-- / row -->
                </div><!-- / container -->
            </section> --}}
        </section><!--  SRCodeX shop -->
    </div><!--  SRCodeX main-container -->
@endsection
@push('js')
    <!-- Swiper Slider -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://kingstudio.ro/demos/glass-ui/assets/js/swiper-init-all.js"></script>
    <script>
        var swiper = new Swiper('#product-swiper', {
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            keyboard: true,
        });
    </script><!--  SRCodeX product-swiper -->
    <!--  SRCodeX Swiper Slider -->
@endpush