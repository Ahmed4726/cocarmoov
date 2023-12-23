<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
</head>
<!-- navigation -->
<header class="navigation bg-tertiary sticky-top">
	<nav class="navbar navbar-expand-xl navbar-light">
		<div class="container-fluid">
        <div class="toggle-mobile-button">
			<a class="navbar-brand" href="{{ route('welcome') }}">
				<img loading="prelaod" decoding="async" class="img-fluid" width="60%" height="100px" src="{{ asset('images/wallet/footer-2.png') }}" alt="Wallet">
			</a>
			<button class="navbar-toggler p-1 m-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
            </div>
			<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
				<ul class="navbar-nav mb-2" style="margin-left: -209px;" >
					<!-- <li class="nav-item"> <a class="nav-link" href="{{ route('welcome') }}">Accueil</a>
					</li> -->
					<li class="nav-item dropdown">
    <a class="nav-link header-text-mobile dropdown-toggle app-font-family" href="{{ route('welcome') }}" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">Client</a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item header-text-mobile fw-bold app-font-family" href="{{route('professionall')}}">Professionnel</a></li>
        <li><a class="dropdown-item header-text-mobile fw-bold app-font-family" href="{{ route('welcome') }}">Particulier</a></li>
    </ul>
</li>
					<li class="nav-item"> <a class="nav-link header-text-mobile fw-bold app-font-family" href="about.html">Déplacer un véhicule</a>
					</li>
					<li class="nav-item"> <a class="nav-link header-text-mobile fw-bold app-font-family" href="{{ route('co-drive') }}">Co-convoyer</a>
					</li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle header-text-mobile app-font-family" href="#" class="login-button" id="navbarDropdown"  data-bs-toggle="dropdown" aria-expanded="false">Partenaire</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item header-text-mobile fw-bold app-font-family" href="{{route('convoyor')}}">Convoyeur</a>
							</li>
							<li><a class="dropdown-item header-text-mobile fw-bold app-font-family" href="{{route('transporteur')}}">Transporteur</a>
							</li>
              </ul>
          </li>
				</ul>
                        
				<button class="btn btn-warning-outline login-button-header py-3 px-3" style="margin-left: 24px; cursor: pointer;" data-toggle="modal" data-target="#loginModal">
				<span class="text-dark fw-bold app-font-family">S'identifier</span>
				</button>
  <!-- Signup Button -->
  <button class="btn btn-warning-outline login-button-header py-3 px-3" style="margin-left: 24px; cursor: pointer;" data-toggle="modal" data-target="#signupModal">
    <span class="text-dark fw-bold app-font-family">S'inscrire</span>
  </button>

			
				<!-- <a href="#!" class="btn btn-primary ms-2 ms-lg-3">Sign Up</a> -->
			</div>
		</div>
	</nav>
</header>
<!-- /navigation -->


  <!-- Modal login start -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">S'identifier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your Laravel login form -->
                <form id="loginForm" method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email Address -->
                    <div class="form-group">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="entrez votre Adresse e-mail"  required autofocus>
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="entrez votre Mot de passe"  required>
                    </div>
					<br>
                    <!-- Remember Me -->
                    <!-- <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                        <label class="form-check-label" for="remember_me">Remember me</label>
                    </div> -->
                    <!-- Forgot Password Link -->
                    <div class="form-group">
                        <a href="{{ route('password.request') }}" class="text-muted">Forgot your password?</a>
                    </div>
                    <!-- Login button -->
                    <button type="submit" class="btn btn-warning" style="width:100%;">Connexion</button>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- Signup Modal -->
	<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">S'inscrire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your Laravel registration form -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Name -->
                    <div class="form-group">
                        <label for="name">Prénom</label>
                        <input type="text" class="form-control" id="name" name="last_name" placeholder="entrez votre Prénom" required autofocus>
                    </div>
					
					<div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" name="family_name" placeholder="entrez votre Nom" required>
                    </div>
					<div class="form-group">
                        <label for="name">Numéro de téléphone</label>
                        <input type="text" class="form-control" id="name" name="phone_number" placeholder="entrez votre Numéro de téléphone" required>
                    </div>
                    <!-- Email Address -->
                    <div class="form-group">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="entrez votre Adresse e-mail" required>
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="entrez votre Mot de passe" required>
                    </div>
                    <!-- Confirm Password -->
                    <div class="form-group">
                        <label for="password_confirmation">Confirmer Mot de passe</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmer votre Mot de passe" required>
                    </div>
					<div class="form-group">
						<label for="user_type">Type d'utilisateur</label>
						<select class="form-control" name="user_type" id="user_type">
							<option value="Particulier">Particulier</option>
							<option value="professionnel">Professionnel</option>
							<option value="Co-convoyeur">Co-convoyeur</option>
							<option value="Convoyeur">Convoyeur</option>
							<option value="Transporteur">Transporteur</option>

						</select>
					</div>
					<br>
					
                    <!-- Sign Up button -->
                    <button type="submit" class="btn btn-warning" style="width:100%;">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('loginForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the form from submitting normally

        // Store 'this' in a variable for use inside fetch callback
        const form = this;

        // Perform an AJAX request to submit the form
        fetch(form.action, {
            method: form.method,
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams(new FormData(form)),
        })
        .then(response => {
            if (response.ok) {
                // If login is successful, show success message
                Swal.fire({
                    icon: 'success',
                    title: 'Logged in successfully!',
                    showConfirmButton: false,
					timer: 1000, // Wait for user confirmation
                }).then(() => {
                    // Redirect to the dashboard after user confirms
                    window.location.href = '{{ route("dashboard") }}';
                });
            } else {
                // If login fails, show error message
                Swal.fire({
                    icon: 'error',
                    title: 'Login failed',
                    text: 'Login details are incorrect. Please try again.',
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
</script>
@if(session('showLoginAlert'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Please Login',
            text: 'You need to log in to access this page.',
        });
    </script>
@endif
<!-- 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->

