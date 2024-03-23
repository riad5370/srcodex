@extends('website.include.master')
@section('body')
<header class="page-header bg-gradient-body">
    <div class="container">
        <h1 class="page-title mb-15" data-aos="fade-down">PROJECT'S</h1>
        <nav class="breadcrumb p-y-0 p-x-0" data-aos="fade-right">
            <a class="breadcrumb-item" href="index.html">Home</a>
            <span class="breadcrumb-item active">Project</span>
        </nav><!--  SRCodeX bradcrumb -->
    </div><!--  SRCodeX container -->
</header>
<div class="main-container p-0">
    <section id="start" class="lg page-section bg-gradient-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 tablet-lg-top-30 page-content">
                    <div class="row">
                        @if ($category_products->isEmpty())
                        <h1 class="text-center text-danger">Opps!!</h1>
                            <h1 class="text-center text-danger">No Products Found!</h1>
                        @else   
                        @foreach ( $category_products as  $category_product)
                        <div class="col-md-4">
                            <div class="card" data-aos="fade-up">
                                <div class="card-body p-y-30">
                                    <a href="{{route('details',$category_product->slug)}}">
                                        <img src="{{asset('images/products/preview/'.$category_product->preview)}}" alt=""
                                        class="mb-30 ">
                                    </a>
                                    <p class="card-title product-title fs-20"> <a href="{{route('details',$category_product->slug)}}"
                                            class="title-link primary-hover fs-20">{{$category_product->name}}</a> <span
                                            class="price-inline title-color">${{$category_product->price}}</span></p>
                                    <p><a href="{{route('details',$category_product->slug)}}" class="card-text mt-5 title-link">{{$category_product->category->name}}</a></p>
                                    <p class="ratings mb-0"><i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                                            class="fas fa-star"></i></p>
                                    <div class="product-card-footer">
                                        <a href="{{route('index')}}#contact" class="btn btn-xs btn-primary btn-inline mt-10"><i
                                                class="fas fa-shopping-cart mr-5"></i> <span>Order Now</span></a>
                                    </div><!--  SRCodeX product-card-footer -->
                                </div><!--  SRCodeX card-body -->
                            </div><!--  SRCodeX card -->
                        </div><!--  SRCodeX column -->
                        @endforeach
                        @endif
                    </div><!--  SRCodeX row -->
                </div><!--  SRCodeX column -->

                
            </div><!--  SRCodeX row -->
        </div><!--  SRCodeX container -->
    </section><!--  SRCodeX shop -->



</div><!--  SRCodeX main-container -->

@endsection