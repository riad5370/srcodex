@extends('website.include.master')
@section('body')
<header class="page-header bg-gradient-body">
    <div class="container">
        <h1 class="page-title mb-15" data-aos="fade-down">PROJECT DETAIL</h1>
        <nav class="breadcrumb p-y-0 p-x-0" data-aos="fade-right">
            <a class="breadcrumb-item" href="index.html">Home</a>
            <a class="breadcrumb-item" href="index.html">Project</a>
            <span class="breadcrumb-item active">Project-Detals</span>
        </nav><!--  SRCodeX bradcrumb -->
    </div><!--  SRCodeX container -->
</header>

<div class="main-container p-0">
    <section id="start" class="lg page-section bg-gradient-body p-y-100 ">
        <div class="container">
            <div class="row v-center">
                <div class="col-lg-6 tablet-lg-top-30 page-content" data-aos="fade-up" data-aos-delay="100">
                    <div id="product-swiper" class="swiper-container rounded">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="{{asset('images/products/preview/'.$product_info->preview)}}" alt=""></div>
                            <div class="swiper-slide"><img src="assets/images/7.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="assets/images/8.jpg" alt=""></div>
                        </div><!-- / swiper-wrapper -->
                        <!-- Add Arrows -->
                        <div class="swiper-pagination"></div>
                    </div><!-- / product-swiper -->
                </div><!-- / column -->

                <div class="col-lg-6 sidebar" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="mb-5">{{$product_info->name}}</h3>
                    <p class="fs-20 mb-15">${{$product_info->price}}</p>
                    <p class="ratings mb-0 m-y-10">
                        <i class="fas fa-star fs-16"></i>
                        <i class="fas fa-star fs-16"></i>
                        <i class="fas fa-star fs-16"></i>
                        <i class="fas fa-star fs-16"></i>
                        <i class="fas fa-star fs-16"></i>
                        <span class="ml-5">(2 Reviews)</span>
                    </p>
                    <p class="fs-12 mb-10">Category: <span class="fw-bold">{{$product_info->category->name}}</span></p>
                    
                    <div class="form-cart">
                        <div class="input-group mb-0">
                                <a href="{{route('index')}}#contact">
                                    <button class="btn btn-primary rounded-sm" type="button"><i class="fas fa-shopping-cart mr-5"></i> <span>Ordar Now</span></button>
                                </a>
                        </div><!-- / input-group -->
                    </div><!-- / form-cart -->
                    <p class="lead m-y-40">{!!$product_info->short_desp!!}</p>
                </div><!-- / column -->
            </div><!-- / row -->

            <div class="card mt-100" data-aos="fade-up" data-aos-delay="300">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#description" role="tab"><i class="fas fa-edit mr-5"></i> Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#info" role="tab"><i class="fas fa-tag mr-5"></i> Product Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#reviews" role="tab"><i class="fas fa-star mr-5"></i> Reviews (2)</a>
                        </li>
                    </ul><!-- / nav tabs -->
                    <div class="tab-content " >
                        <div class="tab-pane fade show active mt-40 p-x-15" id="description" role="tabpanel">
                        <p class="lead" style="color: #6f11f5 !important;">{!!$product_info->long_desp!!}</p>
                    </div>
                    <div class="tab-pane fade mt-40" id="info" role="tabpanel">
                        <div class="table-overflow">
                            <table class="table table-xl border-transparent mb-0">
                                <tbody>
                                    <tr class="border-transparent">
                                        <td>
                                            <h4 class="fs-14 mb-0">Color:</h4>
                                        </td>
                                        <td>Black, Blue, White</td>
                                        <td>
                                            <h4 class="fs-14 mb-0">Sizes:</h4>
                                        </td>
                                        <td>S, M, L, XL</td>
                                        <td><h4 class="fs-14 mb-0">Material:</h4></td>
                                        <td>100% Cotton</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- / table-overflow -->
                    </div>
                    <div class="tab-pane fade mt-40" id="reviews" role="tabpanel">
                        <div class="table-overflow">
                            <table class="table table-xl mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="list-media img-lg">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img class="circle" src="https://kingstudio.ro/demos/glass-ui/{{asset('frontend')}}/assets/images/mini1.jpg" alt="">
                                                    </div><!-- / media-img -->
                                                    <div class="info">
                                                        <span class="title">Mark</span>
                                                        <span class="sub-title mb-5">@mdo</span>
                                                        <span class="sub-title opc-5">Mar 31, 2021</span>
                                                    </div><!-- / info -->
                                                </div><!-- / list-item -->
                                            </div><!-- / list-media -->
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Awesome Hoodie! I love it.</td>
                                        <td>
                                            <p class="ratings mb-0">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr class="border-transparent">
                                        <td>
                                            <div class="list-media img-lg">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img class="circle" src="https://kingstudio.ro/demos/glass-ui/{{asset('frontend')}}/assets/images/mini3.jpg" alt="">
                                                    </div><!-- / media-img -->
                                                    <div class="info">
                                                        <span class="title">John</span>
                                                        <span class="sub-title mb-5">@jhn</span>
                                                        <span class="sub-title opc-5">Mar 30, 2021</span>
                                                    </div><!-- / info -->
                                                </div><!-- / list-item -->
                                            </div><!-- / list-media -->
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Great Product, highly recommend it!</td>
                                        <td>
                                            <p class="ratings mb-0">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- / table-overflow -->
                    </div><!-- / tab-pane -->
                    </div><!-- / tab-content -->
                </div><!-- / card-body -->
            </div><!-- / card -->
        </div><!-- / container -->
    </section><!--  SRCodeX shop -->



</div><!--  SRCodeX main-container -->

@endsection