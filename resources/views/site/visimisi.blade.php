@extends('layouts.app')

@section('title', 'Visi & Misi')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}">
@endpush

@section('content')
    <main class="vmt-page-wrapper">
        <div class="container">
            <header class="vmt-header">
                <h1>Visi, Misi, & Tujuan</h1>
                <p>Komitmen kami untuk masa depan yang lebih baik.</p>
            </header>
            <div class="vmt-cards-grid">
                <div class="vmt-card">
                    <div class="vmt-card-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h2>Visi</h2>
                    <div class="vmt-card-content">
                        <p>Menjadi Rumah Sakit Hewan Pendidikan terkemuka di tingkat nasional dan internasional dalam pemberian pelayanan paripurna, pendidikan, dan penelitian di bidang kesehatan hewan, yang unggul dan mandiri serta bermartabat berdasarkan moral, agama, etika dengan tetap berorientasi pada kesejahteraan masyarakat.</p>
                    </div>
                </div>
                <div class="vmt-card">
                    <div class="vmt-card-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h2>Misi</h2>
                    <div class="vmt-card-content">
                        <ul>
                            <li>Menyelenggarakan fungsi pelayanan terintegrasi, bermutu dan mengutamakan keselamatan dan kesehatan pasien (klien).</li>
                            <li>Menyelenggarakan pendidikan dan pelatihan terintegrasi untuk menghasilkan lulusan yang kompeten.</li>
                            <li>Melakukan penelitian terintegrasi berbasis pada keunggulan bidang kedokteran hewan.</li>
                            <li>Menjadi pusat rujukan pelayanan kedokteran hewan yang unggul.</li>
                            <li>Mengembangkan manajemen rumah sakit hewan yang produktif, efisien, dan bermutu.</li>
                        </ul>
                    </div>
                </div>
                <div class="vmt-card">
                    <div class="vmt-card-icon">
                        <i class="fas fa-flag-checkered"></i>
                    </div>
                    <h2>Tujuan</h2>
                    <div class="vmt-card-content">
                        <p>Menjadi Rumah Sakit Hewan yang adaptif, kreatif, dan proaktif terhadap perkembangan ilmu pengetahuan dan teknologi, serta menjadi Rumah Sakit Hewan mandiri yang bertatakelola baik.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection