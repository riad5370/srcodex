
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags for defining document settings -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SRCodeX - Description">
    <meta name="author" content="SRCodeX LTD">

    <!-- Favicon for the website -->
    <link rel="icon" href="{{asset('frontend')}}/assets/images/logo1.png">

    <!-- Title of the webpage -->
    <title>SRCodeX LTD</title>
    <!-- Bootstrap 5 Core CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.min.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/aos.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/my.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        type="text/css">
    <!-- My CSS  -->
    

    @stack('css')
</head>

<body>

    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    @include('website.include.header')

    <div class="main-container p-0">
       @yield('body')
    </div><!--  SRCodeX LTD Codes main-container -->

    @include('website.include.footer')

    <!-- Core JavaScript -->
    <script src="{{asset('frontend')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/theme.js"></script>
    <!--  SRCodeX LTD Codes Core JavaScript -->

    <!-- aos -->
    <script src="{{asset('frontend')}}/assets/js/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
        })
    </script>
    <!--  SRCodeX LTD Codes aos -->

    <!-- bg-fixed -->
    <script src="{{asset('frontend')}}/assets/js/bg-fixed.min.js"></script>
    <!--  SRCodeX LTD Codes bg-fixed -->

    <!--=============== EMAIL JS ===============-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>


    @stack('js')

</body>

</html>