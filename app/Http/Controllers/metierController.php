<?php

namespace App\Http\Controllers;

use App\Models\metier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class metierController extends Controller
{
    //
    public function index()
    {
        $metiers = metier::all();
        return view('admin.metiers.index')->with('metiers', $metiers);
    }





    public function delete(Request $request)
    {
        $metier = metier::find($request->id);
        if ($metier) {
            $image = $metier->image;
            $imagePath = public_path('uploads/' . $image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $metier->delete();
        }
        return redirect('/admin/metiers')->with('message', "Le métier a été supprimer !");
    }





    public function update_view(Request $request)
    {
        $metier = metier::find($request->id);
        if ($metier) {
            return view('admin.metiers.update')->with('metier', $metier);
        } else {
            return redirect('/admin/metiers')->with('erreur', "Le métier n'a pas été trouver !");
        }
    }






    public function update(Request $request)
    {
        $customMessages = [
            'required' => 'Le champ :attribute est requis.',
            'integer' => 'Le champ :attribute doit être un nombre entier.',
            'image' => 'Le champ :attribute doit être une image aux formats JPEG, PNG, JPG ou GIF.',
            'icone' => 'Le champ :attribute doit être une image aux formats JPEG, PNG, JPG ou GIF.',
            'mimes' => 'Le champ :attribute doit être au format JPEG, PNG, JPG ou GIF.',
            'max' => 'Le champ :attribute ne doit pas dépasser 1 Mo (1024 Ko).',
        ];

        $validator = Validator::make($request->all(), [
            'titre' => 'required',
            'id' => 'integer',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2024', // 1 Mo (2024 Ko) par image
            'icone' => 'image|mimes:jpeg,png,jpg,gif|max:1024', // 1 Mo (1024 Ko) par image
        ], $customMessages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $metier = metier::find($request->id);
        if ($metier) {
            $metier->titre = $request->titre;
            $metier->description = $request->description;
            if ($request->file('image')) {
                $newname = uniqid();
                //supprimer ancienne photo
                $file_Path = public_path() . '/uploads/' . $metier->image;
                if (file_exists($file_Path)) {
                    unlink($file_Path);
                }
                $image = $request->file('image');
                $newname .= "." . $image->getClientOriginalExtension();
                $destinationPath = 'uploads';
                $image->move($destinationPath, $newname);
                $metier->image = $newname;
            }
            if ($request->file('icone')) {
                $newname = uniqid();
                //supprimer ancienne photo
                $file_Path = public_path() . '/uploads/' . $metier->icone;
                if (file_exists($file_Path) && !empty($image)) {
                    unlink($file_Path);
                }
                $image = $request->file('icone');
                $newname .= "." . $image->getClientOriginalExtension()."_icone";
                $destinationPath = 'uploads';
                $image->move($destinationPath, $newname);
                $metier->icone = $newname;
            }
        }

        if ($metier->update()) {
            return redirect('/admin/metiers')->with('message', "Le métier a été modifier !");
        } else {
            return redirect('/admin/metiers')->with('erreur', "Echec de modification du métier !");
        }
    }








    public function create(Request $request)
    {
        $customMessages = [
            'required' => 'Le champ :attribute est requis.',
            'integer' => 'Le champ :attribute doit être un nombre entier.',
            'image' => 'Le champ :attribute doit être une image aux formats JPEG, PNG, JPG ou GIF.',
            'mimes' => 'Le champ :attribute doit être au format JPEG, PNG, JPG ou GIF.',
            'max' => 'Le champ :attribute ne doit pas dépasser 1 Mo (1024 Ko).',
        ];

        $validator = Validator::make($request->all(), [
            'titre' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024', // 1 Mo (1024 Ko) par image
        ], $customMessages);

        if ($validator->fails()) {
            return redirect('/ajout_projet')->withErrors($validator)->withInput();
        }

        $metier = new metier();
        $metier->titre = $request->titre;
        $metier->description = $request->description;
        if ($request->file('image')) {
            $newname = uniqid();
            $image = $request->file('image');
            $newname .= "." . $image->getClientOriginalExtension();
            $destinationPath = 'uploads';
            $image->move($destinationPath, $newname);
            $metier->image = $newname;
        }
        if ($metier->save()) {
            return redirect('/admin/metiers')->with('message', "Le métier a été ajouter !");
        } else {
            return redirect('/admin/metiers')->with('erreur', "Echec de l'ajout du métier !");
        }
    }
}
