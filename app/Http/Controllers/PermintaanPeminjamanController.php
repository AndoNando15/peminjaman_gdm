<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermintaanPeminjamanController extends Controller
{
    public function index()
    {
        return view('admin.pages.permintaan-peminjaman.index');
    }

    public function create()
    {
        return view('admin.pages.permintaan-peminjaman.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.pages.permintaan-peminjaman.index');
    }

    public function show($id)
    {
        return view('admin.pages.permintaan-peminjaman.show', compact('id'));
    }

    public function edit($id)
    {
        return view('admin.pages.permintaan-peminjaman.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('admin.pages.permintaan-peminjaman.index');
    }

    public function destroy($id)
    {
        return redirect()->route('admin.pages.permintaan-peminjaman.index');
    }
}
