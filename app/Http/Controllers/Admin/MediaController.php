<?php
/**
 * -Contrôleur pour la gestion des médias dans l'administration.
 *
 * Méthodes :
 * - index() : Affiche la liste de tous les médias.
 * - store(Request $request) : Valide et enregistre un nouveau média.
 * - destroy($id) : Supprime un média existant.
 */

namespace App\Http\Controllers\Admin;

use App\Models\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MediaController extends Controller
{
    /**
     * -Affiche la liste des médias.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $medias = Media::all();
        return view('admin.medias.index-medias', compact('medias'));
    }

    /**
     * Enregistre un nouveau média après validation.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'link' => 'required|url|max:255|active_url',
            'icon' => 'required|string|max:255',
        ], [
            'link.required' => 'Le lien est obligatoire',
            'link.url' => 'Le lien doit être une URL valide (ex: https://...)',
            'link.active_url' => 'Le lien doit pointer vers un site actif',
            'link.max' => 'Le lien ne doit pas dépasser :max caractères',
            'icon.required' => 'Le code de l\'icône est obligatoire',
            'icon.max' => 'Le code icône ne doit pas dépasser :max caractères',
        ]);
        Media::create($validateData);
        return redirect()
            ->route('index-media')
            ->with('success', 'Réseau social ajouté avec succès');
    }

    /**
     * Supprime un média par son identifiant.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $media = Media::findOrFail($id);
        $media->delete();
        return redirect()->route('index-media')
            ->with('delete-success', 'Média supprimé avec succès');
    }
}
