<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class kegiatanController extends Controller
{
    public function index()
    {
        $coll = Kegiatan::paginate(10);

        return view('kegiatan.index', ['collection' => $coll]);
    }

}
