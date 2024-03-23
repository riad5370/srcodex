@extends('website.include.master')
@section('body')
<header class="pt-0 xl bg-img bg-fixed" style="background-image: url({{asset('frontend')}}/assets/images/blur-primary.jpg)">
    <div class="container">
        <div class="header-content xxl dark text-center ">
            <div class="boder-logo">
                <img src="{{asset('frontend')}}/assets/images/logo001.png" class=" logo-img lead mb-3 w-30 m-x-auto" data-aos="fade-down"
                    alt="">
                <p class="lead mb-3 w-3 m-x-auto" data-aos="fade-up"></p>
                <div class="btn-aos-wrapper d-inline-block" data-aos="fade-up" data-aos-delay="400">
                    <a href="#contact" class="btn btn-warning-light animate zoom">
                        <i class="fas fa-address-book fs-18 ml-5"></i>
                        <span style="font-size: 1.2rem !important;">CONTACT US</span></a>
                </div><!--  SRCodeX LTD Codes btn-aos-wrapper -->
            </div>
        </div><!--  SRCodeX LTD Codes header-content -->
    </div><!--  SRCodeX LTD Codes container -->
</header>
<section id="services" class="xl bg-img bg-fixed" style="background-image: url({{asset('frontend')}}/assets/images/ph-bg5.jpg)">
    <div class="container">
        <h1 class="p-y-40 p-x-30 promo-center" data-aos="fade-up" data-aos-delay="200">
            Our Services
        </h1>
        <div class="promo-box" data-aos="fade-up">
            <div class="row">
                <div class="col-md-6 col-xl-4 col-line col-line-bottom tablet-xl-no-border">
                    <div class="p-y-40 p-x-30 promo-center" data-aos="fade-up" data-aos-delay="200">
                        <i class="fas fa-laptop promo-icon text-primary d-block mb-25"></i>
                        <h6 class="box-title mb-15">Web Design</h6>
                        <p class="box-description">We have decade-long experience building best-in-class B2B and
                            B2C web apps that power modern businesses and workflows.</p>
                    </div><!--  SRCodeX LTD Codes promo-center -->
                </div><!--  SRCodeX LTD Codes column -->

                <div class="col-md-6 col-xl-4 col-line col-line-bottom tablet-xl-no-border">
                    <div class="p-y-40 p-x-30 promo-center" data-aos="fade-up" data-aos-delay="300">
                        <i class="fas fa-code promo-icon text-primary d-block mb-25"></i>
                        <h6 class="box-title mb-15">Web Development</h6>
                        <p class="box-description">Our custom software development services provide our clients
                            with the freedom to grow and scale</p>
                    </div><!--  SRCodeX LTD Codes promo-center -->
                </div><!--  SRCodeX LTD Codes column -->

                <div class="col-md-6 col-xl-4 col-line col-line-bottom br-0 tablet-xl-no-border">
                    <div class="p-y-40 p-x-30 promo-center" data-aos="fade-up" data-aos-delay="400">
                        <i class="fas fa-window-restore promo-icon text-primary d-block mb-25"></i>
                        <h6 class="box-title mb-15">Custom Software</h6>
                        <p class="box-description">Our customized software solutions are unique to individual
                            needs, budgets, timelines, and target groups.</p>
                    </div><!--  SRCodeX LTD Codes promo-center -->
                </div><!--  SRCodeX LTD Codes column -->

                <div class="col-md-6 col-xl-4 col-line tablet-xl-no-border">
                    <div class="p-y-40 p-x-30 promo-center" data-aos="fade-up" data-aos-delay="500">
                        <i class="fas fa-share-alt promo-icon text-primary d-block mb-25"></i>
                        <h6 class="box-title mb-15">Facebook Marketing</h6>
                        <p class="box-description">Multichannel marketing approaches focused on increasing
                            conversions, encouraging repeat traffic and heightening visibility.</p>
                    </div><!--  SRCodeX LTD Codes promo-center -->
                </div><!--  SRCodeX LTD Codes column -->

                <div class="col-md-6 col-xl-4 col-line tablet-xl-no-border">
                    <div class="p-y-40 p-x-30 promo-center" data-aos="fade-up" data-aos-delay="600">
                        <i class="fas fa-pencil-ruler promo-icon text-primary d-block mb-25"></i>
                        <h6 class="box-title mb-15">Graphic Design</h6>
                        <p class="box-description">Ecommerce business is growing very fast nowadays. High
                            quality LOGO & product image plays a vital role in the ecommerce business success.
                        </p>
                    </div><!--  SRCodeX LTD Codes promo-center -->
                </div><!--  SRCodeX LTD Codes column -->

                <div class="col-md-6 col-xl-4 col-line tablet-xl-no-border">
                    <div class="p-y-40 p-x-30 promo-center" data-aos="fade-up" data-aos-delay="700">
                        <i class="fas fa-shopping-cart mr-5 promo-icon text-primary d-block mb-25"></i>
                        <h6 class="box-title mb-15">E-Commerce Software</h6>
                        <p class="box-description">Scale the capabilities of your business solutions through
                            custom API development and integration services.</p>
                    </div><!--  SRCodeX LTD Codes promo-center -->
                </div><!--  SRCodeX LTD Codes column -->
            </div><!--  SRCodeX LTD Codes row -->
        </div><!--  SRCodeX LTD Codes promo-box -->
    </div><!--  SRCodeX LTD Codes container -->
</section><!--  SRCodeX LTD Codes services -->

<section id="project" class="xl bg-img bg-fixed" style="background-image: url({{asset('frontend')}}/assets/images/blur.jpg)">
    <div class="container">
        <h1 class="p-y-40 p-x-30 promo-center" data-aos="fade-up" data-aos-delay="200">
            Our Product
        </h1>
        <h3 class="section-title hidden text-center mb-60" data-aos="fade-down">Our Projects</h3>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-6 col-lg-4">
                    <div class="card" data-aos="fade-up">
                        <div class="project">
                            <figure class="project-item">
                                <div class="hovereffect">
                                    <img class="img-responsive" src="{{asset('images/products/preview/'.$product->preview)}}" alt="">
                                    <div class="overlay">
                                        <div class="hovereffect-title project-icons">
                                            <a href="{{ $product->link != null ? $product->link : route('details', $product->slug) }}" class="project-details"><i class="fas fa-link"></i></a>
                                        </div><!--  SRCodeX LTD Codes project-icons -->
                                    </div><!--  SRCodeX LTD Codes overlay -->
                                </div><!--  SRCodeX LTD Codes hovereffect -->
                            </figure><!--  SRCodeX LTD Codes project-item -->
                        </div><!--  SRCodeX LTD Codes project -->
                        <div class="card-body p-y-20 text-center">
                            <a href="{{route('details',$product->slug)}}" class="card-title title-link primary-hover fs-18">{{$product->name}}</a>
                        </div><!--  SRCodeX LTD Codes card-body -->
                    </div><!--  SRCodeX LTD Codes card -->
                </div><!--  SRCodeX LTD Codes column -->
            @endforeach
            <div style="text-align: center;" class="col-md-12 col-lg-4" data-aos="fade-up"
                data-aos-delay="1000">
                <a href="{{route('all.product')}}" class="btn btn-gradient-warning"><i
                        class="fas fa-briefcase fs-20 ml-5"></i> <span
                        style="font-size: 1.2rem !important;">MORE PROJECT</span></a>
            </div>
            <div class="col-md-12 col-lg-4">
            </div>

        </div><!--  SRCodeX LTD Codes row -->
    </div><!--  SRCodeX LTD Codes container -->
</section><!--  SRCodeX LTD Codes project -->




<section id="pricing" class="xl bg-img bg-fixed" style="background-image: url({{asset('frontend')}}/assets/images/ph-bg6.jpg)">
    <div class="container">
        <h1 class="p-y-40 p-x-30 promo-center font-info-1" data-aos="fade-up" data-aos-delay="200">
            Our E-commerce Package
        </h1>
        <div class="row v-center stacked">
            <div class="col-md-4">
                <div class="card text-center" data-aos="fade-up">
                    <div class="card-body">
                        <h6 class="fw-bold title-color fs-20 mb-30">LITE</h6>
                        <div class="price-bg p-20 bg-glass-50 w-50 m-x-auto mb-40 rounded-sm raised-sm">
                            <span class="fs-20 text-primary fw-bold">$190</span>
                        </div><!--  SRCodeX LTD Codes price-bg -->
                        <ul class="list-group mb-30">
                            <li class="list-group-item b-0 pl-0 bg-transparent"><i
                                    class="fas fa-check mr-10 text-success"></i><span>One Year Free
                                    Support</span></li>
                            <li class="list-group-item b-0 pl-0 bg-transparent"><i
                                    class="fas fa-check mr-10 text-success"></i><span>Single Vendor
                                    E-commerce</span></li>
                            <li class="list-group-item b-0 pl-0 bg-transparent"><i
                                    class="fas fa-times mr-10 text-danger"></i><span>Multi Vendor
                                    E-commerce</span></li>
                            <li class="list-group-item b-0 pl-0 bg-transparent"><i
                                    class="fas fa-times mr-10 text-danger"></i><span>E-commerce
                                    Maintenance</span></li>
                        </ul><!--  SRCodeX LTD Codes list-group -->
                        <a href="#x" class="btn btn-warning"><i class="fas fa-shopping-cart mr-5"></i> <span>Buy
                                Now</span></a>
                    </div><!--  SRCodeX LTD Codes card-body -->
                </div><!--  SRCodeX LTD Codes card -->
            </div><!--  SRCodeX LTD Codes column -->

            <div class="col-md-4">
                <div class="card text-center stacked-card featured-pt bg-glass-frosted" data-aos="fade-down">
                    <div class="card-body">
                        <h6 class="fw-bold title-color fs-20 mb-30">PRO</h6>
                        <div class="price-bg p-20 bg-glass-50 w-50 m-x-auto mb-40 rounded-sm raised-sm">
                            <span class="fs-20 text-primary fw-bold">$499</span>
                        </div><!--  SRCodeX LTD Codes price-bg -->
                        <ul class="list-group mb-30">
                            <li class="list-group-item b-0 pl-0 bg-transparent"><i
                                    class="fas fa-check mr-10 text-success"></i><span>One Year Free
                                    Support</span></li>
                            <li class="list-group-item b-0 pl-0 bg-transparent"><i
                                    class="fas fa-check mr-10 text-success"></i><span>Single Vendor
                                    E-commerce</span></li>
                            <li class="list-group-item b-0 pl-0 bg-transparent"><i
                                    class="fas fa-check mr-10 text-success"></i><span>Multi Vendor
                                    E-commerce</span></li>
                            <li class="list-group-item b-0 pl-0 bg-transparent"><i
                                    class="fas fa-times mr-10 text-danger"></i><span>E-commerce
                                    Maintenance</span></li>
                        </ul><!--  SRCodeX LTD Codes list-group -->
                        <a href="#x" class="btn btn-warning"><i class="fas fa-shopping-cart mr-5"></i> <span>Buy
                                Now</span></a>
                    </div><!--  SRCodeX LTD Codes card-body -->
                </div><!--  SRCodeX LTD Codes card -->
            </div><!--  SRCodeX LTD Codes column -->

            <div class="col-md-4">
                <div class="card text-center" data-aos="fade-up">
                    <div class="card-body">
                        <h6 class="fw-bold title-color fs-20 mb-30">PREMIUM</h6>
                        <div class="price-bg p-20 bg-glass-50 w-50 m-x-auto mb-40 rounded-sm raised-sm">
                            <span class="fs-20 text-primary fw-bold">$999</span>
                        </div><!--  SRCodeX LTD Codes price-bg -->
                        <ul class="list-group mb-30">
                            <li class="list-group-item b-0 pl-0 bg-transparent"><i
                                    class="fas fa-check mr-10 text-success"></i><span>One Year Free
                                    Support</span></li>
                            <li class="list-group-item b-0 pl-0 bg-transparent"><i
                                    class="fas fa-check mr-10 text-success"></i><span>Single Vendor
                                    E-commerce</span></li>
                            <li class="list-group-item b-0 pl-0 bg-transparent"><i
                                    class="fas fa-check mr-10 text-success"></i><span>Multi Vendor
                                    E-commerce</span></li>
                            <li class="list-group-item b-0 pl-0 bg-transparent"><i
                                    class="fas fa-check mr-10 text-success"></i><span>E-commerce
                                    Maintenance</span></li>
                        </ul><!--  SRCodeX LTD Codes list-group -->
                        <a href="#x" class="btn btn-warning"><i class="fas fa-shopping-cart mr-5"></i> <span>Buy
                                Now</span></a>
                    </div><!--  SRCodeX LTD Codes card-body -->
                </div><!--  SRCodeX LTD Codes card -->
            </div><!--  SRCodeX LTD Codes column -->
        </div><!--  SRCodeX LTD Codes row -->
    </div><!--  SRCodeX LTD Codes container -->
</section><!--  SRCodeX LTD Codes pricing -->

<section id="contact" class="xl bg-img bg-fixed" style="background-image: url({{asset('frontend')}}/assets/images/blur-light.jpg)">
    <div class="container relative">
        <div class="row v-center">
            <div class="col-lg-6 tablet-lg-top-45">
                <div class="promo-box bg-glass p-40" data-aos="fade-up">
                    <form class="needs-validation" id="form-validation3" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact-name4" name="inputName4"
                                        placeholder="&#xf2bd; Full Name" required=""
                                        style="font-family:'Font Awesome 5 Free', sans-serif !important; font-weight: 400">
                                </div><!--  SRCodeX LTD Codes form-group -->
                            </div><!--  SRCodeX LTD Codes column -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="contact-email4"
                                        name="inputEmail4" placeholder="&#xf0e0; Email" required=""
                                        style="font-family:'Font Awesome 5 Free', sans-serif !important; font-weight: 400">
                                </div><!--  SRCodeX LTD Codes form-group -->
                            </div><!--  SRCodeX LTD Codes column -->

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact-subject4"
                                        name="inputSubject4" placeholder="&#xf059; Subject"
                                        style="font-family:'Font Awesome 5 Free', sans-serif !important; font-weight: 400">
                                </div><!--  SRCodeX LTD Codes form-group -->
                            </div><!--  SRCodeX LTD Codes column -->
                        </div><!--  SRCodeX LTD Codes row -->
                        <div class="form-group">
                            <textarea id="contact-message4" class="form-control" name="inputMessage4" rows="5"
                                placeholder="&#xf4ad; Message" required=""
                                style="font-family:'Font Awesome 5 Free', sans-serif !important; font-weight: 400; min-height: 115px; max-height: 150px;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning btn-submit">Send Message</button>
                    </form><!--  SRCodeX LTD Codes form-group -->
                </div><!--  SRCodeX LTD Codes promo-box -->
            </div><!--  SRCodeX LTD Codes column -->

            <div class="col-lg-6">
                <div class="p-x-30">
                    <div class="w-80 mb-40">
                        <h2 class="mb-15" data-aos="fade-down" data-aos-delay="100">Get in Touch</h2>
                        <p data-aos="fade-in" data-aos-delay="200">No matter whether you need help with a
                            website or an online store, we will be more than happy to lend you a hand.</p>
                    </div><!--  SRCodeX LTD Codes w-80 -->



                    <div class="promo-box p-y-10 p-x-0 promo-left bg-transparent mb-15 no-shadow no-blur relative"
                        data-aos="fade-up" data-aos-delay="300">
                        <div class="promo-container-big-sm">
                            <div class="promo-big icon-sm promo-icon-bg circle b-0 bg-primary raised-sm mb-25">
                                <i class="fas fa-envelope promo-icon text-white"></i>
                            </div><!--  SRCodeX LTD Codes promo-icon-bg -->
                            <h6 class="box-title mb-15">Contact Info</h6>
                            <p class="box-description mb-5">
                                <span class="title-color">Phone:</span> <a href="#x" class="text-link">+880
                                    1402-877336</a>
                            </p>
                            <p class="box-description mb-5">
                                <span class="title-color">Phone:</span> <a href="#x" class="text-link">+880
                                    1334-330440</a>
                            </p>
                            <p class="box-description">
                                <span class="title-color">Email:</span> <a href="#x"
                                    class="text-link">contact@srcodex.com</a>
                            </p>
                        </div><!--  SRCodeX LTD Codes promo-container -->
                    </div><!--  SRCodeX LTD Codes promo-box -->

                    <div class="promo-box p-y-10 p-x-0 promo-left bg-transparent mb-0 pb-0 no-shadow no-blur relative"
                        data-aos="fade-up" data-aos-delay="400">
                        <div class="promo-container-big-sm">
                            <div class="promo-big icon-sm promo-icon-bg circle b-0 bg-primary raised-sm mb-25">
                                <i class="fas fa-map-marker-alt promo-icon text-white"></i>
                            </div><!--  SRCodeX LTD Codes promo-icon-bg -->
                            <h6 class="box-title mb-15">Address</h6>
                            <p class="box-description mb-5">
                                <span class="title-color">Office 1:</span> KA-191, Kuril, Post- Khilkhet, <br>
                                Police Station -Vatara Dhaka, 1229
                            </p>
                        </div><!--  SRCodeX LTD Codes promo-container -->
                    </div><!--  SRCodeX LTD Codes promo-box -->
                </div><!--  SRCodeX LTD Codes p-x-30 -->
            </div><!--  SRCodeX LTD Codes column -->
        </div><!--  SRCodeX LTD Codes row -->
    </div><!--  SRCodeX LTD Codes container -->
</section><!--  SRCodeX LTD Codes contact -->


@endsection