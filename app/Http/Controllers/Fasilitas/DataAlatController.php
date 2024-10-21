<?php

namespace App\Http\Controllers\Fasilitas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataAlatController extends Controller
{
    public function index()
    {
        return view('admin.pages.data-fasilitas.data-alat.index');
    }

    public function create()
    {
        return view('admin.pages.data-fasilitas.data-alat.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.pages.data-fasilitas.data-alat.index');
    }

    public function show($id)
    {
        return view('admin.pages.data-fasilitas.data-alat.show', compact('id'));
    }

    public function edit($id)
    {
        return view('admin.pages.data-fasilitas.data-alat.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('admin.pages.data-fasilitas.data-alat.index');
    }

    public function destroy($id)
    {
        return redirect()->route('admin.pages.data-fasilitas.data-alat.index');
    }
}
