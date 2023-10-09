<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function showRegister(){
        if (Auth::check()){
            redirect(route('index'));
        }
        // $packet = DB::table('')->secect('*')->get();
        return view('auth.register');


    }
    public function showLogin(){
        if (Auth::check()){
            redirect(route('index'));
        }
        
        return "OK";

    }

    public function Store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            "name" => "required", "string",
            "email" => "required", "string", "email", "unique:email",
            "password" => "required", "confimed",
        ]);
        

 
        if ($validator->fails()) {
            return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        }
 
        
        $user = User::create([
           'name' => $request->name,
           
           'email' => $request->email,
           'password' =>Hash::make($request->password),
           
           
        ]);
        if ($user){
            event(new Registered($user));
            auth("web")->login($user);
            return redirect()->route('index');
    
        
    }
    return redirect('/');

}
public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
