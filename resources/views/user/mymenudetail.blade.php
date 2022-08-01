<x-app-layout title="Menu Detail">
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
                            <div class="col-lg-11 ms-4 slideInRight">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <form action="{{ route('user.menutambah') }}" style="margin-bottom: 20px" method="post">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-2">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input value="{{ old('name') }}" name="name" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" autocomplete="off" />
                                                        <label for="inputFirstName"><small>Makanan</small></label>
                                                    </div>
                                                    @error('name')
                                                        <div class="text-danger mt-0">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input value="{{ old('calorie') }}" name="calorie" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" autocomplete="off" />
                                                        <label for="inputFirstName">Kalorie</label>
                                                    </div>
                                                    @error('calorie')
                                                        <div class="text-danger mt-0">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input value="{{ old('carb') }}" name="carb" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" autocomplete="off" />
                                                        <label for="inputFirstName">Karbohidrat</label>
                                                    </div>
                                                    @error('carb')
                                                        <div class="text-danger mt-0">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                {{-- @php echo $idmenu @endphp --}}
                                                <input value="{{ $idmenu }}" name="idmenu" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" hidden/>
                                                <div class="col-md-2">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input value="{{ old('fat') }}" name="fat" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" autocomplete="off" />
                                                        <label for="inputFirstName">Lemak</label>
                                                    </div>
                                                    @error('fat')
                                                        <div class="text-danger mt-0">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input value="{{ old('protein') }}" name="protein" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" autocomplete="off" />
                                                        <label for="inputFirstName">protein</label>
                                                    </div>
                                                    @error('protein')
                                                        <div class="text-danger mt-0">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                
                                                <div class="col-md-1">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <button class="btn btn-primary mt-2" type="submit">Tambah</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                {{-- @if ($trec != 0)
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i> Data anda
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Calorie</th>
                                                <th>Karbohidrat</th>
                                                <th>Lemak</th>
                                                <th>Protein</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no= 1 ;?>
                                                    @for ($i=0 ; $i<count($foods) ; $i++ )
                                                        <tr>
                                                        <td>{{ $no }}</td>
                                                            <?php $no++;?>
                                                            <td><?php echo $foods[$i]['name']; ?></td>
                                                            <td><?php echo $foods[$i]['calorie']; ?></td>
                                                            <td><?php echo $foods[$i]['carb']; ?></td>
                                                            <td><?php echo $foods[$i]['fat']; ?></td>
                                                            <td><?php echo $foods[$i]['protein']; ?></td>
                                                            <?php $id = $foods[$i]['id']; ?>
                                                            <td class="d-flex">
                                                                <form action="{{ route('foodmenurec.hapusitem', $id) }}" method="POST">
                                                                    @csrf
                                                                    @method("delete")
                                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endfor
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                @endif --}}
                            </div>
                            @if ($trec == 0)
                                <div class="col-xl-11 ms-4 col-md-6">
                                    <div class="card bg-danger text-white mb-4">
                                        <div class="card-header">Data Anda Kosong kak</div>
                                        <div class="card-body">Silahkan tambah makanan pada menu kak </div>
                                    </div>
                                </div>
                            @endif
                            <?php $indexloop = 1 ;
                            ?>        
                            <p class="ms-4">Total Kalori pada Menu ini: {{ $totalcalorie }} Kcal</p>
                            @for ($i = 0 ; $i  < $trec; $i++)    
                                <div class="col-xl-8 ms-4 col-md-6">
                                    @if ($indexloop == 1)
                                    <div class="card bg-primary text-white mb-4">
                                    @elseif ($indexloop == 2)    
                                    <div class="card bg-success text-white mb-4">
                                    @elseif ($indexloop == 3)    
                                    <div class="card bg-warning text-white mb-4">
                                    @elseif ($indexloop == 4)    
                                    <div class="card bg-danger text-white mb-4">
                                    @php
                                        $indexloop = 0;
                                    @endphp
                                    @endif
                                            <div class="card-header">@php echo $foods[$i]['name'] @endphp</div>
                                            <div class="card-body">@php echo 
                                                                    "Kalori: ".$foods[$i]['calorie']."&nbsp"."&nbsp"."&nbsp"."&nbsp".
                                                                    "Karbohidrat: ".$foods[$i]['carb']."&nbsp"."&nbsp"."&nbsp"."&nbsp".
                                                                    "Lemak: ".$foods[$i]['fat']."&nbsp"."&nbsp"."&nbsp"."&nbsp".
                                                                    "Protein: ".$foods[$i]['protein']
                                                                    ; 
                                                                    @endphp</div>
                                            <div class="card-footer position-absolute bottom-0 end-0">
                                                <a class="btn btn-danger" href="{{ route('user.menudelete', $foods[$i]['id']) }}">Hapus <i class="fa fa-trash" aria-hidden="true"></i></button></a>
                                        </div>
                                    </div>
                                    @php
                                        $indexloop++;
                                    @endphp
                                </div>
                            @endfor
                        </div>
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