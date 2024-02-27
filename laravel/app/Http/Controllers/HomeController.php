<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('end-user.partials.content');
    }

    public function dashboard()
    {
        if (!Auth::check()) {
            return redirect('/signin');
        } else {
            return view('back-office.partials.content');
        }
    }
}
