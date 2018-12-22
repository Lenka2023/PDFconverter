<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class PDFController extends Controller
{
public function Convert(){
	$pdf = new Dompdf();
		//$pdf = App::make('dompdf.wrapper');
$pdf->loadHTML('<h1>Test</h1>');
//$pdf->render();
//$pdf->stream();
return $pdf->stream('review.pdf');
	}
	public function Convert1(){
		$data=['name'=>'Sarthak'];
		$pdf = PDF::loadView('convert1', compact('data'));
return $pdf->download('convert1.pdf');
	}
	 public function pdf()
    {
        $pdf = PDF::loadView('pdf');
        //return $pdf->download('review.pdf'); //Download        
        return $pdf->stream('review.pdf'); //Stream    
    }
    public function Convert2(){
	$pdf = new Dompdf();
	$html='<h1>Test</h1>';
		//$pdf = App::make('dompdf.wrapper');
$pdf->loadHTML($html);
$pdf->render();
$pdf->stream();
}

}

