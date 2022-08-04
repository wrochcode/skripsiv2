<x-app-layout title="Login Page">
    <!-- header-slider-area start -->
    <section class="header-slider-area">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="single-slide-item slide-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="single-contact-box">
                                        <div class="contact-form">
                                            <h3>Halaman Masuk</h3>
                                            <form method="POST" action="{{ route('masuk') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <h4><label for="email">Email</label></h4>
                                                            <input type="text" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="Masukkan email anda" autocomplete="off">
                                                        </div><!--/.form-group-->
                                                    </div><!--/.col-->
                                                    <div class="col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <h4><label for="password">Password</label></h4>
                                                            <input type="password" name="password" class="form-control" id="password" placeholder="Password anda" >
                                                        </div><!--/.form-group-->
                                                    </div><!--/.col-->
                                                </div><!--/.row-->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="belumpunyaakun">Belum punya akun? <a href="{{ route('daftar') }}">Daftar disini</a>
                                                            <div class="single-contact-btn pull-right">
                                                                <button class="contact-btn" type="submit">Masuk</button>
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