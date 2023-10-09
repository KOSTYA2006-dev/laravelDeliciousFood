<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutAdminController extends Controller
{
    public function logout(){

        auth("admin")->logout();
        redirect('/');

    }
}
