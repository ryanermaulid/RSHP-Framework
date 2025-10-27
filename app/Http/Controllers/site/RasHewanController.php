<?php
namespace App\Http\Controllers;
use App\Models\RasHewan;

class RasHewanController extends Controller {
    public function index() {
        $data = RasHewan::with('jenis')->get();
        return view('rashewan.index', compact('data'));
    }
}
