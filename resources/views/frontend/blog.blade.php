@extends('frontend.frontend_main_layout')
@section('content')
<section class="section blog-header">
	<div class="container">
		<div class="row">
			<div class="col-8 mx-auto text-center">
                <div><img src="{{asset('images/wallet/blog.png')}}" class="blog-header-img"  style="max-width: 40%; height:auto;" /></div>
                <div><h1 class="blog-banner-h">Blog</h1></div>
            </div>
	</div>
</section>
<section class="section section-blog pt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="me-lg-4">
					<div class="row gy-5">
                        <div class="row mt-5 shadow bg-white p-3 rounded">
						<div class="col-md-6" data-aos="fade">
                        <div class="rounded">
									<img loading="lazy" class="rounded" decoding="async" src="{{ asset('images/wallet/car_of_the_year.jpg') }}" width="100%" height="auto" alt="Post Thumbnail">
								</div>
                        </div>      
                        <div class="col-md-6" data-aos="fade">
							<article class="blog-post pt-4">
								<div>
									<!-- <p class="mb-3">15 Mar, 2020</p> -->
									<p class="text-dark text-font-family">Actualité</p>
                                   
									<a href="{{route('news')}}" class="h4 text-font-family">Voiture de l'année 2024 : découvrez les véhicules pré-sélectionnés</a>
                                    <p class="text-dark">Le processus de sélection annuelle de la Voiture de l'année est déjà en cours, avec une première liste de candidats à affiner. Voici les modèles qui pourront avancer vers les prochaines étapes de sélection. </p><a href="{{route('news')}}" class="fw-bold read-more-blog" aria-label="Read the full article by clicking here">Lire l'article</a>
                                </div>
							</article>
                        </div>
                        </div>
                        <div class="row mt-5 shadow bg-white p-3 rounded">
						<div class="col-md-6" data-aos="fade">
                        <div class="rounded">
                        <img loading="lazy" class="rounded" decoding="async" src="{{asset ('images/wallet/leasing_auto.jpg') }}" alt="Post Thumbnail">
								</div>
                        </div>      
                        <div class="col-md-6" data-aos="fade">
							<article class="blog-post pt-4">
								<div>
									<!-- <p class="mb-3">15 Mar, 2020</p> -->
									<p class="text-dark text-font-family">Conseils et Astuces</p>
									<a href="{{route('tips-tricks')}}" class="h4 text-font-family">Comment économiser sur un leasing auto</a>
                                    <p class="text-dark">Le leasing automobile est devenu une option populaire pour de nombreux conducteurs qui souhaitent profiter d'une voiture neuve sans avoir à débourser une somme importante. Cependant, pour que le leasing reste une option économique, il est essentiel de connaître</p>
                                    <a href="{{ route('tips-tricks') }}" class="read-more-blog fw-bold" aria-label="Read the full article by clicking here">Lire l'article</a>
                                </div>
							</article>
                        </div>
                        </div>
                        <div class="row mt-5 shadow bg-white p-3 rounded">
						<div class="col-md-6" data-aos="fade">
                        <div class="rounded">
                        <img loading="lazy" class="rounded" decoding="async" src="{{asset ('images/wallet/expédier-véhicule.jpg') }}" alt="Post Thumbnail">
								</div>
                        </div>      
                        <div class="col-md-6" data-aos="fade">
							<article class="blog-post pt-4">
								<div>
									<!-- <p class="mb-3">15 Mar, 2020</p> -->
									<p class="text-dark text-font-family">Professionnels</p>
									<a href="{{ route('pros') }}" class="text-font-family h4">Expédition de tous types de véhicules – Astuces pour une transition en toute simplicité</a> 
                                    <p class="text-dark">Le déplacement de véhicules, en particulier sur de longues distances, présente une série de considérations uniques dont chaque propriétaire de véhicule doit être conscient. </p>
                                    <a href="{{ route('pros') }}" class="read-more-blog fw-bold" aria-label="Read the full article by clicking here">Lire l'article</a>
                                </div>
							</article>
                        </div>
                        </div>
                        <div class="row mt-5 shadow bg-white p-3 rounded">
						<div class="col-md-6" data-aos="fade">
                        <div class="rounded">
                        <img loading="lazy" class="rounded" decoding="async" src="{{asset ('images/wallet/convoyeur-partenaire.jpg') }}" alt="Post Thumbnail">
								</div>
                        </div>      
                        <div class="col-md-6" data-aos="fade">
							<article class="blog-post pt-4">
								<div>
									<!-- <p class="mb-3">15 Mar, 2020</p> -->
									<p class="text-dark text-font-family">Convoyeurs</p>
									<a href="{{ route('professional') }}" class="h4 text-font-family">Interview d'un Convoyeur partenaire chez CoCarmoov</a> 
                                    <p class="text-dark">Depuis plus d'un an, CoCarmoov étend ses activités en France, offrant des services de transport de véhicules variés, de la livraison aux professionnels à la livraison entre particuliers, en passant par les livraisons inter-sites</p>
                                    <a href="{{ route('professional') }}" class="read-more-blog fw-bold" aria-label="Read the full article by clicking here">Lire l'article</a>
                                </div>
							</article>
                        </div>
                        </div>
                        <div class="row mt-5 shadow bg-white p-3 rounded">
						<div class="col-md-6" data-aos="fade">
                        <div class="rounded">
                        <img loading="lazy" class="rounded" decoding="async" src="{{asset ('images/wallet/transport-automobile-par-camion.jpg') }}" alt="Post Thumbnail">
								</div>
                        </div>      
                        <div class="col-md-6" data-aos="fade">
							<article class="blog-post pt-4">
								<div>
									<!-- <p class="mb-3">15 Mar, 2020</p> -->
									<p class="text-dark text-font-family">Transporteurs</p>
									<a href="{{ route('transporter') }}" class="h4 text-font-family">Transport de Véhicules par Camion de Porte à Porte : Une Solution Pratique et Efficace</a> 
                                    <p class="text-dark">Le transport de véhicules peut être une tâche complexe, que ce soit pour un déménagement, un achat de voiture à distance, ou toute autre raison.  Cependant, il existe une </p>
                                    <a href="{{ route('transporter') }}" class="read-more-blog fw-bold" aria-label="Read the full article by clicking here">Lire l'article</a>
                                </div>
							</article>
                        </div>
                        </div>
                        <div class="row mt-5 shadow bg-white p-3 rounded">
						<div class="col-md-6" data-aos="fade">
                        <div class="rounded">
                        <img loading="lazy" class="rounded" decoding="async" src="{{asset ('images/wallet/CoCarmoov-blog.png') }}" alt="Post Thumbnail">
								</div>
                        </div>      
                        <div class="col-md-6" data-aos="fade">
							<article class="blog-post pt-4">
								<div>
									<!-- <p class="mb-3">15 Mar, 2020</p> -->
									<p class="text-dark text-font-family">A propos de CoCarmoov</p>
									<a href="{{ route('about-cocarmoov') }}"  class="h4 text-font-family">CoCarmoov, est plus qu'un lien entre l'automobile et l'humain </a> 
                                    <p class="text-dark">CoCarmoov est une révolution du transport automobile, elle est au transport automobile ce que la cerise est au gâteau. Après 5 ans d'expérience au service de centaines d'acteurs de l'automobile, nous sommes</p>
                                    <a href="{{ route('about-cocarmoov') }}" class="read-more-blog fw-bold" aria-label="Read the full article by clicking here">Lire l'article</a>
                                </div>
							</article>
                        </div>
                        </div>
                        <div class="row mt-5 shadow bg-white p-3 rounded">
						<div class="col-md-6" data-aos="fade">
                        <div class="rounded">
                        <img loading="lazy" class="rounded" decoding="async" src="{{asset ('images/wallet/conducteur-particulier-vs-chauffeur-professionnel.jpg') }}" alt="Post Thumbnail">
								</div>
                        </div>      
                        <div class="col-md-6" data-aos="fade">
							<article class="blog-post pt-4">
								<div>
									<!-- <p class="mb-3">15 Mar, 2020</p> -->
									<p class="text-dark text-font-family">A propos de CoCarmoov</p>
									<a href="{{ route('about-cocarmoov-2') }}"  class="h4 text-font-family">Conducteur particulier contre Chauffeur professionnel : Le duel de l'année ! </a> 
                                    <p class="text-dark">Bienvenue au grand match de transport ! Dans l'arène, nous avons deux concurrents féroces : le Conducteur Particulier et le Chauffeur Professionnel. Qui sortira vainqueur de ce combat palpitant ?</p>
                                    <a href="{{ route('about-cocarmoov-2') }}" class="read-more-blog fw-bold" aria-label="Read the full article by clicking here">Lire l'article</a>
                                </div>
							</article>
                        </div>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<!-- categories -->
				<div class="widget widget-categories">
					<h4 class="widget-title"><span>Catégorie</span></h4>
					<ul class="list-unstyled widget-list">
						<li><a href="#!">Actualité <small class="ml-auto"></small></a>
						</li>
						<li><a href="#!">Conseils et Astuces <small class="ml-auto"></small></a>
						</li>
						<li><a href="#!">Professionnels <small class="ml-auto"></small></a>
						</li>
						<li><a href="#!">Convoyeurs <small class="ml-auto"></small></a>
						</li>
						<li><a href="#!">Transporteurs <small class="ml-auto"></small></a>
						</li>
                        <li><a href="#!"> A propos de CoCarmoov <small class="ml-auto"></small></a>
						</li>
					</ul>
				</div>
				<!-- Mots clés -->
				<div class="widget widget-tags">
					<h4 class="widget-title"><span>Mots clés</span></h4>
					<ul class="list-inline widget-list widget-list-inline taxonomies-list">
						<li class="list-inline-item"><a href="#!">Acheter un véhicule</a>
						</li>
						<li class="list-inline-item"><a href="#!">Salon automobile</a>
						</li>
						<li class="list-inline-item"><a href="#!">Véhicules électriques</a>
						</li>
						<li class="list-inline-item"><a href="#!"> Leasing auto</a>
						</li>
						<li class="list-inline-item"><a href="#!">Assurance auto</a>
						</li>
						<li class="list-inline-item"><a href="#!">Bon plan</a>
						</li>
						<li class="list-inline-item"><a href="#!">Expédier un véhicule</a>
						</li>
                        <li class="list-inline-item"><a href="#!">Déplacer un véhicule</a>
						</li>
                        <li class="list-inline-item"><a href="#!">Livrer un véhicule</a>
						</li>
                        <li class="list-inline-item"><a href="#!">Convoyer un véhicule</a>
						</li>
                        <li class="list-inline-item"><a href="#!">Transporter un véhicule</a>
						</li>
                        <li class="list-inline-item"><a href="#!">Rapatrier un véhicule</a>
						</li>
                        <li class="list-inline-item"><a href="#!">Restituer un véhicule</a>
						</li>
                        <li class="list-inline-item"><a href="#!">Transférer un véhicule</a>
						</li>
                        <li class="list-inline-item"><a href="#!">CoCarmoov</a>
						</li>
                        <li class="list-inline-item"><a href="#!">Société de transport</a>
						</li>
                        <li class="list-inline-item"><a href="#!">Transport automobile</a>
						</li>
                        <li class="list-inline-item"><a href="#!">Transport économique</a>
						</li>
                        <li class="list-inline-item"><a href="#!"> Transport express</a>
						</li>
                        <li class="list-inline-item"><a href="#!">Devenir convoyeur</a>
						</li>
                        <li class="list-inline-item"><a href="#!">Convoyeur professionne</a>
						</li>
                        <li class="list-inline-item"><a href="#!">Partenaire CoCarmoov</a>
						</li>
                        <li class="list-inline-item"><a href="#!">Transport par camion</a>
						</li>
                        <li class="list-inline-item"><a href="#!">Transport premium</a>
						</li>
                        <li class="list-inline-item"><a href="#!">Transport prestige</a>
						</li>
                        <li class="list-inline-item"><a href="#!"> Co-convoyage</a>
						</li>
                        <li class="list-inline-item"><a href="#!"> Co-convoyer </a>
						</li>
                        <li class="list-inline-item"><a href="#!">Convoyage partagé</a>
						</li>
					</ul>
				</div>
				<!-- Social -->
			</div>
		</div>
	</div>
</section>
@endsection