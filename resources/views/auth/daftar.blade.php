<x-app-layout title="daftar">
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Cari Cara Sehat Terbaik dengan gayamu sendiri</h1>
                <p>Login di <a href="/">{{ $namecompany->value }}</a> Sekarang</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">

                </div>
                <div class="col-md-8 ">
                    <div class="wow fadeInUp" data-wow-delay="0.5s">
                        <form method="POST" action="{{ route('daftar') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" placeholder="Masukkan nama lengkap anda" autocomplete="off">
                                            <label for="email">Nama Lengkap</label>
                                        </div>
                                        @error('name')
                                            <div class="span invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="username" value="{{ old('username') }}" id="username" placeholder="Masukkan username anda" autocomplete="off">
                                            <label for="username">Username</label>
                                        </div>
                                        @error('username')
                                            <div class="span invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="Your Name" autocomplete="off">
                                            <label for="email">Email</label>
                                        </div>
                                        @error('email')
                                            <div class="span invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="address" value="{{ old('address') }}" id="address" placeholder="Masukkan alamat anda" autocomplete="off">
                                            <label for="address">Alamat</label>
                                        </div>
                                        @error('address')
                                            <div class="span invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <input type="hidden" class="form-control" name="role" value="3" id="address" placeholder="Masukkan alamat anda" autocomplete="off">

                                <div class="row mt-3">
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Subject">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-5 ms-4">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Daftar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p>Sudah punya akun? <a href="/masuk">Masuk disini</a></p>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-app-layout>