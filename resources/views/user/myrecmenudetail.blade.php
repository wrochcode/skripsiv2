<x-app-layout title="My Menu Detail">
    <!--service start-->
	<section  class="service">
        <div class="container">
            <div class="service-details">
                <div class="section-header text-center">
                    <h2>Kebutuhanku</h2>
                    <p class="lh-2 mt-3">{{ Auth::user()->name }} ({{ Auth::user()->username }}) <br>
                        Umur: {{ $profiluser->age }} tahun, Berat saya: {{ $profiluser->weight }} Kg, {{ $profiluser->gender }} <br>
                    @php
                        if($profiluser->weight == 0 || $profiluser->height == 0 ||$profiluser->age == 0){
                            echo '<small class="text-danger">*ubah profil anda pada menu pengaturan</small>';
                        }
                    @endphp</p>
                </div><!--/.section-header-->
            </div><!--/.service-details-->
        </div><!--/.container-->
    </section><!--/.service-->
    <!--service end-->

    <x-subnavbar></x-subnavbar>

    <!--team start -->
    <section id="team" class="team  team-main">
        <div class="container">
            <div class="team-details">
                <div class="team-card">
                    <div class="container " style="margin-top: 20px">
                        <div class="row col-sm-9">
                            <div class="card mb-4 ms-4 col-md-11">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i> Data Makanan
                                </div>
                                <div class="card-body">
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Calorie</th>
                                                <th>Karbohidrat</th>
                                                <th>Lemak</th>
                                                <th>Protein</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Calorie</th>
                                                <th>Karbohidrat</th>
                                                <th>Lemak</th>
                                                <th>Protein</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php $no= 1 ; $tkalori = 0;?>
                                                @for ($i=0 ; $i<count($foods) ; $i++ )
                                                    <tr>
                                                    <td>{{ $no }}</td>
                                                        <?php $no++;?>
                                                        <td><?php echo $foods[$i]['name']; ?></td>
                                                        <td><?php echo $foods[$i]['calorie']; $tkalori +=$foods[$i]['calorie']; ?></td>
                                                        <td><?php echo $foods[$i]['carb']; ?></td>
                                                        <td><?php echo $foods[$i]['fat']; ?></td>
                                                        <td><?php echo $foods[$i]['protein']; ?></td>
                                                    </tr>
                                                @endfor
                                                <p>Total Kalori @php
                                                    echo $tkalori;
                                                @endphp Kcal</p>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- @if ($trec<1)
                                Kosong
                            @else
                                <?php $indexloop = 1 ;?>
                                <div class="col-lg-8 col-xs-12 menuku">Makanan Saya:</div> <br>
                                
                                @for ($i = 0 ; $i  < $trec; $i++)
                                <div class="col-lg-8 col-xs-12">
                                    @if ($indexloop == 1)
                                        <div class="single-team-box single-team-card team-box-bg-1">
                                    @elseif ($indexloop == 2)    
                                        <div class="single-team-box single-team-card team-box-bg-2">
                                    @elseif ($indexloop == 3)    
                                        <div class="single-team-box single-team-card team-box-bg-3">
                                    @elseif ($indexloop == 4)    
                                        <div class="single-team-box single-team-card team-box-bg-4">
                                        @php
                                            $indexloop = 0;
                                        @endphp
                                    @endif
                                            <div class="team-box-inner">
                                                <h3>@php echo $foods[$i]['name'] @endphp</h3>
                                                <p class="team-meta">@php echo 
                                                    "Kalori: ".$foods[$i]['calorie']."&nbsp"."&nbsp"."&nbsp"."&nbsp".
                                                    "Karbohidrat: ".$foods[$i]['carb']."&nbsp"."&nbsp"."&nbsp"."&nbsp".
                                                    "Lemak: ".$foods[$i]['fat']."&nbsp"."&nbsp"."&nbsp"."&nbsp".
                                                    "Protein: ".$foods[$i]['protein']
                                                    ; 
                                                    @endphp</p>
                                                <?php $id = $foods[$i]['id']; ?>
                                                <form action="{{ route('foodmenu.hapusitem', $id) }}" method="POST">
                                                    @csrf
                                                    @method("delete")
                                                    <button type="submit" class="delete-btn  pull-right">Hapus</button>
                                                </form>
                                                <a href="{{ route('user.menudetail', $foods[$i]['id']) }}" class="learn-btn  pull-right">
                                                    View Detail <i class="fa fa-list" aria-hidden="true"></i>
                                                </a>
                                            </div><!--/.team-box-inner-->
                                        </div><!--/.single-team-box-->
                                    @php $indexloop++; @endphp
                                @endfor
                                </div><!--.col-->
                            @endif --}}
                        </div><!--/.row-->
                    </div>
                </div><!--/.team-card-->
            </div><!--/.team-details-->
        </div><!--/.container-->
        
    </section><!--/.team-->
    <!--team end-->
    
</x-app-layout>

<x-app-layout title="Recomend Menu Detail">
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
                                        <a class="btn btn-outline-primary active" href="{{ route('user.menurec') }}">Menu Rekomendasi</a>
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
                            <div class="ms-4 mb-4 col-lg-11">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i> Data anda
                                    </div>
                                    <div class="card-body">
                                        @if ($trec != 0)
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Calorie</th>
                                                <th>Karbohidrat</th>
                                                <th>Lemak</th>
                                                <th>Protein</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no= 1 ; $tkalori = 0;?>
                                                    @for ($i=0 ; $i<count($foods) ; $i++ )
                                                        <tr>
                                                        <td>{{ $no }}</td>
                                                            <?php $no++;?>
                                                            <td><?php echo $foods[$i]['name']; ?></td>
                                                            <td><?php echo $foods[$i]['calorie']; $tkalori +=$foods[$i]['calorie']; ?></td>
                                                            <td><?php echo $foods[$i]['carb']; ?></td>
                                                            <td><?php echo $foods[$i]['fat']; ?></td>
                                                            <td><?php echo $foods[$i]['protein']; ?></td>
                                                        </tr>
                                                    @endfor
                                                    <p>Total Kalori @php
                                                        echo $tkalori;
                                                    @endphp Kcal</p>
                                            </tbody>
                                        </table>
                                        @endif
                                    </div>
                                </div>
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
{{-- <x-app-layout title="daftar">
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="row">
                    <div class="row g-0 gx-5 align-items-end">
                        <div class="col-lg-8 text-start ms-4 slideInRight" data-wow-delay="0.1s">
                            <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                                <li class="nav-item me-2">
                                    <a class="btn btn-outline-primary" href="{{ route('user.index') }}">Kebutuhan Anda</a>
                                </li>
                                <li class="nav-item me-2">
                                    <a class="btn btn-outline-primary active" href="{{ route('user.menu') }}">Menu Rekomendasi</a>
                                </li>
                                <li class="nav-item me-2">
                                    <a class="btn btn-outline-primary" href="{{ route('user.weight') }}">Record Berat Badan</a>
                                </li>
                            </ul>
                        </div>
                        <div class="row col-lg-6  ms-4 slideInRight">
                            <?php $indexloop = 1 ;
                            ?>        
                            @for ($i = 0 ; $i  < $trec; $i++)    
                                <div class="col-xl-12 col-md-6">
                                    @if ($indexloop == 1)
                                    <div class="card bg-primary text-white mb-4">
                                    @elseif ($indexloop == 2)    
                                    <div class="card bg-success text-white mb-4">
                                    @elseif ($indexloop == 3)    
                                    <div class="card bg-warning text-white mb-4">
                                    @elseif ($indexloop == 4)    
                                    <div class="card bg-danger text-white mb-4">
                                    @php
                                        $index == -1;
                                    @endphp
                                    @endif
                                            <div class="card-header">Menu @php echo $foods[$i]['name'] @endphp</div>
                                            <div class="card-body">@php echo 
                                                                    "Kalori: ".$foods[$i]['calorie']."&nbsp"."&nbsp"."&nbsp"."&nbsp".
                                                                    "Karbohidrat: ".$foods[$i]['carb']."&nbsp"."&nbsp"."&nbsp"."&nbsp".
                                                                    "Lemak: ".$foods[$i]['fat']."&nbsp"."&nbsp"."&nbsp"."&nbsp".
                                                                    "Protein: ".$foods[$i]['protein']
                                                                    ; 
                                                                    @endphp</div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <a class="small text-white" href="{{ route('foodmenu.detail', $foods[$i]['id']) }}">View Details <i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                    @php
                                        // echo $indexloop;
                                        $indexloop++;
                                    @endphp
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-app-layout> --}}