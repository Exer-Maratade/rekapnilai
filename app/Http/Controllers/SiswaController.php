<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SiswaController extends Controller
{
    public function index()
    {
        $Siswa = Siswa::all();
        return view('layouts.Siswa', compact('Siswa'), [
            'Siswa' => '$Siswa',
            'title' => 'Nilai siswa',
            'active' => 'Nilai siswa'
        ]);
    }
}
