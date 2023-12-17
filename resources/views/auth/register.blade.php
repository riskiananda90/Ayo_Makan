<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Registrasi</title>
    <link rel="stylesheet" href="{{ asset('assets/css/daftar.css') }}">
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <form action="{{ route('register') }}" method="POST">
                <h1>Sign Up</h1>
                <div class="user-details">
                    <div class="input-box">
                        <label class="details">Nama Lengkap</label>
                        <input id="name" type="text" class="form-control @error('nama') is-invalid @enderror"
                            name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus
                            placeholder="Masukan Nama Lengkap">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="input-box">
                        <label class="details">{{ __('Email') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email"
                            placeholder="Masukan Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-box">
                        <label class="details">{{ __('Alamat') }}</label>
                        <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"
                            name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat"
                            placeholder="Masukan Email">

                    </div>
                    <div class="input-box">
                        <label class="details">Nomor telepon</label>
                        <input id="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror"
                            name="no_telp" value="{{ old('no_telp') }}" required autocomplete="no_telp"
                            placeholder="Masukan Nomor Telepon">
                    </div>
                    <div class="input-box">
                        <label class="details">Password</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password" placeholder="Masukkan Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-box">
                        <label class="details">{{ __('Konfiramsi Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" placeholder="Masukan Ulang Password">

                    </div>
                </div>

                <button type="submit" class="btn">Sign Up</button>

                <div class="register-link">
                    <p>You have an account?
                        <a href="{{ route('login') }}">Login</a>
                    </p>
                </div>
            </form>
        </div>

    </div>


</body>

</html>
