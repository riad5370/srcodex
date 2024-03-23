@extends('website.include.master')
@push('css')
<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/swiper-bundle.min.css">
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
                            <h6 class="widget-title">Categories</h6>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="list-unstyled list-icon list-arrow list-primary list-has-link menu-list mb-0 tablet-lg-top">
                                        <li class="mb-10"><a href="#x">Design</a></li>
                                        <li class="mb-10"><a href="#x">Illustration</a></li>
                                        <li class="mb-10"><a href="#x">Branding</a></li>
                                        <li class="mb-0"><a href="#x">Web Design</a></li>
                                    </ul><!-- / list-unstyled -->
                                </div><!-- / column -->

                                <div class="col-6">
                                    <ul class="list-unstyled list-icon list-arrow list-primary list-has-link menu-list mb-0">
                                        <li class="mb-10"><a href="#x">Travel</a></li>
                                        <li class="mb-10"><a href="#x">Food</a></li>
                                        <li class="mb-10"><a href="#x">Health</a></li>
                                        <li class="mb-0"><a href="#x">Sport</a></li>
                                    </ul><!-- / list-icon -->
                                </div><!-- / column -->
                            </div><!-- / row -->
                        </div><!-- / widget -->

                        <div class="widget" data-aos="fade-up" data-aos-delay="700">
                            <h6 class="widget-title">Newsletter</h6>
                            <p class="mb-20">Quisque aliquet lorem nec dui posuere des et, scelerisque ultrices metus aliquam.</p>
                            <div class="input-group input-w-overlap-btn">
                                <input type="text" class="form-control pill" placeholder="&#xf0e0; Email" style="font-family:'Font Awesome 5 Free', sans-serif !important; font-weight: 400">
                                <span class="input-group-btn">
                                    <button class="btn btn-sm btn-primary lh-0 overlapping-btn big-btn pill" type="button"><i class="far fa-paper-plane mr-5"></i> Subscribe</button>
                                </span><!-- / input-group-btn -->
                            </div><!-- / input-group -->
                        </div><!-- / widget -->

                    </div><!-- / column -->
                    <div class="col-lg-8 tablet-lg-top-30 page-content">
                        <div class="blog-post mb-50">
                            <div class="page-content" data-aos="fade-up" data-aos-delay="300">
                                <img src="{{asset('frontend')}}/assets/images/basis.jpeg" alt="" class="raised-sm rounded-10">
                                <p class="fs-12 bt-1 bb-1 border-secondary p-15 m-y-30"><i class="far fa-user mr-5 fs-30"></i>  <span class="fs-30">Merida Swan </span>  <span class="pull-right"></span></p>
                                <p>Aenean scelerisque, eros vel gravida euismod, quam odio luctus leo, a mollis nisi erat quis est. Vivamus in turpis quis metus gravida porttitor ac cursus augue. Nunc finibus ac risus non imperdiet. Donec vitae erat ultrices, consequat sapien ut, sodales leo. Sed suscipit egestas tempus. Donec eleifend est odio.</p>
                                <p>Vivamus efficitur, elit non viverra egestas, ante arcu congue turpis, quis euismod libero lectus ac dolor. Sed semper magna semper egestas commodo. Curabitur sed nisi vel ligula efficitur condimentum. Phasellus nec nunc porta dolor condimentum dictum in in urna. Nullam purus quam, pretium eu euismod vitae, egestas quis ligula.</p>
                                <p class="mb-0">Quisque id odio id lectus condimentum sollicitudin id id felis. In nulla lectus, maximus in massa sit amet, varius ultricies tortor. Morbi ullamcorper molestie consectetur. Sed nisi nibh, rutrum.</p>
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
            <section class="lg bg-img">
                <div class="container">
                    <h1 class="p-y-40 p-x-0 promo-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        Our Team
                    </h1>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card card-w-raised-img-top" data-aos="fade-up">
                                <div class="card-body text-center">
                                    <img class="card-raised-img-top mb-30 circle raised-sm w-50" src="https://kingstudio.ro/demos/glass-ui/assets/images/mini10.jpg" alt="">
                                    <p class="ratings mb-0"><i class="fas fa-star fs-12 va-middle"></i> <i class="fas fa-star va-middle"></i> <i class="fas fa-star fs-20 va-middle"></i> <i class="fas fa-star va-middle"></i> <i class="fas fa-star fs-12 va-middle"></i></p>
                                    <p class="card-text mb-15">Etiam in gravida ligula. Phasellus a blandit lectus. Sed in libero ac ex pulvinar accumsan at at justo.</p>
                                    <p class="mb-0 fs-12 fw-regular">- Jacob Ginnish | Google.com</p>
                                </div><!-- / card-body -->
                            </div><!-- / card -->
                        </div><!-- / column -->
    
                        <div class="col-lg-4">
                            <div class="card card-w-raised-img-top" data-aos="fade-up" data-aos-delay="100">
                                <div class="card-body text-center">
                                    <img class="card-raised-img-top mb-30 circle raised-sm w-50" src="https://kingstudio.ro/demos/glass-ui/assets/images/mini4.jpg" alt="">
                                    <p class="ratings mb-0"><i class="fas fa-star fs-12 va-middle"></i> <i class="fas fa-star va-middle"></i> <i class="fas fa-star-half-alt fs-20 va-middle"></i> <i class="fas fa-star va-middle"></i> <i class="fas fa-star fs-12 va-middle"></i></p>
                                    <p class="card-text mb-15">Etiam in gravida ligula. Phasellus a blandit lectus. Sed in libero ac ex pulvinar accumsan at at justo.</p>
                                    <p class="mb-0 fs-12 fw-regular">- Merida Swan | Airbnb.com</p>
                                </div><!-- / card-body -->
                            </div><!-- / card -->
                        </div><!-- / column -->
    
                        <div class="col-lg-4">
                            <div class="card card-w-raised-img-top" data-aos="fade-up" data-aos-delay="200">
                                <div class="card-body text-center">
                                    <img class="card-raised-img-top mb-30 circle raised-sm w-50" src="https://kingstudio.ro/demos/glass-ui/assets/images/mini5.jpg" alt="">
                                    <p class="ratings mb-0"><i class="fas fa-star fs-12 va-middle"></i> <i class="fas fa-star va-middle"></i> <i class="fas fa-star fs-20 va-middle"></i> <i class="fas fa-star va-middle"></i> <i class="fas fa-star fs-12 va-middle"></i></p>
                                    <p class="card-text mb-15">Etiam in gravida ligula. Phasellus a blandit lectus. Sed in libero ac ex pulvinar accumsan at at justo.</p>
                                    <p class="mb-0 fs-12 fw-regular">- Larry Lin | Facebook.com</p>
                                </div><!-- / card-body -->
                            </div><!-- / card -->
                        </div><!-- / column -->
                    </div><!-- / row -->
                </div><!-- / container -->
            </section>
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