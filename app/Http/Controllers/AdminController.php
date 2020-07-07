<?php

namespace App\Http\Controllers;

use App\Certificate;
use Illuminate\Http\Request;

class AdminController extends Controller
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

    //
    public function index()
    {
        $certificates = Certificate::all();
        return view('home')->withCertificates($certificates);
    }

    public function block($id)
    {
        $certificate = Certificate::find($id);
        $certificate->downloadable = 0;
        $certificate->save();
        return back()->withSuccess("Download blocked");
    }

    public function enable($id)
    {
        $certificate = Certificate::find($id);
        $certificate->downloadable = 1;
        $certificate->save();
        return back()->withSuccess("Download enabled");
    }
}
