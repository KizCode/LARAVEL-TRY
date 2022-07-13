<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Siswa extends Controller
{
    public function siswa()
    {
        $a = [
            [
                'id' => 1, 'name' => 'Berli', 'age' => 14
            ],
            [
                'id' => 2, 'name' => 'Kamu', 'age' => 25
            ], 
        ];

        return view('sekolah.siswa', ['siswa' => $a]);
        
    }
}
