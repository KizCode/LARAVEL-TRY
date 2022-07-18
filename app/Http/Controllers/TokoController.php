<?php

namespace App\Http\Controllers;

use App\Models\Toko;

use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function tampil()
    {
        $a = Toko::all();
        return view('sekolah.toko', ['tokos' => $a]);
    }
}
