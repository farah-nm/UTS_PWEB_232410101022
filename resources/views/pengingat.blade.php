@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Pengingat & Layanan</h2>
    <div class="row">
        <div class="col-md-6">
            <h4>Pengingat</h4>
            <ul class="list-group mb-4">
                @foreach($pengingat as $item)
                    <li class="list-group-item">{{ $item }}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-6">
            <h4>Layanan</h4>
            <ul class="list-group mb-4">
                @foreach($layanan as $item)
                    <li class="list-group-item">{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
