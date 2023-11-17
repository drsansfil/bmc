<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\images;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Image;

class ProjetController extends Controller
{

    //fontion afficher
    public function index()
    {

        $projets = projet::all();
        return view('admin.projets.index_projets')->with('projets', $projets);
    }




    //fontion enregistre dans  le base
    public function store(Request $request)
    {
        $customMessages = [
            'required' => 'Le champ :attribute est requis.',
            'integer' => 'Le champ :attribute doit être un nombre entier.',
            'image' => 'Le champ :attribute doit être une image aux formats JPEG, PNG, JPG ou GIF.',
            'mimes' => 'Le champ :attribute doit être au format JPEG, PNG, JPG ou GIF.',
            'max' => 'Le champ :attribute ne doit pas dépasser 1 Mo (1024 Ko).',
        ];

        $validator = Validator::make($request->all(), [
            'nom_projet' => 'required',
            'type_projet' => 'required|integer',
            'nom_projet_en' => 'required',
            'description_en' => 'required',
            'description' => 'required',
            'image' => 'required|array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:1024', // 1 Mo (1024 Ko) par image
        ], $customMessages);

        if ($validator->fails()) {
            return redirect('/ajout_projet')->withErrors($validator)->withInput();
        }

        $projet = new Projet();
        $projet->nom_projet = $request->nom_projet;
        $projet->project_category_id = $request->type_projet;
        $projet->description = $request->description;

        if ($projet->save()) {
            $images = $request->file('image'); // Modifiez 'images' en 'image'

            foreach ($images as $image) {
                if ($image->isValid()) {
                    $newname = uniqid() . "." . $image->getClientOriginalExtension();
                    $destinationPath = 'uploads';
                    $image->move($destinationPath, $newname);

                    $newImage = new images(); // Modifiez 'images' en 'Image'
                    $newImage->url = $newname;
                    $newImage->id_projet = $projet->id; // Lier l'image au projet en utilisant son ID
                    $newImage->save();
                }
            }
            return redirect('/index_projets')->with('message', 'Projet ajouté avec succès'); // Modifiez 'mesage' en 'message'
        } else {
            echo "error";
        }

    }




    //fontion supprimer
    public function destroy($id)
    {
        $projet = Projet::find($id);

        if (!$projet) {
            return redirect('/index_projets')->with('error', 'Le projet n\'existe pas.');
        }

        // Supprimer les images liées au projet
        $images = $projet->images;
        foreach ($images as $image) {
            $imagePath = public_path('uploads/' . $image->url);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $image->delete();
        }

        // Supprimer le projet lui-même
        if ($projet->delete()) {
            return redirect('/index_projets')->with('message', 'Projet supprimé avec succès');
        } else {
            return redirect('/index_projets')->with('erreur', 'Une erreur s\'est produite lors de la suppression du projet.');
        }
    }





    //fontion modifier
    public function update(Request $request)
    {

        $id = $request->id_projet;
        $projets = projet::find($id);
        $projets->nom_projet = $request->nom_projet;
        $projets->project_category_id = $request->type_projet;
        $projets->nom_projet_en = $request->nom_projet_en;
        $projets->description_en = $request->description_en;
        $projets->description = $request->description;
        if ($projets->update()) {
            return redirect('/index_projets')->with('message', 'Projet Modifier avec Success');
        } else {
            echo "error";
        }
    }
}
