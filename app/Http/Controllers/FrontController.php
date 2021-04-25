<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index () {
        $allAbout = About::all();
        $allFacts = Fact::all();
        $allSkills = Skill::all();
        $allPortfolios = Portfolio::all();
        $allServices = Service::all();
        $allContacts = Contact::all();
        return view('home', compact('allAbout', 'allFacts', 'allSkills','allPortfolios','allServices','allContacts'));
    }
}
