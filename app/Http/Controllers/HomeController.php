<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.admhome');
    }
    public function buttons(){

        return view('admin.buttons');
    }
    public function cards(){

        return view('admin.cards');
    }
    public function tables(){

        return view('admin.tables');
    }
    public function notfound(){

        return view('admin.404');
    }
}
