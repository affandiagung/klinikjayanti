<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temu;

class JanjiTemuController extends Controller
{
     public function index(){
    $janji_temu = Temu::query()->where('waktu','=',date('Y-m-d'))->get();
    $janji_temu_kemarin= Temu::query()->where('waktu', '<', date('Y-m-d'))->get();
    $janji_temu_besok= Temu::query()->where('waktu', '>', date('Y-m-d'))->get();

    return view('temu.index', ['janji_temu' => $janji_temu, 'janji_temu_kemarin'=> $janji_temu_kemarin, 'janji_temu_besok'=> $janji_temu_besok]);
    }
}
