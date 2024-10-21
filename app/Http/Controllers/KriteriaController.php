<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        return view('admin.pages.kriteria.index');
    }

    public function create()
    {
        return view('admin.pages.kriteria.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.pages.kriteria.index');
    }

    public function show($id)
    {
        return view('admin.pages.kriteria.show', compact('id'));
    }

    public function edit($id)
    {
        return view('admin.pages.kriteria.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('admin.pages.kriteria.index');
    }

    public function destroy($id)
    {
        return redirect()->route('admin.pages.kriteria.index');
    }
}
