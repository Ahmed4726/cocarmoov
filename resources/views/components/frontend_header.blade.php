<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your Laravel login form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email Address -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required autofocus>
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <!-- Remember Me -->
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                        <label class="form-check-label" for="remember_me">Remember me</label>
                    </div>
                    <!-- Forgot Password Link -->
                    <div class="form-group">
                        <a href="{{ route('password.request') }}" class="text-muted">Forgot your password?</a>
                    </div>
                    <!-- Login button -->
                    <button type="submit" class="btn btn-warning" style="width:100%;">Login</button>
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
                <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
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
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required autofocus>
                    </div>
                    <!-- Email Address -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <!-- Confirm Password -->
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required>
                    </div>
					<div class="form-group">
						<label for="user_type">User Type</label>
						<select class="form-control" name="user_type" id="user_type">
							<option value="driver">Driver</option>
							<option value="student">Student</option>
						</select>
					</div>
					<br>
					
                    <!-- Sign Up button -->
                    <button type="submit" class="btn btn-warning" style="width:100%;">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>
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

