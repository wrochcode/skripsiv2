<x-app-layout title="SAW Alhorithma">
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
                                        <a class="btn btn-outline-primary active" href="{{ route('user.menu') }}">Menu Saya</a>
                                    </li>
                                    <li class="nav-item me-2">
                                        <a class="btn btn-outline-primary" href="{{ route('user.weight') }}">Record Berat Badan</a>
                                    </li>
                                </ul>
                            </div>
                            <a class="ms-4 mb-3 text-danger" href="{{ route('user.menu') }}">Kembali ke Menu Saya</a>
                        </div>
                        <div class="card mb-4 ms-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i> Data menu saya (shorting with saw)
                            </div>
                            <p class="ms-3 mt-2"> <b> Kebutuhan kalori TDEE saya @php echo $needs; @endphp Kcal </b></p>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Rank</th>
                                            <th>Nama Menu</th>
                                            <th>Selisih dari kalori yang diperlukan(TDEE)</th>
                                            <th>Kalori</th>
                                            <th>Karbohidrat</th>
                                            <th>Lemak</th>
                                            <th>Protein</th>
                                            <th>Hasil SAW</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no =1 ;?>
                                        @for ($i = 0 ; $i<$trec ; $i++ )
                                            
                                            <tr class="text-center">
                                                <td>{{ $no }}</td>
                                                <?php $no++ ;?>
                                                <td><?php echo $recs[$i]['name'];?></td>
                                                <?php $gap = $recs[$i][ 'calorie'] - $needs;?>
                                                @if ($gap > 0)
                                                    <td class="text-success">+<?php echo $gap;?> Kcal</td>
                                                @elseif ($gap<0)
                                                    <td class="text-danger"> <?php echo $gap;?> Kcal</td>
                                                @else
                                                    <td class="text-dark">+ <?php echo $gap;?> Kcal</td>
                                                @endif
                                                <td><?php echo $recs[$i][ 'calorie'];?></td>
                                                <td><?php echo $recs[$i]['carb'];?></td>
                                                <td><?php echo $recs[$i]['fat'];?></td>
                                                <td><?php echo $recs[$i]['protein'];?></td>
                                                <td><?php echo $recs[$i]['nilai'];?></td>
                                            </tr>
                                        @endfor
                                            
                                    </tbody>
                                  </table>
                                {{-- <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Menu</th>
                                            <th>Kalori</th>
                                            <th>Karbohidrat</th>
                                            <th>Lemak</th>
                                            <th>Protein</th>
                                            <th>Hasil SAW</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Menu</th>
                                            <th>Kalori</th>
                                            <th>Karbohidrat</th>
                                            <th>Lemak</th>
                                            <th>Protein</th>
                                            <th>Hasil SAW</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no =1 ;?>
                                        @for ($i = 0 ; $i<$trec ; $i++ )
                                            
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <?php $no++ ;?>
                                                <td><?php echo $recs[$i]['name'];?></td>
                                                <td><?php echo $recs[$i]['calorie'];?></td>
                                                <td><?php echo $recs[$i]['carb'];?></td>
                                                <td><?php echo $recs[$i]['fat'];?></td>
                                                <td><?php echo $recs[$i]['protein'];?></td>
                                                <td><?php echo $recs[$i]['nilai'];?></td>
                                            </tr>
                                        @endfor
                                            
                                    </tbody>
                                </table> --}}
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