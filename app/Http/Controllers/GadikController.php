<?php

namespace App\Http\Controllers;

use App\Models\Gadik;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GadikController extends Controller
{
    public function LihatGadik(){
        
        // $Gadik = Gadik::all();
        // $Mapel = Mapel::all();
        $Gadik = Gadik::with('Mapel')->paginate();
        return view('layouts.Gadik', compact('Gadik'),[
            'Gadik' => '$Gadik',
            'title' => 'Tenaga Pendidik'
        ]);
    }
}
