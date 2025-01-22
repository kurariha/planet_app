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

    public function show()
    {
    
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
