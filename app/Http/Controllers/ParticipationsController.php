<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipationsController extends Controller {
    public function proceder($num){
        return view('proceder')-> with('num',$num);
    }
    

    public function annuler($num){
        return view('annuler')-> with('num',$num);
    }
}
