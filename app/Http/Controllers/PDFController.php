<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use \Gufy\PdfToHtml\Config ;
//use D\XAMPP\php\pear;
include 'vendor/autoload.php';
//include '/vendor/autoload.php';
//require __DIR__.'/../vendor/autoload.php';
//require __DIR__.'/../vendor/autoload.php';

//require __DIR__.'vendor.autoload.php';

//require '../vendor.autoload.php';

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

public function Convert_to_htm12(Request $request){
//$request->file;
	\Gufy\PdfToHtml\Config::set('pdftohtml.bin', 'D:/диск с/OSPanel/domains/myminilaravel.loc/poppler-0.68.0/bin/pdftohtml.exe');



// change pdfinfo bin location
\Gufy\PdfToHtml\Config::set('pdfinfo.bin', 'D:/диск с/OSPanel/domains/myminilaravel.loc/poppler-0.68.0/bin/pdfinfo.exe');
//$file = dirname(__FILE__) . '/resources/git.pdf';
//$file = dirname(__FILE__) . 'document.pdf';
//$file = 'doc/document.pdf';
//$file = '/resources/document.pdf';
 //"<script type='text/javascript'>'location.href = "http://localhost/myminilaravel2.loc/file=" + inputFunction();'</script>";
//$file = "document.pdf";'</script>";
// echo "<script type='text/javascript'>'console.log(  inputFunction(););'</script>";
// $file = "<script type='text/javascript'>'inputFunction();'</script>";
//$file = dirname(__FILE__) . '/resources/git.pdf';
//$file = dirname(__FILE__) . 'git.pdf';
//$file = 'doc/git.pdf';
//$file = '/resources/git.pdf';
//$file = "git.pdf";
 $file = "document.pdf";
// initiate

 $pdf = new \Gufy\PdfToHtml\Pdf($file);

// convert to html and return it as [Dom Object](https://github.com/paquettg/php-html-parser)
$html = $pdf->html();
 echo $html;
//echo "<script>console.log( 'Debug Objects: " . $html . "' );</script>";
// echo "<script type='text/javascript'>'console.log(  '123456 ' );'</script>";


// check if your pdf has more than one pages
 $total_pages = $pdf->getPages();
 var_dump($total_pages);
// Your pdf happen to have more than one pages and you want to go another page? Got it. use this command to change the current page to page 3
// $html->goToPage(0);

// and then you can do as you please with that dom, you can find any element you want
//$paragraphs = $html->find('body > p');

}
}

