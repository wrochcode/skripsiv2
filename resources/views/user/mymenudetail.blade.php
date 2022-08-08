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
                    <div class="container">
                        <form method="post" action="{{ route('user.menutambah') }}">
                            @csrf
                            <div class="row col-sm-7 ">
                                <p class="form-group col-sm-12 " >
                                    <a href="{{ route('user.menu') }}">Kembali ke Menu Saya</a>
                                </p>
                                
                                <input value="{{ $idmenu }}" name="idmenu" class="form-control" id="inputFirstName" type="hidden" placeholder="Enter your first name" hidden/>
                                
                                <div class="form-group col-sm-12">
                                    <label for="name">Nama Makanan</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" placeholder="Masukkan nama makanan" autocomplete="off">
                                </div><!--/.form-group-->

                                <br>
                                <div class="form-group col-sm-6">
                                    <label for="calorie">Kalori</label>
                                    <input type="text" class="form-control" name="calorie" value="{{ old('calorie') }}" id="calorie" placeholder="Kalori makanan" autocomplete="off">
                                </div><!--/.form-group-->
                                @error('calorie')
                                    <div class="text-danger mt-0">
                                        {{ $message }}
                                    </div>
                                @enderror
                                
                                <div class="form-group col-sm-6">
                                    <label for="carb">Karbohidrat</label>
                                    <input type="text" class="form-control" name="carb" value="{{ old('carb') }}" id="carb" placeholder="Karbohidrat makanan" autocomplete="off">
                                </div><!--/.form-group-->
                                @error('carb')
                                    <div class="text-danger mt-0">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <br>
                                <div class="form-group col-sm-6">
                                    <label for="fat">Lemak</label>
                                    <input type="text" class="form-control" name="fat" value="{{ old('fat') }}" id="fat" placeholder="Lemak makanan" autocomplete="off">
                                </div><!--/.form-group-->
                                @error('fat')
                                    <div class="text-danger mt-0">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="form-group col-sm-6">
                                    <label for="protein">Protein</label>
                                    <input type="text" class="form-control" name="protein" value="{{ old('protein') }}" id="protein" placeholder="Protein makanan" autocomplete="off">
                                </div><!--/.form-group-->
                                @error('protein')
                                    <div class="text-danger mt-0">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="blogs-widget col-sm-3">
                                    <button type="submit" class="btn btn-default">Tambah makanan <i class="fa fa-plus" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </form>
                        <br>
                        
                    </div><!--/.container-->
                    <div class="container">
                        <div class="row col-sm-9">
                            <div class="col-lg-8 col-xs-12 menuku">Makanan Saya:</div> <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Makanan</th>
                                        <th scope="col">Kalori (Kcal)</th>
                                        <th scope="col">Karbohidrat (g)</th>
                                        <th scope="col">Lemak (g)</th>
                                        <th scope="col">Protein (g)</th>
                                        <th scope="col">aksi</th>
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
                                        
                                        
                                        @for ($i = 0 ; $i  < $trec; $i++)
                                        <tr>
                                            <td scope="col">@php echo $foods[$i]['name'] @endphp</td>
                                            <td scope="col">@php echo $foods[$i]['calorie']@endphp</td>
                                            <td scope="col">@php echo $foods[$i]['carb']@endphp</td>
                                            <td scope="col">@php echo $foods[$i]['fat']@endphp</td>
                                            <td scope="col">@php echo $foods[$i]['protein']@endphp</td>
                                            <td scope="col">
                                                <a href="{{ route('user.itemhapus', $foods[$i]['id']) }}" style="color: red">Hapus</a>
                                            </td>
                                        </tr>
                                        @endfor
                                    @endif
                                </tbody>
                            </table>
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
                                                <th>Name</th>
                                                <th>Calorie</th>
                                                <th>Karbohidrat</th>
                                                <th>Lemak</th>
                                                <th>Protein</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Calorie</th>
                                                <th>Karbohidrat</th>
                                                <th>Lemak</th>
                                                <th>Protein</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @if ($fooddatabases!=null)
                                                @foreach ($fooddatabases as $index => $food)
                                                    <tr>
                                                        <td>{{ $food->name }}</td>
                                                        <td>{{ $food->calorie }}</td>
                                                        <td>{{ $food->carb }}</td>
                                                        <td>{{ $food->fat }}</td>
                                                        <td>{{ $food->protein }}</td>
                                                        <td class="d-flex">
                                                            <form action="{{ route('usermenu.add') }}" style="margin-bottom: 20px" method="post">
                                                                @csrf
                                                                <input type="hidden" name="idmenu" value="{{ $idmenu }}">
                                                                <input type="hidden" name="iditem" value="{{ $food->id }}">
                                                                <button type="submit" class="btn btn-primary me-2"> Tambah ke menu</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td>Null</td>
                                                    <td>Null</td>
                                                    <td>Null</td>
                                                    <td>Null</td>
                                                    <td>Null</td>
                                                    <td>Null</td>
                                                </tr>
                                            @endif
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