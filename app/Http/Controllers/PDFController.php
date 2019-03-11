<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Dompdf\Dompdf;
use \Gufy\PdfToHtml\Config ;
use Aws\Credentials\Credentials;
use Aws\S3\S3Client;
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
    public function myfunc(Request $request) {
        if($request->hasFile('pic'))
        {
               $file=$request->file('pic');
                dd($file);
        }else{
            echo "empty1";
            }
  }
    public function uploadFile(Request $form){
        if ($form->hasFile('pic'))
        {
            echo $form->file('pic');

        }else{
           echo "empty";
    }
    echo $form->testtest;
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
        $file=$request->file('pic'); 
        $filepath=$file->getRealPath();
        //dd( $filepath);
         $filename=$file->getClientOriginalName();
         $disk = Storage::disk('s3');
         $disk->put($filename, fopen($filepath, 'r+'));

       //dd("$filename");
       
        //Storage::putFile('public/new',$file);
        //$file->storeAs('uploads',$filename);
        /*if($request->hasFile('pic')){
         $file=$request->file('pic'); 
        
        $filepath=$file->getRealPath();
        move_uploaded_file($filepath, "uploads/$filename");
        }else{
          return 'No file selected';
        }*/
       $pdf = new \Gufy\PdfToHtml\Pdf('uploads/'.$filename);
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
     echo $html;
       //dd($html);
      //echo "<script>console.log( 'Debug Objects: " . $html . "' );</script>";
      // echo "<script type='text/javascript'>'console.log(  '123456 ' );'</script>";




      // check if your pdf has more than one pages
       
       
       
       
       
      // Your pdf happen to have more than one pages and you want to go another page? Got it. use this command to change the current page to page 3
      //$html->goToPage(0);
      //$abc='1256554478999555655698';

      // and then you can do as you please with that dom, you can find any element you want
      //$paragraphs = $html->find('body > p');
      //return view('show_html',compact('html'));

}
}


