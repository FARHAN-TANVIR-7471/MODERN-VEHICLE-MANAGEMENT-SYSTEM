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
        <section class="container navbar">
            <div class="menu-logo">
                <h2> <a href="{{ route('home') }}" style="text-decoration: none; color:black">MVMS</a> </h2>
            </div>

            <div class="menu-item">
                <ul>
                    {{-- <li class="mobile-hidden"><a href="#home">Home</a></li>
                    <li class="mobile-hidden"><a href="#news">News</a></li>--}}
                    <li class="mobile-hidden"><a href="{{ route('driver.list') }}">Driver</a></li> 
                    <li class="mobile-hidden"><a href="{{ route('schodule.list') }}">Schedule</a></li> 
                    @if (Auth::user())
                    <li class="mobile-hidden"><a href="{{ route('admin.dashboard') }}">Deshbord</a></li> 
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @else
                    <li><a href="{{ route('login') }}">LOGIN</a></li>
                        
                    @endif
                    
                    {{-- <li class="mobile-hidden"><i class="fas fa-search"></i></li>
                    <li><i class="fas fa-cart-arrow-down"></i></li> --}}
                </ul>
            </div>
        </section>

        <!-- Product  section -->
        <section class="container">
            <div class="products">
                <h1>Driver</h1>
                <div class="product">
                    @foreach ($drivers as $driver)
                        <div class="product-item">
                            <div class="product-image">
                                <img src="{{ $driver->driver_photo }}" alt="" width="256" height="256">
                            </div>
                            <div class="product-details">
                                <h3 class="product-title">{{ $driver->name }}</h3>
                                {{-- <p class="product-price">Start: {{ $transportschedule->start_time }}</p>
                                <p class="product-price">End: {{ $transportschedule->end_time }}</p> --}}
                                {{-- <div class="product-info">
                                    <div class="star-rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star empty"></i>
                                        <span class="total-rating">4.5</span>
                                    </div>

                                </div> --}}
                                {{-- <p>Wordwide shifting available
                                    <br> Buyers protection possible!
                                </p> --}}
                            </div>
                        </div>
                    @endforeach

                </div>
                {{-- <div class="see-more">
                    <a href="#">See More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                </div> --}}
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
