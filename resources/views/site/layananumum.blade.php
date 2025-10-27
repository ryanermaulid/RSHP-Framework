@extends('layouts.app')

@section('title', 'Layanan Umum')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}">
@endpush

@section('content')
    <div class="page-title-bar">
        <h1>Layanan Umum</h1>
    </div>

    <main class="page-content" style="padding: 20px;">
        <div class="container">
            <p>Rumah Sakit Hewan Pendidikan Universitas Airlangga melakukan layanan-layanan, baik atas kehendak klien atau rujukan dokter hewan praktisi sebagai berikut:</p>
            <div class="layanan-grid">
                <div class="layanan-column">
                    <div class="layanan-item">
                        <h3>Poliklinik</h3>
                        <p>Layanan rawat jalan dimana pelayanan kesehatan hewan dilakukan tanpa pasien menginap. Poliklinik melayani tindakan observasi, diagnosis, pengobatan, rehabilitasi medik, serta permintaan surat keterangan sehat.</p>
                        <p>Layanan kesehatan di poliklinik antara lain:</p>
                        <ul>
                            <li>Rawat jalan & Vaksinasi</li>
                            <li>Akupuntur & Kemoterapi</li>
                            <li>Fisioterapi & Mandi terapi</li>
                        </ul>
                    </div>
                    <div class="layanan-item">
                        <h3>Rawat Inap</h3>
                        <p>Dilakukan pada pasien-pasien yang berat atau parah dan membutuhkan perawatan intensif. Pasien akan diobservasi dan mendapat perawatan intensif dibawah pengawasan dokter dan paramedis yang handal.</p>
                    </div>
                </div>
                <div class="layanan-column">
                    <div class="layanan-item">
                        <h3>Bedah</h3>
                        <p><strong>Tindakan Bedah Minor:</strong></p>
                        <ul>
                            <li>Jahit luka, Kastrasi, Othematoma</li>
                            <li>Scaling – root planning, Ekstraksi gigi</li>
                        </ul>
                        <p><strong>Tindakan Bedah Mayor:</strong></p>
                        <ul>
                            <li>Gastrotomi, Entrotomi, Enterektomi</li>
                            <li>Ovariohisterektomi, Sectio caesar, Piometra</li>
                            <li>Sistotomi, Urethrostomi, Fraktur tulang</li>
                            <li>Hernia (diafragmatika, perinealis, inguinalis)</li>
                            <li>Eksisi tumor</li>
                        </ul>
                    </div>
                    <div class="layanan-item">
                        <h3>Pemeriksaan</h3>
                        <ul>
                            <li>Pemeriksaan Sitologi</li>
                            <li>Pemeriksaan Dermatologi</li>
                            <li>Pemeriksaan Hematologi</li>
                            <li>Pemeriksaan Radiografi</li>
                            <li>Pemeriksaan Ultrasonografi</li>
                        </ul>
                    </div>
                </div>
            </div>
            <p>Selain layanan medis, Rumah Sakit Hewan Pendidikan Universitas Airlangga juga melayani <em>grooming</em> pada hewan kesayangan.</p>
        </div>
    </main>
@endsection