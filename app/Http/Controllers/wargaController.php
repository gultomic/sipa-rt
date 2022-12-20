<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataWarga as DW;

class wargaController extends Controller
{
    public function index()
    {
        $coll = DW::paginate(10);
        // dd($coll);

        return view('warga.index', ['collection' => $coll]);
    }

    public function create()
    {
        return view('warga.add');
    }

    public function store()
    {}
}
