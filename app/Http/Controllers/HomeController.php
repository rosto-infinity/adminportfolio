<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $about = About::latest()->first();
        return view('pages.home-page.index-home', [
            'about'=> $about,
            'services '=> $services ,

        ]);
    }
}
