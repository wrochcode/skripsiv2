<x-app-auth title="Login Page">
    <!-- Outer Row -->
    <div class="wrapper">
        <div class="logo">
            <a href="/">
                <img class="img-fluid" src="img/icon-deal.png" alt="Icon"">
            </a>
        </div>
        <div class="row">
            <div class="text-center col-lg-12 mt-2 name">
                Rainbow Gym- login
            </div>
        </div>
        <form class="p-3 mt-2" method="POST" action="{{ route('masuk') }}">
            @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" value="{{ old('email') }}" name="email" id="email" placeholder="email anda">
            </div>
            @error('email')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Password">
                @error('password')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center mt-lg-1 fs-6">
            Belum Punya Akun?<a href="https://api.whatsapp.com/send?phone=62895326920220&text=Halo,%20saya%20ingin%20daftar%20member%20gym">Daftar disini!</a>
        </div>
    </div>
</x-app-auth>