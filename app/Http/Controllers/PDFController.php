<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

   
class PDFController extends Controller
{
public function Convert(){
		$pdf = App::make('dompdf.wrapper');
$pdf->loadHTML('<h1>Test</h1>');
return $pdf->stream();
	}
	public function Convert1(){
		$data=['name'=>'Sarthak'];
		$pdf = PDF::loadView('convert', $data);
return $pdf->download('convert.pdf');
	}
}
