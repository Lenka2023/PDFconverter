<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
public function myfunc(Request $request) {
        if($request->hasFile('pic')){
            // never get this
            $file=$request->file('pic');
            dd($file);
        }else{
        echo "empty1";
      }
  }
    public function uploadFile(Request $form){
    if ($form->hasFile('pic')){
        echo $form->file('pic');

    }else{
        echo "empty";
    }
    echo $form->testtest;
  }
    /*public function uploadFile()
   { 
   
        return view('uploadfile');  
} */ 
public function index()
   {   
    return view('editor');
    }
 /*public function showUploadFile(Request $request) {
      $file[] = $request->file();
      //readfile($file);
		//$request->file('pic')->storeAs('public',$file);
      //Storage::putFile('public/new',$file);
     /*if (!$file->isValid()) {
    throw new \Exception('Error on upload file: '.$file->getErrorMessage());
}
      "<script>'download_file ('../uploads', $file); '</script>"*/

   //dd($file);
    //echo $file;
      //Display File Name
   /*for($i = 0; $i <10; $i++) {
   

     echo 'File Name: '.$file->getClientOriginalName();
      echo '<br>';
   
      //Display File Extension
      //echo 'File Extension: '.$file->getClientOriginalExtension();
      echo '<br>';
   
      //Display File Real Path
      echo 'File Real Path: '.$file->getRealPath();
      echo '<br>';
   
      //Display File Size
      echo 'File Size: '.$file->getSize();
      echo '<br>';
   
      //Display File Mime Type
      echo 'File Mime Type: '.$file->getMimeType();
   }
      //Move Uploaded File
      //$destinationPath = 'uploads';
     //$file->move($destinationPath,$file->getClientOriginalName());
    $url= Storage::url($file);
     dd($url);
     //"<img src='".$url."'/>";	
     } 	*/
    
   /* public function store(Request $request) { 
$file=$request->file('pic');
return Storage::putFile('public/new',$file);
    }
     public function show (Request $request){
     	$file=$request->file('pic');
    // $url= Storage::url($file);
     // $url= "../uploads";
     //return "< src='$url'/>";	
     }*/
public function Convert_to_htm12(Request $request){
  //dd('convert');
  $pdf = new Dompdf();
  $pdf->loadHTML('<h1>Test</h1>');
  $file[]=$pdf->render('review.pdf');
 	\Gufy\PdfToHtml\Config::set('pdftohtml.bin', 'C:\poppler-0.68.0\bin/pdftohtml.exe');

\Gufy\PdfToHtml\Config::set('pdfinfo.bin', 'C:\poppler-0.68.0\bin/pdfinfo.exe');
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
 //$file = "document.pdf";
 $file=($request->file('pic'));
  //$file[]='D:\XAMPP\htdocs\myminilaravel5.loc\doc/document.pdf';
//dd($file);
 $pdf = new \Gufy\PdfToHtml\Pdf('C:\document.pdf');
 $pdfDom = $pdf->getDom(['ignoreImages' => true]);
 //dd($pdfDom);
 //$pdfDom =$file->getDom();
  //dd($pdfDom);
 //dd($pdf);
//$pdfInfo = $pdf->getInfo();
//dd($pdfInfo);
//$countPages = $pdf->countPages();
//dd($countPages);
//dd($contentFirstPage);
//$total_pages = $pdf->getPages(0);
//dd($total_pages);
/*foreach ($pdf->getHtml()->getAllPages() as $page) {
    echo $page . '<br/>';
  }*/
// convert to html and return it as [Dom Object](https://github.com/paquettg/php-html-parser)
$html =$pdf->html();
//$htmlstr=implode('',$html);
//echo $html;
 //dd($html);
//echo "<script>console.log( 'Debug Objects: " . $html . "' );</script>";
// echo "<script type='text/javascript'>'console.log(  '123456 ' );'</script>";




// check if your pdf has more than one pages
 
 
 
 
 
// Your pdf happen to have more than one pages and you want to go another page? Got it. use this command to change the current page to page 3
//$html->goToPage(0);
//$abc='1256554478999555655698';

// and then you can do as you please with that dom, you can find any element you want
//$paragraphs = $html->find('body > p');
return view('show_html',compact('html'));

}
}


