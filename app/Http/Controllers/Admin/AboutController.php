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
        "name" => "string|max:25",
        "email" => "string|max:255",
        "phone" => "string",
        "address" => "string|max:255",
        "description" => "string",
        "summary" => "string",
        "tagline" => "string|max:255",
        "home_image" => "image|mimes:jpeg,png,jpg,gif|max:2048",
        "banner_image" => "image|mimes:jpeg,png,jpg,gif|max:2048",
        "cv" => "file|mimes:pdf|max:5120",
    ],
    [
        'name.string' => 'Le nom doit être une chaîne de caractères.',
        'name.max' => 'Le nom ne peut pas dépasser 25 caractères.',
        
        'email.string' => 'L\'email doit être une chaîne de caractères.',
        'email.max' => 'L\'email ne peut pas dépasser 255 caractères.',
        
        'phone.string' => 'Le numéro de téléphone doit être une chaîne de caractères.',
        
        'address.string' => 'L\'adresse doit être une chaîne de caractères.',
        'address.max' => 'L\'adresse bg-red-400ne peut pas dépasser 255 caractères.',
        
        'description.string' => 'La description doit être une chaîne de caractères.',
        
        'summary.string' => 'Le résumé doit être une chaîne de caractères.',
        
        'tagline.string' => 'La phrase accrocheuse doit être une chaîne de caractères.',
        'tagline.max' => 'La phrase accrocheuse ne peut pas dépasser 255 caractères.',
        
        'home_image.image' => 'L\'image d\'accueil doit être une image.',
        'home_image.mimes' => 'L\'image d\'accueil doit être au format jpeg, png, jpg ou gif.',
        'home_image.max' => 'L\'image d\'accueil ne peut pas dépasser 2 Mo.',
        
        'banner_image.image' => 'L\'image de bannière doit être une image.',
        'banner_image.mimes' => 'L\'image de bannière doit être au format jpeg, png, jpg ou gif.',
        'banner_image.max' => 'L\'image de bannière ne peut pas dépasser 2 Mo.',
        
        'cv.file' => 'Le CV doit être un fichier.',
        'cv.mimes' => 'Le CV doit être au format pdf.',
        'cv.max' => 'Le CV ne peut pas dépasser 5 Mo.',
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
        $fileName = '_home_image.' . $file->getClientOriginalExtension();
        $file->move(public_path('storage/images'), $fileName);
        // dd($fileName);
        $about->home_image = $fileName;
    }
      // Gestion de banner_image
    if ($request->hasFile('banner_image')) {

        $oldImagePath = $about->banner_image ? public_path("storage/images/{$about->banner_image}") : null;

        if ($oldImagePath && file_exists($oldImagePath)) {
            // Supprime un fichier  Similaire à la fonction Unix C unlink(). En cas d'échec, une alerte de niveau E_WARNING sera générée.
            unlink($oldImagePath);
        }
        $file = $request->file('banner_image');
        $fileName = '_banner_image.' . $file->getClientOriginalExtension();
        $file->move(public_path('storage/images'), $fileName);
        // dd($fileName);
        $about->banner_image = $fileName;
    }

    $about->save();
    return redirect()->route('edit-about')->with("success","Profil mise a jour");
}
}
