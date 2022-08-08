<x-app-layout title="My Menu">
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
                    <div class="container">
                        <p>Buat Menu</p> <br>
                        <div class="row col-sm-5 ">
                            <form method="post" action="{{ route('user.menustore') }}">
                                @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" placeholder="Masukkan nama menu anda" autocomplete="off">
                                        <input type="hidden" value="0" name="calorie" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" hidden/>
                                        <input type="hidden" value="0" name="carb" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" hidden/>
                                        <input type="hidden" value="0" name="fat" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" hidden/>
                                        <input type="hidden" value="0" name="protein" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" hidden/>
                                    </div><!--/.form-group-->
                                <div class="blogs-widget">
                                    <button type="submit" class="btn btn-default">Buat Menu <i class="fa fa-plus" aria-hidden="true"></i></button>
                                </div>
                            </form>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-8 blogs-widget">
                                <a href="{{ route('user.sawmetode') }}" style="background-color: rgb(75, 231, 255); color: rgb(162, 21, 21)" class="btn btn-default">Urutkan Rekomendasi dengan Algoritma SAW <i class="fa fa-calculator" aria-hidden="true"></i></a>
                            </div>
                            <?php $indexloop = 1 ;?>
                            <div class="col-lg-8 col-xs-12 menuku">Menu Saya:</div> <br>
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
                                            <a class="delete-btn  pull-right" href="{{ route('user.menudelete', $foods[$i]['id']) }}">
                                                Hapus <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ route('user.menudetail', $foods[$i]['id']) }}" class="learn-btn  pull-right">
                                                View Detail <i class="fa fa-list" aria-hidden="true"></i>
                                            </a>
                                        </div><!--/.team-box-inner-->
                                    </div><!--/.single-team-box-->
                                @php $indexloop++; @endphp
                            </div><!--.col-->
                            @endfor
                        </div><!--/.row-->
                    </div><!--/.container-->
                </div><!--/.team-card-->
            </div><!--/.team-details-->
        </div><!--/.container-->
        
    </section><!--/.team-->
    <!--team end-->
    
</x-app-layout>