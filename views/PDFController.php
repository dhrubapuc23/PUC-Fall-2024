<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function index()
    {
        //$pdf = PDF::loadView('pdf');
        $data = [
            'title' => 'Welcome to Laravel 8 PDF Tutorial',
            'date' => date('m/d/Y'),
            'time' => date('H:i:s'),
            'description' => 'In this tutorial, you will learn how to generate a PDF file in Laravel 8 using the laravel-dompdf package.',
        ];
        $pdf = PDF::loadView('pdf',$data);
        return $pdf->download('invoice.pdf');
    }
}
