<x-app-layout title="record berat badan">
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
                                        <a class="btn btn-outline-primary" href="{{ route('user.index') }}">Kebutuhan Anda</a>
                                    </li>
                                    <li class="nav-item me-2">
                                        <a class="btn btn-outline-primary" href="{{ route('user.menurec') }}">Menu Rekomendasi</a>
                                    </li>
                                    <li class="nav-item me-2">
                                        <a class="btn btn-outline-primary" href="{{ route('user.menu') }}">Menu Saya</a>
                                    </li>
                                    <li class="nav-item me-2">
                                        <a class="btn btn-outline-primary active" href="{{ route('user.weight') }}">Record Berat Badan</a>
                                    </li>
                                    {{-- <li class="nav-item me-0">
                                        <a class="btn btn-outline-primary" href="{{ route('user.profile') }}">Pengaturan</a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        fitur dalam pengembangan
                    </div>
                    <div class="col-2">
                        <div class="text-start mt-5 mb-5 fadeInUp" data-wow-delay="0.1s">
                            <h3 class="mb-1">Biodataku</h3>
                            @if ($profiluser->gender == "Perempuan")
                                <img class="img-thumbnail mt-3" src="img/woman.png" alt="">
                                
                            @else
                                <img class="img-thumbnail mt-3" src="img/men.png" alt="">

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