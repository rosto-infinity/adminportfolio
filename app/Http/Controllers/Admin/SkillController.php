<?php

namespace App\Http\Controllers\Admin;

use App\Models\Skill;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
   public function index()
   {
 
    $skills= Skill::latest()->get();
    return view('admin.skills.index-skills', compact('skills'));
   }
}
