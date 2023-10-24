@extends('frontend.frontend_main_layout')
@section('content')
<section class="page-header professionnel-header">
	<div class="container">
		<div class="row mt-5 mb-5">
			<div class="col-12 mx-auto">
          <!-- <div><h2>banner image</h2></div> -->
				<!-- <div><h2 class="mb-2 text-capitalize qa-banner-text">Contact Us</h2></div> -->
                <h2 class="mb-3 text-center professionall-p text-center"><span class="fw-bold">Co-convoyez un véhicule et Recevez 10 c€ par km</h2>
                <p class="mb-3 text-center banner-p text-light">Conducteurs Voyageurs : l'Aventure Commence Ici<br>
                Week-ends Économiques : Vivez Malin<br>
                Déménagez sans Stress ni Frais Excessifs<br>
                Transformez vos Kilomètres vers l’Aéroport en Voyages Gratuits
</p>
            </div>
            <form action="/action_page.php">
    <div class="row">
    <div class="col-lg-5 col-md-12">
    <div class="backgroung-img-field">
        <input type="text" class="form-control form-input-border" id="ville-de-depart" placeholder="Ville de départ">
    </div>
</div>
<div class="col-lg-5 col-md-12">
    <div class="backgroung-img-field">
        <input type="text" class="form-control form-input-border mt-0" id="ville-d-arrivee" placeholder="Ville d’arrivée">
    </div>
</div>

        <div class="col-lg-2 col-md-12 header-button">
            <label for="ville-de-depart">
                <a href="#"><img class="rounded" src="{{ asset('images/wallet/chercher-un-vehicule.png') }}" width="43%" height="auto" alt="Post Thumbnail"></a>
            </label>
        </div>
    </div>
</form>

        </div>
     
    </div>  
    <section class="test-carrousel m-0 p-0 d-flex">
    <div class="container">
<div class="carousel-inner-test">
<div class="card carousel-item-test mb-5 mt-5 mx-0" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title">Card title1</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<div class="card carousel-item-test mb-5 mt-5 " style="width: 100%">
  <div class="card-body">
    <h5 class="card-title">Card title2</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<div class="card carousel-item-test mb-5 mt-5" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title">Card title3</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<div class="card carousel-item-test mb-5 mt-5" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title">Card title4</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<div class="card carousel-item-test mb-5 mt-5" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title">Card title5</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<div class="card carousel-item-test mb-5 mt-5" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title">Card title6</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<div class="card carousel-item-test mb-5 mt-5" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title">Card title7</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
                <!-- <div class="card-slider">Card 2</div>
                <div class="card-slider">Card 3</div>
                <div class="card-slider">Card 4</div> -->
        </div>
        
        </div>
</section>     
</section>
<section class="section codrive-section-2 overflow-hidden mb-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="section-title text-center">
       
        <p class="services-p fw-bold mt-5"><b>Concept & Avantages</b></p>

          <!-- <p class="text-primary text-uppercase fw-bold mb-3">Our Service Holders</p> -->
          <h3 class="mb-4 frequently-h">Bienvenue dans le monde passionnant du <b>Co-convoyage</b>, où vous pouvez combiner votre passion pour la conduite avec une opportunité de service et de voyage sans pareil.</h3>
          <!-- <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing. egestas cursus pellentesque dignissim
            dui, congue. Vel etiam ut</p> -->
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12">
        </div>
        <div class="col-lg-6 col-md-12">
        <div class="difference-of-us-item rounded mr-0 me-lg-4">
          <div class="d-block d-sm-flex align-items-center m-2">
            <div class="icon me-4 mb-4 mb-sm-0"><img src="{{asset('images/wallet/conduite-partagee.png')}}" class="rounded"/>
            </div>
            <div class="block differnce-section">
              <!-- <h3 class="mb-3 text-dark ">Intuitive et sécurisée</h3> -->
              <p class="mb-0 text-dark service-concept">Partagez la conduite, accédez à divers véhicules.</p>
                <!-- <p class="text-dark service-concept">Assurance automobile incluse</p> -->
                <!-- <h5 class="mb-0 text-dark">Pas de frais cachés</h5>
                <p class="text-dark service-concept"> Assurance, carburant, péages, transport</p> -->
            </div>
          </div>
        </div>
        <div class="difference-of-us-item rounded mr-0 me-lg-4">
          <div class="d-block d-sm-flex align-items-center m-2">
            <div class="icon me-4 mb-4 mb-sm-0"><img src="{{asset('images/wallet/reduction-frais-de-route.png')}}" class="rounded"/>
            </div>
            <div class="block differnce-section">
              <!-- <h3 class="mb-3 text-dark ">Intuitive et sécurisée</h3> -->
              <p class="mb-0 text-dark service-concept">Réduisez vos frais en optant pour le co-convoyage.</p>
                <!-- <p class="text-dark service-concept">Assurance automobile incluse</p> -->
                <!-- <h5 class="mb-0 text-dark">Pas de frais cachés</h5>
                <p class="text-dark service-concept"> Assurance, carburant, péages, transport</p> -->
            </div>
          </div>
        </div>
        <div class="difference-of-us-item   rounded mr-0 me-lg-4">
          <div class="d-block d-sm-flex align-items-center m-2">
            <div class="icon me-4 mb-4 mb-sm-0"><img src="{{asset('images/wallet/flexibilite-voyage.png')}}" class="rounded"/>
            </div>
            <div class="block differnce-section">
              <!-- <h3 class="mb-3 text-dark ">Intuitive et sécurisée</h3> -->
              <p class="mb-0 text-dark service-concept">Profitez d'une flexibilité totale pour vos voyages.</p>
                <!-- <p class="text-dark service-concept">Assurance automobile incluse</p> -->
                <!-- <h5 class="mb-0 text-dark">Pas de frais cachés</h5>
                <p class="text-dark service-concept"> Assurance, carburant, péages, transport</p> -->
            </div>
          </div>
        </div>
        <div class="difference-of-us-item   rounded mr-0 me-lg-4">
          <div class="d-block d-sm-flex align-items-center m-2">
            <div class="icon me-4 mb-4 mb-sm-0"><img src="{{asset('images/wallet/reduction-empreinte-carbone.png')}}" class="rounded"/>
            </div>
            <div class="block differnce-section">
              <!-- <h3 class="mb-3 text-dark ">Intuitive et sécurisée</h3> -->
              <p class="mb-0 text-dark service-concept">Contribuez à la réduction de l'empreinte carbone.</p>
                <!-- <p class="text-dark service-concept">Assurance automobile incluse</p> -->
                <!-- <h5 class="mb-0 text-dark">Pas de frais cachés</h5>
                <p class="text-dark service-concept"> Assurance, carburant, péages, transport</p> -->
            </div>
          </div>
        </div>
        <div class="difference-of-us-item   rounded mr-0 me-lg-4">
          <div class="d-block d-sm-flex align-items-center m-2">
            <div class="icon me-4 mb-4 mb-sm-0"><img src="{{asset('images/wallet/economiser-en-groupe.png')}}" class="rounded"/>
            </div>
            <div class="block differnce-section">
              <!-- <h3 class="mb-3 text-dark ">Intuitive et sécurisée</h3> -->
              <p class="mb-0 text-dark service-concept">Économisez en rejoignant notre communauté.</p>
                <!-- <p class="text-dark service-concept">Assurance automobile incluse</p> -->
                <!-- <h5 class="mb-0 text-dark">Pas de frais cachés</h5>
                <p class="text-dark service-concept"> Assurance, carburant, péages, transport</p> -->
            </div>
          </div>
        </div>
        <div class="difference-of-us-item   rounded mr-0 me-lg-4">
          <div class="d-block d-sm-flex align-items-center m-2">
            <div class="icon me-4 mb-4 mb-sm-0"><img src="{{asset('images/wallet/gagner-en-conduisant.png')}}" class="rounded"/>
            </div>
            <div class="block differnce-section">
              <!-- <h3 class="mb-3 text-dark ">Intuitive et sécurisée</h3> -->
              <p class="mb-0 text-dark service-concept">Expérimentez un goût différent des voyages.</p>
                <!-- <p class="text-dark service-concept">Assurance automobile incluse</p> -->
                <!-- <h5 class="mb-0 text-dark">Pas de frais cachés</h5>
                <p class="text-dark service-concept"> Assurance, carburant, péages, transport</p> -->
            </div>
          </div>
        </div>
        <div class="difference-of-us-item   rounded mr-0 me-lg-4">
          <div class="d-block d-sm-flex align-items-center m-2">
            <div class="icon me-4 mb-4 mb-sm-0"><img src="{{asset('images/wallet/experimenter-un-gout-different.png')}}" class="rounded"/>
            </div>
            <div class="block differnce-section">
              <!-- <h3 class="mb-3 text-dark ">Intuitive et sécurisée</h3> -->
              <p class="mb-0 text-dark service-concept">Co-convoyez et Gagnez 10 centimes par kilomètre.</p>
                <!-- <p class="text-dark service-concept">Assurance automobile incluse</p> -->
                <!-- <h5 class="mb-0 text-dark">Pas de frais cachés</h5>
                <p class="text-dark service-concept"> Assurance, carburant, péages, transport</p> -->
            </div>
          </div>
        </div>
        </div>
    </div>
</section>
<section class="section section-blog position-relative pt-5">
	<div class="container overflow-hidden">
		<!-- <div class="row">
			<div class="col-lg-12">
				<h4 class="text-center">Avis des propriétaires</h4>
				</div>
		</div> -->
	<div class="row">
			<div class="col-lg-12 mt-3 mb-3">
        <p class="services-p text-center fw-bold"><b>Témoignages</b></p>

				<h4 class="text-center">Ils ont partagé leur aventure</h4>
				</div>
		</div>
		<div id="carouselExampleControls " class="test-carousel">
  <div class="carousel-inner-test">
    <div class="carousel-item-test active">
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
    <div class="carousel-item-test">
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
    <div class="carousel-item-test">
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
	<div class="carousel-item-test">
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
	<div class="carousel-item-test">
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
	<div class="carousel-item-test">
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
	<div class="carousel-item-test">
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
	<div class="carousel-item-test">
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
	<div class="carousel-item-test">
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
	<div class="carousel-item-test">
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
	<div class="carousel-item-test">
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
	</div>
</div>	
</section>
<section class="section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="section-title text-center">
                <p class="services-p fw-bold mb-3"><b>Comment ça marche ?</b></p>
          <h3 class="mb-4 frequently-h">Le Co-convoyage en 4 étapes faciles</h3>
				<div class="row mt-5">
					<div class="col-lg-3 col-md-12">
					<div class="icon me-4 mb-4 mb-sm-0 font-icon-color img-fluid"><img src="{{asset('images/wallet/choisir-son-type-de-vehicule.png')}}" style="width:60%;" height="auto"/>
					<h5 class="mt-2">Choisissez un véhicule</h5>	
					<p class="text-dark">Filtrez nos offres de co-convoyage disponibles par type de véhicule (voiture, utilitaire ou van aménagé) qui vous convient le mieux pour votre besoin de déplacement.</p>
				</div>
					</div>
					<div class="col-lg-3 col-md-12">
					<div class="icon me-4 mb-4 mb-sm-0 font-icon-color img-fluid"><img src="{{asset('images/wallet/réserver-son-co-convoyage.png')}}" style="width: 60%;" height="auto"/>
					<h5 class="mt-2">Réservez le trajet</h5>
					<p class="text-dark">Trouvez un trajet correspondant à votre itinéraire, sélectionnez-le et réservez-le en quelques clics. La durée de réservation sera de 24 ou 48 heures selon la distance à parcourir.</p>		
				</div>
					</div>
					<div class="col-lg-3 col-md-12">
					<div class="icon me-4 mb-4 mb-sm-0 font-icon-color img-fluid"><img src="{{asset('images/wallet/conduire-et-restituer-le-vehicule.png')}}" style="width: 60%;" height="auto"/>
					<h5 class="mt-2">Conduisez et restituez</h5>	
					<p class="text-dark">Récupérez le véhicule, vous avez une assurance automobile comprise et 20% de kilomètres additionnels pour effectuer le trajet. Restituez le véhicule dans le même état à destination.</p>	
				</div>
					</div>
                    <div class="col-lg-3 col-md-12">
					<div class="icon me-4 mb-4 mb-sm-0 font-icon-color img-fluid"><img src="{{asset('images/wallet/recevoir-la-comprensation.png')}}" style="width: 60%;" height="auto"/>
					<h5 class="mt-2">Recevez votre compensation </h5>	
					<p class="text-dark">Clôturez votre co-convoyage via l’application CoCarmoov et recevez une compensation kilométrique en seulement 72 heures. C’est du gagnant-gagnant !</p>	
				</div>
					</div>
				</div>
				</div>
			</div>
		</div>
        <div class="text-center">
        <a type="button" 
            class="btn find-text-button  text-dark mt-3 mb-2" href="#">
            Des questions ?
</a>
            </div>
    </div>
</section>  
<section class="section section-avantage">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="section-title text-center">
                <p class="services-p fw-bold mb-3"><b>Avantages à tout-va</b></p>
          <h3 class="mb-4 frequently-h text-light">Je suis récompensé 10 centimes par kilomètre pour</h3>
				<div class="row mt-5">
					<div class="col-lg-3 col-md-12">
					<div class="icon me-4 mb-4 mb-sm-0 font-icon-color img-fluid"><img src="{{asset('images/wallet/voyager-en-co-convoyant.jpg')}}" style="width:100%;" height="auto"/>
					<h5 class="mt-2 avantage-p">Voyager en</h5>	
					<p class="text-light d-benefits">Embarquez pour une évasion sans tracas en co-convoyage ! Dites adieu aux soucis de la route et partez en escapade spontanée à un prix imbattable. Chaque kilomètre rapproche encore plus de l'aventure.</p>
                    <div class="text-center">
        <a type="button" 
            class="btn find-text-button  text-dark mt-1 mb-5" href="#">
            Découvrir les trajets
</a>
            </div>
                </div>
					</div>
					<div class="col-lg-3 col-md-12">
					<div class="icon me-4 mb-4 mb-sm-0 font-icon-color img-fluid"><img src="{{asset('images/wallet/partir-en-week-end.jpg')}}" style="width: 100%;" height="auto"/>
					<h5 class="mt-2 avantage-p">Partir en week-end</h5>
					<p class="text-light d-benefits">Week-end Intelligent : Optez pour le co-convoyage ! Partagez votre voyage avec de nouveaux compagnons, économisez sur les frais de route et gagnez des récompenses à chaque kilomètre partagé.</p>		
                    <div class="text-center">
        <a type="button" 
            class="btn find-text-button  text-dark mt-1 mb-5" href="#">
            Rejoindre l’aventure
</a>
            </div>
                </div>
					</div>
					<div class="col-lg-3 col-md-12">
					<div class="icon me-4 mb-4 mb-sm-0 font-icon-color"><img src="{{asset('images/wallet/demenager.jpg')}}" style="width: 100%;" height="auto"/>
					<h5 class="mt-2 avantage-p">Déménager</h5>	
					<p class="text-light d-benefits">Déménagez Malin grâce au co-convoyage ! Utilisez un utilitaire sans stress pour votre déménagement, économisez de l'argent et recevez une compensation kilomètre parcouru vers votre nouveau chez-vous.</p>	
                    <div class="text-center">
        <a type="button" 
            class="btn find-text-button  text-dark mt-1 mb-5" href="#">
            Réserver un utilitaire
</a>
            </div>
                </div>
					</div>
                    <div class="col-lg-3 col-md-12">
					<div class="icon me-4 mb-4 mb-sm-0 font-icon-color"><img src="{{asset('images/wallet/acceder-a-l-aeroport.jpg')}}" style="width: 100%;" height="auto"/>
					<h5 class="mt-2 avantage-p">Accéder à l’aéroport</h5>	
					<p class="text-light d-benefits">Envolez-vous vers de nouveaux horizons ! Co-convoyez une voiture et restituez-la directement auprès des loueurs au parking de l'aéroport, tout en gagnant des récompenses pour votre prochain vol.</p>	
				</div>
                <div class="text-center">
        <a type="button" 
            class="btn find-text-button  text-dark mt-1 mb-5" href="#">
            Embarquer une voiture
</a>
            </div>
    </div>
					</div>
				</div>
				</div>
			</div>
		</div>
</section> 
<section class="section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="section-title text-center">
                <p class="services-p fw-bold mb-3"><b>Économisez à chaque déplacement</b></p>
                <h3 class="mb-4 frequently-h">Comment fonctionnent les économies en Co-convoyage ?</h3>
				</div>
			</div>
            <div class="row">
                <div class="col-lg-6 text-center">
                <img src="{{asset('images/wallet/compteur-kilometrique.gif')}}" width="60%" height="auto"/>
                </div>
                <div class="col-lg-6 kilometer-gif">
                <img src="{{asset('images/wallet/Compensation.gif')}}" width="60%" height="auto"/>
                </div>
                <p class="mb-4 frequently-h text-center fw-bold">Chez CoCarmoov, gagnez 10 centimes par kilomètre direct parcouru
pour un déménagement ou un voyage gagnant !
</p>
<h5 class="text-center">Un cas pratique : Co-convoyage d'un utilitaire et d'une voiture</h5>

            </div>
		</div>
    </div>
</section>
<section class="section section-faq-co-drive">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center">
                <p class="services-p fw-bold mb-3"><b>Des questions</b></p>
          <h3 class="mb-4 frequently-h text-dark">Le plus important à savoir</h3>
        </div>
      </div>  
    </div>    
          <div class="row justify-content-center">
      <div class="col-lg-8 col-md-12">
      <div class="rounded shadow bg-white p-5">
      <div class="accordion accordion-border-bottom" id="accordionFAQ">
          <div class="accordion-item">
         
            <h2 class="accordion-header accordion-button h5 border-0 active"
              id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" aria-expanded="true"
              aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9">Quelles sont les conditions pour co-convoyer un véhicule ?
            </h2>
            <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9"
              class="accordion-collapse collapse border-0 show"
              aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"> <p>Vous devez être âgé(e) de 25 ans minimum et posséder votre permis européen depuis au moins trois ans : ce sont des conditions imposées par notre assurance.
Vous pouvez consulter les conditions de notre assurance sur https://www.cocarmoov.fr/assurance 
                            </p>
                    </div>
            </div>
          
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec2" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec2" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec2">Quels sont les frais à ma charge pendant le co-convoyage ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec2" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec2" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Les frais de carburant et de péages sont à votre charge, que vous pouvez déduire de votre compensation convenue de 10 centimes par kilomètre.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec2" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec3" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec3">Ai-je des frais si je co-convoie ? (Caution, franchise, etc.)
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec3" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec3" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Nous avons une caution ainsi qu’une franchise :
Au moment de réserver un co-convoyage, le dépôt d’une caution est systématique comme dans des locations classiques. Cette caution prend la forme d’une pré-autorisation bancaire. Vous n’êtes donc pas débité mais, en fonction de votre contrat avec votre banque, les montants peuvent apparaître sur votre relevé. 
De même, une franchise est associée à chaque co-convoyage en cas de sinistre responsable.
Veuillez consulter notre liste des franchises à l’adresse https://www.cocarmoov.fr/assurance 
              </p>
            
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec4" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec4" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec4">Est ce que l’assurance est comprise dans un co-convoyage ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec4" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec4" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Tous les co-convoyages disponibles sur CoCarmoov bénéficient d'une assurance. L'assurance est systématiquement incluse et comprise dans votre co-convoyage.
En fonction du co-convoyage choisi, vous pouvez avoir :
Le produit d'assurance du propriétaire du véhicule
Le produit d'assurance d'un partenaire CoCarmoov
Les conditions et garanties de l'assurance sont détaillées dans le détail de chaque co-convoyage.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec5" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec5" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec5">Ai-je des frais si j’annule un co-convoyage ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec5" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec5" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>En cas d'annulation, les frais suivants s'appliquent :
Pour les véhicules de tourisme, les frais d'annulation sont de 25€
Pour les véhicules utilitaires, les frais d'annulation sont de 50€
Ces pénalités sont doublées si vous annulez moins de 48h avant le départ

</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec6" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec6" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec6">Comment se déroule le co-convoyage ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec6" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec6" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Le conducteur particulier présente le jour d’enlèvement du véhicule un permis de conduire et la carte bancaire à son nom, qui a été utilisée pour la réservation.
Le co-convoyeur se fait remettre un véhicule après un état des lieux effectué par le contact de départ.
Il prend en charge le véhicule, le conduit jusqu’à destination pour le restituer dans le même état.

</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec7" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec7" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec7">Des frais supplémentaires à prévoir ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec7" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec7" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Absence au rendez-vous du co-convoyage, une pénalité de 100€ sera appliquée.
Restitution tardive du véhicule, facturation de 100€ par demi-journée supplémentaire.
Dépassement de l’enveloppe kilométrique autorisée, une pénalité kilométrique de 0.5€.
Oubli de remise au même niveau de carburant, facturation de 2.50€ par litre manquant après passage du client à la station service.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec8" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec8" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec8">Je ne trouve pas le co-convoyage qui me correspond, je crée une alerte !
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec8" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec8" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>De nouveaux co-convoyages apparaissent régulièrement sur le site.
Si vous n'avez pas trouvé le véhicule qui vous correspond, vous pouvez créer une alerte avec vos coordonnées et vos critères pour recevoir un e-mail ou un sms dès qu'un véhicule est disponible.
Je crée mon alerte sur https://www.cocarmoov.fr/co-convoyer/creer-une-alerte 

</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec6" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec6" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec6">Comment doit être mon véhicule ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec6" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec6" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Vous vous engagez à fournir un véhicule en bon état de marche, assuré (en cas de panne moteur) et avec un contrôle technique à jour (si le véhicule a plus de 4 ans).
</p>
            </div>
            </div>
          </div>
        </div>
				</div>
          </div>
        </div>
			</div>
  </div>
</section> 
<section class="section section-avantage">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="section-title text-center">
          <h3 class="mb-4 frequently-h text-light">Vous avez encore des questions ?</h3>
				</div>
        <div class="row">
          <div class="col-lg-4 col-md-12">
          <div class="card mb-3 rounded" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4 text-center">
      <img src="{{asset('images/wallet/faq.png')}}" class="img-fluid mt-3 rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <p class="card-text text-center">Consultez notre FAQ :</p>
        <h5 class="card-title text-center">plein d’autres questions</h5>        
      </div>
    </div>
  </div>
</div>
          </div>
          <div class="col-lg-4 col-md-12">
          <div class="card mb-3 rounded" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4 text-center">
      <img src="{{asset('images/wallet/formulaire-contact.png')}}" class="img-fluid mt-3 rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <p class="card-text text-center">Contactez nous via :</p>
        <h5 class="card-title text-center">le formulaire de contact</h5>        
      </div>
    </div>
  </div>
</div>
          </div>
          <div class="col-lg-4 col-md-12">
          <div class="card mb-3 rounded" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4 text-center">
      <img src="{{asset('images/wallet/contact-email.png')}}" class="img-fluid mt-3 rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body text-center">
      <p class="card-text text-center">Écrivez nous par e-mail :</p>
        <a href="#" class="card-title h5 text-center">contact@cocarmoov.fr</a>        
      </div>
    </div>
  </div>
</div>
          </div>
        </div>
				</div>
			</div>
		</div>
</section>
@endsection