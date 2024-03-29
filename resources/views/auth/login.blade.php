<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<title>Cocarmoov Connexion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	 <!-- Font Awesome -->
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}"> -->
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

<body class="hold-transition login-page">
<div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="login-box">
                <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <img class="img-fluid" width="100%" height="100px" src="{{ asset('images/wallet/footer-2.png') }}" alt="Wallet" class="brand-image img-circle elevation-3">
        </div>
    </div>
</div>
                    <div class="card mx-auto rounded">
                        <div class="card-body">
                            <form id="loginForm" method="POST" action="{{ route('logoin') }}">
                                @csrf
                                <!-- Email Address -->
                                <div class="form-group">
                                    <!-- <label for="email">Adresse e-mail</label> -->
                                    <input type="email" class="form-control" id="email" name="email" placeholder="entrez votre Adresse e-mail" required autofocus>
                                </div>
                                <!-- Password -->
                                <div class="form-group">
                                    <!-- <label for="password">Mot de passe</label> -->
                                    <input type="password" class="form-control" id="password" name="password" placeholder="entrez votre Mot de passe" required>
                                </div>

                                <!-- Remember Me -->
                                <!-- <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                                    <label class="form-check-label" for="remember_me">Remember me</label>
                                </div> -->
                                <!-- Forgot Password Link -->
                                <div class="form-group">
                                <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-end">
            <a href="{{ route('password.request') }}">Mot de passe oublié ?<span style="color:#fdcd02"></span></a>
        </div>
    </div>
</div>

                                    <!-- <a href="{{ route('password.request') }}" class="text-muted text-end"><span style="color:#fdcd02"> </span></a> -->

                                </div>
                                <!-- Login button -->
                                <button type="submit" class="btn btn-warning" style="width:100%;">Connexion</button>
                            </form>
                            <div class="container">
                            <div class="row justify-content-center">
        <div class="col-md-6 text-center mt-2">
        <p>--------- ou avec ---------</p>
        <div class="row mb-3">
                                <div class="col-md-4">
                                    <a href="{{ url('login/google') }}" class="text-decoration-none me-3">
                                        <img src="{{ asset('images/wallet/google..png') }}" width="60%" height="auto">
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="#" class="text-decoration-none me-3">
                                    <img src="{{ asset('images/wallet/facebook..png') }}" width="60%" height="auto">
                                    </a>
                                </div>
                                <div class="col-md-4">
                                <img src="{{ asset('images/wallet/apple..png') }}" width="60%" height="auto">

                                    </a>
                                </div>
                            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <a href="{{ route('register') }}" class="text-muted">Pas de compte ?<span style="color:#fdcd02"> S’inscrire</span></a>
        </div>
    </div>

</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <!-- Session Status -->




