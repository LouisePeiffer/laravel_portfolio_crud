<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Email;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    // EDIT
    public function edit (Contact $id) {
        $contact = $id;
        $allContacts = Contact::all();
        return view('admin.contact.editContact', compact('contact','allContacts'));
    }
    public function update (Contact $id, Request $request) {
        request()->validate([
            "location" => ["required"],
            "email" => ["required"],
            "telephone" => ["required"],
            "iframe" => ["required"],
        ]);

        $contact = $id;
        $contact->location = $request->location;
        $contact->email = $request->email;
        $contact->telephone = $request->telephone;
        $contact->iframe = $request->iframe;
        $contact->save();
        return redirect('/admin' . '#contact')->with('success', 'Vos modifications ont été enregistrées.');
    }
}
