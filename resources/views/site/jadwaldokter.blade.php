@extends('layouts.app')

@section('title', 'Informasi Dokter Jaga')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}">
@endpush

@section('content')
    <div class="page-title-bar" style="text-align: center; padding: 20px 0;">
        <h1>Informasi Dokter Jaga</h1>
    </div>

    <main class="page-content">
        <div class="container schedule-container">
            <img src="{{ asset('images/jadwaldokterjaga.jpg') }}" alt="Jadwal Dokter Jaga Senin - Rabu">
            <img src="{{ asset('images/jadwaldokterjaga2.jpg') }}" alt="Jadwal Dokter Jaga Kamis - Jumat">
        </div>
    </main>
@endsection