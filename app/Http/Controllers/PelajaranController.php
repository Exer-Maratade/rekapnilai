<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    public function LihatMapel(){
        return view('layouts.Pelajaran',[
            'title' => 'Mata Pelajaran',
            'active' => 'Mata Pelajaran'
        ]);
    }
}
