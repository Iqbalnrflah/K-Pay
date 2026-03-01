<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenghuniApiController extends Controller
{
    public function store(Request $request)
{
    $data = Penghuni::create([
        'nama' => $request->nama,
        'no_kamar' => $request->no_kamar,
        'no_hp' => $request->no_hp,
        'tanggal_masuk' => $request->tanggal_masuk,
    ]);

    return response()->json([
        'message' => 'Booking berhasil',
        'data' => $data
    ]);
}
}
