<?php

namespace App\Http\Controllers\Admin;

use App\Models\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MediaController extends Controller
{
    public function index()
    {
        $medias= Media::all();
        return view('admin.medias.index-medias', compact('medias'));
    }
}
