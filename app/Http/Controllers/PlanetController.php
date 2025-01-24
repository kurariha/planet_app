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

    public function edit($id)
    {
        $planet = Planet::find($id);
        return view('planets.edit', ['planet' => $planet]);
    }

    public function update(Request $request, $id)
    {
        $planet = Planet::find($id);

        $planet->name_ja = $request->name_ja;
        $planet->name_en = $request->name_en;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;
        $planet->save();

        return redirect(route('planets.index'));    
    }

    public function destroy($id)
    {  
        $planet = Planet::find($id);
        $planet->delete();

        return redirect(route('planets.index'));
    }
}
