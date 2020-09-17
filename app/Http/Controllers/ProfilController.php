<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use App\Http\Requests;

class ProfilController extends Controller
{
    public function index()
    {
        $profils = Profil::all();
        $data = [
            'profils' => $profils
        ];
        return view('profils.index', $data);
    }

    public function create()
    {
        return view('profils.create');
    }

    public function store(Request $request)
    {
        Profil::create($request->all());

        return redirect('/');
    }

    public function edit(Profil $profil)
    {
        return view('profils.edit', compact('profil'));
    }

    public function update(Request $request, Profil $profil)
    {
        $profil->update($request->all());

        return redirect('/');
    }

    public function delete(Profil $profil)
    {
        $profil->delete();

        return redirect('/');
    }
}
