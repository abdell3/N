<?php

namespace App\Http\Controllers;

use App\Models\Articel;
use App\Http\Requests\StoreArticelRequest;
use App\Http\Requests\UpdateArticelRequest;

class ArticelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articel = Articel::all();
        
        return view('articel.index', compact: 'category');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticelRequest $request)
    {
        $articel->create($request->validated());
        
        return redirect('articel.index')->with('seccess', 'Ajouter');
    }

    /**
     * Display the specified resource.
     */
    public function show(Articel $articel)
    {
        return view('articel.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Articel $articel)
    {
        return view('articel.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticelRequest $request, Articel $articel)
    {
       $articel->update($request->validated());

        return redirect('articel.index')->with('sucess', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articel $articel)
    {
        $articel->delete();
        return view('articel.index')->with('success', 'deleted');
    }
}
