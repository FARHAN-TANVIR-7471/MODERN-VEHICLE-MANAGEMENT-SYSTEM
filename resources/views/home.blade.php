<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/79625afb81.js" crossorigin="anonymous"></script>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{URL::asset('fontend/style.css')}}">
    {{-- <link rel="stylesheet" href="fontend/style.css"> --}}
    <title>Assinment 2</title>
</head>
<body>
    <header></header>

    <!-- main section start -->
    <main>
        <!-- nab-menu -->
        <section class="container navbar">
            <div class="menu-logo">
                <h2>Influencer products</h2>
            </div>

            <div class="menu-item">
                <ul>
                    <li class="mobile-hidden"><a href="#home">Home</a></li>
                    <li class="mobile-hidden"><a href="#news">News</a></li>
                    <li class="mobile-hidden"><a href="#about">About</a></li>
                    <li class="mobile-hidden"><a href="{{ route('login') }}">LOGIN</a></li>
                    {{-- <li class="mobile-hidden"><i class="fas fa-search"></i></li>
                    <li><i class="fas fa-cart-arrow-down"></i></li> --}}
                </ul>
            </div>
        </section>
       
        <!-- banner section start-->
        <section class="container">
            <div class="banners">
                <div class="banner left">
                    <div class="title-banner">
                        <h1 class="text-font">Start your Journey as  <br> Influencer</h1>
                    </div>
                    
                    <p>I have been starting my career as a facebook "Influencer". I want to develop myself as a creative engineer and I want to increase my skill day by day as a creative engineer.</p>
        
                    <a href="https://www.linkedin.com/in/farhan-19720/" type="button" class="button-sty" target="_blank">Explore Now <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                </div>

                <div class="banner right">
                    <img class="banner-img" src="{{asset("image/kfwsklyu.png")}}" alt="profile photo">
                </div>
            </div>
        </section>
        <!-- banner section end -->

        <!-- companies logo start -->
        <section class="container">
            <div class="companies">
                <div class="companie"><img src="logos/Alibaba.svg" alt="" class="logo"></img></div>
                <div class="companie"><img src="logos/Amazon.svg" alt="" class="logo"></img></div>
                <div class="companie"><img src="logos/Daraz.pk Logo.svg" alt="" class="logo"></img></div>
                <div class="companie"><img src="logos/Ebay.svg" alt="" class="logo"></img></div>
                <div class="companie"><img src="logos/Rakuten.svg" alt="" class="logo"></img></div>
                <div class="companie"><img src="logos/Walmart.svg" alt="" class="logo"></img></div>
            </div>
        </section>
        <!-- companies logo end -->

        <!-- Product  section -->
        <section class="container">
            <div class="products">
                <h1>Popular Collection</h1>
                <div class="product">
                    <div class="product-item">
                        <div class="product-image">
                            <img src="images/tripod.png" alt="">
                        </div>
                        <div class="product-details">
                            <h3 class="product-title">Flex Tripod</h3>
                            <p class="product-price">$50.48</p>
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
                               <br> Buyers protection possible!</p>
                        </div>
                    </div>
    
                    <div class="product-item">
                        <div class="product-image">
                            <img src="images/mic.png" alt="">
                        </div>
                        <div class="product-details">
                            <h3 class="product-title">Microphone</h3>
                            <p class="product-price">$120.25</p>
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
                               <br> Buyers protection possible!</p>
                        </div>
                    </div>

                    <div class="product-item">
                        <div class="product-image">
                            <img src="images/airpod.png" alt="">
                        </div>
                        <div class="product-details">
                            <h3 class="product-title">Airbuds</h3>
                            <p class="product-price">$100.00</p>
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
                               <br> Buyers protection possible!</p>
                        </div>
                    </div>

                    <div class="product-item">
                        <div class="product-image">
                            <img src="images/drone.png" alt="">
                        </div>
                        <div class="product-details">
                            <h3 class="product-title">Drone</h3>
                            <p class="product-price">$980.48</p>
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
                               <br> Buyers protection possible!</p>
                        </div>
                    </div>

                    <div class="product-item">
                        <div class="product-image">
                            <img src="images/lights.png" alt="">
                        </div>
                        <div class="product-details">
                            <h3 class="product-title">Light Setup</h3>
                            <p class="product-price">$120.00</p>
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
                               <br> Buyers protection possible!</p>
                        </div>
                    </div>

                    <div class="product-item">
                        <div class="product-image">
                            <img src="images/lights.png" alt="">
                        </div>
                        <div class="product-details">
                            <h3 class="product-title">Photoshoot set</h3>
                            <p class="product-price">$820.00</p>
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
                               <br> Buyers protection possible!</p>
                        </div>
                    </div>

                    <div class="product-item">
                        <div class="product-image">
                            <img src="images/camera.png" alt="">
                        </div>
                        <div class="product-details">
                            <h3 class="product-title">Vlogging Camera</h3>
                            <p class="product-price">$1800.80</p>
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
                               <br> Buyers protection possible!</p>
                        </div>
                    </div>

                    <div class="product-item">
                        <div class="product-image">
                            <img src="images/single-light.png" alt="">
                        </div>
                        <div class="product-details">
                            <h3 class="product-title">Green Screen</h3>
                            <p class="product-price">$28.48</p>
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
                               <br> Buyers protection possible!</p>
                        </div>
                    </div>

                    <div class="product-item">
                        <div class="product-image">
                            <img src="images/action.png" alt="">
                        </div>
                        <div class="product-details">
                            <h3 class="product-title">Action Camera</h3>
                            <p class="product-price">$380.00</p>
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
                               <br> Buyers protection possible!</p>
                        </div>
                    </div>

                    <!-- <div class="product-item">
                        <div class="product-image">
                            <img src="images/tripod.png" alt="">
                        </div>
                        <div class="product-details">
                            <h3 class="product-title">Flex Tripod</h3>
                            <p class="product-price">$50.48</p>
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
                               <br> Buyers protection possible!</p>
                        </div>
                    </div> -->
                </div>
                <div class="see-more">
                    <a href="#">See More <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                </div>
            </div>
            
            
        </section>

        <section class="container">
            <div class="news-latter"><h2 class="news-latter-title">HIT THAT SUBSCRIBE BUTTON</h2></div>
            <div class="news-latter-form">
                <form>
                    <label for="fname">We send the best emails.</label>
                    <input type="text" id="email" name="email" placeholder="test@example.com">
                    <label for="lname">Last Name</label>
                    <button class="block">SUBSCRIBE</button>

                  </form>
                  <div>
                    <p class="instruction">By signing up you agree to receive communications via email. For more information please refer to our Privacy Policy.</p>
                  </div>
                  
            </div>
        </section>
    </main>
    <!-- main section end -->

    <!-- footer section -->
    <footer class="text-font">
        <h3>Influencer products</h3>
        <small>Copyright <span>&copy;</span> 2020  influencer products</small>
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