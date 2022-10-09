<?php

namespace App\Http\Controllers;

use App\Models\Gadik;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MapelController extends Controller
{

    public function LihatMapel(Request $request){
        // $Gadik = Gadik::all();
        $Mapel = Mapel::with('Gadik')->paginate();
        return view('layouts.Pelajaran', compact('Mapel'),[
            'Mapel' => '$Mapel',
            // 'Gadik' => '$Gadik',
            'title' => 'Mata Pelajaran',
        ]);
    }
}
