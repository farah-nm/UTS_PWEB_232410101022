@extends('layouts.app')
@section('title', 'Profil Pengguna')

@section('content')
<style>
    .cover-bg {
        height: 25vh;
        background: url('https://images.unsplash.com/photo-1607083201454-6a9a1e2b4f4c') center/cover no-repeat;
        border-bottom: 4px solid #A3D95D;
    }
    .profile-pic {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
        border: 5px solid #fff;
        margin-top: -75px;
    }
    .card-custom {
        background-color: #A3D95D;
        border-radius: 20px;
    }
</style>

<div class="cover-bg"></div>

<div class="container">
    <div class="d-flex flex-column align-items-center">
        <img src="https://i.pinimg.com/736x/1c/d5/66/1cd566b2dce707628afbafa0a0ac5c10.jpg" alt="Profile Picture" class="profile-pic shadow">
        <div class="card card-custom shadow text-center mt-4 p-4 w-100" style="max-width: 600px;">
            <h3 class="fw-bold mb-3">Profil Pengguna</h3>
            <div class="mb-2"><strong>Nama:</strong> {{ $profile['nama'] }}</div>
            <div class="mb-2"><strong>Username:</strong> {{ $username }}</div>
            <div class="mb-2"><strong>Email:</strong> {{ $profile['email'] }}</div>
            <div class="mb-2"><strong>No Telepon:</strong> {{ $profile['telepon'] }}</div>
        </div>
    </div>
</div>
@endsection
