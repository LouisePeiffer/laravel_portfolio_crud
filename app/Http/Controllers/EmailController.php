<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index() {
        $allEmails = Email::all();
        return view('admin.mail.email', compact('allEmails'));
    }
    // STORE
    public function store (Request $request) {
        $email = new Email();
        $email->name = $request->name;
        $email->email = $request->email;
        $email->subject = $request->subject;
        $email->message = $request->message;
        $email->save();
        return redirect()->route('home');
    }
}
