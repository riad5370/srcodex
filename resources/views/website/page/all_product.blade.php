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
                <div class="col-lg-8 tablet-lg-top-30 page-content">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-md-6 product-item" data-category-id="{{$product->category_id}}">
                                <div class="card" data-aos="fade-up">
                                    <div class="card-body p-y-30">
                                        <a href="{{route('details',$product->slug)}}">
                                            <img src="{{asset('images/products/preview/'.$product->preview)}}" alt=""
                                                class="mb-30">
                                        </a>
                                        <p class="card-title product-title fs-20"> <a href="{{route('details',$product->slug)}}"
                                                class="title-link primary-hover fs-20">{{$product->name}}</a> <span
                                                class="price-inline title-color">${{$product->price}}</span></p>
                                        <p><a href="{{route('details',$product->slug)}}" class="card-text mt-5 title-link">{{$product->category->name}}</a>
                                        </p>
                                        <p class="ratings mb-0"><i class="fas fa-star"></i> <i
                                                class="fas fa-star"></i>
                                            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                                                class="fas fa-star"></i></p>
                                        <div class="product-card-footer">
                                            <a href="{{route('index')}}#contact"
                                                class="btn btn-xs btn-primary btn-inline mt-10"><i
                                                    class="fas fa-shopping-cart mr-5"></i> <span>Order Now</span></a>
                                        </div><!--  SRCodeX product-card-footer -->
                                    </div><!--  SRCodeX card-body -->
                                </div><!--  SRCodeX card -->
                            </div><!--  SRCodeX column -->
                        @endforeach
                    </div><!--  SRCodeX row -->
                </div><!--  SRCodeX column -->

                <div class="col-lg-4  sidebar" data-aos="fade-up" data-aos-delay="500">
                    <div class="widget mb-30 mt-0">
                        <div class="input-group input-w-overlap-btn mb-0">
                            <input type="text" class="form-control rounded-sm" placeholder="Search...">
                            <span class="input-group-btn">
                                <button
                                    class="btn btn-sm btn-primary lh-0 overlapping-btn btn-icon btn-circle rounded-sm"
                                    type="button"><i class="fas fa-search"></i></button>
                            </span><!--  SRCodeX input-group-btn -->
                        </div><!--  SRCodeX input-group -->
                    </div><!--  SRCodeX widget -->

                    <div class="widget mb-30 text-white" data-aos="fade-up" data-aos-delay="500">
                        <h6 class="widget-title">Categories</h6>
                        @foreach ($categories as $category)
                        <div class="btn-group d-block m-y-20 ml-10 mr-20">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox{{$category->id}}" type="checkbox" data-category-id="{{$category->id}}" onclick="handleCheckboxClick(this)">
                                <label for="checkbox{{$category->id}}">{{$category->name}} ({{App\Models\Product::where('category_id', $category->id)->count()}})</label>
                            </div><!--  SRCodeX checkbox -->
                        </div><!--  SRCodeX btn-group -->
                        @endforeach
                    </div><!--  SRCodeX widget -->

                    <div class="text-center">
                        <button class="btn btn-primary btn-block m-y-10 filter-btn"><i
                                class="fas fa-sliders-h mr-5"></i> <span>Apply Filter</span></button>
                    </div>
                </div><!--  SRCodeX column -->
            </div><!--  SRCodeX row -->
        </div><!--  SRCodeX container -->
    </section><!--  SRCodeX shop -->
</div><!--  SRCodeX main-container -->



<script>
    function handleCheckboxClick(checkbox) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(function(cb) {
            if (cb !== checkbox) {
                cb.checked = false;
            }
        });
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Function to perform filtering
        function performFiltering() {
            let selectedCategoryIds = [];
            let searchKeyword = document.querySelector('.form-control').value.trim().toLowerCase();

            // Get selected category IDs
            document.querySelectorAll('input[type="checkbox"]').forEach(function(checkbox) {
                if (checkbox.checked) {
                    selectedCategoryIds.push(checkbox.getAttribute('data-category-id'));
                }
            });

            // Filter products by selected categories
            document.querySelectorAll('.product-item').forEach(function(item) {
                let categoryId = item.getAttribute('data-category-id');
                if (selectedCategoryIds.length === 0 || selectedCategoryIds.includes(categoryId)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });

            // Filter products by search keyword
            if (searchKeyword.length > 0) {
                document.querySelectorAll('.product-item').forEach(function(item) {
                    let productName = item.querySelector('.card-title').innerText.trim().toLowerCase();
                    let productCategory = item.querySelector('.card-text').innerText.trim().toLowerCase();
                    if (productName.includes(searchKeyword) || productCategory.includes(searchKeyword)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }
        }

        // Event listener for clicking search button icon
        document.querySelector('.btn-icon').addEventListener('click', function() {
            performFiltering(); // Trigger filtering process
        });

        // Event listener for clicking apply filter button
        document.querySelector('.filter-btn').addEventListener('click', function() {
            performFiltering(); // Trigger filtering process
        });
    });
</script>
@endsection
