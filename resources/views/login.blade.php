@extends('layouts.guest')
@section('title', 'Login')

@section('content')
<div class="row justify-content-center align-items-center vh-100">
    <div class="col-md-5 d-none d-md-block">
        <img src="https://i.pinimg.com/736x/4f/91/c2/4f91c2ba29f39a60d54136dc9006a52a.jpg" alt="Kos" class="img-fluid rounded">
    </div>
    <div class="col-md-5 bg-white p-5 shadow rounded">
        <h1 class="fw-bold text-success mb-3" style="color: #A3D95D;">REFASS KOSS</h1>
        <h5 class="mb-4">Silakan masukkan username dan password anda</h5>

        @if($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" required autofocus>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <button type="submit" class="btn w-100 text-white" style="background-color: #acec57;">
                Login
            </button>
        </form>
    </div>
</div>
@endsection
