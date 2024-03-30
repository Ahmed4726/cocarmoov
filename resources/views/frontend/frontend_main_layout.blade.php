<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<title>Cocarmoov</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	 <!-- Font Awesome -->
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="{{ asset('images/wallet/favicon.jpg') }}" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- theme meta -->
  <meta name="theme-name" content="wallet" />

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="{{ asset('plugins/wallet/slick/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/wallet/font-awesome/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/wallet/font-awesome/brands.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/wallet/font-awesome/solid.css') }}">

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="{{asset('css/wallet/style.css')}}">
</head>

<body>
<div class="wrapper">
        <x-frontend_header />
            @yield("content")
        <x-frontend_footer />
</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
<!-- # JS Plugins -->
<script src="{{asset('plugins/wallet/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/wallet/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/wallet/slick/slick.min.js')}}"></script>
<script src="{{asset('plugins/wallet/scrollmenu/scrollmenu.min.js')}}"></script>

<!-- Main Script -->
<script src="{{ asset('js/wallet/script.js') }}"></script>
<script src="{{ asset('js/wallet/custom.js') }}"></script>
</body>
</html>