<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::all();
        return view('portal.units.index', compact('units'));
    }

    public function adminProducts(Unit $unit)
    {
        //$products = $unit->products;

        //$products = Product::whereUnitId($unit->id)->get();

        return view('portal.index', ['unit' => $unit]);
    }

   /* public function webProducts(Unit $unit)
    {
        return view('website.index', ['unit' => $unit]);
    }*/

     public function portal()
    {
        $units = Unit::all();
        return view('portal.index', compact('units'));
    }

    public function create()
    {
        return view('portal.units.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'abbreviation' => 'required|string|max:255',
    ]);

    $data = $request->all();
    $data['status'] = $request->has('status') ? $request->input('status') : 1;

    Unit::create($data);
    return redirect()->route('portal.units.index')->with('success', 'Unit created successfully.');
    }


    public function show($id)
    {
        $unit = Unit::findOrFail($id);
        return view('portal.units.show', compact('unit'));
    }

    public function edit(Unit $unit)
    {
        return view('portal.units.edit', compact('unit'));
    }

    public function update(Request $request, Unit $unit)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'abbreviation' => 'required|string|max:255',
    ]);

    $data = $request->all();
    $data['status'] = $request->has('status') ? $request->input('status') : 1;

    $unit->update($data);
    return redirect()->route('portal.units.index')->with('success', 'Unit updated successfully.');
    }

    public function destroy(Unit $unit)
    {
        $unit->delete();
        return redirect()->route('portal.units.index')->with('success', 'Unit deleted successfully.');
    }
}
