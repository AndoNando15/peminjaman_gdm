<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function index()
    {
        return view('admin.pages.pengaturan.index');
    }

    public function create()
    {
        return view('admin.pages.pengaturan.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.pages.pengaturan.index');
    }

    public function show($id)
    {
        return view('admin.pages.pengaturan.show', compact('id'));
    }

    public function edit($id)
    {
        return view('admin.pages.pengaturan.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('admin.pages.pengaturan.index');
    }

    public function destroy($id)
    {
        return redirect()->route('admin.pages.pengaturan.index');
    }
}
