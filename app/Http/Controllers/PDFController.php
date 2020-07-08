<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Certificate;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF(Request $request)
    {
        // dd($request->id);
        $data = Certificate::where('hngi_id', $request->input('id'))->get()->first();
        // dd($data->version);
        $date = date('d F, Y');
        $settings = Setting::first();

        $data->start_date = $settings->start;
        $data->grad_date = $settings->start;
        $data->issued = $date;
        //dd($data->version);
        //dd($data->version);
        $data = ['certificate' => $data];
        $pdf = PDF::loadView('certificates.v' . $data['certificate']->version, $data)->setPaper('a4', 'landscape');
        return $pdf->download('v1.pdf');
    }
}
