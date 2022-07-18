<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kampus extends Controller
{
    public function kampus()
    {
        
        $kampus = 
        [
            [ 
                'nama' => "Yusuh Bachtiar", 
                'mata' => "Pemrogram Mobile",
                'mahas' =>
                [

                    [
                        'nama' => "Muhammad Soleh",
                        'nilai' => 78, 
                    
                    ],
                    [    
                        'nama' => "Jujun Junaide",
                        'nilai' => 85,
                    ],
                    [    
                        'nama' => "Dani",
                        'nilai' => 90,
                    ],

                ]
            ],
            [ 
                'nama' => "Yaris Riyadi", 
                'mata' => "Pemrogram Web",
                'mahas' =>
                [

                    [
                        'nama' => "Alfred McTomminay",
                        'nilai' => 78, 
                    
                    ],
                    [    
                        'nama' => "Bruno Kasmir",
                        'nilai' => 85,
                    ],

                ]
            ],
        ];
        return view('sekolah.kampus', ['kampus' => $kampus]);
    }
}
