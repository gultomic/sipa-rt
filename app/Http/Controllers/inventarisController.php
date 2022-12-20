<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventaris as IV;

class inventarisController extends Controller
{
    public function index()
    {
        $coll = IV::paginate(10);

        return view('inventaris.index', ['collection' => $coll]);
    }
}
