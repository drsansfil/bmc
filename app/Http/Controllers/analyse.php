<?php

namespace App\Http\Controllers;

use App\Models\analyse as ModelsAnalyse;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class analyse extends Controller
{
    public function index()
    {
        $analyses = ModelsAnalyse::all();
        $projets = Projet::latest()->take(5)->get();
        return view("front.analyse")->with('analyses', $analyses)->with('projets',$projets);
    }


    public function liste()
    {
        $analyses = ModelsAnalyse::all();
        return view('admin.analyse.index')->with("analyses", $analyses);
    }


    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titre' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $analyse = new ModelsAnalyse();
        $analyse->titre = $request->titre;
        if ($request->file('image')) {
            $newname = uniqid();
            $image = $request->file('image');
            $newname .= "." . $image->getClientOriginalExtension();
            $destinationPath = 'uploads';
            $image->move($destinationPath, $newname);
            $analyse->image =  $newname;
        }
        if ($analyse->save()) {
            return redirect('/admin/analyse')->with('message', "l'enregistrement a été effectuer !");
        } else {
            return redirect()->back()->with('erreur', 'Erreur lors de l\'enregistrement!');
        }
    }



    public function delete($id)
    {
        $analyse = ModelsAnalyse::find($id);
        if (!empty($analyse)) {
            if (File::exists('uploads/' . $analyse->image)) {
                File::delete('uploads/' . $analyse->image);
            }
            $analyse->delete();
            return back()->with('message', 'Suppression réussie');
        } else {
            return back()->with('erreur', 'suppression impossible');
        }
    }




    public function update_view($id)
    {
        $analyse = ModelsAnalyse::findOrFail($id);
        if (!$analyse) {
            return redirect('/admin/analyse')->with('erruer', "Cette analyse n'existe pas !");
        }
        return view('admin.analyse.update')->with(['analyse' => $analyse]);
    }


    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titre' => 'required|string',
            'id' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $analyse = ModelsAnalyse::find($request->id);
        if (!$analyse) {
            return redirect('/admin/analyse')->with('erruer', "Cet enregistrement n'existe pas!");
        }
        $analyse->titre = $request->titre;
        if ($request->file('image')) {
            $oldimg = $analyse->image;
            $newname = uniqid();
            $image = $request->file('image');
            $newname .= "." . $image->getClientOriginalExtension();
            $destinationPath = 'uploads';
            $image->move($destinationPath, $newname);
            File::delete("uploads/$oldimg");
            $analyse->image =  $newname;
        }
        if ($analyse->save()) {
            return redirect('/admin/analyse')->with('message', "Modification réussie !");
        } else {
            return redirect()->back()->with('erreur', 'Erreur lors de la modification!');
        }
    }
}
