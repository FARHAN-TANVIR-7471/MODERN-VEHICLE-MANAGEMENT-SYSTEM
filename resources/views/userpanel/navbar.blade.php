<section class="container navbar">
    <div class="menu-logo">
        <h2><a href="{{ route('home') }}" style="text-decoration: none; color:black">MVMS</a> </h2>
    </div>

    <div class="menu-item">
        <ul>
            {{-- <li class="mobile-hidden"><a href="#home">Home</a></li>
            <li class="mobile-hidden"><a href="#news">News</a></li>--}}
            <li class="mobile-hidden"><a href="{{ route('driver.list') }}">Driver</a></li> 
            <li class="mobile-hidden"><a href="{{ route('schodule.list') }}">Schedule</a></li> 

            <li class="mobile-hidden"><a href="{{ route('user.booking') }}">Booking</a></li> 
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