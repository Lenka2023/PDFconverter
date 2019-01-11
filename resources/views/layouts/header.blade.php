<!DOCTYPE html>
<html>
    <head>
        <meta Content-Type:application/pdf charset="UTF-8"  name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
		
        
        <!--[if lt IE 9]>
        <script>
            var e = ("article,aside,figcaption,figure,footer,header,hgroup,nav,section,time").split(',');
            for (var i = 0; i < e.length; i++) {
              document.createElement(e[i]);
            }
        </script>
        <![endif]-->
    </head>
	@yield('content')
	<div id="result">
        <span id="RESULTTEXT"></span>
        </div>
    <script type="text/javascript" src="{{asset('js/jquery-1.12.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
	<!--<script type="text/javascript" src="{{URL::asset('js/script.js')}}"></script>-->
     <!--<script type="text/javascript" src="{{URL::asset('assets/js/script.js')}}"></script>-->
    <!--<script type="text/javascript" src="{{ URL::to('js/script.js') }}"></script>-->
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
<script src="https://mozilla.github.io/pdf.js/build/pdf.worker.js"></script>
    </body>
</html>