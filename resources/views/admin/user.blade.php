<x-app-admin title="user">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data Member</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Member Control</li>
                </ol>
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i> Tambah Member 
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.store') }}" style="margin-bottom: 20px" method="post">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input tabindex="1" value="{{ old('name') }}" name="name" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" autocomplete="off" />
                                        <label for="inputFirstName">Nama</label>
                                    </div>
                                    @error('name')
                                        <div class="text-danger mt-0">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input tabindex="2" value="{{ old('username') }}" name="username" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" autocomplete="off" />
                                        <label for="inputFirstName">Username</label>
                                        @error('Username')
                                            <div class="text-danger mt-0">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input tabindex="3" value="{{ old('email') }}" name="email" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" autocomplete="off" />
                                        <label for="inputFirstName">Email</label>
                                        @error('email')
                                        <div class="text-danger mt-0">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input  tabindex="4" value="{{ old('address') }}" name="address" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" autocomplete="off" />
                                        <label for="inputFirstName">Alamat</label>
                                        @error('address')
                                        <div class="text-danger mt-0">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input tabindex="4" value="{{ $total }}" name="nomeranggota" style="cursor: not-allowed" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" readonly/>
                                        <label for="inputFirstName">Nomer Anggota</label>
                                        @error('nomeranggota')
                                        <div class="text-danger mt-0">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-md-2">
                                    <div class="form-floating mb-3 mb-md-0"> --}}
                                        <input value="3" name="role" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" hidden/>
                                        {{-- <label for="inputFirstName">Role </label>
                                        @error('role')
                                        <div class="text-danger mt-0">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div> --}}
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input tabindex="5" value="{{ old('password') }}" name="password" class="form-control" id="inputFirstName" type="password" placeholder="Enter your first name" />
                                        <label for="inputFirstName">Password</label>
                                        @error('password')
                                        <div class="text-danger mt-0">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <button tabindex="6" class="btn btn-primary mt-2" type="submit">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i> Control
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No.Anggota</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Tgl Daftar</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No.Anggota</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Tgl Daftar</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($users as $index => $user)
                                    <tr>
                                        <td>{{ $user->nomeranggota }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>{{ $user->created_at }}</td>
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