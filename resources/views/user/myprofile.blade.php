<x-app-layout title="My Profie">

    <!--service start-->
	<section  class="service">
        <div class="container">
            <div class="service-details">
                <div class="section-header text-center">
                    <div class="project-header team-header team-head text-center">
                        <h2>Biodata</h2>
                        <p>
                            Pallamco laboris nisi ut aliquip ex ea commodo consequat. 
                        </p>
                        {{-- <div class="row">
                            <div class="col-lg-8 " data-wow-delay="0.1s"> --}}
                                <form method="POST" action="{{ route('myprofile.update') }}">
                                    @csrf
                                    @method('put')
                                    {{-- <div class="row g-3"> --}}
                                        @if (session()->has('success'))
                                            <p class="col-lg-3">
                                                <div class="col-lg-6 alert alert-success" role="alert">
                                                    {{ session()->get('success') }}
                                                </div>
                                                @error('name')
                                                    <div class="span invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </p>
                                            {{-- <p class="alert alert-success ms-2 col-md-9" role="alert">
                                                {{ session()->get('success') }}
                                            </p> --}}
                                            <br><br>
                                        @endif
                                        
                                        <section>
                                            <p >
                                                <label class="mt-3" for="name">Nama Lengkap</label>
                                            </p>
                                            <p class="col-lg-3">
                                                <div class="form-floating col-lg-6 text-center">
                                                    <input type="text" class="form-control col-lg-2 text-center" name="name" value="{{ old('name', $mainuser->name) }}" id="name" placeholder="Masukkan nama lengkap anda" autocomplete="off">
                                                </div>
                                                @error('name')
                                                    <div class="span invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </p>
                                            <br><br>
                                        </section>
                                        <section>
                                            <p >
                                                <label class="mt-3" for="username">Username</label>
                                            </p>
                                            <p class="col-lg-3">
                                                <div class="form-floating col-lg-6 text-center">
                                                    <input type="text" class="form-control col-lg-2 text-center" name="username" value="{{ old('username', $mainuser->username) }}" id="username" placeholder="Masukkan username anda" autocomplete="off">
                                                </div>
                                                @error('username')
                                                    <div class="span invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </p>
                                            <br><br>
                                        </section>
                                        
                                        <section>
                                            <p >
                                                <label class="mt-3" for="email">Email</label>
                                            </p>
                                            <p class="col-lg-3">
                                                <div class="form-floating col-lg-6 text-center">
                                                    <input type="text" class="form-control col-lg-2 text-center" name="email" value="{{ old('email', $mainuser->email) }}" id="email" placeholder="Masukkan email anda" autocomplete="off">
                                                </div>
                                                @error('email')
                                                    <div class="span invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </p>
                                            <br><br>
                                        </section>
                                        
                                        <section>
                                            <p >
                                                <label class="mt-3" for="address">Alamat</label>
                                            </p>
                                            <p class="col-lg-3">
                                                <div class="form-floating col-lg-6 text-center">
                                                    <input type="text" class="form-control col-lg-2 text-center" name="address" value="{{ old('email', $mainuser->address) }}" id="address" placeholder="Masukkan alamat anda" autocomplete="off">
                                                </div>
                                                @error('address')
                                                    <div class="span invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </p>
                                            <br><br>
                                        </section>

                                        <section>
                                            <p >
                                                <label class="mt-3" for="gender">Jenis kelamin</label>
                                            </p>
                                            <p class="col-lg-3">
                                                <div class="form-floating col-lg-6 text-center">
                                                    <select value='{{ old('gender', $profiluser->gender) }}'  name="gender" class="g-start-2 mt-3 mb-4 custom-select" style="grid-row: 3; width:360px;" type="text" placeholder="Masukkan berat anda" autocomplete="off">
                                                        <option value="{{ old('gender', $profiluser->gender) }}">{{ old('gender', $gender) }}</option>
                                                        <option value="1">Laki-laki</option>
                                                        <option value="2">Perempuan</option>
                                                    </select>
                                                </div>
                                                @error('gender')
                                                    <div class="span invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </p>
                                            <br><br>
                                        </section>
                                        
                                        <section>
                                            <p >
                                                <label class="mt-3" for="age">Umur</label>
                                            </p>
                                            <p class="col-lg-3">
                                                <div class="form-floating col-lg-6 text-center">
                                                    <input type="text" class="form-control col-lg-2 text-center" name="age" value="{{ old('age', $profiluser->age) }}" id="age" placeholder="Masukkan umur anda" autocomplete="off">
                                                </div>
                                                @error('age')
                                                    <div class="span invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </p>
                                            <br><br>
                                        </section>
                                        
                                        <section>
                                            <p >
                                                <label class="mt-3" for="height">Tinggi badan</label>
                                            </p>
                                            <p class="col-lg-3">
                                                <div class="form-floating col-lg-6 text-center">
                                                    <input type="text" class="form-control col-lg-2 text-center" name="height" value="{{ old('height', $profiluser->height) }}" id="height" placeholder="Masukkan tinggi badan anda" autocomplete="off">
                                                </div>
                                                @error('height')
                                                    <div class="span invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </p>
                                            <br><br>
                                        </section>
                                        
                                        <section>
                                            <p >
                                                <label class="mt-3" for="weight">Berat badan</label>
                                            </p>
                                            <p class="col-lg-3">
                                                <div class="form-floating col-lg-6 text-center">
                                                    <input type="text" class="form-control col-lg-2 text-center" name="weight" value="{{ old('weight', $profiluser->weight) }}" id="weight" placeholder="Masukkan berat badan anda" autocomplete="off">
                                                </div>
                                                @error('weight')
                                                    <div class="span invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </p>
                                            <br><br>
                                        </section>
                                        
                                        <section>
                                            <p >
                                                <label class="mt-3" for="activity">Aktivitas fisik</label>
                                            </p>
                                            <p class="col-lg-3">
                                                <div class="form-floating col-lg-6 text-center">
                                                    <select value='{{ old('activity', $profiluser->activity) }}' id="activity" name="activity" class="g-start-2 mt-3 mb-4 custom-select" style="grid-row: 3; width:360px;" type="text" placeholder="Masukkan berat anda" autocomplete="off">
                                                        <option value="{{ old('activity', $profiluser->activity) }}">{{ old('activity', $activity) }}</option>
                                                        <option value="1">Menetap (melakukan kegiatan rumah tangga)</option>
                                                        <option value="2">Kurang Aktif (melakukan kegiatan rumah tangga + kegiatan aktif sekitar 1 jam)</option>
                                                        <option value="3">Aktif (melakukan kegiatan rumah tangga + kegiatan aktif sekitar 1 - 3 jam + disertai olahraga ringan)</option>
                                                        <option value="4">Sangat Aktif (melakukan kegiatan rumah tangga + kegiatan aktif lebih dari 3 jam + disertai olahraga sedang hingga     berat)</option></option>
                                                    </select>
                                                </div>
                                                @error('activity')
                                                    <div class="span invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </p>
                                            <br><br>
                                        </section>
                                        
                                        <section>
                                            <p >
                                                <label class="mt-3" for="exercise_activity">Jumlah olahraga dalam sehari</label>
                                            </p>
                                            <p class="col-lg-3">
                                                <div class="form-floating col-lg-6 text-center">
                                                    <select value='{{ old('exercise_activity', $profiluser->exercise_activity) }}' id="exercise_activity" name="exercise_activity" class="g-start-2 mt-3 mb-4 custom-select" style="grid-row: 3; width:360px;" type="text" placeholder="Masukkan berat anda" autocomplete="off">
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
                                            </p>
                                            <br><br>
                                        </section>

                                        <section>
                                            <p >
                                                <label class="mt-3" for="planing">Tujuan Kontrol makanan</label>
                                            </p>
                                            <p class="col-lg-3">
                                                <div class="form-floating col-lg-6 text-center">
                                                    <select value='{{ old('planing', $profiluser->planing) }}' id="planing" name="planing" class="g-start-2 mt-3 mb-4 custom-select" style="grid-row: 3; width:360px;" type="text" placeholder="Masukkan berat anda" autocomplete="off">
                                                        <option value="{{ old('planing', $profiluser->planing) }}">{{ old('planing',  $profiluser->planing) }}</option>
                                                        <option value="1">Menurunkan berat badan</option>
                                                        <option value="2">Mempertahankan berat badan</option>
                                                        <option value="3">Tambah berat badan</option>
                                                    </select>
                                                </div>
                                                @error('planing')
                                                    <div class="span invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </p>
                                            <br><br>
                                        </section>
                                        
                                        {{-- hidden --}}
                                        <input type="hidden" class="form-control" name="role" value="{{ old('role', $mainuser->role) }}" id="role" placeholder="Masukkan nama lengkap anda" autocomplete="off">
                                        
                                        <p class="col-5 ms-1 justify-content-between">
                                            {{-- <a href="/myprofile" class="btn btn-danger" type="submit">batal</a> --}}
                                            <button class="btn btn-primary" type="submit">Update</button>
                                        </p>
                                    {{-- </div> --}}
                                </form>
                            </div>
        
                        {{-- </div>
                    </div><!--/.project-header--> --}}
                    {{-- <p class="lh-2 mt-3">{{ Auth::user()->name }} ({{ Auth::user()->username }}) <br>
                        Umur: {{ $profiluser->age }} tahun, Berat saya: {{ $profiluser->weight }} Kg, {{ $profiluser->gender }} <br>
                    @php
                        if($profiluser->weight == 0 || $profiluser->height == 0 ||$profiluser->age == 0){
                            echo '<small class="text-danger">*ubah profil anda pada menu pengaturan</small>';
                        }
                    @endphp</p> --}}
                </div><!--/.section-header-->
            </div><!--/.service-details-->
        </div><!--/.container-->
        <br><br><br>
    </section><!--/.service-->
    <!--service end-->
</x-app-layout>