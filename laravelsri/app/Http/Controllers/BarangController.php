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
    
    public function store(Request $request)
    {
        DB::table('barang')->insert([
            'nama' => $request->nama,
            'stok' => $request->stok,
            'harga' => $request->harga
        ]);

        $request->session()->flash('message', 'Data barang berhasil ditambahkan.');

        return redirect()->route('barang');
    }
}
