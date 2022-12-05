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
    <title>DIU TMS</title>
</head>

<body>
    <header></header>

    <!-- main section start -->
    <main>
        <!-- nab-menu -->
        @include('userpanel.navbar')

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
                                <p class="product-price">Number: {{ $driver->mobile_number }}</p>
                                <div class="product-info">
                                    <div class="star-rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star empty"></i>
                                        <span class="total-rating">4.5</span>
                                    </div>

                                </div>
                                <p>Wordwide shifting available
                                    <br> Buyers protection possible!
                                </p>
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
        <h3>DIU Transport Managment System</h3>
        <small>Copyright <span>&copy;</span> 2022 DIU TMS</small>
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
