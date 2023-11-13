<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\metierController;
use App\Http\Controllers\NewslettreController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\TemoignageController;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Information;
use App\Models\metier;
use App\Models\Newslettre;
use App\Models\Projet;
use App\Models\ProjectCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/* front*/
//multiple middlewares
Route::middleware(['count-visitors', 'Language'])->group(function () {
    Route::get('/apropos', [GuestController::class, 'indexe'])->name('apropos');
    Route::get('/', [GuestController::class, 'home'])->name('homepage');
    Route::get('/contact', [GuestController::class, 'contactindex'])->name('contact');
    Route::get('/change-language/{lang}', [GuestController::class, 'changeLang'])->name('change-language');
    Route::post('/inscrit', [NewslettreController::class, 'inscrit']); // form newslettre
    Route::get('/blog', [GuestController::class, 'blog'])->name('blog'); // blog page
    Route::get('/projets', [GuestController::class, 'projets']); // projet page
    Route::get('/projet/post/{id}', [GuestController::class, 'details_projet']);
    Route::get('/secteur/{id}', [GuestController::class, 'details_secteur']); // projet page
    Route::get('/blog/post/{id}', [GuestController::class, 'blogDetail'])->name('blogDetail'); // blog detail page
    Route::post('/contacte', [ContactController::class, 'saveContact'])->name('contacte');
    Route::get('/specialisation_bim', [GuestController::class, 'specialisation_bim']);
    Route::get('/about', function () {
        $info = Information::all(); //recupere tout les informations de la base
        $projets = Projet::all(); //recupere tout les projets de la base
        return view('front.about')->with('info', $info)->with('projets', $projets);
    })->name('about');
    Route::get('/metier/{id}', [GuestController::class, 'metierdetails']);
    Route::get('/list/metiers', function () {
        $metiers = metier::all();
        return view('front.liste_metier')->with('metiers', $metiers);
    });
    Route::get('/nos_secteurs', function () {
        $secteurs = ProjectCategory::all();
        return view('front.liste_secteur')->with('secteurs', $secteurs);
    });
    Route::get('/missions', function () {
        return view('front.mission');
    });



    //Mew ajout
    Route::get('portfolio-gallery/{id}', [GuestController::class, 'details_projet'])->name('details_projet');
});

/* backend*/
Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin/profile', [AdminController::class, 'profile']);
    Route::post('/edite_profile', [AdminController::class, 'update']);
    Route::get('/client/dashboard', [ClientController::class, 'dashboard']);

    //projet
    Route::get('/index_projets', [ProjetController::class, 'index']);
    Route::get('/ajout_projet', function () {
        $projectCategories = ProjectCategory::all();
        return view('admin.projets.ajouter', compact('projectCategories'));
    })->name('ajout_projet'); //page ajouter projet
    Route::get('/edite_projets/{id}', function ($id) {
        $projets = projet::find($id);
        $projectCategories = ProjectCategory::all();
        return view('admin.projets.update_projet')->with('projets', $projets)->with('projectCategories', $projectCategories);
    })->name('modifier_projet'); //page modifier projet
    Route::post('/store_projets', [ProjetController::class, 'store']);
    Route::get('/admin/projet/{i}/delete', [ProjetController::class, 'destroy']);
    Route::post('/edite_projets', [ProjetController::class, 'update']);

    //blog
    Route::get('/ajout_blog', function () {
        return view('admin.blogs.ajouter');
    })->name('ajout_blog'); //page ajouter blog

    Route::get('/edite_blogs/{id}', function ($id) {
        $blogs = blog::find($id);
        return view('admin.blogs.update_blog')->with('blogs', $blogs);
    })->name('modifier_blog'); //page modifier blog

    Route::get('/index_blog', [BlogController::class, 'index']);
    Route::post('/store_blogs', [BlogController::class, 'store']);
    Route::get('/admin/blog/{i}/delete', [BlogController::class, 'destroy']);
    Route::post('/edite_blogs', [BlogController::class, 'update']);







    //client
    Route::get('/ajout_client', function () {
        return view('admin.clients.ajouter');
    })->name('ajout_client'); //page ajouter client

    Route::get('/edite_clients/{id}', function ($id) {
        $clients = client::find($id);
        return view('admin.clients.update_client')->with('clients', $clients);
    })->name('modifier_client'); //page modifier client

    Route::get('/index_client', [ClientController::class, 'index'])->middleware('auth');
    Route::post('/store_clients', [ClientController::class, 'store']);
    Route::get('/admin/client/{i}/delete', [ClientController::class, 'destroy']);
    Route::post('/edite_clients', [ClientController::class, 'update']);



    //information
    Route::get('/ajout_information', function () {
        return view('admin.informations.ajouter');
    })->name('ajout_information'); //page ajouter information

    Route::get('/edite_informations/{id}', function ($id) {
        $informations = information::find($id);
        return view('admin.informations.update_information')->with('informations', $informations);
    })->name('modifier_information'); //page modifier information

    Route::get('/index_information', [InformationController::class, 'index'])->middleware('auth');
    Route::post('/store_informations', [InformationController::class, 'store']);
    Route::post('/start_informations', [InformationController::class, 'start']);
    Route::get('/config_accueil', [InformationController::class, 'config_accueil']);
    Route::post('/config_accueil', [InformationController::class, 'config_accueil_update']);
    Route::get('/config_mail', [InformationController::class, 'config_mail']);
    Route::post('/config_mail', [InformationController::class, 'config_mail_update']);







    //newlettre
    Route::get('/ajout_newslettre', function () {
        return view('admin.newslettres.ajouter');
    })->name('ajout_newslettre'); //page ajouter newslettrre

    Route::get('/edite_newslettres/{id}', function ($id) {
        $newslettres = newslettre::find($id);
        return view('admin.newslettres.update_newslettre')->with('newslettres', $newslettres);
    })->name('modifier_newslettre'); //page modifier newslettre

    Route::get('/index_newslettre', [NewslettreController::class, 'index'])->middleware('auth');
    Route::post('/store_newslettres', [NewslettreController::class, 'store']);
    Route::get('/admin/newslettre/{i}/delete', [NewslettreController::class, 'destroy']);
    Route::post('/edite_newslettres', [NewslettreController::class, 'update']);








    //directeur
    Route::get('/directeur', [InformationController::class, 'voir_directeur']);
    Route::post('/edite_directeur', [InformationController::class, 'edit_directeur']);








    //metiers
    Route::get('/admin/metiers', [metierController::class, 'index']);
    Route::get('/admin/delete_metier/{id}', [metierController::class, 'delete']);
    Route::get('/admin/update_metier/{id}', [metierController::class, 'update_view']);
    Route::post('/admin/update_metier', [metierController::class, 'update']);
    Route::post('/admin/add_metier', [metierController::class, 'create']);
    Route::get('/admin/ajouter_metier', function () {
        return view('admin.metiers.ajouter');
    });






    //client
   /*  Route::get('/ajout_client', function () {
        return view('admin.clients.ajouter');
    })->name('ajout_client'); //page ajouter client


    Route::get('/edite_clients/{id}', function ($id) {
        $clients = client::find($id);
        return view('admin.clients.update_client')->with('clients', $clients);
    })->name('modifier_client'); //page modifier client

    Route::get('/index_client', [ClientController::class, 'index'])->middleware('auth');
    Route::post('/store_clients', [ClientController::class, 'store']);
    Route::get('/admin/client/{i}/delete', [ClientController::class, 'destroy']);
    Route::post('/edite_clients', [ClientController::class, 'update']);

 */


    //contact
    Route::get('/admin/contacts', [ContactController::class, 'index_liste'])->middleware('auth');
});





// project categories
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::resource('project_category', ProjectCategoryController::class);
    Route::get('project_category/delete/{id}', 'App\Http\Controllers\ProjectCategoryController@delete')->name('project_category.delete');
});



Route::fallback(function () {
    return view('front.404');
});
