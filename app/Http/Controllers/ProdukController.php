<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Produk',
            'content' => 'Ini adalah halaman produk.'
        ];

        return view('produk', compact('data'));
    }
}
