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
        return view('home');
    }
    public function mail()
    {      

        $validatedData = request()->validate([

                        'mail'=>'required',
                    ]);

                            dd($validatedData);
        // $retour = mail('info@denionn.com', 'Envoi depuis la page Newsletter', $validatedData, 'From :'$validatedData);
    if ($retour) {
        return back();
    }
    }
}
