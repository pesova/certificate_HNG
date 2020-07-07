<?php

namespace App\Http\Controllers;
use PDF;

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
        return view('landing');
    }

    public function generate(Request $request)
    {
        dd($request->all());
        $request->validate([
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'last_name' => 'required|min:2',
        ]);
    }

    public function downloadnow($type,$hngId)
    {

    }

    public function sendToMail() {

    }
}
