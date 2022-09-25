<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/79625afb81.js" crossorigin="anonymous"></script>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset('fontend/style.css') }}">
    {{-- <link rel="stylesheet" href="fontend/style.css"> --}}
    <title>Transport</title>
</head>

<body>
    <header></header>

    <!-- main section start -->
    <main>
        <!-- nab-menu -->
        @include('userpanel.navbar')

        <!-- banner section start-->
        <section class="container">
            <div class="banners">
                <div class="banner left">
                    <div class="title-banner">
                        <h1 class="text-font">Start your Journey as <br> Influencer</h1>
                    </div>

                    <p>I have been starting my career as a facebook "Influencer". I want to develop myself as a creative
                        engineer and I want to increase my skill day by day as a creative engineer.</p>

                    <a href="{{ route('user.booking') }}" type="button" class="button-sty">Booking Now <span><i
                                class="fas fa-long-arrow-alt-right"></i></span></a>
                </div>

                <div class="banner right">
                    <img class="banner-img" src="{{ asset('kfwsklyu.png') }}" alt="profile photo">
                </div>
            </div>
        </section>
        <!-- banner section end -->

        <!-- companies logo start -->
        <section class="container">
            <div class="news-latter" style="margin-top: 58px;">
                <h2 class="news-latter-title text-color">Your Transport Service</h2>
            </div>
            <div class="companies" style="margin-top: -20px ">
                <div class="companie">
                    <img src="{{ asset('image/bus.jpeg') }}" alt="" class="bus">
                    <h3 class="text-color" style="margin-top: 23px;">Bus Service</h3>
                </div>
                <div class="companie">
                    <img src="{{ asset('image/truck.webp') }}" alt="" class="truck">
                    <h3 class="text-color" style="margin-top: 38px;">Truck Service</h3>
                </div>
                <div class="companie">
                    <img src="{{ asset('image/car.jpeg') }}" alt="" class="car">
                    <h3 class="text-color">Card Service</h3>
                </div>
                {{-- <div class="companie"><img src="logos/Ebay.svg" alt="" class="logo"></img></div>
                <div class="companie"><img src="logos/Rakuten.svg" alt="" class="logo"></img></div>
                <div class="companie"><img src="logos/Walmart.svg" alt="" class="logo"></img></div> --}}
            </div>
        </section>
        <!-- companies logo end -->

        <!-- Product  section -->
        <section class="container">
            <div class="products">
                <h1 class="text-color">About TMS</h1>
                <div class="companies">
                    <div class="companie">
                        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=new bodel collage&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://mcpenation.com/">MCPE Nation</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div>
                    </div>
                    <div class="companie" style="padding: 20px">
                        <p>Transport Corporation is one of the leading Bus, Truck and Car Transportation Service Provider in India. At Jamuna Transport Corporation, our goal is to provide the best and secure car transportation service to our clients. Our branches are located all over India comprising major cities, mostly adjacent to Car Manufacturing Units. We simply transport your car to your exact destination by our own car carrier with extra care.</p>
                    </div>
                </div>

                {{-- <div class="see-more">
                    <a href="#">See More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                </div> --}}
            </div>


        </section>

        <section class="container">
            <div class="news-latter">
                <h2 class="news-latter-title text-color">Complain</h2>
            </div>
            <div class="news-latter-form">
                <form action="{{ route('complaneinsert') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="lname">Purpose: </label>
                    <input type="text" id="perpose" name="perpose" placeholder="Perpose">
                    <label for="lname">Transport Name:</label>
                    <input type="text" id="transport_name" name="transport_name" placeholder="Transport Name">
                    <label for="lname">Complane Massage:</label>
                    <input type="text" id="complane_message" name="complane_message"
                        placeholder="Complane Message">
                    {{-- <label for="lname">Last Name</label> --}}
                    <button class="block">SUBMIT</button>

                </form>
                <div>
                    <p class="instruction">By signing up you agree to receive communications via email. For more
                        information please refer to our Privacy Policy.</p>
                </div>

            </div>
        </section>
    </main>
    <!-- main section end -->

    <!-- footer section -->
    <footer class="text-font">
        <h3>Influencer products</h3>
        <small>Copyright <span>&copy;</span> 2020 influencer products</small>
        <br>
        <small>All rights reserved</small>
        <div class="social-media">
            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
            <a href="javascript:void(0)"><i class="fab fa-facebook"></i></a>
            <a href="javascript:void(0)"><i class="fab fa-telegram"></i></a>
            <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
        </div>
    </footer>
</body>

</html>
