<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = ['title' => 'Welcome to ItSolutionStuff.com'];
        $pdf = PDF::loadView('certificates.v1', $data)->setPaper('a4', 'landscape');
        return $pdf->download('v1.pdf');
    }
}
