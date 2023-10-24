<!-- navigation -->
<header class="navigation bg-tertiary sticky-top">
	<nav class="navbar navbar-expand-xl navbar-light py-3">
		<div class="container-fluid">
			<a class="navbar-brand" href="{{ route('welcome') }}">
				<img loading="prelaod" decoding="async" class="img-fluid" width="70%" height="100px" src="{{ asset('images/wallet/footer-2.png') }}" alt="Wallet">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
				<ul class="navbar-nav mb-2 text-center mb-lg-0">
					<!-- <li class="nav-item"> <a class="nav-link" href="{{ route('welcome') }}">Accueil</a>
					</li> -->
					<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="{{ route('welcome') }}" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">Client</a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="{{route('professionall')}}">Professionnel</a></li>
        <li><a class="dropdown-item" href="{{ route('welcome') }}">Particulier</a></li>
    </ul>
</li>

					<li class="nav-item "> <a class="nav-link" href="about.html">Déplacer un véhicule</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="{{ route('co-drive') }}">Co-convoyer</a>
					</li>
					<!-- <li class="nav-item "> <a class="nav-link" href="services.html">Services</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="contact.html">Contact</a>
					</li> -->
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" class="login-button" id="navbarDropdown"  data-bs-toggle="dropdown" aria-expanded="false">Partenaire</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item " href="{{route('convoyor')}}">Convoyeur</a>
							</li>
							<li><a class="dropdown-item " href="{{route('transporteur')}}">Transporteur</a>
							</li>
              </ul>
          </li>
		  
					<!-- <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item " href="blog.html">Blog</a>
							</li>
							<li><a class="dropdown-item " href="blog-details.html">Blog Details</a>
							</li>
							<li><a class="dropdown-item " href="service-details.html">Service Details</a>
							</li>
							<li><a class="dropdown-item " href="faq.html">FAQ&#39;s</a>
							</li>
							<li><a class="dropdown-item " href="legal.html">Legal</a>
							</li>
							<li><a class="dropdown-item " href="terms.html">Terms &amp; Condition</a>
							</li>
							<li><a class="dropdown-item " href="privacy-policy.html">Privacy &amp; Policy</a>
							</li>
						</ul>
					</li> -->
				</ul>
                        
				<!-- account btn --> <a href="#!" class="btn btn-warning-outline login-button"><span class="text-dark">Se connecter</span></a>
			
				<!-- <a href="#!" class="btn btn-primary ms-2 ms-lg-3">Sign Up</a> -->
			</div>
		</div>
	</nav>
</header>
<!-- /navigation -->
