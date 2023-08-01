<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    //
    public function index(){
      $daftar_dokter = Dokter::all();
      return view('dokter.index',['daftar_dokter'=>$daftar_dokter]);
    }

    public function create(Request $request)
    {
      \App\Models\Dokter::create($request->all());
      return redirect('/list_dokter')->with('sukses', 'Data berhasil diinput');
    }
}
