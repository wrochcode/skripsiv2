<x-app-admin title="About">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data Makanan</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Food Control</li>
                </ol>
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if (session()->has('danger'))
                    <div class="alert alert-danger" role="alert">
                        {{ session()->get('danger') }}
                    </div>
                @endif
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i> Tambah Data Makanan
                    </div>
                    <div class="card-body">
                        <form action="{{ route('foodmenurec.tambah') }}" style="margin-bottom: 20px" method="post">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input value="{{ old('name') }}" name="name" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" autocomplete="off" />
                                        <label for="inputFirstName">Nama Makanan</label>
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
                
                <div class="card mb-4">
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
                        @endif
                    </div>
                </div>

                <div class="card mb-4">
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
                                                <form action="{{ route('foodmenurec.add') }}" style="margin-bottom: 20px" method="post">
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
</x-app-admin>