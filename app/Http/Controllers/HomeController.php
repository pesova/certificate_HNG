<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Mail\CertificateCreated;
use App\Setting;
use PDF;
// use App\Mail;
use Illuminate\Support\Facades\Mail;
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
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $req)
    {
        $req->session()->flash('message', 'You have selected certificate of type ' . $req->input('type'));
        return view('landing')->with('type', $req->input('type'));
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function generate(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'hngi_id' => 'numeric|digits_between:5,5',
            'track' => 'required',
            'email' => 'required|email:rfc,dns',
        ]);

        $Certificate = Certificate::where('hngi_id', $request->input('hngi_id'))->first();
        $Certificate = is_null($Certificate) ? new Certificate() : $Certificate;
        $Certificate->hngi_id = $request->input('hngi_id');
        $Certificate->first_name = $request->input('first_name');
        $Certificate->last_name = $request->input('last_name');
        $Certificate->track = $request->input('track');
        $Certificate->version = $request->input('version');
        $Certificate->total_downloads += 1;
        $Certificate->save($request->all());

        if ($request->input('sendmail') == 'on') {
            Mail::to($request->input('email'))->send(new CertificateCreated($Certificate));
        }

        return redirect('/certificates/' . $request->input('hngi_id'));

        //    return $this->downloadnow($data);

    }

    public function downloadnow($data)
    {
        $pdf = PDF::loadView('certificates.v1', $data)->setPaper('a4', 'landscape');
        return $pdf->download('v1.pdf');
    }

    public function sendToMail()
    {


    }

    public function save($data)
    {
        $Certificate = Certificate::where('hngi_id', $data['hngi_id'])->first();
        $Certificate = is_null($Certificate) ? new Certificate() : $Certificate;
        $Certificate->hngi_id = $data['hngi_id'];
        $Certificate->first_name = $data['first_name'];
        $Certificate->last_name = $data['last_name'];
        $Certificate->track = $data['track'];
        $Certificate->version = $data['version'];
        $Certificate->total_downloads += 1;
        return $Certificate->save();
    }

    public function showCertificate($view, $id)
    {
        $certificate = Certificate::where('hngi_id', '=', $id)->get()->first();
        if (is_null($certificate)) {
            return redirect('/');
        }
        if ($view == 'v') {
            $certificate->downloadable = 0;
        }
        return view('certificates.v' . $certificate->version)->withCertificate($certificate);

    }

    public function seed()
    {
        $settings = new Setting();
        $settings->founder = 'Xyluz';
        $settings->grad_date = date('Y-m-d');
        $settings->start_date = date('Y-m-d');
        $settings->cohort = '7.0';
        $settings->save();
    }
}
