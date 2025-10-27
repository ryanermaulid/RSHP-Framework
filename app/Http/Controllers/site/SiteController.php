<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class SiteController extends Controller
{
    public function home() {
        return view('site.home');
    }

    public function strukturOrganisasi() {
        return view('site.struktur');
    }

    public function layanan() {
        return view('site.layananumum');
    }

    public function visiMisi() {
        return view('site.visimisi');
    }

    public function jadwalDokter() {
        return view('site.jadwaldokter');
    }

    public function cekKoneksi()
    {
        try 
        {
            DB::connection()->getPdo();
            return 'Koneksi ke database berhasil!';
        } 
        catch (Exception $e) {
            return 'Koneksi ke database gagal: ' . $e->getMessage();
        }
    }
}