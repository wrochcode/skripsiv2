<!--menu start-->
<section id="menu">
    <div class="container">
        <div class="menubar">
            <nav class="navbar navbar-default">
            
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    {{-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar">halo</span>
                    </button> --}}
                    <a class="navbar-brand" href="index.html">
                        {{-- <img src="assets/images/logo/logo.png" alt="logo"> --}}
                        <img src="{{URL::asset('images/logo/SehatYokk.png')}}" alt="logo">
                    </a>
                </div><!--/.navbar-header -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        @foreach ($navbar as $item => $url)
                            <li><a href="{{ $url }}">{{ $item }}</a></li>
                        @endforeach
                        {{-- <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="service.html">Service</a></li>
                        <li><a href="project.html">Project</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li>
                            <a href="#">
                                <span class="lnr lnr-cart"></span>
                            </a>
                        </li>
                        <li class="search">
                            <form action="">
                                <input type="text" name="search" placeholder="Search....">
                                <a href="#">
                                    <span class="lnr lnr-magnifier"></span>
                                </a>
                            </form>
                        </li> --}}
                    {{-- </ul> --}}
                    @guest
                            <li>
                                <a href="{{ route('daftar') }}" class="nav-item nav-link">Daftar</a>
                            </li>
                            <li>
                                <a href="{{ route('masuk') }}" class="nav-item nav-link">Masuk</a>
                            </li>
                        </ul>
                    @else
                        <li>
                            <a href="{{ route('user.index') }}" class="nav-item nav-link">Profilku</a>
                        </li>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ Auth::user()->username }}</a>
                            <div class="dropdown-menu dropdown-menu-end rounded-0 m-0">
                                <a href="{{ route('user.profile') }}" class="dropdown-item">Pengaturan Akun</a>
                                <a href="{{ route('logout') }}" class="dropdown-item">keluar</a>
                            </div>
                        </div>
                    </ul>
                    @endguest
                        <!-- / ul -->
                </div><!-- /.navbar-collapse -->
            </nav><!--/nav -->
        </div><!--/.menubar -->
    </div><!-- /.container -->

</section><!--/#menu-->
<!--menu end-->