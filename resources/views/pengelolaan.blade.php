@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Penghuni Aktif</h2>
        <a href="#" class="btn btn-primary">+ Tambah Penghuni</a>
    </div>

    <div class="table-responsive">
        <table class="table align-middle table-hover border shadow-sm rounded">
            <thead class="table-light">
                <tr>
                    <th>Penghuni</th>
                    <th>No Kamar</th>
                    <th>Tanggal Masuk</th>
                    <th>Status Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengelolaan as $data)
                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-person-circle fs-4 text-primary"></i>
                            <span>{{ $data['nama'] }}</span>
                        </div>
                    </td>
                    <td>{{ $data['kamar'] }}</td>
                    <td>{{ $data['masuk'] }}</td>
                    <td>
                        @php
                            $badge = [
                                'Lunas' => 'success',
                                'Belum Lunas' => 'warning',
                                'Menunggu' => 'info',
                                'Tunggakan' => 'danger',
                                'Diskon' => 'primary'
                            ][$data['status']] ?? 'secondary';
                        @endphp
                        <span class="badge bg-{{ $badge }}">{{ $data['status'] }}</span>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-light border-0" data-bs-toggle="dropdown">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Lihat Detail</a></li>
                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                <li><a class="dropdown-item text-danger" href="#">Hapus</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
