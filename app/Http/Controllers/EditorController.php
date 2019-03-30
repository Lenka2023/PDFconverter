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
       
    
	public function insert(Request $request){
		$text = $request->input('page');
		DB::insert('insert into pages (text) values(?)',[$text]);
		echo "Record inserted successfully.<br/>";
		return view('editor');
		Storage::disk('local')->put('file1.txt', 'Contents');
		File::put('file1.txt', 'contents is written inside file.txt');
		Storage::put( 'file1.txt','contents is written inside file.txt' );

}
	public function log_out(){
		event.preventDefault();
		}
	
}
