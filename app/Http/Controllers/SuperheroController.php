<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genders = Gender::select('id', 'name')->get();
        return view('superheroes.create', compact('genders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Superhero::create([
            'gender_id' => $request ->gender_id,
            'real_name' => $request ->real_name,
            'universe_id' => 1,
            'name' => 'Peter Parker',
            'picture' => ''
        ]);
        return to_route('superheroes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superhero = Superhero::find($id);
        dd($superhero);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
