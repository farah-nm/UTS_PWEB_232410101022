@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h2 class="mb-4">Dashboard</h2>
    <p>
        Hi {{ $username }},
        <br>
        Selamat datang di dashboard manajemen kos! Di sini Anda dapat melihat ringkasan informasi penting tentang
        pengelolaan kos Anda.
    </p>

    <div class="row g-4 mb-5">
        <div class="col-md-3">
            <div class="card bg-light border-0 shadow-sm">
                <div class="card-body text-center">
                    <h5>Total Kamar</h5>
                    <h2>{{ $statistik['total_kamar'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success-subtle border-0 shadow-sm">
                <div class="card-body text-center">
                    <h5>Kamar Terisi</h5>
                    <h2>{{ $statistik['terisi'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning-subtle border-0 shadow-sm">
                <div class="card-body text-center">
                    <h5>Kamar Kosong</h5>
                    <h2>{{ $statistik['kosong'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-info-subtle border-0 shadow-sm">
                <div class="card-body text-center">
                    <h5>Pendapatan Bulan Ini</h5>
                    <h2>{{ $statistik['pendapatan'] }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-4">
        <h4 class="mb-3">Tipe Kamar di Refass Kos</h4>
        <div class="row g-4">
            @foreach ($kamar as $k)
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ $k['img'] }}" class="card-img-top" alt="{{ $k['tipe'] }}">
                        <div class="card-body text-center">
                            <div class="mb-2">
                                <i class="bi bi-house-door fs-1 text-success"></i>
                            </div>
                            <h5 class="card-title">{{ $k['tipe'] }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
