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
				<ul class="navbar-nav mb-2" style="margin-left: -100px;" >
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
                        
				<!-- account btn --> <a href="#!" class="btn btn-warning-outline login-button-header py-3 px-3" style="margin-left: 20px;"><span class="text-dark fw-bold app-font-family">Se connecter</span></a>
			
				<!-- <a href="#!" class="btn btn-primary ms-2 ms-lg-3">Sign Up</a> -->
			</div>
		</div>
	</nav>
</header>
<!-- /navigation -->
