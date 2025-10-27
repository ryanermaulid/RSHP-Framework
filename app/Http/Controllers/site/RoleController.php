<?php
namespace App\Http\Controllers;
use App\Models\Role;

class RoleController extends Controller {
    public function index() {
        $data = Role::all();
        return view('role.index', compact('data'));
    }
}
