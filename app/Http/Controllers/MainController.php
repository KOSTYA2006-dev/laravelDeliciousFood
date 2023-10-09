<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\View;
use App\Models\EatModel;

class MainController extends Controller
{
    public function index($id){
        if (Auth::check()) {
            $profil_user = User::where('id', $id)->get();
        View::composer(['home'], function ($view){
            $view->with(['data' => User::where('id', 1)->get()]);
        });
            return view('home', ['data'=> $profil_user, 'eat' => EatModel::all()]);
        }
        else {
            return redirect("/");
        }
        

    }
    public function search(Request $request){
        $profil_user = User::where('id', 1)->get();
        $search2 = $request -> search;
        $packet = EatModel::where('artical_name', 'LIKE', "%{$search2}%")->orderBy('artical_name')->paginate(10);
        
        return view('home', ['data'=> $profil_user, 'eat' => $packet]);

    }
   
}
