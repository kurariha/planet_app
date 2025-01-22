<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', ['planets' => $planets]);
    }

    public function create()
    {
        return view('planets.create');
    }

    public function store(Request $request)
    {
        $planet = new Planet();

        $planet->name_ja = $request->name_ja;
        $planet->name_en = $request->name_en;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;
        $planet->save();

        return redirect(route('planets.index'));
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
