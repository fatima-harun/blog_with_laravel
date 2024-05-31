<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function sauvegarder(Request $request)
    {
        $request->validate([
            'nom_complet_auteur' => 'required|max:10',
            'contenu' => 'required|max:255',
            'article_id' => 'required|exists:articles,id',
        ]);

        Commentaire::create($request->all());
        return redirect()->back();
    }

    public function changer($id)
    {
        $commentaire = Commentaire::find($id);
        return view('/commentaires.editcomment', ['commentaire' => $commentaire]);
    }

    public function edit_commentaire_traitement(Request $request)
    {
        $request->validate([
            'nom_complet_auteur' => 'required',
            'contenu' => 'required',
        ]);

        $commentaire = Commentaire::find($request->id);
        $commentaire->nom_complet_auteur = $request->nom_complet_auteur;
        $commentaire->contenu = $request->contenu;
        $commentaire->update();
        
        return redirect('/articles/' .$commentaire->article_id );
    }

    public function drop_commentaire($id)
    {
        $commentaire = Commentaire::find($id);
        $commentaire->delete();
        return redirect()->back();
    }
}
