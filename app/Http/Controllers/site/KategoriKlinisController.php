<?php
namespace App\Http\Controllers;
use App\Models\KategoriKlinis;

class KategoriKlinisController extends Controller {
    public function index() {
        $data = KategoriKlinis::all();
        return view('kategoriklinis.index', compact('data'));
    }
}
