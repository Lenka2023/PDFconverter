<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;

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
}
public function log_out(){
	event.preventDefault();
	}
}
