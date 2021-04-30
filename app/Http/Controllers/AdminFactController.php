<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class AdminFactController extends Controller
{
    // EDIT / UPDATE
    public function edit (Fact $id) {
        $allFacts = Fact::all();
        $fact = $id;
        return view('admin.facts.editFacts', compact('fact','allFacts'));
    }
    public function update (Fact $id, Request $request) {
        request()->validate([
            "icone" => ["required"],
            "chiffre" => ["required", "numeric"],
            "titre" => ["required"],
            "texte" => ["required"],
            // "min:3", "max:50"
        ]);
        
        $fact = $id;
        $fact->icone = $request->icone;
        $fact->chiffre = $request->chiffre;
        $fact->titre = $request->titre;
        $fact->texte = $request->texte;
        $fact->save();
        return redirect()->route('admin')->with('success', 'Vos modifications ont été enregistrées.');
    }
}
