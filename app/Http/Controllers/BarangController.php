<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Satuan;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_barang = Barang::all();
        return view('list-barang.index', [
            'data_barang' => $data_barang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $satuan = Satuan::all();
        return view('list-barang.create', compact('satuan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'unique' => 'Maaf Barang Sudah ada.'
        ];

        $validator = Validator::make($request->all(), [
            'kode_barang' => ['required', 'unique:barangs,kode_barang'],
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data_barang = new Barang;
        $data_barang->kode_barang = $request->kode_barang;
        $data_barang->nama_barang = $request->nama_barang;
        $data_barang->harga_barang = $request->harga_barang;
        $data_barang->deskripsi_barang = $request->deskripsi_barang;
        $data_barang->satuan_barang_id = $request->satuan_barang;
        $data_barang->save();

        return redirect()->route('barangs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data_barang = Barang::findOrFail($id);
        return view('list-barang.show', compact('data_barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $satuan = Satuan::all();
        $data_barang = Barang::findOrFail($id);
        return view('list-barang.edit', compact('satuan','data_barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data_barang = Barang::find($id);
        $data_barang->kode_barang = $request->kode_barang;
        $data_barang->nama_barang = $request->nama_barang;
        $data_barang->harga_barang = $request->harga_barang;
        $data_barang->deskripsi_barang = $request->deskripsi_barang;
        $data_barang->satuan_barang_id = $request->satuan_barang;
        $data_barang->save();
        return redirect()->route('barangs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Barang::find($id)->delete();
        return redirect()->route('barangs.index');
    }
}
