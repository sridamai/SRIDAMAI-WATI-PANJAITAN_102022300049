<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
        $dataBarang = DB::table('barang')->get();

        return view('barang.index', ['data' => $dataBarang]);
    }
}
