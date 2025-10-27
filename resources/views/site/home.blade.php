@extends('layouts.app')

@section('title', 'Homepage RSHP')

@push('styles')
    {{-- Memanggil CSS khusus untuk halaman home --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
    <nav class="secondary-nav">
        <ul>
            <li><a href="https://unair.ac.id/" target="_blank">UNAIR</a></li>
            <li><a href="https://fkh.unair.ac.id/" target="_blank">FKH UNAIR</a></li>
            <li><a href="https://mahasiswa.unair.ac.id/" target="_blank">Cyber Campus</a></li>
        </ul>
    </nav>

    <main class="hero-section">
        <div class="hero-container">
            <div class="hero-left">
                <a href="#" class="btn btn-yellow">PENDAFTARAN ONLINE</a>
                <p>
                    Rumah Sakit Hewan Pendidikan Universitas Airlangga berinovasi
                    untuk selalu meningkatkan kualitas pelayanan, maka dari itu
                    Rumah Sakit Hewan Pendidikan Universitas Airlangga mempunyai
                    fitur pendaftaran online yang mempermudah untuk mendaftarkan
                    hewan kesayangan anda.
                </p>
                <a href="{{ route('jadwal-dokter') }}" class="btn btn-blue">INFORMASI JADWAL DOKTER JAGA</a>
            </div>
            <div class="hero-right">
                <div class="video-container">
                    <iframe 
                       width="560" 
                       height="315" 
                       src="https://www.youtube.com/embed/rCfvZPECZvE?si=u2X_Ls5Y1d8ozRiN" 
                       title="YouTube video player" 
                       frameborder="0" 
                       allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                       referrerpolicy="strict-origin-when-cross-origin" 
                       allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <section class="news-section">
            <div class="section-titles">
                <h2>Latest News</h2>
            </div>
            <div class="news-grid">
                <div class="news-card">
                    <img src="{{ asset('images/gambar1.jpeg') }}" alt="Open Recruitment">
                    <div class="news-card-content">
                        <h3>SELEKSI PENERIMAAN PEGAWAI TIDAK TETAP RUMAH SAKIT HEWAN PENDIDIKAN TAHUN 2023</h3>
                        <span class="news-date">9 January 2023</span>
                        <p>Rumah Sakit Hewan Pendidikan memberikan kesempatan bagi Warga Negara Indonesia (WNI) untuk menjadi Pegawai...</p>
                        <a href="#" class="read-more">Read more...</a>
                    </div>
                </div>
                <div class="news-card">
                    <img src="{{ asset('images/gambar2.jpg') }}" alt="Kunjungan">
                    <div class="news-card-content">
                        <h3>Kunjungan Prof Dr. Siti Khairani Bejo (UPM) di RSHP Universitas Airlangga</h3>
                        <span class="news-date">29 November 2022</span>
                        <p>Hari ini, 29 Nopember 2022 Rumah Sakit Hewan Pendidikan mendapat kejutan atas kunjungan Prof Dr. Siti Khairani...</p>
                        <a href="#" class="read-more">Read more...</a>
                    </div>
                </div>
                <div class="news-card">
                    <img src="{{ asset('images/gambar3.jpg') }}" alt="Pet Festival">
                    <div class="news-card-content">
                        <h3>PET FESTIVAL di RSHP Unair</h3>
                        <span class="news-date">23 November 2022</span>
                        <p>RSHP Unair dalam menyemarakkan Dies Natalis Universitas Airlangga menyelenggarakan kegiatan PET FESTIVAL...</p>
                        <a href="#" class="read-more">Read more...</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <section class="location-section">
        <div class="container">
            <div class="section-titles">
                <h2>Lokasi Kami</h2>
            </div>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.883727993019!2d112.7834113147746!3d-7.25414499476286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa203306509b%3A0x28591f7481d6928a!2sRumah%20Sakit%20Hewan%20Pendidikan%20Universitas%20Airlangga!5e0!3m2!1sen!2sid!4v1633583329088!5m2!1sen!2sid"
                    width="450" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
@endsection