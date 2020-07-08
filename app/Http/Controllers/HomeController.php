<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Setting;
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
        $this->middleware('guest');
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
        // dd($request->all());
        $request->validate([
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'hngi_id' => 'required',
            'track' => 'required',
        ]);

        $pdata = $request->all();
        $data = [
            'title' => 'Certificate of Completion',
            'first_name' => $pdata['first_name'],
            'last_name' => $pdata['last_name'],
            'track' => $pdata['track'],
            'cohort' => $pdata['cohort'],
            'hngi_id' => $pdata['hngi_id'],
            'version' => $pdata['version'],
        ];

        $date = date('d F, Y');
        $settings = Setting::first();

        $data['start_date'] = $settings->start_date;
        $data['grad_date'] = $settings->grad_date;
        $data['issued'] = $date;

        $this->save($data);

        if ($request->has('email')) {
            dd("comming soon");
        }

        return redirect('/certificates/' . $pdata['hngi_id']);

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

    public function showCertificate($id)
    {
        $certificate = Certificate::where('hngi_id', '=', $id)->get()->first();

        return view('certificates.v' . $certificate->version)->withCertificate($certificate);

    }
}
