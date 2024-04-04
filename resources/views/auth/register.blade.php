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
                    <div class="card mx-auto rounded mb-5">
                        <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Name -->
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="last_name" placeholder="Entrez votre Prénom"  autofocus>
                        @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="family_name" placeholder="Entrez votre Nom" >
                        @error('family_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="phone_number" placeholder="Entrez votre Numéro de téléphone" >
                        @error('phone_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Email Address -->
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre Adresse e-mail" >
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
                        <input type="number" class="form-control" id="Quantity" min="1" value="1" name="quantity">
                    </div> --}}

                    <!-- Password -->
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre Mot de passe">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmez votre Mot de passe" >
                        @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="user_type">Choisissez votre rôle</label>
                        <select class="form-control" name="user_type" id="user_type">
                            <option selected value="">Choisissez votre rôle</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                        @error('user_type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <i class="fas fa-check rounded p-1" style="background-color:#fdcd02; color:white"></i> En vous inscrivant, vous acceptez nos <a href="https://cocarmoov.fr/mentions-legales">Conditions Générales d’Utilisation</a> et notre <a href="https://cocarmoov.fr/politique-de-confidentialite">Politique de confidentialité</a>.</li>
                    <div class="form-group">
                        <input type="checkbox" id="checkbox" name="checkbox_name"><span>Je ne souhaite pas recevoir d’informations, de bons plans et de cadeaux de CoCarmoov.</span>
                        @error('checkbox_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Sign Up button -->
                    <button type="submit" class="btn btn-warning" style="width:100%;">S'inscrire</button>
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
            <a href="{{ route('login') }}" class="text-muted">Déjà un compte ?<span style="color:#fdcd02"> S’identifier</span></a>
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




