<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu mt-3">
            <div class="nav">
                <!-- <div class="sb-sidenav-menu-heading">Core</div> -->

                <a class="nav-link" href="{{URL::asset('/dashboard')}}"
                    ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    MVMS
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                    ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Basic Configuration
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                ></a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{URL::asset('/transport')}}">Transport</a>
                        <a class="nav-link" href="{{URL::asset('/driver')}}">Driver Information</a>
                        <a class="nav-link" href="{{URL::asset('/transportManager')}}">Manager Information</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                    ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Mane Program
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                ></a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('/transportAssociate')}}">Transport Assist</a>
                        <a class="nav-link" href="{{url('/transportSchodule')}}">Transport Schedule</a>
                        <!-- <a class="nav-link" href="{{url('#')}}">Completed Schedule</a> -->
                    </nav>
                    <!-- <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                            >Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        ></a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                
                                <a class="nav-link" href="{{url('/admin/register')}}">Create Admin</a>
                                <a class="nav-link" href="{{url('/admin/password')}}">Accout Recovery</a>
                            </nav>
                        </div>
                    </nav> -->
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