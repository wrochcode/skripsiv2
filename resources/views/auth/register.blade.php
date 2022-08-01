<x-app-auth>
    <!-- Outer Row -->
    <div class="wrapper">
        <div class="logo">
            <a href="/">
                <img class="img-fluid" src="img/icon-deal.png" alt="Icon"">
            </a>
        </div>
        <div class="row">
            <div class="text-center col-lg-12 mt-2 name">
                SehatYokk - login
            </div>
        </div>
        <form class=" mt-2" method="post" action="{{ route('register') }}" autocomplete="off">
            @csrf
            {{-- <label for="Email" class="form-label">Email</label> --}}
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" value="{{ old('email') }}" name="email" id="email" placeholder="email anda">
            </div>
            @error('email')
                <div class="text-danger mt-0">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" value="{{ old('name') }}" name="name" id="name" placeholder="nama anda">
            </div>
            @error('name')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" value="{{ old('username') }}" name="username" id="username" placeholder="username anda">
            </div>
            @error('username')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            @error('password')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
            <button type="submit" class="btn mt-3">Register</button>
        </form>
        <div class="text-center mt-lg-1 ">
            Sudah Punya Akun?<a href="{{ route('masuk') }}">Login</a>
        </div>
    </div>
</x-app-auth>