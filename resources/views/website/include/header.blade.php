<div class="container relative">
    <nav class="navbar navbar-expand-lg navbar-light main-nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('frontend')}}/assets/images/logo.png" alt=""></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbar-toggle" aria-controls="navbar-toggle" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
                <span class="sr-only">Toggle navigation</span>
            </button><!--  SRCodeX LTD Codes navbar-toggler -->

            <div class="collapse navbar-collapse" id="navbar-toggle">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link " href="{{url('/')}}"> <i class="fas fa-home mr-5 fs-18 va-middle"></i> <span
                                class="va-middle" style="font-size: 1.2rem !important;">HOME</span></a>
                    </li><!--  SRCodeX LTD Codes Home End -->

                    <li class="nav-item dropdown">
                        <a class="nav-link " href="{{route('index')}}#services"> <i class="fas fa-stream mr-5 fs-18 va-middle"></i>
                            <span class="va-middle" style="font-size: 1.2rem !important;">SERVICES</span></a>
                    </li><!--  SRCodeX LTD Codes SERVICES End -->

                    <li class="nav-item dropdown">
                        <a class="nav-link " href="{{route('index')}}#project"> <i class="fas fa-tag mr-5 fs-18 va-middle"></i>
                            <span class="va-middle" style="font-size: 1.2rem !important;">PROJECT</span></a>
                    </li><!--  SRCodeX LTD Codes SERVICES End -->



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#x" id="dropdown-templates"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="fas fa-briefcase mr-5 fs-18 va-middle"></i> <span
                                style="font-size: 1.2rem !important;" class="va-middle">OUR WORK</span></a>
                        <div class="dropdown-menu mega-menu three-columns drop-to-center"
                            aria-labelledby="dropdown-templates">
                            <div class="row">
                                @php
                                   $categories = App\Models\Category::all();
                                @endphp
                                @foreach ($categories  as $category)
                                <div class="col-lg-4 sub-menu">
                                    <a class="dropdown-item" href="{{ route('category.product',$category->id) }}"><i class="{{$category->icon}} mr-5"></i> <span>{{$category->name}}</span></a>
                                </div>
                                @endforeach
                            </div><!--  SRCodeX LTD Codes row -->
                        </div><!--  SRCodeX LTD Codes dropdown-menu -->
                    </li><!--  SRCodeX LTD Codes dropdown -->
                </ul><!--  SRCodeX LTD Codes navbar-nav -->

                <ul class="navbar-button p-0 m-0 ml-30">
                    <li class="nav-item">
                        <a href="{{route('aboutus')}}" class="btn btn-gradient-warning"><i
                                class="fas fa-user-circle fs-18 ml-5"></i> <span
                                style="font-size: 1.2rem !important;">ABOUT US</span></a>
                    </li>
                </ul>
            </div><!--  SRCodeX LTD Codes navbar-collapse -->
        </div><!--  SRCodeX LTD Codes container-fluid -->
    </nav><!--  SRCodeX LTD Codes navbar -->
</div><!--  SRCodeX LTD Codes container -->

