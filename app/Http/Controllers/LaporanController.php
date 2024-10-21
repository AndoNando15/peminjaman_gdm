<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('admin.pages.laporan.index');
    }

    public function create()
    {
        return view('admin.pages.laporan.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.pages.laporan.index');
    }

    public function show($id)
    {
        return view('admin.pages.laporan.show', compact('id'));
    }

    public function edit($id)
    {
        return view('admin.pages.laporan.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('admin.pages.laporan.index');
    }

    public function destroy($id)
    {
        return redirect()->route('admin.pages.laporan.index');
    }
}
