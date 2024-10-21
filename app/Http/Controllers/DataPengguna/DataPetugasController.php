<?php

namespace App\Http\Controllers\DataPengguna;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataPetugasController extends Controller
{
    public function index()
    {
        return view('admin.pages.data-pengguna.data-petugas.index');
    }

    public function create()
    {
        return view('admin.pages.data-pengguna.data-petugas.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.pages.data-pengguna.data-petugas.index');
    }

    public function show($id)
    {
        return view('admin.pages.data-pengguna.data-petugas.show', compact('id'));
    }

    public function edit($id)
    {
        return view('admin.pages.data-pengguna.data-petugas.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('admin.pages.data-pengguna.data-petugas.index');
    }

    public function destroy($id)
    {
        return redirect()->route('admin.pages.data-pengguna.data-petugas.index');
    }
}
