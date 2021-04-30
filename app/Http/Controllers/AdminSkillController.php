<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class AdminSkillController extends Controller
{
    // EDIT / UPDATE
    public function edit (Skill $id) {
        $allSkills = Skill::all();
        $skill= $id;
        return view('admin.skills.editSkills', compact('skill','allSkills'));
    }
    public function update (Skill $id, Request $request) {
        $skill = $id;
        $skill->skill = $request->skill;
        $skill->percent = $request->percent;
        $skill->save();
        return redirect()->route('admin');
    }
}
