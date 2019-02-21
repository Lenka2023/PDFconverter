<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use DB;
use PDF;
use App\Http\Requests;
use Storage;
use App\Http\Controllers\Controller;


class EditorController extends Controller
{
   public function edit()
   { 
   if($user = Auth::user())
{
    return view('editor');
}


        	
    }	
   /* public function uploadFile()
   { 
   /*echo Form::open(array('url' => '/uploadfile','files'=>'true'));
         echo 'Select the file to upload.';
         echo Form::file('image');
         echo Form::submit('Upload File');
         echo Form::close();
        return view('uploadfile');  
} */  
 public function showUploadFile(Request $request) {
      $file = $request->file('image');
   
      //Display File Name
      echo 'File Name: '.$file->getClientOriginalName();
      echo '<br>';
   
      //Display File Extension
      echo 'File Extension: '.$file->getClientOriginalExtension();
      echo '<br>';
   
      //Display File Real Path
      echo 'File Real Path: '.$file->getRealPath();
      echo '<br>';
   
      //Display File Size
      echo 'File Size: '.$file->getSize();
      echo '<br>';
   
      //Display File Mime Type
      echo 'File Mime Type: '.$file->getMimeType();
   
      //Move Uploaded File
      $destinationPath = 'uploads';
      $file->move($destinationPath,$file->getClientOriginalName());
   }   
	public function insert(Request $request){
$text = $request->input('page');
DB::insert('insert into pages (text) values(?)',[$text]);
echo "Record inserted successfully.<br/>";
return view('editor');
//$file_contents=
Storage::disk('local')->put('file1.txt', 'Contents');
File::put('file1.txt', 'contents is written inside file.txt');
Storage::put( 'file1.txt','contents is written inside file.txt' );
//$filename = 'file.html';
//file_put_contents($filename,'text');
//Storage::put('file.html', ' $text');
//Storage::put('js/file.html', ' 111');
//File::put('js/file.txt', ' 1111');
//File::put('file.html', ' 1111');
//File::put('/file.html', ' 1111');
////$filename ='file.html';
//$filename ='file.html';
//$filename ='file.html';
	//$file=fopen($filename,"a");
	//if(!$file){
		//echo("Ошибка открытия файла");
				//}
	//fwrite($file, $page);
	//var_dump($file);
	//fclose($file);
}
public function log_out(){
	event.preventDefault();
	}
	
}
