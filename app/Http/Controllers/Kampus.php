<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kampus extends Controller
{
    public function kampus(){
        
        $kampus = 
        [
            [
                'nama' => "A",
                'mata' => "AB","CB","CD",
                'maha' => [
                    [
                        'nama' => "C",
                        'nilai' => 90,
                    ],
                    [
                        'nama' => "D",
                        'nilai' => 80,
                    ],
                    [
                        'nama' => "E",
                        'nilai' => 90,
                    ]

                ]
            ]
            

        ];

        
        return view('sekolah.kampus', ['dosen' => $kampus]);

    }
}
