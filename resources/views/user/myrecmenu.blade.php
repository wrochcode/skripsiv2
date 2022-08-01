<x-app-layout title="My Rec Menu">
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

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="row">
                    <div class="col-9 mt-5">
                        <div class="row">
                            <div class="blogs-widget">
                                <div class="blog-tags">
                                    <a href="{{ route('user.index') }}" class="btn btn-default">Kebutuhan Anda</a>
                                    <a href="{{ route('user.menurec') }}" class="btn btn-default">Menu Rekomendasi</a>
                                    <a href="{{ route('user.menu') }}" class="btn btn-default">Menu Saya</a>
                                    {{-- <a href="{{ route('user.weight') }}" class="btn btn-default">Menu Saya</a> --}}
                                </div>
                                <!--/.blog-tags-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!--team start -->
    <section id="team" class="team  team-main">
        <div class="container">
            <div class="team-details">
                <div class="team-card">
                    <div class="container">
                        <div class="row">
                            <?php $indexloop = 1 ;?>
                            <div class="col-lg-8 col-xs-12 menuku">Rekomendasi untuk saya:</div> <br>
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
                                            <a href="{{ route('usermenurec.detail', $foods[$i]['id']) }}" class="learn-btn">
                                                View Detail
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