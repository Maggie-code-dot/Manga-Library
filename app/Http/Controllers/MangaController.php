<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $mangas = Manga::all();
    return view('mangas.index', compact('mangas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mangas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    Manga::create($request->all());
    return redirect()->route('mangas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Manga $manga)
    {
    return view('mangas.show', compact('manga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manga $manga)
    {
        return view('mangas.edit', compact('manga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manga $manga)
    {
    $manga->update($request->all()); // Para guardar los cambios
    return redirect()->route('mangas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manga $manga)
    {
    $manga->delete(); // Para eliminar el registro
    return redirect()->route('mangas.index');
    }
}
