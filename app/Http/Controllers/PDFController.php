<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Certificate;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\URL;
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
        $data = Certificate::where('hngi_id', $request->input('id'))->get()->first();
        $date = date('d F, Y');
        $settings = Setting::first();
        $data->total_downloads += 1;
        $data->save();
        $data->start_date = $settings->start;
        $data->grad_date = $settings->start;
        $data->issued = $date;
        $data->downloadable = 0;
        $name = $data->first_name . $data->lastname_name . $data->hngi_id . '.pdf';

        $certificate = ['certificate' => $data];

        $response = Http::withToken(env('PDF_API', 'B6Oz9M9xQ1gvemLC0ZPVhDAO91TuTtxOaZK1PWB2'))->withOptions([
            'verify' => false,
        ])->post('https://docamatic.com/api/v1/pdf', [
            'source' => URL::to('/certificates/v/' . $request->input('id')),
            'format' => 'A4',
            'media' => 'screen',
            'landscape' => true,
            'test'      => true,
            'zoom'      => 0,
            'page_ranges' => '1',
        ]);

        if ($response->successful()) {
            $data = $response->json();
            $filename = $name;
            $temppdf = tempnam(sys_get_temp_dir(), $filename);
            copy($data['document'], $temppdf);
            return response()->download($temppdf, $filename);
        }
        $pdf = PDF::loadView('certificates.v' . $certificate['certificate']->version, $certificate)->setPaper('a4', 'landscape');
        return $pdf->download($name.'.pdf');
    }
}
