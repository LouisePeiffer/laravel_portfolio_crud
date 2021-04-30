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
        // $allServices = Service::all();
        $allServices = Service::paginate(6)->fragment('services');
        $allContacts = Contact::all();
        // Pagination
        // $services = Service::paginate(6)->fragment('services');
        return view('home', compact('allAbout', 'allFacts', 'allSkills','allPortfolios','allServices','allContacts'));
    }
}
