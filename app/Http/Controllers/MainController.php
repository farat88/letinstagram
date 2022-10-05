<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(Request $request): View
    {
        return view('welcome');
    }

    public function register(Request $request): RedirectResponse
    {
        dd($request->all());
        return to_route('home');
    }
}


