<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\Skill;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index () {
        $allAbout = About::all();
        $allFacts = Fact::all();
        $allSkills = Skill::all();
        $allPortfolios = Portfolio::all();
        return view('home', compact('allAbout', 'allFacts', 'allSkills','allPortfolios'));
    }
}
