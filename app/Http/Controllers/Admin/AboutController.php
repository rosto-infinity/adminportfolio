<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function edit()
    {
        return view('admin.abouts.edit-about');
    }
}
