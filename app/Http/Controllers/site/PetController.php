<?php
namespace App\Http\Controllers;
use App\Models\Pet;

class PetController extends Controller {
    public function index() {
        $data = Pet::all();
        return view('pet.index', compact('data'));
    }
}
