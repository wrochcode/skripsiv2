<x-app-layout title="My SAW Recomendasi">
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
                        <div class="row col-sm-12">
                            <p class="form-group col-sm-12 " >
                                <a href="{{ route('user.menu') }}">Kembali ke Menu Saya</a>
                            </p>
                            <div class=" col-xs-12 menuku">Rank rekomendasi Menu Saya:</div> <br>
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
                                    @if ($trec<1)
                                    <tr>
                                        <td scope="col">Belum ditambahkan</td>
                                        <td scope="col">-</td>
                                        <td scope="col">-</td>
                                        <td scope="col">-</td>
                                        <td scope="col">-</td>
                                        <td scope="col">
                                            -
                                        </td>
                                    </tr>
                                    @else
                                        <?php $indexloop = 1 ;?>
                                        
                                        <?php $no =1 ;?>
                                        @for ($i = 0 ; $i  < $trec; $i++)
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
                                    @endif
                                </tbody>
                            </table>
                        </div><!--/.row-->
                    </div>
                </div><!--/.team-card-->
            </div><!--/.team-details-->
        </div><!--/.container-->
        
    </section><!--/.team-->
    <!--team end-->
    
</x-app-layout>

