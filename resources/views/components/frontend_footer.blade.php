<footer class="section bg-tertiary bg-light overflow-hidden" style="padding-top:60px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-12 mt-4 mobile-screen tablet-screen mobile-view-footer-1">
      <img loading="prelaod" decoding="async" class="tablet-footer-logo laptop-screen-footer-logo img-fluid" width="90%" height="200px" src="{{ asset('images/wallet/footer-2.png') }}" alt="Wallet">
     <div class="mt-4 ms-4 mb-3">
      <p class="text-center app-font-family">10 Rue de la République 13001 Marseille</p>
      <ul class="list-unstyled list-inline mb-0 social-icons text-center">
					<li class="list-inline-item "><a title="Explorer Facebook Profile" class="text-black" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
					</li>
					<li class="list-inline-item"><a title="Explorer Twitter Profile" class="text-black" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
					</li>
					<li class="list-inline-item"><a title="Explorer Instagram Profile" class="text-black" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
					</li>
				</ul>
        </div>
			</div>
           <div class="col-lg-3 col-md-4 col-sm-12 mt-4 mobile-view-footer mobile-screen mobile-view-footer d-none text-center">
   				<img loading="prelaod" decoding="async" class="img-fluid" width="60%" height="200px" src="{{ asset('images/wallet/footer-2.png') }}" alt="Wallet">
     <div class=" ms-4 mb-5 mt-3">
      <p>10 Rue de la République 13001 Marseille</p>
        </div>
			</div>
			<div class="col-lg-3 col-md-12">
      <div class="footer-widget">
					<h5 class="mb-4 services-p font-secondary text-center">Services</h5>
					<ul class="list-unstyled">
						<li class="mb-2 text-center footer-links"><a href="/#move_car">Déplacer un véhicule</a>
						</li>
						<li class="mb-2 text-center footer-links"><a href="{{ route('co-drive') }}">Co-convoyer</a>
						</li>
						<!-- <li class="mb-2 text-center footer-links"><a href="service-details.html">Student Loans</a>
						</li> -->
						<li class="mb-2 text-center footer-links"><a href="{{route('convoyor')}}">Convoyeur</a>
						</li>
						<li class="mb-5 text-center footer-links"><a href="{{route('transporteur')}}">Transporteur</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12">
			<div class="footer-widget">
					<h5 class="mb-4 services-p font-secondary text-center">À Propos</h5>
					<ul class="list-unstyled">
					<li class="mb-2 text-center footer-links"><a href="{{route('insurance')}}">Assurance</a>
						</li>
						<li class="mb-2 text-center footer-links"><a href="{{route('blog')}}">Blog</a>
						</li>
						<li class="mb-2 text-center footer-links">
						<a href="{{ route('generate-cgu', ['filename' => 'CGU-CoCarmoov-Vf.pdf']) }}">CGU</a>
						</li>
						<li class="mb-5 text-center footer-links">
						<a href="{{ route('generate-cgv', ['filename' => 'CGV-CoCarmoov-Vf.pdf']) }}">CGV</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12">
			<div class="footer-widget">
					<h5 class="mb-4 services-p font-secondary mobile-footer-margin text-center">Aide</h5>
					<ul class="list-unstyled">
						<li class="mb-2 mt-4 text-center footer-links"><a href="{{ route('contact_us') }}">Contact</a>
						</li>
            <li class="mb-2 text-center footer-links"><a href="{{ route('faq') }}">FAQ</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
        <div class="col-lg-3 col-md-4 col-sm-12 mt-4 mobile-view-footer mobile-screen mobile-view-footer d-none text-center">
      <ul class="list-unstyled list-inline mt-3 social-icons text-center">
					<li class="list-inline-item "><a title="Explorer Facebook Profile" class="text-black" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
					</li>
					<li class="list-inline-item"><a title="Explorer Twitter Profile" class="text-black" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
					</li>
					<li class="list-inline-item"><a title="Explorer Instagram Profile" class="text-black" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
					</li>
				</ul>
        </div>
			</div>
		<div class="row align-items-center text-center">
			<div class="col-lg-4">
			</div>
			<div class="col-lg-4 col-md-12 col-sm-6  mt-lg-0">
				<ul class="list-unstyled list-inline mb-0 text-lg-start" style="margin-left:10px">
					<li class="list-inline-item footer-links privacy_term"><a class="text-black" href="{{ route('legal_notice') }}">Mentions légales</a>
					</li>
				</ul>
			</div>
          	<div class="col-lg-4 col-md-12 col-sm-6  mt-lg-0">
				<ul class="list-unstyled list-inline mb-0 text-lg-start" style="margin-left:-170px">
					<li class="list-inline-item footer-links privacy_term mobile-view-privacy"><a class="text-black" href="{{ route('privacy_policy') }}">Politique de confidentialité</a>
					</li>
				</ul>
			</div>
			<!-- <div class="col-lg-4 col-md-6 text-md-end mt-4 mt-md-0">
				<ul class="list-unstyled list-inline mb-0 social-icons">
					<li class="list-inline-item me-3"><a title="Explorer Facebook Profile" class="text-black" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
					</li>
					<li class="list-inline-item me-3"><a title="Explorer Twitter Profile" class="text-black" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
					</li>
					<li class="list-inline-item me-3"><a title="Explorer Instagram Profile" class="text-black" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
					</li>
				</ul>
			</div> -->
		</div>
	</div>
</footer>