<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Pasien;
use App\Models\Kelurahan;

class PasienController extends Controller
{
    //
    public function show(){
        $list_pasien = Pasien::all();
        return view('pasien.show', ['list_pasien'=>$list_pasien]);
    }

    public function create()
    {
        $list_kelurahan = Kelurahan::all();
        $pasien = new Pasien();
        return view('pasien.form',['pasien'=>$pasien,'list_kelurahan'=>$list_kelurahan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'kelurahan_id' => 'required',
        ]);

        if($request->id){  
            Pasien::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('pasien.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new Pasien instance with the validated data
            Pasien::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('pasien.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $pasien = Pasien::find($id);
        $list_kelurahan = Kelurahan::all();
        return view('pasien.form',['pasien'=>$pasien,'list_kelurahan'=>$list_kelurahan]);
    }
    public function view($id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.view',['pasien'=>$pasien]);
    }
    public function destroy($id): RedirectResponse
    {
        Pasien::find($id)->delete();
        return redirect(route('pasien.show'))->with('pesan', 'Data berhasil dihapus');
    }
}
