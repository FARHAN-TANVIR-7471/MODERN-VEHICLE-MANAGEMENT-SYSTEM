<section class="container navbar">
    <div class="menu-logo">
        <h2><a href="{{ route('home') }}" style="text-decoration: none; color:#E02C6D">TMS</a> </h2>
    </div>

    <div class="menu-item">
        <ul>
            <li class="mobile-hidden"><a class="{{ Route::currentRouteName() === 'driver.list' ? 'active' : '' }}" href="{{ route('driver.list') }}">Driver</a></li> 
            <li class="mobile-hidden"><a class="{{ Route::currentRouteName() === 'schodule.list' ? 'active' : '' }}" href="{{ route('schodule.list') }}">Schedule</a></li> 

            <li class="mobile-hidden"><a class="{{ Route::currentRouteName() === 'user.booking' ? 'active' : '' }}" href="{{ route('user.booking') }}">Booking</a></li> 
            @if (Auth::user())
            <li class="mobile-hidden"><a class="{{ Route::currentRouteName() === 'admin.dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">Deshbord</a></li> 
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