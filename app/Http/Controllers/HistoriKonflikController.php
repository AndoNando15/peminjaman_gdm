<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoriKonflikController extends Controller
{
    public function index()
    {
        return view('admin.pages.histori-konflik.index');
    }

    public function create()
    {
        return view('admin.pages.histori-konflik.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.pages.histori-konflik.index');
    }

    public function show($id)
    {
        return view('admin.pages.histori-konflik.show', compact('id'));
    }

    public function edit($id)
    {
        return view('admin.pages.histori-konflik.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('admin.pages.histori-konflik.index');
    }

    public function destroy($id)
    {
        return redirect()->route('admin.pages.histori-konflik.index');
    }
}
