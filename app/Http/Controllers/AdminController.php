<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Setting;
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

    public function settings()
    {
        $settings = Setting::first();
        return view('settings')->withSettings($settings);
    }

    public function saveSettings(Request $request)
    {
        $settings = Setting::first();
        $settings = is_null($settings) ? new Setting() : $settings;
        $settings->founder = $request->founder;
        $settings->grad_date = $request->grad_date;
        $settings->start_date = $request->start_date;
        $settings->cohort = $request->cohort;
        $settings->save();
        return back()->withSettings($settings)->withSuccess("Settings Saved");
    }
}
