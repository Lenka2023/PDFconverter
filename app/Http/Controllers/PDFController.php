<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Dompdf\Dompdf;
use \Gufy\PdfToHtml\Config ;
//use D\XAMPP\php\pear;
include 'vendor/autoload.php';
class PDFController extends Controller
{
public function Convert(){
	$pdf = new Dompdf();
		//$pdf = App::make('dompdf.wrapper');
$pdf->loadHTML('<body bgcolor="#A0A0A0" vlink="blue" link="blue"> <div id="page1-div" style="position:relative;width:918px;height:1188px;"> <img width="918" height="1188" src="src/../output/5c7e53d5bdb83/document001.png" alt="background image"> <p style="position:absolute;top:85px;left:51px;white-space:nowrap" class="ft00"><b>Test</b></p> </div> </body>');
//$pdf->render();
//$pdf->stream();
return $pdf->render('review.pdf');
	}
	public function Convert1(){
		$data=['name'=>'Sarthak'];
		$pdf = PDF::loadView('convert1', compact('data'));
return $pdf->download('convert1.pdf');
	}
	 public function pdf()
    {
        $pdf = PDF::loadView('pdf');
        return $pdf->stream('review.pdf'); //Stream    
    }
    public function Convert2()
    {
      	$pdf = new Dompdf();
      	$html='<h1>Test</h1>';
      	$pdf->render();
        $pdf->stream();
      }
   
    
    public function index()
   {   
        return view('editor');
    }

   
    public function Convert_to_htm12(Request $request){
  
        $pdf = new Dompdf();
        $pdf->loadHTML('<h1>Test</h1>');
        $file[]=$pdf->render('review.pdf');
       	\Gufy\PdfToHtml\Config::set('pdftohtml.bin', 'poppler-0.68.0\bin/pdftohtml.exe');
        \Gufy\PdfToHtml\Config::set('pdfinfo.bin', 'poppler-0.68.0\bin/pdfinfo.exe');
        $file=($request->file('pic'));
       
        $filename=$file->getClientOriginalName();
       
        $filepath=$file->getRealPath();
        
        move_uploaded_file($filepath, "uploads/$filename");
       $pdf = new \Gufy\PdfToHtml\Pdf('uploads/'.$filename);
       $pdfDom = $pdf->getDom(['ignoreImages' => true]);
       
      $html =$pdf->html();
      dd($html);
      }
}


