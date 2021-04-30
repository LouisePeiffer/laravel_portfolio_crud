<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Serializer;

class AdminServiceController extends Controller
{
    // EDIT
    public function edit (Service $id) {
        $service = $id;
        return view('admin.servicee.editServices', compact('service'));
    }
    public function update (Service $id, Request $request) {
        request()->validate([
            "icone" => ["required"],
            "titre" => ["required"],
            "texte" => ["required"],
        ]);

        $service = $id;
        $service->icone = $request->icone;
        $service->titre = $request->titre;
        $service->texte = $request->texte;
        $service->save();
        return redirect('/admin' . '#services')->with('success', 'Vos modifications ont été enregistrées.');
    }
    // DELETE
    public function destroy (Service $id) {
        $id->delete();
        return redirect('/admin' . '#services')->with('success', 'Vos modifications ont été enregistrées.');
    }
    // CREATE
    public function create() {
        return view('admin.servicee.createServices');
    }
    public function store (Request $request) {
        request()->validate([
            "icone" => ["required"],
            "titre" => ["required"],
            "texte" => ["required"],
        ]);
        $service = new Service();
        $service->icone = $request->icone;
        $service->titre = $request->titre;
        $service->texte = $request->texte;
        $service->save();
        return redirect('/admin' . '#services')->with('success', 'Vos modifications ont été enregistrées.');
    }
}
