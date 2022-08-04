</html>
<!doctype html>
<html class="no-js" lang="en">
    <head>	
        <!-- META DATA -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
		
        <!-- TITLE OF SITE -->
        <title>revisi</title>

        <!-- for title img -->
		{{-- <link rel="shortcut icon" type="image/icon" href="assets/images/logo/favicon.png"/> --}}
        <link rel="stylesheet" type="image/icon" href="{{ asset('images/logo/favicon.png') }}">
        
        <!--font-awesome.min.css-->
        {{-- <link rel="stylesheet" href="assets/css/font-awesome.min.css"> --}}
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		
		<!--linear icon css-->
		<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
		
		<!--animate.css-->
        {{-- <link rel="stylesheet" href="assets/css/animate.css"> --}}
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		
		<!--hover.css-->
        {{-- <link rel="stylesheet" href="assets/css/hover-min.css"> --}}
        <link rel="stylesheet" href="{{ asset('css/hover-min.css') }}">
		
		<!--vedio player css-->
        {{-- <link rel="stylesheet" href="assets/css/magnific-popup.css"> --}}
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        
		<!--owl.carousel.css-->
        {{-- <link rel="stylesheet" href="assets/css/owl.carousel.min.css"> --}}
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
		{{-- <link href="assets/css/owl.theme.default.min.css" rel="stylesheet"/> --}}
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        
        <!--bootstrap.min.css-->
        {{-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		
		<!-- bootsnav -->
		{{-- <link href="assets/css/bootsnav.css" rel="stylesheet"/>	 --}}
        <link rel="stylesheet" href="{{ asset('css/bootsnav.css') }}">
        
        <!--style.css-->
        {{-- <link rel="stylesheet" href="assets/css/style.css"> --}}
        <link rel="stylesheet"href="{{ asset('css/style3.css') }}">
        
        <!--responsive.css-->
        {{-- <link rel="stylesheet" href="assets/css/responsive.css"> --}}
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        {{-- fontawesome --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />  
        <script src="https://kit.fontawesome.com/05e961441f.js" crossorigin="anonymous"></script>
        <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">  
        {{-- <style type="text/css">  
            i{  
                font-size: 50px !important;  
                padding: 10px;  
            }  
        </style>           --}}

    </head>
	
	<body>

		{{-- navbar --}}
		<x-navbar></x-navbar>
		{{-- navbar end--}}
		
		{{ $slot }}
		
		<x-footer></x-footer>



		{{-- javascript --}}
		<!-- jaquery link -->
		{{-- <script src="assets/js/jquery.js"></script> --}}
        <script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        
        <!--modernizr.min.js-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		
		<!--bootstrap.min.js-->
        {{-- <script type="text/javascript" src="assets/js/bootstrap.min.js"></script> --}}
        <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
		
		<!-- bootsnav js -->
		{{-- <script src="assets/js/bootsnav.js" type="text/javascript"></script> --}}
        <script src="{{ asset('js/bootsnav.js') }}" type="text/javascript"></script>
		
		<!-- for manu -->
		{{-- <script src="assets/js/jquery.hc-sticky.min.js" type="text/javascript"></script> --}}
        <script src="{{ asset('js/jquery.hc-sticky.min.js') }}"></script>

		
		<!-- vedio player js -->
		{{-- <script src="js/jquery.magnific-popup.min.js"></script> --}}
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>


		<script type="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <!--owl.carousel.js-->
        {{-- <script type="javascript" src="assets/js/owl.carousel.min.js"></script> --}}
        <script src="{{ asset('js/owl.carousel.min.js') }}" type="text/javascript"></script>
		
		<!-- counter js -->
		{{-- <script src="js/jquery.counterup.min.js"></script> --}}
        <script src="{{ asset('js/jquery.counterup.min.js') }}" type="text/javascript"></script>
		{{-- <script src="js/waypoints.min.js"></script> --}}
        <script src="{{ asset('js/waypoints.min.js') }}" type="text/javascript"></script>
		
        <!--Custom JS-->
        {{-- <script type="text/javascript" src="js/jak-menusearch.js"></script> --}}
        <script src="{{ asset('js/jak-menusearch.js') }}" type="text/javascript"></script>
        {{-- <script type="text/javascript" src="js/custom.js"></script> --}}
        <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/05e961441f.js" crossorigin="anonymous"></script>
    </body>
	
</html>