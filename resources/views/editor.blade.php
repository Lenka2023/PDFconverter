@extends('layouts.header')
<script type="text/javascript" src=""></script>
@section('content')


        <div class="page_cont one">
            <br class="cbt">
            <div class="edit_cont">
                <div class="middle">
		
					<button onclick="Main_List()"> Main List</button>
	                <button onclick="Square_List()">Square List</button>
	                <button onclick="Decimal_List()">Decimal List</button>
	                <button onclick="Disc_List()">Disc List</button>
	                <button onclick="None_List()">None List</button>
	                <button onclick="Red_title()"> Red title</button>
	                <button onclick="Middle_Title()">Middle Title</button>
	                <button onclick="Down_title()">Down title</button>
	                <button onclick="DownPage_title()">DownPage title</button>
	                <button onclick="Small_title()">Small title</button>
	                <button onclick="Capture()">Capture</button>
	                <button onclick="Hot_Tip()">Hot Tip</button>
	                <button onclick="Code()">Code</button>
	                <button onclick="Smallicon()">SmallIcon</button>
	                <button onclick="Table()">Table</button>
	                <button onclick="Link()">Link</button>
	                <button onclick="Txt()">Text</button>
	                <button onclick="CBT()">CBT</button>
	                <button onclick="Image()">Image</button>
	                <button onclick="Listing()">Listing</button>
	                <button onclick="Bold()">Bold</button>
	                <button onclick="Top()">TopPage</button>
	                <button onclick="Down()">DownPage</button>
	                <button onclick="Down()">DownPage</button>
	                <br>
	               
					<iframe id="my_iframe" style="display:none;"></iframe>
	                <button onclick="Delete()">Delete</button>
	                <button onclick="Redo()" id='redo' disabled>Redo</button>
	                <button onclick="Undo()" id='undo' disabled>Undo</button>
	                <p><textarea id="text"  name="text"></textarea></p>
	            <div id="area" class="area">
	            <span id="RESULTHTML" onkeypress="myFunction();" onclick="getCaretPosition()" onkeypress="ChangeSelection"></span>
	           
	            </div>
	            <form action="editor" id="contact_file" enctype="multipart/form-data"  method="post">
				 	 {{ csrf_field() }}
	                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
	                 <input type="file" name="pic">
	                 <button > Convert_to_htm12</button>
	          </form>
	          <form action="convert" method="GET">
				<button onclick="Convert()"> Convert</button>	
			</form>
				<form action="convert" method="GET">
				<button onclick="Convert2()"> Convert2</button>	
				</form>
				<form action="convert" method="GET">
				<button onclick="Convert1()"> Convert1</button>	
				</form>
				<button onclick="Send_to_DB()"> Send_to_DB</button>
				<form action="editor" method="POST">
					<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
					page:<input type="text" name="page" id="RESULSERVER"><br>
					<input type="submit">
				</form>
				<form   id="logout1-form" action="{{ route('logout') }}" method="POST" >
					 {{ csrf_field() }}
					<input type='submit' name='out' value='Log out'/>
				</form>

		</div>
	</div>
 </div>
		@stop 

