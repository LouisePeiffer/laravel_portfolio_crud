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
        return redirect('/admin' . '#facts')->with('success', 'Vos modifications ont été enregistrées.');
    }
    // CREATE
    public function create() {
        return view('admin.facts.createFacts');
    }
    public function store (Request $request) {
        request()->validate([
            "icone" => ["required"],
            "chiffre" => ["required", "numeric"],
            "titre" => ["required"],
            "texte" => ["required"],
        ]);

        $fact = new Fact();
        $fact->icone = $request->icone;
        $fact->chiffre = $request->chiffre;
        $fact->titre = $request->titre;
        $fact->texte = $request->texte;
        $fact->save();
        return redirect('/admin' . '#facts')->with('success', 'Vos modifications ont été enregistrées.');
    }
    
    // DELETE
    public function destroy(Fact $id) {
        $id->delete();
        return redirect('/admin' . '#facts')->with('success', 'Vos modifications ont été enregistrées.');
    }
}
