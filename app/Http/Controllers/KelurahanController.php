<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;

class KelurahanController extends Controller
{
    //
    public function show(){
        $list_kelurahan = Kelurahan::all();
        return view('kelurahan.show',['list_kelurahan'=>$list_kelurahan]);
    }
}
