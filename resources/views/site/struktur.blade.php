@extends('layouts.app')

@section('title', 'Struktur Organisasi')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}">
@endpush

@section('content')
    <div class="org-chart-container">
        <header class="org-header">
            <img src="{{ asset('images/rshp.png') }}" alt="RSHP Logo" class="header-logo">
            <div class="org-header-text">
                <h2>STRUKTUR PIMPINAN</h2>
                <h1>RUMAH SAKIT HEWAN PENDIDIKAN<br>UNIVERSITAS AIRLANGGA</h1>
            </div>
            <img src="{{ asset('images/unair.png') }}" alt="Unair Logo" class="header-logo">
        </header>
        <div class="org-level">
            <div class="person-card director">
                <h3>DIREKTUR</h3>
                <img src="{{ asset('images/ira.jpg') }}" alt="Photo of Dr. Ira Sari Yudaniayanti" class="profile-pic">
                <p class="name">Dr. Ira Sari Yudaniayanti, M.P., drh.</p>
            </div>
        </div>
        <div class="org-level vice-directors">
            <div class="person-card">
                <h3>WAKIL DIREKTUR 1</h3>
                <p class="role">PELAYANAN MEDIS, PENDIDIKAN DAN PENELITIAN</p>
                <img src="{{ asset('images/nusdianto.jpg') }}" alt="Photo of Dr. Nusdianto Triakoso" class="profile-pic">
                <p class="name">Dr. Nusdianto Triakoso, M.P., drh.</p>
            </div>
            <div class="person-card">
                <h3>WAKIL DIREKTUR 2</h3>
                <p class="role">SUMBER DAYA MANUSIA, SARANA PRASARANA DAN KEUANGAN</p>
                <img src="{{ asset('images/miyayu.jpg') }}" alt="Photo of Dr. Miyayu Soneta S" class="profile-pic">
                <p class="name">Dr. Miyayu Soneta S., M.Vet., drh.</p>
            </div>
        </div>
    </div>
@endsection