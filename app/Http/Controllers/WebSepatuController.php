<?php

namespace App\Http\Controllers;

use App\Models\SepatuModel;
use Illuminate\Http\Request;

class WebSepatuController extends Controller
{
    public function index()
    {
        $data = SepatuModel::all();
        return view('sepatu.index', compact('data'));
    }

    public function create()
    {
        return view('sepatu.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'ukuran' => 'required',
            'deskripsi' => 'required',
        ]);

        SepatuModel::create($validateData);
        return redirect()->route('sepatu.index')->with('success', 'Sepatu berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $sepatu = SepatuModel::findOrFail($id);
        return view('sepatu.show', compact('sepatu'));
    }

    public function edit(string $id)
    {
        $sepatu = SepatuModel::findOrFail($id);
        return view('sepatu.edit', compact('sepatu'));
    }

    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'ukuran' => 'required',
            'deskripsi' => 'required',
        ]);

        $sepatu = SepatuModel::findOrFail($id);
        $sepatu->update($validateData);
        return redirect()->route('sepatu.index')->with('success', 'Sepatu berhasil diupdate.');
    }

    public function destroy(string $id)
    {
        $sepatu = SepatuModel::findOrFail($id);
        $sepatu->delete();
        return redirect()->route('sepatu.index')->with('success', 'Sepatu berhasil dihapus.');
    }
}
