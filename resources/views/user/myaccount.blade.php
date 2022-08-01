<x-app-layout title="My Account">
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="row">
                    <div class="col-9 mt-5">
                        <div class="row">
                            <div class="col-lg-9 text-start ms-4 slideInRight" data-wow-delay="0.1s">
                                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                                    <li class="nav-item me-2">
                                        <a class="btn btn-outline-primary active" href="{{ route('user.index') }}">Kebutuhan Anda</a>
                                    </li>
                                    <li class="nav-item me-2">
                                        <a class="btn btn-outline-primary" href="{{ route('user.menurec') }}">Menu Rekomendasi</a>
                                    </li>
                                    <li class="nav-item me-2">
                                        <a class="btn btn-outline-primary" href="{{ route('user.menu') }}">Menu Saya</a>
                                    </li>
                                    <li class="nav-item me-2">
                                        <a class="btn btn-outline-primary" href="{{ route('user.weight') }}">Record Berat Badan</a>
                                    </li>
                                    {{-- <li class="nav-item me-0">
                                        <a class="btn btn-outline-primary" href="{{ route('user.profile') }}">Pengaturan</a>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="row ms-4 col-lg-9">
                                <h4>Kebutuhan Tubuh</h4>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">Hasil</small></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">BMI</th>
                                            <td>Berat anda tergolong <b>{{ $kalkulator['descbmi'] }}</b></td>
                                            <td><b>{{ $kalkulator['bmi'] }} ({{ $kalkulator['descbmi'] }})</b></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">RMR</th>
                                            <td>Butuh <b>{{ $kalkulator['rmr'] }}</b> Kalori saat istirahat</td>
                                            <td><b>{{ $kalkulator['rmr'] }} Kcal</b></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">EER</th>
                                            <td>Butuh <b>{{ $kalkulator['eer'] }}</b> kalori saat maintenance </td>
                                            <td><b>{{ $kalkulator['eer'] }} Kcal</b></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">TDEE</th>
                                            <td><b>{{ $kalkulator['tdee'] }}</b> Kalori yang anda bakar</td>
                                            <td><b>{{ $kalkulator['tdee'] }} Kcal</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row mt-3 ms-4 col-lg-9">
                                <h4>Kebutuhan Nutrisi</h4>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nutrisi</th>
                                            <th scope="col">Kalori (Kcal)</th>
                                            <th scope="col">Takaran g (<small>gram</small>)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Karbohidrat</th>
                                            <td>{{ $kalkulator['carb'] }}</td>
                                            <td>{{ $kalkulator['carbgram'] }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Lemak</th>
                                            <td>{{ $kalkulator['fat'] }}</td>
                                            <td>{{ $kalkulator['fatgram'] }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Protein</th>
                                            <td>{{ $kalkulator['protein'] }}</td>
                                            <td>{{ $kalkulator['proteingram'] }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Serat</th>
                                            <td>-</td>
                                            <td>{{ $kalkulator['serat'] }} gram</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="text-start mt-5 mb-5 fadeInUp" data-wow-delay="0.1s">
                            <h3 class="mb-1">Biodataku</h3>
                            @if ($profiluser->gender == "Perempuan")
                                <img class="img-thumbnail mt-3" src="{{URL::asset('img/woman.png')}}" alt="">
                                
                            @else
                                <img class="img-thumbnail mt-3" src="{{URL::asset('img/men.png')}}" alt="">

                            @endif
                            <p class="lh-2 mt-3">{{ Auth::user()->name }} ({{ Auth::user()->username }}) <br><hr>
                                Umur: {{ $profiluser->age }} tahun <br>
                                Berat saya: {{ $profiluser->weight }} Kg <br>
                                {{ $profiluser->gender }} <br>
                            @php
                                if($profiluser->weight == 0 || $profiluser->height == 0 ||$profiluser->age == 0){
                                    echo '<small class="text-danger">*ubah profil anda pada menu pengaturan</small>';
                                }
                            @endphp</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-app-layout>