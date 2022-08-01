<x-app-layout title="Masuk">
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
                        <form method="POST" action="{{ route('masuk') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        @if (session()->has('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif
                                        <div class="form-floating mt-3">
                                            <input type="text" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="Your Name" autocomplete="off">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Subject">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5 ms-4">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Masuk</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p>Belum punya akun? <a href="/daftar">Daftar disini</a></p>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</x-app-layout>