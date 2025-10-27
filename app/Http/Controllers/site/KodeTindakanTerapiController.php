<?php
namespace App\Http\Controllers;
use App\Models\KodeTindakanTerapi;

class KodeTindakanTerapiController extends Controller {
    public function index() {
        $data = KodeTindakanTerapi::with(['kategori','kategoriKlinis'])->get();
        return view('kodetindakan.index', compact('data'));
    }
}
