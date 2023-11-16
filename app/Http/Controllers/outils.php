<?php

namespace App\Http\Controllers;

use App\Models\outils as ModelsOutils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class outils extends Controller
{
    public function index()
    {
        $outils = ModelsOutils::all();
        return view("front.outils")->with('outils', $outils);
    }


    public function liste()
    {
        $outils = Modelsoutils::all();
        return view('admin.outils.index')->with("outils", $outils);
    }


    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titre' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'icone' => 'required|image|mimes:svg',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $outils = new Modelsoutils();
        $outils->titre = $request->titre;
        $outils->description = $request->description;
        if ($request->file('image')) {
            $newname = uniqid();
            $image = $request->file('image');
            $newname .= "." . $image->getClientOriginalExtension();
            $destinationPath = 'uploads';
            $image->move($destinationPath, $newname);
            $outils->image =  $newname;
        }
        if ($request->file('icone')) {
            $newname = uniqid();
            $image = $request->file('image');
            $newname .= "." . $image->getClientOriginalExtension();
            $destinationPath = 'uploads';
            $image->move($destinationPath, $newname);
            $outils->icone =  $newname;
        }
        if ($outils->save()) {
            return redirect('/admin/outils')->with('message', "l'enregistrement a été effectuer !");
        } else {
            return redirect()->back()->with('erreur', 'Erreur lors de l\'enregistrement!');
        }
    }



    public function delete($id)
    {
        $outils = Modelsoutils::find($id);
        if (!empty($outils)) {
            if (File::exists('uploads/' . $outils->image)) {
                File::delete('uploads/' . $outils->image);
            }
            if (File::exists('uploads/' . $outils->icone)) {
                File::delete('uploads/' . $outils->icone);
            }
            $outils->delete();
            return back()->with('message', 'Suppression réussie');
        } else {
            return back()->with('erreur', 'suppression impossible');
        }
    }




    public function update_view($id)
    {
        $outils = Modelsoutils::findOrFail($id);
        if (!$outils) {
            return redirect('/admin/outils')->with('erruer', "Cette outils n'existe pas !");
        }
        return view('admin.outils.update')->with(['outils' => $outils]);
    }


    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titre' => 'required|string',
            'description' => 'required|string',
            'id' => 'required',
            'icone' => 'required|image|mimes:svg',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $outils = Modelsoutils::find($request->id);
        if (!$outils) {
            return redirect('/admin/outils')->with('erruer', "Cet enregistrement n'existe pas!");
        }
        $outils->titre = $request->titre;
        $outils->description = $request->description;
        if ($request->file('image')) {
            $oldimg = $outils->image;
            $newname = uniqid();
            $image = $request->file('image');
            $newname .= "." . $image->getClientOriginalExtension();
            $destinationPath = 'uploads';
            $image->move($destinationPath, $newname);
            File::delete("uploads/$oldimg");
            $outils->image =  $newname;
        }
        if ($request->file('icone')) {
            $oldimg = $outils->icone;
            $newname = uniqid();
            $image = $request->file('icone');
            $newname .= "." . $image->getClientOriginalExtension();
            $destinationPath = 'uploads';
            $image->move($destinationPath, $newname);
            File::delete("uploads/$oldimg");
            $outils->icone =  $newname;
        }
        if ($outils->save()) {
            return redirect('/admin/outils')->with('message', "Modification réussie !");
        } else {
            return redirect()->back()->with('erreur', 'Erreur lors de la modification!');
        }
    }
}
