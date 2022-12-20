<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeuanganJenis as KJ;
use App\Models\KeuanganRincian as KR;

class keuanganController extends Controller
{
    public function index()
    {
        $coll = KR::with('jenis')->paginate(10);

        return view('keuangan.index', ['collection' => $coll]);
    }
}
