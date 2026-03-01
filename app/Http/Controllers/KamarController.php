<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;

class KamarController extends Controller
{
    public function Penghuni(){
        $kamar = Kamar::all();
        return view('Penghuni', compact('kamar'));
    }
}
