<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \PDF;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function pdf()
    {
        $pdf = \PDF::loadView('home.pdf');
        //return $pdf->download('review.pdf'); //Download        
        return $pdf->stream('review.pdf'); //Stream    
    }
}
