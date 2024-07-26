<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit_kerja;

class Unit_kerjaController extends Controller
{
    //
    public function show(){
        $list_unit_kerja = Unit_kerja::all();
        return view('unit_kerja.show',['list_unit_kerja'=>$list_unit_kerja]);
    }
}
