<x-app-layout title="Profil">
    
    <!--service start-->
    <section  class="service">
            <div class="container">
                <div class="service-details">
                    <div class="section-header text-center">
                        <h2>Kalkulator Sehat</h2>
                        <p>
                            Hitung segala kebutuhan asupan tubuh dengan kalkulasi yang tepat agar sesuai dengan target aktivitas serta kebutuhan asupan tubuh anda. 
                        </p>
                    </div><!--/.section-header-->
                    <div class="service-content-one">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12">
                                <div class="service-single text-center">
                                    <div class="service-img">
                                        {{-- <img src="assets/images/service/service1.png" alt="image of service" /> --}}
                                        <img src="{{URL::asset('images/calc/bmi.png')}}" alt="image of business" />
                                    </div><!--/.service-img-->
                                    <div class="service-txt">
                                        <h2>
                                            <a href="#">Kalkulator BMI</a>
                                        </h2>
                                        <p>
                                            Mengetahui kurus atau gemuk berdasarkan tinggi dan berat badannya. 
                                        </p>
                                        <a href="{{ route('bmi.index') }}" class="service-btn">
                                            Hitung
                                        </a>
                                    </div><!--/.service-txt-->
                                </div><!--/.service-single-->
                            </div><!--/.col-->
                            <div class="col-sm-3 col-xs-12">
                                <div class="service-single text-center">
                                    <div class="service-img">
                                        {{-- <img src="assets/images/service/service2.png" alt="image of service" /> --}}
                                        <img src="{{URL::asset('images/calc/rmr.png')}}" alt="image of business" />
                                    </div><!--/.service-img-->
                                    <div class="service-txt">
                                        <h2>
                                            <a href="#">Kalkulator RMR</a>
                                        </h2>
                                        <p>
                                            Memberitahu Anda jumlah kalori yang Anda butuhkan saat Anda beristirahat
                                        </p>
                                        <a href="{{ route('rmr.index') }}" class="service-btn">
                                            Hitung
                                        </a>
                                    </div><!--/.service-txt-->
                                </div><!--/.service-single-->
                            </div><!--/.col-->
                            <div class="col-sm-3 col-xs-12">
                                <div class="service-single text-center">
                                    <div class="service-img">
                                        {{-- <img src="assets/images/service/service3.png" alt="image of service" /> --}}
                                        <img src="{{URL::asset('images/calc/eer.png')}}" alt="image of business" />
                                    </div><!--/.service-img-->
                                    <div class="service-txt">
                                        <h2>
                                            <a href="#">Kalkulator EER</a>
                                        </h2>
                                        <p>
                                            Menghitung berapa jumlah kalori yang perlu Anda konsumsi
                                        </p>
                                        <a href="{{ route('eer.index') }}" class="service-btn">
                                            Hitung
                                        </a>
                                    </div><!--/.service-txt-->
                                </div><!--/.service-single-->
                            </div><!--/.col-->
                            <div class="col-sm-3 col-xs-12">
                                <div class="service-single text-center">
                                    <div class="service-img">
                                        {{-- <img src="assets/images/service/service3.png" alt="image of service" /> --}}
                                        <img src="{{URL::asset('images/calc/tdee.png')}}" alt="image of business" />
                                    </div><!--/.service-img-->
                                    <div class="service-txt">
                                        <h2>
                                            <a href="#">Kalkulator TDEE</a>
                                        </h2>
                                        <p>
                                            Mengestimasi jumlah kalori yang anda bakar setiap harinya
                                        </p>
                                        <a href="{{ route('tdee.index') }}" class="service-btn">
                                            Hitung
                                        </a>
                                    </div><!--/.service-txt-->
                                </div><!--/.service-single-->
                            </div><!--/.col-->
                        </div><!--/.row-->
                    </div><!--/.service-content-one-->
                    <div class="service-content-one">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12">
                                <div class="service-single text-center">
                                    <div class="service-img">
                                        {{-- <img src="assets/images/service/service1.png" alt="image of service" /> --}}
                                        <img src="{{URL::asset('images/calc/carb.png')}}" alt="image of business" />
                                    </div><!--/.service-img-->
                                    <div class="service-txt">
                                        <h2>
                                            <a href="#">Kalkulator Karbohidrat</a>
                                        </h2>
                                        <p>
                                            Mengestimasi berapa gram karbohidrat yang perlu anda konsumsi untuk menjaga pola makan sehat
                                        </p>
                                        <a href="{{ route('carb.index') }}" class="service-btn">
                                            Hitung
                                        </a>
                                    </div><!--/.service-txt-->
                                </div><!--/.service-single-->
                            </div><!--/.col-->
                            <div class="col-sm-3 col-xs-12">
                                <div class="service-single text-center">
                                    <div class="service-img">
                                        {{-- <img src="assets/images/service/service2.png" alt="image of service" /> --}}
                                        <img src="{{URL::asset('images/calc/fat.png')}}" alt="image of business" />
                                    </div><!--/.service-img-->
                                    <div class="service-txt">
                                        <h2>
                                            <a href="#">Kalkulator Lemak</a>
                                        </h2>
                                        <p>
                                            Mengestimasi berapa gram lemak yang perlu anda konsumsi untuk menjaga pola makan sehat
                                        </p>
                                        <a href="{{ route('fat.index') }}" class="service-btn">
                                            Hitung
                                        </a>
                                    </div><!--/.service-txt-->
                                </div><!--/.service-single-->
                            </div><!--/.col-->
                            <div class="col-sm-3 col-xs-12">
                                <div class="service-single text-center">
                                    <div class="service-img">
                                        {{-- <img src="assets/images/service/service3.png" alt="image of service" /> --}}
                                        <img src="{{URL::asset('images/calc/protein.png')}}" alt="image of business" />
                                    </div><!--/.service-img-->
                                    <div class="service-txt">
                                        <h2>
                                            <a href="#">Kalkulator Protein</a>
                                        </h2>
                                        <p>
                                            Mengestimasi berapa gram protein yang perlu anda konsumsi untuk menjaga pola makan sehat
                                        </p>
                                        <a href="{{ route('protein.index') }}" class="service-btn">
                                            Hitung
                                        </a>
                                    </div><!--/.service-txt-->
                                </div><!--/.service-single-->
                            </div><!--/.col-->
                            <div class="col-sm-3 col-xs-12">
                                <div class="service-single text-center">
                                    <div class="service-img">
                                        {{-- <img src="assets/images/service/service3.png" alt="image of service" /> --}}
                                        <img src="{{URL::asset('images/calc/serat.png')}}" alt="image of business" />
                                    </div><!--/.service-img-->
                                    <div class="service-txt">
                                        <h2>
                                            <a href="#">Kalkulator Serat</a>
                                        </h2>
                                        <p>
                                            Mengestimasi berapa jumlah serat yang perlu anda konsumsi untuk menjaga pola makan sehat
                                        </p>
                                        <a href="{{ route('serat.index') }}" class="service-btn">
                                            Hitung
                                        </a>
                                    </div><!--/.service-txt-->
                                </div><!--/.service-single-->
                            </div><!--/.col-->
                        </div><!--/.row-->
                    </div><!--/.service-content-one-->
                </div><!--/.service-details-->
            </div><!--/.container-->

    </section><!--/.service-->
    <!--service end-->

    <!-- Category Start -->
    <div class="container-xxl py-3">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Kalkulator Sehat</h1>
                <p>Hitung segala kebutuhan asupan tubuh dengan kalkulasi yang tepat agar sesuai dengan target aktivitas serta kebutuhan asupan tubuh anda.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('bmi.index') }}">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-apartment.png" alt="Icon">
                            </div>
                            <h6>Kalkulator BMI</h6>
                            <span>Mengetahui kurus atau gemuk berdasarkan tinggi dan berat badannya.</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('rmr.index') }}">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-villa.png" alt="Icon">
                            </div>
                            <h6>Kalkulator RMR</h6>
                            <span>Memberitahu Anda jumlah kalori yang Anda butuhkan saat Anda beristirahat</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('eer.index') }}">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-house.png" alt="Icon">
                            </div>
                            <h6>Kalkulator EER</h6>
                            <span>Menghitung berapa jumlah kalori yang perlu Anda konsumsi</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('tdee.index') }}">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-housing.png" alt="Icon">
                            </div>
                            <h6>Kalkulator TDEE</h6>
                            <span>Mengestimasi jumlah kalori yang anda bakar setiap harinya</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('serat.index') }}">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-building.png" alt="Icon">
                            </div>
                            <h6>Kalkulator Serat</h6>
                            <span>Mengestimasi berapa gram serat yang perlu anda konsumsi untuk menjaga pola makan sehat.</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('protein.index') }}">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-neighborhood.png" alt="Icon">
                            </div>
                            <h6>Kalkulator Protein</h6>
                            <span>Mengestimasi berapa gram protein yang perlu anda konsumsi untuk menjaga pola makan sehat</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('carb.index') }}">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-condominium.png" alt="Icon">
                            </div>
                            <h6>Kalkulator Karbohidrat</h6>
                            <span>Mengestimasi berapa gram karbohidrat yang perlu anda konsumsi untuk menjaga pola makan sehat</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ route('fat.index') }}">
                        <div class="rounded p-4">
                            <div class="icon mb-3">
                                <img class="img-fluid" src="img/icon-luxury.png" alt="Icon">
                            </div>
                            <h6>Kalkulator Lemak</h6>
                            <span>Mengestimasi berapa gram lemak yang perlu anda konsumsi untuk menjaga pola makan sehat.</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-center mx-auto mt-5 mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p>NB: kalkulator bersifat perhitungan ilmiah untuk usia diatas 18 tahun serta tidak disertai penyakit bawaan, alergi ataupun alergi.</p>
            </div>
        </div>
    </div>
    <!-- Category End -->
</x-app-layout>