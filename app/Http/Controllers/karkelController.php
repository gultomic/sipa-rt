<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KartuKeluarga as KK;

class karkelController extends Controller
{
    public function index() {
        $coll = KK::with('anggota')
            ->join('data_warga as dw', function($join) {
                $join->on('kartu_keluarga.nkk', '=', 'dw.nkk')
                    ->where('dw.status_kk', '=', 'Kepala Keluarga');
            })
            ->select('dw.nama', 'dw.nik', 'kartu_keluarga.nkk')
            ->paginate(10);

        return view('karkel.index', ['collection' => $coll]);
    }

    public function create()
    {
        return view('karkel.add');
    }

    public function store()
    {}
}
