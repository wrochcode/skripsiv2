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

</x-app-layout>