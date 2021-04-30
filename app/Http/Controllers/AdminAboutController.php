<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    // EDIT / UPDATE
        public function edit (About $id) {
            $allAbout = About::all();
            $about = $id;
            return view('admin.about.editAbout', compact('about','allAbout'));
        }
        public function update (About $id, Request $request) {
            $about = $id;
            // $about->fonction = $request->fonction;
            $about->birthday = $request->birthday;
            $about->website = $request->website;
            $about->phone = $request->phone;
            $about->age = $request->age;
            $about->degree = $request->degree;
            $about->email = $request->email;
            $about->freelance = $request->freelance;
            $about->city = $request->city;
            // $about->save();
            $about->save();
            return redirect()->route('admin');
        }
}
