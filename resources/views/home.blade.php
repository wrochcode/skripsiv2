<x-app-layout title="Home Page">
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
                                    <div>
                                        <h2>Cari Cara Sehat Terbaik dengan gayamu sendiri</h2>
                                        <a href="{{ route('masuk') }}"><button type="button"  class="slide-btn">
                                            Masuk
                                        </button></a>
                                        <a href="{{ route('daftar') }}"><button type="button"  class="slide-btn">
                                            Daftar
                                        </button></a>
                                    </div><!-- /.single-slide-item-content-->
                                </div><!-- /.col-->
                            </div><!-- /.row-->
                        </div><!-- /.container-->
                    </div><!-- /.single-slide-item-->
                </div><!-- /.item .active-->
            </div><!-- /.carousel-inner-->
        </div><!-- /.carousel-->
    </section><!-- /.header-slider-area-->
    <!-- header-slider-area end -->
</x-app-layout>