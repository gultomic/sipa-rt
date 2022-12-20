<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelayananJenis as PJ;
use App\Models\PelayananWarga as PW;

class pelayananController extends Controller
{
    public function index()
    {
        $coll = PW::with('warga', 'jenis')->paginate(10);
        // dd($coll);
        return view('pelayanan.index', ['collection' => $coll]);
    }
}
