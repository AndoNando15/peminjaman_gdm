<?php

namespace App\Http\Controllers\DataPengguna;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataLembagaController extends Controller
{
    public function index()
    {
        return view('admin.pages.data-pengguna.data-lembaga.index');
    }

    public function create()
    {
        return view('admin.pages.data-pengguna.data-lembaga.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.pages.data-pengguna.data-lembaga.index');
    }

    public function show($id)
    {
        return view('admin.pages.data-pengguna.data-lembaga.show', compact('id'));
    }

    public function edit($id)
    {
        return view('admin.pages.data-pengguna.data-lembaga.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('admin.pages.data-pengguna.data-lembaga.index');
    }

    public function destroy($id)
    {
        return redirect()->route('admin.pages.data-pengguna.data-lembaga.index');
    }
}
