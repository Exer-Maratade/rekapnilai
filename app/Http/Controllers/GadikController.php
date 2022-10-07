<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GadikController extends Controller
{
    public function ViewGadik(){
        return view('layouts.Gadik',[
            'title' => 'Tenaga Pendidik',
            'active' => 'Tenaga Pendidik'
        ]);
    }
}
