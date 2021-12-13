<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data_pegawai = \App\Models\Pegawai::all();
        return view('pegawai.index', ['data_pegawai'=> $data_pegawai ]);
    }

    public function create(Request $request)
    {
        \App\Models\Pegawai::create($request->all());
        return redirect ('/pegawai')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
       $pegawai = \App\Models\Pegawai::find($id);
       //dd($pegawai);
       return view('pegawai/edit', ['pegawai' => $pegawai]);
    }

    public function update(Request $request, $id)
    {
       $pegawai = \App\Models\Pegawai::find($id);
       $pegawai ->update($request->all());
       return redirect ('/pegawai')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
       $pegawai = \App\Models\Pegawai::find($id);
       $pegawai ->delete();
       return redirect ('/pegawai')->with('sukses','Data Berhasil Dihapus');
    }


}
