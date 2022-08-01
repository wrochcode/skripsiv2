<x-app-admin title="About">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data Visitor</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Visitor Data</li>
                </ol>
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i> Tambah Data Event
                    </div>
                    <div class="card-body">
                        <form action="{{ route('visit.store') }}" style="margin-bottom: 20px" method="post">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input value="{{ Auth::user()->name }}" style="cursor: not-allowed" name="responsibility" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" disabled/>
                                        <label for="inputFirstName">Admin</label>
                                    </div>
                                    @error('responsibility')
                                        <div class="text-danger mt-0">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input value="{{ old('day') }}" name="day" class="form-control" id="inputFirstName" type="date" placeholder="Enter your first name" autocomplete="off" />
                                        <label for="inputFirstName">Day</label>
                                    </div>
                                    @error('day')
                                        <div class="text-danger mt-0">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input value="{{ old('visitor') }}" name="visitor" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" autocomplete="off" />
                                        <label for="inputFirstName">Visitor</label>
                                    </div>
                                    @error('visitor')
                                        <div class="text-danger mt-0">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input value="{{ old('student') }}" name="student" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" autocomplete="off" />
                                        <label for="inputFirstName">Pelajar</label>
                                    </div>
                                    @error('student')
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
                        <i class="fas fa-table me-1"></i> Data Event
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Penanggung Jawab</th>
                                    <th>Hari</th>
                                    <th>Total Pengunjung</th>
                                    <th>Jml Pelajar</th>
                                    <th>Jml Pengunjung Umum</th>
                                    <th>Total Pendapatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Penanggung Jawab</th>
                                    <th>Hari</th>
                                    <th>Total Pengunjung</th>
                                    <th>Jml Pelajar</th>
                                    <th>Jml Pengunjung Umum</th>
                                    <th>Total Pendapatan</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $no =1 ;?>
                                @foreach ($visits as $index => $visit)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <?php $no++ ;?>
                                        <td>{{ $visit->responsibility }}</td>
                                        <td>{{ $visit->day }}</td>
                                        <td>{{ $visit->visitor }}</td>
                                        <td>{{ $visit->student }}</td>
                                        <td>{{ $visit->reguler }}</td>
                                        <td>Rp. <?php echo number_format($visit->money,2,',','.') ?></td>
                                        <td class="d-flex"><a class="btn btn-primary me-2"href="{{ route('visit.edit',$visit->id) }}">Edit</a>
                                            <form action="{{ route('visit.destroy',$visit->id) }}" method="POST">
                                                @csrf
                                                @method("delete")
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form></td>
                                    </tr>
                                @endforeach
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