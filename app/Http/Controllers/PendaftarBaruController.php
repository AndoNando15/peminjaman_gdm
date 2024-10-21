<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftarBaruController extends Controller
{
    public function index()
    {
        return view('admin.pages.pendaftar-baru.index');
    }

    public function create()
    {
        return view('admin.pages.pendaftar-baru.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.pages.pendaftar-baru.index');
    }

    public function show($id)
    {
        return view('admin.pages.pendaftar-baru.show', compact('id'));
    }

    public function edit($id)
    {
        return view('admin.pages.pendaftar-baru.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('admin.pages.pendaftar-baru.index');
    }

    public function destroy($id)
    {
        return redirect()->route('admin.pages.pendaftar-baru.index');
    }
}
