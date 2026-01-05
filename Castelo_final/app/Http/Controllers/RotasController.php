<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagen;
use Illuminate\Support\Facades\DB;

class RotasController extends Controller
{
    public function ConselhoSulAmericano(){

        return view('conselho.index');
    }

    public function CasteloBruxo(){

        return view('castelobruxo.index');
    }

}
