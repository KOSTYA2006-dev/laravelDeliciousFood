<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){

        return view('admin.login');

    }
    public function login(Request $request){

$data = $request->validate([
    "email" => ["required", "email", "string"],
    "password" => ["required"],
]);
if (auth("admin")->attempt($data)){
    
    return route("admin.post");
}
    return redirect(route("admin.login"))->withErrors(["email" => "пользователь не найден"]);

    }
}
