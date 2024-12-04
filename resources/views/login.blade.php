@extends('layout')

@section('content')
<style>
    body {
        background-image: url('https://i.pinimg.com/736x/29/7a/53/297a53ed3a0b71af7f89ab9f4d08e156.jpg');
        background-size: cover;
        background-position: center;
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        color: #3c3c3b;
    }

    .form-container {
        background-color: rgba(245, 245, 240, 0.9); /* Latar belakang form dengan warna natural */
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .btn-login {
        background: linear-gradient(to right, #8baf74, #6b8e5c);
        justify-content: center
        border: none;
        border-radius: 6px;
        color: #fff;
        font-weight: 600;
        padding: 8px 20px;
        font-size: 0.9rem;
        transition: background 0.3s ease, transform 0.2s ease;
        margin-top: 10px;
    }

    .btn-login:hover {
        background: linear-gradient(to right, #6b8e5c, #546f45);
        transform: scale(1.05);
    }
    .d-grid {
    display: flex; /* Susun tombol secara horizontal */
    gap: 15px; /* Jarak antara tombol */
    justify-content: center; /* Pusatkan tombol */
    }


    .form-control:focus {
        border-color: #8baf74;
        box-shadow: 0 0 5px rgba(139, 175, 116, 0.5);
    }

    .text-center a {
        color: #8baf74; /* Warna link natural */
        font-weight: bold;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .text-center a:hover {
        color: #6b8e5c;
    }
    .text-center{
        color: #4a892f;
    }
</style>

<div class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="form-container col-md-4">
        <h2 class="text-center mb-4">Login</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('proses_login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-login">Login</button>
                <button type="submit" class="btn btn-login">Login Admin</button>
            </div>
        </form>
        <p class="text-center mt-3">
            Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>
        </p>
    </div>
</div>
@endsection
