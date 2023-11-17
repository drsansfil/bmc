<?php

namespace App\Http\Controllers;

use App\Models\assistances;
use App\Models\outils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class assistance extends Controller
{
    public function index()
    {
        $assistances = assistances::all();
        $outils=outils::all();
        return view("front.assistance")->with('assistances', $assistances)->with("outils",$outils);
    }


    public function liste()
    {
        $assistances = assistances::all();
        return view('admin.assistance.index')->with("assistances", $assistances);
    }


    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titre' => 'required|string',
            'description'  => 'required|string',
            'titre_en' => 'required|string',
            'description_en'  => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $assistance = new assistances();
        $assistance->titre = $request->titre;
        $assistance->description = $request->description;
        if ($assistance->save()) {
            return redirect('/admin/assistance')->with('message', "l'enregistrement a été effectuer !");
        } else {
            return redirect()->back()->with('erreur', 'Erreur lors de l\'enregistrement!');
        }
    }



    public function delete($id)
    {
        $assistance = assistances::find($id);
        if (!empty($assistance)) {
            $assistance->delete();
            return back()->with('message', 'Suppression réussie');
        } else {
            return back()->with('erreur', 'suppression impossible');
        }
    }




    public function update_view($id)
    {
        $assistance = assistances::findOrFail($id);
        if (!$assistance) {
            return redirect('/admin/assistance')->with('erruer', "Cette assistance n'existe pas !");
        }
        return view('admin.assistance.update')->with(['assistance' => $assistance]);
    }


    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titre' => 'required|string',
            'description' => 'required|string',
            'titre_en' => 'required|string',
            'description_en'  => 'required|string',
            'id' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $assistance = assistances::find($request->id);
        if (!$assistance) {
            return redirect('/admin/assistance')->with('erruer', "Cet enregistrement n'existe pas!");
        }
        $assistance->titre = $request->titre;
        $assistance->description = $request->description;
        if ($assistance->save()) {
            return redirect('/admin/assistance')->with('message', "Modification réussie !");
        } else {
            return redirect()->back()->with('erreur', 'Erreur lors de la modification!');
        }
    }
}
