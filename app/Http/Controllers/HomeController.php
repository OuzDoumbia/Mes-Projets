<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Candidat;
use App\Http\Controllers\CandidatController;
use Illuminate\Support\Facades\Auth;

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
    public function indo()
    {
        
        if(Auth::id()){
            $role=Auth()->user()->role;

            if($role=='user')
            {
                return view('nav');
            }
            else if($role=='admin')
            {
                return view('candidat.ajouter');
            }
            else
            {
                return redirect()->back();
            }
        }
       // return view('home');
    }
   
}
