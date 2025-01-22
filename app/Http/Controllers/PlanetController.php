<?php

namespace App\Http\Controllers;

use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', ['planets' => $planets]);
    }

    public function store()
    {
    
    }

    public function create()
    {
    
    }

    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', ['planet' => $planet]);
    }

    public function update()
    {
    
    }

    public function destroy()
    {
    
    }

    public function edit()
    {
    
    }
}
