<x-app-layout title="My Profie">
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="row">
                    <div class="text-start ms-5 mx-auto mb-5 fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-1">Biodataku</h1>
                    </div>
                    <div class="row g-0 gx-5 align-items-end">
                        <div class="col-lg-8 text-start ms-4 slideInRight" data-wow-delay="0.1s">
                            <form method="POST" action="{{ route('myprofile.update') }}">
                                @csrf
                                @method('put')
                                <div class="row g-3">
                                    @if (session()->has('success'))
                                        <div class="alert alert-success ms-2 col-md-9" role="alert">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <label class="mt-3" for="name">Nama Lengkap</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="name" value="{{ old('name', $mainuser->name) }}" id="name" placeholder="Masukkan nama lengkap anda" autocomplete="off">
                                                <label for="name">Nama Lengkap</label>
                                            </div>
                                            @error('name')
                                                <div class="span invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
    
                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <label class="mt-3" for="username">Username</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="username" value="{{ old('username', $mainuser->username) }}" id="username" placeholder="Masukkan nama lengkap anda" autocomplete="off">
                                                <label for="username">Username</label>
                                            </div>
                                            @error('username')
                                                <div class="span invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
    
                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <label class="mt-3" for="email">Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="email" value="{{ old('email', $mainuser->email) }}" id="email" placeholder="Masukkan nama lengkap anda" autocomplete="off">
                                                <label for="email">Email</label>
                                            </div>
                                            @error('email')
                                                <div class="span invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
    
                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <label class="mt-3" for="address">Alamat</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="address" value="{{ old('address', $mainuser->address) }}" id="address" placeholder="Masukkan nama lengkap anda" autocomplete="off">
                                                <label for="address">Alamat</label>
                                            </div>
                                            @error('address')
                                            <div class="span invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
    
                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <label class="mt-3" for="gender">Jenis Kelamin</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <select value='{{ old('gender', $profiluser->gender) }}'  name="gender" class="g-start-2 mt-3 mb-4 custom-select" style="grid-row: 3; width:360px;" type="text" placeholder="Masukkan berat anda" autocomplete="off">
                                                    <option value="{{ old('gender', $profiluser->gender) }}">{{ old('gender', $gender) }}</option>
                                                    <option value="1">Laki-laki</option>
                                                    <option value="2">Perempuan</option>
                                                </select>
                                            </div>
                                            @error('gender')
                                            <div class="span invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
    
                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <label class="mt-3" for="age">Umur</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="age" value="{{ old('age', $profiluser->age) }}" id="age" placeholder="Masukkan nama lengkap anda" autocomplete="off">
                                                <label for="age">Umur</label>
                                            </div>
                                            @error('age')
                                            <div class="span invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
    
                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <label class="mt-3" for="weight">Berat badan (kg)</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="weight" value="{{ old('weight', $profiluser->weight) }}" id="weight" placeholder="Masukkan nama lengkap anda" autocomplete="off">
                                                <label for="weight">Berat</label>
                                            </div>
                                            @error('weight')
                                            <div class="span invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
    
                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <label class="mt-3" for="weight">Tinggi badan (cm)</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="height" value="{{ old('height', $profiluser->height) }}" id="height" placeholder="Masukkan nama lengkap anda" autocomplete="off">
                                                <label for="height">Tinggi  </label>
                                            </div>
                                            @error('height')
                                            <div class="span invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
    
                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <label class="mt-3" for="weight">Tingkat aktivitas fisik</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <select value='{{ old('activity', $profiluser->activity) }}'  name="activity" class="g-start-2 mt-3 mb-4 custom-select" style="grid-row: 3; width:360px;" type="text" placeholder="Masukkan berat anda" autocomplete="off">
                                                    <option value="{{ old('activity', $profiluser->activity) }}">{{ old('activity', $activity) }}</option>
                                                    <option value="1">Menetap</option>
                                                    <option value="2">Kurang Aktif</option>
                                                    <option value="3">Aktif</option>
                                                    <option value="4">Sangat Aktif</option>
                                                </select>
                                            </div>
                                            @error('activity')
                                            <div class="span invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
    
                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <label class="mt-2" for="weight">Jumlah olahraga dalam sehari</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                {{-- <input type="text" class="form-control" name="exercise_activity" value="{{ old('exercise_activity', $profiluser->exercise_activity) }}" id="exercise_activity" placeholder="Masukkan nama lengkap anda" autocomplete="off"> --}}
                                                <select value='{{ old('exercise_activity', $profiluser->exercise_activity) }}'  name="exercise_activity" class="g-start-2 mt-3 mb-4 custom-select" style="grid-row: 3; width:360px;" type="text" placeholder="Masukkan berat anda" autocomplete="off">
                                                    <option value="{{ old('exercise_activity', $profiluser->exercise_activity) }}">{{ old('exercise_activity', $exercise_activity) }}</option>
                                                    <option value="1">Sangat Jarang</option>
                                                    <option value="2">Jarang(1-2 kali seminggu)</option>
                                                    <option value="3">Normal(2-3 kali seminggu)</option>
                                                    <option value="4">Sering(4-5 kali seminggu)</option>
                                                    <option value="5">Sangat Sering(2 kali sehari)</option>
                                                </select>
                                            </div>
                                            @error('exercise_activity')
                                            <div class="span invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    {{-- hidden --}}
                                    <input type="hidden" class="form-control" name="role" value="{{ old('role', $mainuser->role) }}" id="role" placeholder="Masukkan nama lengkap anda" autocomplete="off">
                                    
                                    <div class="col-5 ms-1 justify-content-between">
                                        <a href="/myprofile" class="btn btn-danger" type="submit">batal</a>
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-app-layout>