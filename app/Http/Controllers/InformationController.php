<?php

namespace App\Http\Controllers;

use App\Models\directeur;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Image;

class InformationController extends Controller
{
    //fontion afficher
    public function index()
    {
        $informations = information::first();
        return view('admin.informations.index_information')->with('informations', $informations);
    }


    public function nos_chiffres_view()  {
        $informations = information::first();
        return view('admin.informations.chiffres')->with('informations', $informations);
    }


    public function update_chiffres(Request $request){
        $information = Information::firstOrNew([]);
        $information->client = $request->client;
        $information->projet = $request->projet;
        $information->partenaire = $request->partenaire;
        $information->secteur = $request->secteur;
        if ($information->save()) {
            $information_present = information::first();
            return redirect()->back()->with('message', 'Mise a jour effectuer');
        } else {
            return redirect()->back()->with('erreur', 'echec ');
        }
    }



    //fontion enregistre dans  le base
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email_contact' => '',
            'phone_contact' => '',
            'adresse' => '',
            'facebook' => '',
            'email'=> '',
            'instagram' => '',
            'linkedin' => '',
        ]);

        if ($validator->fails()) {
            return redirect('/index_information')->withErrors($validator)->withInput();
        }


        // Recherchez l'enregistrement unique (s'il existe)
        $information = Information::firstOrNew([]);

        // Mettez à jour les attributs de l'enregistrement
        $information->email_contact = $request->email_contact;
        $information->facebook = $request->facebook;
        $information->instagram = $request->instagram;
        $information->linkedin = $request->linkedin;
        $information->adresse = $request->adresse;
        $information->email_contact = $request->email;
        $information->contacts = $request->phone_contact;

        if ($information->save()) {
            $information_present = information::first();
            return redirect('/index_information')->with('message', 'Mise a jour effectuer');
        } else {
            return response()->json(['message' => 'error']);
        }
    }

    //fontion supprimer
    public function destroy($id)
    {
        $informations = information::find($id);

        //supprimer image ml base donner
        $file_Path = public_path() . '/uploads/' . $informations->image;
        //dd($file_Path);
        if (file_exists($file_Path)) {
            unlink($file_Path);
        }

        if ($informations->delete()) {
            return redirect('/index_information')->with('message', 'Information Suprimer avec succses');
        } else {
            echo "error";
        }
    }

    //fontion modifier
    public function start(Request $request)
    {
        $information = new Information();
        $information->email_contact = '';
        $information->facebook = '';
        $information->instagram = '';
        $information->linkedin = '';
        $information->adresse = '';
        $information->contacts = '';
        $information->video = '';
        $information->home_message = "";
        $information->mail_reception = "";
        if ($information->save()) {
            return redirect('/index_information')->with('message', 'Début de la configuration');
        } else {
            echo "error";
        }
    }





    public function config_accueil()
    {
        $informations = information::select("video", "home_message","home_message_en")->first();
        return view('admin.informations.config_accueil')->with('informations', $informations);
    }






    public function config_accueil_update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'home_message' => '',
            'home_message_en' => '',
            'media' => 'file|mimes:jpeg,png,gif,mp4,avi,flv,webm,mkv,ogg|max:50000', // 50 Mo
        ], [
            'media.file' => 'Le champ média doit être un fichier.',
            'media.mimes' => 'Le champ média doit être une image (jpeg, png, gif) ou une vidéo (mp4, avi, flv, webm, mkv, ogg).',
            'media.max' => 'Le champ média ne doit pas dépasser 50 Mo.',
        ]);

        if ($validator->fails()) {
            if ($request->wantsJson()) {
                // Si la requête demande une réponse JSON (par exemple, une requête AJAX)
                return response()->json(['errors' => $validator->errors()], 422);
            } else {
                // Sinon, pour une requête non-AJAX, redirigez avec les erreurs
                return redirect('/config_accueil')->withErrors($validator)->withInput();
            }
        }
        // Recherchez l'enregistrement unique (s'il existe)
        $information = Information::firstOrNew([]);
        $information->home_message = $request->home_message;
        $information->home_message_en = $request->home_message_en;

        // Vérifiez si vous avez un fichier image à mettre à jour
        if ($request->hasFile('media')) {
            $newname = uniqid();
            $image = $request->file('media');
            $newname .= "." . $image->getClientOriginalExtension();
            $destinationPath = 'uploads';

            // Supprimez la vidéo précédente si elle existe
            if (!empty($information->video)) {
                File::delete(public_path('uploads/' . $information->video));
            }

            $image->move($destinationPath, $newname);
            $information->video = $newname;
        }

        if ($information->save()) {
            $information_present = information::first();
            return response()->json(['message' => 'OK']);
        } else {
            return response()->json(['message' => 'error']);
        }
        $informations = information::first();
        return view('admin.informations.config_accueil')->with('informations', $informations);
    }











    public function config_mail()
    {
        $informations = information::select("mail_reception")->first();
        return view('admin.informations.config_mail')->with('informations', $informations);
    }











    public function config_mail_update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mail_reception' => 'email|required'
        ]);

        if ($validator->fails()) {
            return redirect('/config_mail')->withErrors($validator)->withInput();
        }
        $information = Information::firstOrNew([]);
        $information->mail_reception = $request->mail_reception;
        if ($information->save()) {
            $informations = information::select("mail_reception")->first();
            return redirect('/config_mail')->with('message', 'Début de la configuration')->with('informations', $informations);
        } else {
            echo "error";
        }
    }









}
