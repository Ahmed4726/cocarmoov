
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->

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
				<ul class="navbar-nav mb-2" style="margin-left: -250px;" >
					<!-- <li class="nav-item"> <a class="nav-link" href="{{ route('welcome') }}">Accueil</a>
					</li> -->
					<li class="nav-item dropdown">
    <a class="nav-link header-text-mobile dropdown-toggle app-font-family" href="{{ route('welcome') }}" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">Client</a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item header-text-mobile fw-bold app-font-family" href="{{route('professionall')}}">Professionnel</a></li>
        <li><a class="dropdown-item header-text-mobile fw-bold app-font-family" href="{{ route('welcome') }}">Particulier</a></li>
    </ul>
</li>
					<li class="nav-item"> <a class="nav-link header-text-mobile fw-bold app-font-family" href="/#move_car">Déplacer un véhicule</a>
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
                @if(Auth::check())
                @if (check_persmission('Espace Client'))
                <a href="{{ route('dashboard') }}" class="btn btn-warning-outline login-button-header py-3 px-3" style="margin-left: 24px; cursor: pointer;">
            <span class="text-dark fw-bold app-font-family">Mon Compte</span>
        </a>
        @endif
        @if (check_persmission('Espace Convoyeur'))
                <a href="{{ route('dashboard') }}" class="btn btn-warning-outline login-button-header py-3 px-3" style="margin-left: 24px; cursor: pointer;">
            <span class="text-dark fw-bold app-font-family">Mon Compte</span>
        </a>
        @endif
        @if (check_persmission('Espace Transporteur'))
                <a href="{{ route('dashboard') }}" class="btn btn-warning-outline login-button-header py-3 px-3" style="margin-left: 24px; cursor: pointer;">
            <span class="text-dark fw-bold app-font-family">Mon Compte</span>
        </a>
        @endif
        @if (check_persmission('Espace Co-convoyeur'))
                <a href="{{ route('dashboard') }}" class="btn btn-warning-outline login-button-header py-3 px-3" style="margin-left: 24px; cursor: pointer;">
            <span class="text-dark fw-bold app-font-family">Mon Compte</span>
        </a>
        @endif
    <!-- Logout Button -->
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-warning-outline login-button-header py-3 px-3" style="margin-left: 24px; cursor: pointer;">
            <span class="text-dark fw-bold app-font-family">Se déconnecter</span>
        </button>
    </form>
@else
    <!-- Login Button -->
    <button class="btn btn-warning-outline login-button-header py-3 px-3" style="margin-left: 10px; cursor: pointer;" data-toggle="modal" data-target="#loginModal">
        <span class="text-dark fw-bold app-font-family">S'identifier</span>
    </button>

    <!-- Signup Button -->
    <button class="btn btn-warning-outline login-button-header py-3 px-3" style="margin-left: 10px; cursor: pointer;" data-toggle="modal" data-target="#signupModal">
        <span class="text-dark fw-bold app-font-family">S'inscrire</span>
    </button>
@endif
<div class="dropdown" style="margin-left: 10px;">
    <button class="btn btn-warning-outline login-button-header py-3 px-3 dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-language" style="color:black;"></i>
    </button>
    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
        <li><a class="dropdown-item" href="#"><img src="images/wallet/USA.png" style="width: 20px; height:20px;"/> English</a></li>
        <li><a class="dropdown-item" href="#"><img src="images/wallet/france.png" style="width: 20px;height:20px;"/> French</a></li>
        <!-- Add more language options as needed -->
    </ul>
</div>
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
                        <!-- <label for="email">Adresse e-mail</label> -->
                        <input type="email" class="form-control" id="email" name="email" placeholder="entrez votre Adresse e-mail"  required autofocus>
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                        <!-- <label for="password">Mot de passe</label> -->
                        <input type="password" class="form-control" id="password" name="password" placeholder="entrez votre Mot de passe"  required>
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

                    @php
                    
                    use App\Models\Role;

                    $roles = Role::where('name', '!=', 'Admin')->get();

                    @endphp
                    <div class="form-group">
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
                'X-Content-Type-Options': 'nosniff',
            },
            body: new URLSearchParams(new FormData(form)),
        })
        .then(response => {
            if (response.status === 200) {
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
            } else if (response.status === 401) {
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


<!--
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->

