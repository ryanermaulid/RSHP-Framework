<?php
namespace App\Http\Controllers;
use App\Models\JenisHewan;

class JenisHewanController extends Controller {
    public function index() {
        $data = JenisHewan::all();
        return view('jenishewan.index', compact('data'));
    }
}
