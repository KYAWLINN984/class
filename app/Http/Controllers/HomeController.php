<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Stuent;

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
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stuents=Stuent::all();
        return view('home',compact('stuents'));

    }
}
