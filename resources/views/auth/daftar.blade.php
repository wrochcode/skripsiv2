<x-app-layout title="Register Page">
    <!-- header-slider-area start -->
    <section class="header-slider-area">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="single-slide-item slide-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="single-contact-box">
                                        <div class="contact-form">
                                            <h3>Halaman Daftar Akun</h3>
                                            <form method="POST" action="{{ route('daftar') }}">
                                                @csrf
                                                <input type="hidden" class="form-control" name="role" value="3" id="role" autocomplete="off">
                                                <div class="row">
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <h4><label for="name">Nama Lengkap</label></h4>
                                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" placeholder="Masukkan nama lengkap anda" autocomplete="off">
                                                        </div><!--/.form-group-->
                                                    </div><!--/.col-->
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <h4><label for="username">Username</label></h4>
                                                            <input type="text" class="form-control" name="username" value="{{ old('username') }}" id="username" placeholder="Masukkan username anda" autocomplete="off">
                                                        </div><!--/.form-group-->
                                                    </div><!--/.col-->
                                                </div><!--/.row-->
                                                <div class="row">
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <h4><label for="email">Email Anda</label></h4>
                                                            <input type="text" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="Masukkan email anda" autocomplete="off">
                                                        </div><!--/.form-group-->
                                                    </div><!--/.col-->
                                                </div><!--/.row-->
                                                <div class="row">
                                                    <div class="col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <h4><label for="address">Alamat Anda</label></h4>
                                                            <input type="text" class="form-control" name="address" value="{{ old('address') }}" id="address" placeholder="Masukkan Alamat anda" autocomplete="off">
                                                        </div><!--/.form-group-->
                                                    </div><!--/.col-->
                                                </div><!--/.row-->
                                                <div class="row">
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <h4><label for="password">Password</label></h4>
                                                            <input type="password" class="form-control" name="password" value="{{ old('password') }}" id="password" placeholder="Buat password" autocomplete="off">
                                                        </div><!--/.form-group-->
                                                    </div><!--/.col-->
                                                </div><!--/.row-->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="belumpunyaakun">Sudah punya akun? <a href="{{ route('masuk') }}">Log-in disini</a>
                                                            <div class="single-contact-btn pull-right">
                                                                <button class="contact-btn" type="submit">Daftar</button>
                                                            </div>
                                                        </div>
                                                        <!--/.single-single-contact-btn-->
                                                    </div><!--/.col-->
                                                </div><!--/.row-->
                                            </form><!--/form-->
                                        </div><!--/.contact-form-->
                                    </div><!--/.single-contact-box-->
                                </div><!--/.col-->
                            </div><!-- /.row-->
                        </div><!-- /.container-->
                    </div><!-- /.single-slide-item-->
                </div><!-- /.item .active-->
            </div><!-- /.carousel-inner-->
        </div><!-- /.carousel-->
    </section><!-- /.header-slider-area-->
    <!-- header-slider-area end -->

    <!--contact start-->
    <section  class="contact">
        <div class="container">
            <div class="contact-details">
                <div class="section-header contact-head  text-center">
                    <h2>contact us</h2>
                    <p>
                        Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    </p>
                </div><!--/.section-header-->
                <div class="contact-content">
                    <div class="row">
                        <div class="col-sm-offset-1 col-sm-5">
                            <div class="single-contact-box">
                                <div class="contact-right">
                                    <div class="contact-adress">
                                        <div class="contact-office-address">
                                            <h3>contact info</h3>
                                            <p>
                                                125, Park street avenue, Brocklyn, Newyork.
                                            </p>
                                            <div class="contact-online-address">
                                                <div class="single-online-address">
                                                    <i class="fa fa-phone"></i>
                                                    +11253678958
                                                </div><!--/.single-online-address-->
                                                
                                                <div class="single-online-address">
                                                    <i class="fa fa-envelope-o"></i>
                                                    <span>info@mail.com</span>
                                                </div><!--/.single-online-address-->
                                            </div><!--/.contact-online-address-->
                                        </div><!--/.contact-office-address-->
                                        <div class="contact-office-address">
                                            <h3>social partner</h3>
                                            <div class="contact-icon">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><!--/li-->
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li><!--/li-->
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><!--/li-->
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><!--/li-->
                                                </ul><!--/ul-->
                                            </div><!--/.contact-icon-->
                                        </div><!--/.contact-office-address-->
                                        
                                    </div><!--/.contact-address-->
                                </div><!--/.contact-right-->
                            </div><!--/.single-contact-box-->
                        </div><!--/.col-->
                        <div class="col-sm-5">
                            <div class="single-contact-box">
                                <div class="contact-form">
                                    <h3>Leave us a Massage Here</h3>
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
                                                </div><!--/.form-group-->
                                            </div><!--/.col-->
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="laststname">
                                                </div><!--/.form-group-->
                                            </div><!--/.col-->
                                        </div><!--/.row-->
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                                </div><!--/.form-group-->
                                            </div><!--/.col-->
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
                                                </div><!--/.form-group-->
                                            </div><!--/.col-->
                                        </div><!--/.row-->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="7" id="comment" placeholder="Message" ></textarea>
                                                </div><!--/.form-group-->
                                            </div><!--/.col-->
                                        </div><!--/.row-->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="single-contact-btn pull-right">
                                                    <button class="contact-btn" type="button">send message</button>
                                                </div><!--/.single-single-contact-btn-->
                                            </div><!--/.col-->
                                        </div><!--/.row-->
                                    </form><!--/form-->
                                </div><!--/.contact-form-->
                            </div><!--/.single-contact-box-->
                        </div><!--/.col-->
                    </div><!--/.row-->
                </div><!--/.contact-content-->
            </div><!--/.contact-details-->
        </div><!--/.container-->

    </section><!--/.contact-->
</x-app-layout>