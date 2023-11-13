<?php

namespace App\Http\Controllers;

use App\Models\images;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ProjectCategory::orderBy('created_at', 'desc')->get();
        return view('admin.project_categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new ProjectCategory();
        $category->nom = $request->nom;
        $category->description = $request->description;
        if ($request->file('image')) {
            $newname = uniqid();
            $image = $request->file('image');
            $newname .= "." . $image->getClientOriginalExtension();
            $destinationPath = 'uploads';
            $image->move($destinationPath, $newname);
            $category->image =  $newname;
        }
        if ($category->save()) {
            return redirect('admin/project_category')->with('message', "Secteur d'activité ajouter avec succses");
        } else {
            echo 'error';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectCategory $projectCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectCategory $projectCategory)
    {

        return view('admin.project_categories.edit', compact('projectCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $projectCategory=ProjectCategory::find($id);
        if($projectCategory){
            $projectCategory->nom = $request->nom;
            $projectCategory->description = $request->description;
            if ($request->file('image')) {
                //supprimer ancienne photo
                $file_Path = public_path() . '/uploads/' . $projectCategory->image;
                if (file_exists($file_Path)) {
                    unlink($file_Path);
                }
                $newname = uniqid();
                $image = $request->file('image');
                $newname .= "." . $image->getClientOriginalExtension();
                $destinationPath = 'uploads';
                $image->move($destinationPath, $newname);
                $projectCategory->image = $newname;
            }

            if ($projectCategory->update()) {
                return redirect('admin/project_category')->with('message', ' modifier aves succses');
            } else {
                return redirect('admin/project_category')->with('erreur', 'echec');
            }
        }else{
            return redirect('admin/project_category')->with('erreur', 'echec !');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete($id)
    {
        $category = ProjectCategory::find($id);
        if ($category) {
            $projects = $category->projects;
            if ($projects) {
                foreach ($projects as $project) {
                    $images = images::where('id_projet', $project->id)->get();
                    foreach ($images as $image) {
                        $imagePath = public_path('uploads/' . $image->url);
                        if (file_exists($imagePath)) {
                            unlink($imagePath);
                        }
                        $image->delete();
                    }
                    $project->delete();
                }
            }
            $file_Path = public_path() . '/uploads/' . $category->image;
            if (file_exists($file_Path)) {
                unlink($file_Path);
            }
        }
        if ($category->delete()) {
            return redirect('admin/project_category')->with('message', "Secteur d'activité supprimer avec succses");
        } else {
            return redirect('admin/project_category')->with('erreur', "Echec de suppression");
        }
    }
}
