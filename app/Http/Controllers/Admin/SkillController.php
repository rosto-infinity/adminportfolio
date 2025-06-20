<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
   public function index()
   {
    $skills= Skill::with('service')->get();
    return view('admin.skills.index-skills', compact('skills'));
   }
}
