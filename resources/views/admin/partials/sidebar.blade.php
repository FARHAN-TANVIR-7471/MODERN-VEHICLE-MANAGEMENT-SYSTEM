<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu mt-3">
            <div class="nav">
                <!-- <div class="sb-sidenav-menu-heading">Core</div> -->

                <a class="nav-link" href="{{URL::asset('/dashboard')}}"
                    ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    TMS
                </a>
                {{-- <div class="sb-sidenav-menu-heading">Interface</div> --}}
                <div class="sb-sidenav-menu-heading">Basic Configuration</div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Transport" aria-expanded="false" aria-controls="collapseLayouts"
                    ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Transport
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                ></a>
                <div class="collapse" id="Transport" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{URL::asset('/transport')}}">Transport</a>
                        {{-- <a class="nav-link" href="{{URL::asset('/driver')}}">Driver Information</a>
                        <a class="nav-link" href="{{URL::asset('/transportManager')}}">Manager Information</a> --}}
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#DriverInformation" aria-expanded="false" aria-controls="collapseLayouts"
                    ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Driver Information
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                ></a>
                <div class="collapse" id="DriverInformation" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{URL::asset('/driver')}}">Driver Information</a>
                        {{-- <a class="nav-link" href="{{URL::asset('/transportManager')}}">Manager Information</a> --}}
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ManagerInformation" aria-expanded="false" aria-controls="collapseLayouts"
                    ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Manager Information
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                ></a>
                <div class="collapse" id="ManagerInformation" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{URL::asset('/transportManager')}}">Manager Information</a>
                    </nav>
                </div>
                {{-- <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{URL::asset('/transport')}}">Transport</a>
                        <a class="nav-link" href="{{URL::asset('/driver')}}">Driver Information</a>
                        <a class="nav-link" href="{{URL::asset('/transportManager')}}">Manager Information</a>
                    </nav>
                </div> --}}
                <div class="sb-sidenav-menu-heading">Mane Program</div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#TransportAssist" aria-expanded="false" aria-controls="TransportAssist"
                    ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Transport Assist
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                ></a>
                <div class="collapse" id="TransportAssist" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('/transportAssociate')}}">Transport Assist</a>
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#bookinglist" aria-expanded="false" aria-controls="TransportAssist"
                    ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Booking
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                ></a>
                <div class="collapse" id="bookinglist" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.booking.list')}}">Booking List</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#TransportSchedule" aria-expanded="false" aria-controls="TransportSchedule"
                    ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Transport Schedule
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                ></a>
                <div class="collapse" id="TransportSchedule" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('/transportSchodule')}}">Transport Schedule</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Modern Vertical</div>
             Management System
        </div>
    </nav>
</div>

<!-- {{URL::asset('')}} -->