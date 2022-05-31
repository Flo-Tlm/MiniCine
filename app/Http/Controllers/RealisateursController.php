<?php

namespace App\Http\Controllers;

use App\Models\Films;
use App\Models\Realisateurs;
use Illuminate\Http\Request;


class RealisateursController extends Controller

   
{



    public function getOne($id)
    {
        $real = Films::where('real_id', $id)->get();
        $reals = Realisateurs::find($id);






        return view('real', [


            'films' => $real,
            'real' => $real,


        ]);

        
    }
}


