<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Client;
use App\Models\directeur;
use App\Models\Information;
use App\Models\metier;
use App\Models\Newslettre;
use App\Models\outils;
use App\Models\Projet;
use App\Models\ProjectCategory;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\App;
use Laravel\Ui\Presets\React;

class GuestController extends Controller
{
    public function home()
    {
        $info = Information::first(); //recupere tout les informations de la base
        $projets = Projet::all(); //recupere tout les projets de la base
        $blog = Blog::latest()->take(4)->get(); //recupere tout les blog de la base
        $projectCategories = ProjectCategory::all();
        $clients = Client::all();
        $metiers = metier::all();
        $outils = outils::all();

        if (is_null($info)) {
            Information::insert(["home_message" => "Veuillez configurer"]);
            $informations = directeur::first();
            return view('admin.informations.directeur')->with('informations', $informations);
        }

        return view('front.acceuil')
            ->with('info', $info)
            ->with('clients', $clients)
            ->with('projets', $projets)
            ->with('metiers', $metiers)
            ->with('outils', $outils)
            ->with('projectCategories', $projectCategories)
            ->with('blogs', $blog);
    }

    public function changeLang($langcode)
    {
        App::setLocale($langcode);
        session()->put("lang_code", $langcode);
        return redirect()->back();
    }

    public function index()
    {

        $projets = Projet::all(); //recupere tout les projets de la base
        $projectCategories = ProjectCategory::has('projects')->get();
        return view('front.portfolio-gallery', compact('projets', 'projectCategories'));
    }

    public function indexe()
    {

        $info = Information::all(); //recupere tout les informations de la base
        return view('front.about')->with('info', $info);
    }

    public function contactindex()
    {
        $info = Information::first();
        return view('front.contact')->with('info', $info);
    }

    //Blog page
    public function blog()
    {
        $blogs = Blog::all();
        $categoris = ProjectCategory::all();
        return view('front.blog')->with('blogs', $blogs)->with('categoris', $categoris);
    }


    //Blog Detail
    public function blogDetail($id)
    {
        $blog = Blog::findOrFail($id);
        $blogs = Blog::all();
        if (!$blog) {
            abort(404);
        }
        return view('front.blogDetails')->with('blog', $blog)->with('blogs', $blogs);
    }




    //projet page
    public function projets()
    {
        $projets = Projet::all();
        $categoris = ProjectCategory::has('projects')->get();
        return view('front.list_projets')->with('projets', $projets)->with('categoris', $categoris);
    }

    //new ajout
    public function details_projet($id)
    {
        $projet = Projet::find($id);
        $projets = Projet::all();
        if (!$projet) {
            abort(404);
        }
        return view('front.projetDetails')->with([
            'projet' => $projet,
            'projets' => $projets,
        ]);
    }






    public function metierdetails($id)
    {
        $metier = metier::find($id);
        if (!$metier) {
            abort(404);
        }
        return view('front.metier')->with([
            'metier' => $metier
        ]);
    }



    public function details_secteur($id)
    {
        $secteur = ProjectCategory::find($id);
        if (!$secteur) {
            abort(404);
        }
        return view('front.secteurDetail')->with([
            'secteur' => $secteur
        ]);
    }




    public function specialisation_bim()
    {
        return view('front.specialisation_bim');
    }



    public function index_outils()
    {
        $outils = outils::all();
        return view('front.outils')->with('outils', $outils);
    }



    public function recherche(HttpRequest $request)
    {
        $key = addslashes($request->m_search);
        $projets = Projet::where(function ($query) use ($key) {
            $query->where('nom_projet', 'like', '%' . $key . '%')
                ->orWhere('description', 'like', '%' . $key . '%');
        })->get();
        $outils = outils::where(function ($query) use ($key) {
            $query->where('titre', 'like', '%' . $key . '%')
                ->orWhere('description', 'like', '%' . $key . '%');
        })->get();
        return view('front.recherche')->with('outils', $outils)->with('projets', $projets);
    }






    public function store_new(HttpRequest $request)
    {

        $newslettre = new Newslettre();
        $newslettre->nom = $request->nom;
        $newslettre->email = $request->email;

        if ($newslettre->save()) {
            return response()->json(['success' => true, 'message' => 'Votre newsletter a été ajoutée avec succès']);
        } else {
            return response()->json(['success' => false, 'message' => 'Une erreur s\'est produite, veuillez réessayer']);


        }

    }
}
