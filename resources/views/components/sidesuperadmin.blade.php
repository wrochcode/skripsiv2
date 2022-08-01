{{-- Sidebar --}}
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                @if (Auth::user()->role == 1)
                    <div class="sb-sidenav-menu-heading">Super Admin</div>
                    <a class="nav-link" href="{{ route('aboutadmins.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Perusahaan
                    </a>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Data
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('food.index') }}">Food</a>
                            <a class="nav-link" href="{{ route('foodrecomend.index') }}">Food Recomend</a>
                            <a class="nav-link" href="{{ route('foodmenurec.index') }}">Menu Makanan Rekomendasi</a>
                            <a class="nav-link" href="{{ route('event.index') }}">Event</a>
                            {{-- <a class="nav-link" href="{{ route('log.index') }}">Log login</a> --}}
                        </nav>
                    </div>
                @endif
                @if (Auth::user()->role != 3)
                <div class="sb-sidenav-menu-heading">Admin</div>
                    <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Keanggotaan
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            @if (Auth::user()->role == 1)
                                <a class="nav-link" href="{{ route('useradmin.index') }}">Admin</a>
                            @endif
                            <a class="nav-link" href="{{ route('user.index') }}">Member</a>
                        </nav>
                    </div>
                    <a class="nav-link" href="{{ route('visit.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Pengunjung
                    </a>
                @endif
                <div class="sb-sidenav-menu-heading">Menu</div>
                <a class="nav-link" href="{{ route('fooduser.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Data Makanan
                </a>
                <a class="nav-link" href="{{ route('foodmenu.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Data Menu Makanan
                </a>
                {{-- <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a> --}}
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            @if (Auth::user()->role == 1)
                Super Admin
            @elseif (Auth::user()->role == 2)
                Admin
            @elseif (Auth::user()->role == 3)
                Member
            @else
            Auth
            @endif
        </div>
    </nav>
</div>
{{-- End Sidebar --}}