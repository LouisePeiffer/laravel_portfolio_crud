<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class AdminPortfolioController extends Controller
{
    // EDIT / UPDATE
    public function edit (Portfolio $id) {
        $allPortfolio = Portfolio::all();
        $portfolio= $id;
        return view('admin.portfolio.editPortfolio', compact('portfolio','allPortfolio'));
    }
    public function update (Portfolio $id, Request $request) {
        request()->validate([
            "image" => ["required"],
            "filter" => ["required"],
        ]);

        $portfolio = $id;
        $portfolio->image = $request->image;
        $portfolio->filter = $request->filter;
        $portfolio->save();
        return redirect('/admin' . '#portfolio')->with('success', 'Vos modifications ont été enregistrées.');
    }
    // DELETE
    public function destroy(Portfolio $id) {
        $id->delete();
        return redirect('/admin' . '#portfolio')->with('success', 'Vos modifications ont été enregistrées.');
    }
    // CREATE
    public function create() {
        return view('admin.portfolio.createPortfolio');
    }
    public function store (Request $request) {
        request()->validate([
            "image" => ["required"],
            "filter" => ["required"],
        ]);
        
        $portfolio = new Portfolio();
        $portfolio->image = $request->image;
        $portfolio->filter = $request->filter;
        $portfolio->save();
        return redirect('/admin' . '#portfolio')->with('success', 'Vos modifications ont été enregistrées.');
    }
}
