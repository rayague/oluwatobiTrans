<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image; // Assuming Laravel Intervention Image is installed

class PostController extends Controller
{
    public function addPost(Request $request) {

        $request->validate([
            'dateTrans' => 'required|date',
            'descTrans' => 'required|string',
            'origine' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'typeTransit' => 'required|string|max:255',
            'quantite' => 'required|string|max:255',
            'valeur' => 'required|string|max:255',
            'moyenTransit' => 'required|string|max:255',
            'numSuivi' => 'required|string|max:255',
            'images' => 'required|image|mimes:png,jpg,svg,jpeg|max:5048',
        ]);

        $post = new Post();
        $post->dateTrans = $request->dateTrans;
        $post->descTrans = $request->descTrans;
        $post->origine = $request->origine;
        $post->destination = $request->destination;
        $post->typeTransit = $request->typeTransit;
        $post->quantite = $request->quantite;
        $post->valeur = $request->valeur;
        $post->moyenTransit = $request->moyenTransit;
        $post->numSuivi = $request->numSuivi;
        $post->images = request('images');
        if ($request->hasfile('images'))
            {
                $file = $request->file('images');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move("uploads/photos/", $filename);
                $post->images = $filename;
            }

        $post->save();

        return redirect()->back()->with('success', 'Votre poste a été bien enregistré'); // Corrected French message
    }

public function deletePost($id)
{
    $post = Post::findOrFail($id);
    $post->status = false;
    $post->save();

    return redirect()->back()->with('success', 'Post supprimé avec succès');
}

public function updatePost(Request $request, $id) {

            $request->validate([
            'dateTrans' => 'required|date',
            'descTrans' => 'required|string',
            'origine' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'typeTransit' => 'required|string|max:255',
            'quantite' => 'required|string|max:255',
            'valeur' => 'required|string|max:255',
            'moyenTransit' => 'required|string|max:255',
            'numSuivi' => 'required|string|max:255',
            'images' => 'required|image|mimes:png,jpg,svg,jpeg|max:5048',
        ]);
            $post =  Post::find($id);
        // $post->update($request->all());
                $post->dateTrans = $request->dateTrans;
        $post->descTrans = $request->descTrans;
        $post->origine = $request->origine;
        $post->destination = $request->destination;
        $post->typeTransit = $request->typeTransit;
        $post->quantite = $request->quantite;
        $post->valeur = $request->valeur;
        $post->moyenTransit = $request->moyenTransit;
        $post->numSuivi = $request->numSuivi;
        $post->images = request('images');
        if ($request->hasfile('images'))
            {
                $file = $request->file('images');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move("uploads/photos/", $filename);
                $post->images = $filename;
            }

        $post->update();


        return redirect()->route('privateDashboard')->with("success","Votre message a été bien modifié");
}


    // public function update($id)
    // {

    //     // Récupérer l'utilisateur depuis la base de données
    //     // $user = User::find($userId);

    //     if ($user) {
    //         // Mettre à jour le compteur
    //         $user->increment('counter');
    //     }

    //     return redirect()->back()->with('success', 'Compteur mis à jour avec succès');
    // }
}
// Afficher le compteur dans la vue : Affichez le compteur dans votre vue pour que l'utilisateur puisse voir les mises à jour en temps réel.
// html
// Copy code
// <!-- Affichage du compteur -->
// {{$user->counter}}

// }