<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Http\Requests\StoreDosenRequest;
use App\Http\Requests\UpdateDosenRequest;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(StoreDosenRequest $request)
    {
        Dosen::create($request->validated());
        return redirect()->route('dosen.index');
    }

    public function show(Dosen $dosen)
    {
        return view('dosen.show', compact('dosen'));
    }

    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }

    public function update(UpdateDosenRequest $request, Dosen $dosen)
    {
        $dosen->update($request->validated());
        return redirect()->route('dosen.index');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect()->route('dosen.index');
    }
}