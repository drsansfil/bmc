<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Client;
use App\Models\Projet;
use App\Models\Newslettre;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $stats = [
            'projects' => Projet::count(),
            'posts' => Blog::count(),
            'subscribers' => Newslettre::count(),
            'categories' => ProjectCategory::count()
        ];

        $chart_options = [
            'chart_title' => 'Visiteur Par Jour',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Visitor',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'bar',
            'chart_color' => '#c71f17',
        ];
        $visitorsChart = new LaravelChart($chart_options);

        return view('admin.dashboard', compact('stats','visitorsChart'));
    }
    public function profile()
    {

        return view('admin.profile');
    }

    public function update(Request $request)
    {
        //Validate the Request
        $request->validate([
            'name' => 'string',
            'email' => 'required|email',
        ]);

        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;
        if ($request->password) {
            Auth::user()->password = Hash::make($request->password);
        }
        Auth::user()->update();
        return redirect('/admin/profile')->with('mesage', 'votre profil a été mis a jour');
    }

}
