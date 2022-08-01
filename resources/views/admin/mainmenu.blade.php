<x-app-admin title="Dashboard">
    <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Menu</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Food Menu Bundling</li>
                    </ol>
                    {{-- card --}}
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="card mb-4 col-xl-5">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i> Tambah Menu
                        </div>
                        <div class="card-body">
                            <form action="{{ route('foodmenu.store') }}" style="margin-bottom: 20px" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-9">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input value="{{ old('name') }}" name="name" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" autocomplete="off" />
                                            <label for="inputFirstName">Nama menu</label>
                                        </div>
                                        @error('name')
                                            <div class="text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <input value="0" name="calorie" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" hidden/>
                                    <input value="0" name="carb" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" hidden/>
                                    <input value="0" name="fat" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" hidden/>
                                    <input value="0" name="protein" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" hidden/>
                                    <div class="col-md-1">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <button class="btn btn-primary mt-2" type="submit">Tambah</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i> Data Rakomendasi Menggunakan SAW
                        </div>
                        <div class="card-body">
                            <div class="row ms-1 mb-3">
                                {{ $metode }} Metode<br>Criteria: 
                                @foreach ($criterias as $index =>  $criteria)
                                    {{ $criteria }}
                                @endforeach
                            </div>
                            @if (isset($recs))
                            <div class="row mb-3">
                                <?php $number = 1; ?>
                                @for ($i= 0 ;$i<$trec;$i++)
                                    <div class="col-md-3 mt-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input value="<?php echo $recs[$i]['name'];?>" name="name" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" autocomplete="off" />
                                            <label for="inputFirstName">Rank {{ $number }}</label>
                                        </div>
                                        <?php $number++;?>
                                    </div>
                                @endfor
    
                                <div class="col-md-1">
                                    <div class="form-floating mb-3 ">
                                        <a href="{{ route('foodmenu.full') }}"class="btn btn-primary mt-2" type="submit">Lihat Semua</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <h1 class="mt-4">Item Menu Makanan</h1>
                    @if ($trec == null)
                        <div class="row">
                            <div class="col-xl-12 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-header">Menu Kosong kak</div>
                                    <div class="card-body">Menu kosong, silahkan tambahkan menu</div>
                                </div>
                            </div>
                        </div>   
                    @endif
                    <div class="row">
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
                                            <a class="btn btn-danger" href="{{ route('foodmenu.destroy', $foods[$i]['id']) }}">Hapus <i class="fa fa-trash" aria-hidden="true"></i></button></a>
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
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a> &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</x-app-admin>