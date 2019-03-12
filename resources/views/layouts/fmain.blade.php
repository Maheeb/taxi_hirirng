<!DOCTYPE html>
<html lang="en">
<head>
    <title>Taxi Drive Transportation Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Taxi Drive Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- css files -->
    <link href="{{asset('frontend/css/bootstrap.css')}}" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="{{asset('frontend/css/style.css')}}" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet"><!-- fontawesome css -->
    <!-- //css files -->

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Rosario:400,400i,700,700i" rel="stylesheet">
    <!-- //google fonts -->

</head>
<body>
<!-- //header -->
<header>
    <div class="container">
        <!-- nav -->
        <nav class="py-sm-4 py-3 d-lg-flex">
            <div id="logo">
                <h1> <a href="index.html"><span class="fa fa-car"></span> Taxi Drive</a></h1>
            </div>
            <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
            <input type="checkbox" id="drop" />
            <ul class="menu mt-md-2 ml-auto">
                <li class="mr-lg-4 mr-2 active"><a href="index.html">Home</a></li>
                <li class="mr-lg-4 mr-2"><a href="#about">About Us</a></li>
                <li class="mr-lg-4 mr-2"><a href="#services">Services</a></li>
                <li class="mr-lg-4 mr-2"><a href="#tarrifs">Tariffs</a></li>
                <li class="mr-lg-4 mr-2"><a href="#stats">Stats</a></li>
                <li class="mr-lg-4 mr-2"><a href="#app">App Download</a></li>
            </ul>
        </nav>
        <!-- //nav -->
    </div>
</header>
<!-- //header -->

<!-- banner -->
<section class="banner w3pvt-banner" id="home">
    <div class="container">
        <div class="banner-text">
            <div class="slider-info">
                <div class="w3pvt-logo">
                    <h2>Book Your Cab Now</h2>
                    <h3>+1(12) 366 411 4999</h3>
                    <p class="mt-3"> Always Available, Best Cabs, Safe Journey.</p>
                    <img src="{{asset('frontend/images/cab.png')}}" alt="" class="img-fluid mt-md-5"/>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //banner -->

@yield('content')

<!-- footer -->
<footer class="py-5">
    <div class="container">
        <div class="row footer_grids pt-lg-3">
            <div class="col-lg-5 footer_left">
                <h3 class="mb-sm-4 mb-3">About Our Taxi Company</h3>
                <p>Nulla felis tortor, rutrum eget feugiat enon, blandit tellus. Nam pharetra ipsum ligula volutpat, a finibus.
                    Fuscet sed malesuada sollicitudin venenatis. Aenean aculis faucibus iaculis. Donec finibus est sit amet mi ultrices,
                    id fringilla mauris efficitur. In eu enim quis nulla iaculis tempus.</p>
            </div>
            <div class="col-lg-3 col-md-6 mt-lg-0 mt-sm-5 mt-4 footer_right">
                <h3 class="mb-sm-4 mb-3">Contact Us</h3>
                <p> <span class="fa mr-1 fa-map-marker"></span> No.27 - 5549436 Street Floor, Newyork City, USA </p>
                <p> <span class="fa mr-1 fa-envelope"></span> <a href="mailto:info@example.com">info@example.com</a> </p>
                <p> <span class="fa mr-1 fa-phone"></span> +01(234) 567 8900 </p>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-sm-5 mt-4 footer_middle">
                <h3 class="mb-sm-4 mb-3">Download Apps</h3>
                <p>Nulla felis tortor, rutrum eget feugiat enon, blandit tellus. Nam pharetra ipsum ligula volutpat, a finibus sit amet mi ultrices.</p>
                <ul class="mt-3">
                    <li class="mr-3"><a href="#">Android Users <span class="fa ml-1 fa-android"></span></a></li>
                    <li><a href="#">IOS Users <span class="fa ml-1 fa-apple"></span></a></li>
                </ul>
            </div>
        </div>
        <!-- move top -->
        <div class="move-to-top text-center mt-3">
            <a href="#home" class="move-top"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
        </div>
        <!-- //move top -->
        <div class="copyright text-center mt-3">
            <p>© 2019 Taxi Drive. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
        </div>
    </div>
</footer>
<!-- //footer -->

</body>
</html>