@extends('frontend.frontend_main_layout')
@section('content')
<section class="section testimonial-header">
	<div class="container">
		<div class="row">
			<div class="col-8 mx-auto text-center">
                <div><img src="{{asset('images/wallet/avis_utilisateur_cocarmoov.png')}}" class="testimonial-header-img img-fluid"  style="max-width: 50%; height:auto;" /></div>
                <div><h1 class="testimonial-banner-h">Avis des utilisateurs</h1></div>
            </div>
	</div>
</section>
<section class="section section-blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-center">Expérience utilisateur | Qualité de service | Réactivité</h3>
				<h4 class="text-center">Avis des propriétaires</h4>
				</div>
		</div>
	
	<div id="carouselExampleControls" class="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Je recommande le sérieux. </p>
    <p class="card-text testimonial-text">Conducteur professionnel.</p>
	<p class="card-text"><b>Professionnel</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-professionnel.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Marseille -> Paris</p>
	<p class="card-text testimonial-text">Il y a 1 mois</p>
  </div>
</div>
    </div>
    <div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Parfait pile à l’heure très agréable. </p>
    <p class="card-text testimonial-text">C’est ce qu’on cherche en automobile.</p>
	<p class="card-text"><b>Professionnel</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-professionnel.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Lyon -> Strasbourg</p>
	<p class="card-text testimonial-text">Il y a 2 semaines</p>
  </div>
</div>
    </div>
    <div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Convoyeur présentable et courtois.</p>
    <p class="card-text testimonial-text">Je suis ravi du retour de mon client.</p>
	<p class="card-text"><b>Professionnel</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-professionnel.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Pontarlier -> Toulouse</p>
	<p class="card-text testimonial-text">Il y a 1 mois</p>
  </div>
</div>
    </div>
	<div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Livraison parfaite et convoyeur communicatif</p>
    <p class="card-text testimonial-text">Enfin, la restitution aussi a été ponctuelle.</p>
	<p class="card-text"><b>Professionnel</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-professionnel.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Tours -> Perpignan</p>
	<p class="card-text testimonial-text">Il y a 1 semaine</p>
  </div>
</div>
    </div>
	<div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Je vais recommander voir la continuité.</p>
    <p class="card-text testimonial-text">Nickel et prix ajustable. Top</p>
	<p class="card-text"><b>Professionnel</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-professionnel.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Chambéry -> Reims</p>
	<p class="card-text testimonial-text">Il y a 1 mois</p>
  </div>
</div>
    </div>
	<div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Le conducteur est bien professionnel.</p>
    <p class="card-text testimonial-text">Rien à dire du service client.</p>
	<p class="card-text"><b>Professionnel</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-professionnel.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Arras -> Belfort</p>
	<p class="card-text testimonial-text">Il y a 3 semaines</p>
  </div>
</div>
    </div>
	<div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Bonne réactivité de la plateforme.</p>
    <p class="card-text testimonial-text">Délais respectés. Bravo</p>
	<p class="card-text"><b>Professionnel</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-professionnel.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Brest -> Rodez</p>
	<p class="card-text testimonial-text">Il y a 1 mois</p>
  </div>
</div>
    </div>
	<div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Bonne prestation, je viens de découvrir.</p>
    <p class="card-text testimonial-text">Bonne communication surtout.</p>
	<p class="card-text"><b>Professionnel</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-professionnel.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Grenoble -> Toulon</p>
	<p class="card-text testimonial-text">Il y a 1 semaine</p>
  </div>
</div>
    </div>
	<div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Une découverte pour notre garage</p>
    <p class="card-text testimonial-text">Service réactif, je recommande.</p>
	<p class="card-text"><b>Professionnel</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-professionnel.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Dijon -> Nîmes</p>
	<p class="card-text testimonial-text">Il y a 2 semaines</p>
  </div>
</div>
    </div>
	<div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Bonne réactivité, et conducteur à l’écoute.</p>
    <p class="card-text testimonial-text">Cocarmoov, une découverte !</p>
	<p class="card-text"><b>Professionnel</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-professionnel.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Villeurbanne -> Clermont-Ferrand</p>
	<p class="card-text testimonial-text">Il y a 2 semaines</p>
  </div>
</div>
    </div>
	<div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Bon convoyage, contrat respecté.</p>
    <p class="card-text testimonial-text">Services à la carte. Pas mal</p>
	<p class="card-text"><b>Professionnel</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-professionnel.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">La Rochelle -> Saint-Maur-des-Fossés</p>
	<p class="card-text testimonial-text">Il y a 3 semaines</p>
  </div>
</div>
    </div>
	</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  
	</div>
	<div class="row">
			<div class="col-lg-12 mt-3">
				<h4 class="text-center">Avis des particuliers</h4>
				</div>
		</div>
		<div id="carouselExampleControls" class="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Au moins on s’est partagé les frais.</p>
    <p class="card-text testimonial-text">Très bien. Merci Cocarmoov</p>
	<p class="card-text"><b>Patrice</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Nice -> Bordeaux</p>
	<p class="card-text testimonial-text">Il y a 1 mois</p>
  </div>
</div>
    </div>
    <div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Ma première expérience en co-convoyage </p>
    <p class="card-text testimonial-text">formidable Tout le monde est gagnant
</p>
	<p class="card-text"><b>Alex</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Lille -> Pau</p>
	<p class="card-text testimonial-text">Il y a 2 semaines</p>
  </div>
</div>
    </div>
    <div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Déménagement au top en 20m3</p>
    <p class="card-text testimonial-text">Très bon compromis.</p>
	<p class="card-text"><b>Lucas</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Nantes -> Montpellier</p>
	<p class="card-text testimonial-text">Il y a 1 mois</p>
  </div>
</div>
    </div>
	<div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Co-convoyage</p>
    <p class="card-text testimonial-text">ça donne envie de voyager
Souvent même.
</p>
	<p class="card-text"><b> Léa</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Rennes -> Le Havre</p>
	<p class="card-text testimonial-text">Il y a 1 semaine</p>
  </div>
</div>
    </div>
	<div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Je découvre une nouvelle plateforme à mon avis.</p>
    <p class="card-text testimonial-text">J’espère que je trouverai souvent des véhicules.</p>
	<p class="card-text"><b>Hugo</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Cergy -> Avignon</p>
	<p class="card-text testimonial-text">Il y a 1 mois</p>
  </div>
</div>
    </div>
	<div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Je suis étudiante et le concept</p>
    <p class="card-text testimonial-text">est très arrangeant.</p>
	<p class="card-text"><b>Manon</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Besançon -> Saint-Étienne</p>
	<p class="card-text testimonial-text">Il y a 3 semaines</p>
  </div>
</div>
    </div>
	<div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Déménagement à 50 euros de frais TTC.</p>
    <p class="card-text testimonial-text">Merci pour le concept.</p>
	<p class="card-text"><b>Reda</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Angers -> Limoges</p>
	<p class="card-text testimonial-text">Il y a 1 semaine</p>
  </div>
</div>
    </div>
	<div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Concept écolo et économique</p>
    <p class="card-text testimonial-text">Qui aurait pensé !</p>
	<p class="card-text"><b>Mus</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Calais -> Cannes</p>
	<p class="card-text testimonial-text">Il y a 2 semaines</p>
  </div>
</div>
    </div>
	<div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Ça se joue aux bons plans.</p>
    <p class="card-text testimonial-text">Même en îDF.</p>
	<p class="card-text"><b>Théo</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Courbevoie -> Saint-Denis</p>
	<p class="card-text testimonial-text">Il y a 1 mois</p>
  </div>
</div>
    </div>
	<div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Bon petit déménagement de fin de stage.</p>
    <p class="card-text testimonial-text">Merci au propriétaire.</p>
	<p class="card-text"><b>Chloé</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Le Mans -> Aubervilliers</p>
	<p class="card-text testimonial-text">Il y a 1 semaine</p>
  </div>
</div>
    </div>
	<div class="carousel-item">
	<div class="card">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text">Bonne formule, à savoir la disponibilité !</p>
    <p class="card-text testimonial-text">Trajet rentabilisé entre amis.</p>
	<p class="card-text"><b>Djabir</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2">Colmar -> Valenciennes</p>
	<p class="card-text testimonial-text">Il y a 1 semaine</p>
  </div>
</div>
    </div>
	</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  
	</div>

</div>	
</section>
@endsection