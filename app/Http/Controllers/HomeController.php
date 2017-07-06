<?php

namespace App\Http\Controllers;

use function Faker\Provider\pt_BR\check_digit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function home()
    {
        if (!auth()->check()){
        return redirect(login);
        }
        return view('home');
    }
//}    $this->middleware('auth');
}
