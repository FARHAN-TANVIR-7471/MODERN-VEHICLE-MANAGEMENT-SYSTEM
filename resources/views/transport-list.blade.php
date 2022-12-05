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
                <h1>Transports</h1>
                <div class="product">
                    @foreach ($transports as $transport)
                        <div class="product-item">
                            <div class="product-image">
                                @if ($transport->type == "bus")
                                <img src="{{ asset('image/bus.jpeg') }}" alt="" width="256" height="256">
                                @elseif ($transport->type == "truck")
                                <img src="{{ asset('image/truck.webp') }}" alt="" width="256" height="256>
                                @elseif ($transport->type == "car")
                                <img src="{{ asset('image/car.jpeg') }}" alt="" width="256" height="256>
                                @else
                                <img src="{{ asset('image/bus.jpeg') }}" alt="" width="256" height="256>
                                @endif
                            </div>
                            <div class="product-details">
                                <h3 class="product-title">{{ $transport->name }}</h3>
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
