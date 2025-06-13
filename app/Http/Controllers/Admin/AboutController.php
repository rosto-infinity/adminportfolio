<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function edit()
    {
        $about = About::latest()->first();
        return view('admin.abouts.edit-about',[
            'about'=> $about
        ]
    );
    }

    public function update(Request $request)
    {
    $validationA = $request->validate([
        "name"=> "string|max:25",
        "email"=> "string|max:255",
        "phone"=> "string",
        "address"=> "string|max:255",
        "description"=> "string",
        "summary"=> "string",
        "tagline"=> "string|max:255",
        "home_image"=> "image|mimes:jpeg,png,jpg,gif|max:2048",
        "banner_image"=> "image|mimes:jpeg,png,jpg,gif|max:2048",
        "cv"=> "file|mimes:pdf|max:5120",
    ]);

    
    $about = About::latest()->first();
    $about->fill($validationA);

      // Gestion de home_image
    if ($request->hasFile('home_image')) {
        $oldImagePath = $about->home_image ? public_path("storage/images/{$about->home_image}") : null;
        if ($oldImagePath && file_exists($oldImagePath)) {
            // Supprime un fichier  Similaire à la fonction Unix C unlink(). En cas d'échec, une alerte de niveau E_WARNING sera générée.
            unlink($oldImagePath);
        }
        $file = $request->file('home_image');
        $fileName = time() . '_home_image.' . $file->getClientOriginalExtension();
        $file->move(public_path('storage/images'), $fileName);
        $about->home_image = $fileName;
    }

    $about->save();
    return redirect()->route('edit-about')->with("success","Profil mise a jour");
}
}
