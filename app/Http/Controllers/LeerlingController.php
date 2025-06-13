<?php

namespace App\Http\Controllers;

use App\Models\Leerling;
use Illuminate\Http\Request;


class LeerlingController extends Controller
{
    public function index()
    {
        $leerlingen = Leerling::all();
        return view('leerlingen.index', compact('leerlingen'));
    }

    public function create()
    {
        return view('leerlingen.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'voornaam' => 'required|string|max:255',
            'achternaam' => 'required|string|max:255',
            'email' => 'required|email|unique:leerlings,email',
            'telefoonnummer' => 'nullable|string|max:20',
        ]);

        Leerling::create($validated);

        return redirect()->route('leerlingen.index')->with('success', 'Leerling toegevoegd!');
    }

    public function edit(Leerling $leerling)
    {
        return view('leerlingen.edit', compact('leerling'))->with('success', session('success'));
    }

    public function update(Request $request, Leerling $leerling)
    {
        $validated = $request->validate([
            'voornaam' => 'required|string|max:255',
            'achternaam' => 'required|string|max:255',
            'email' => 'required|email|unique:leerlings,email,' . $leerling->id,
            'telefoonnummer' => 'nullable|string|max:20',
        ]);

        $leerling->update($validated);

        return redirect()->route('leerlingen.index')->with('success', 'Leerling bijgewerkt!');
    }

    public function destroy(Leerling $leerling)
    {
        $leerling->delete();

        return redirect()->route('leerlingen.index')->with('success', 'Leerling verwijderd!');
    }
}