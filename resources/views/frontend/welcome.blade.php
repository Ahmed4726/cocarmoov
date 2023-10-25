@extends('frontend.frontend_main_layout')
@section('content')
<!-- <div class="modal applyLoanModal fade" id="applyLoan" tabindex="-1" aria-labelledby="applyLoanLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h4 class="modal-title" id="exampleModalLabel">How much do you need?</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#!" method="post">
          <div class="row">
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_amount" class="form-label">Amount</label>
                <input type="number" class="form-control shadow-none" id="loan_amount" placeholder="ex: 25000">
              </div>
            </div>
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_how_long_for" class="form-label">How long for?</label>
                <input type="number" class="form-control shadow-none" id="loan_how_long_for" placeholder="ex: 12">
              </div>
            </div>
            <div class="col-lg-12 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_repayment" class="form-label">Repayment</label>
                <input type="number" class="form-control shadow-none" id="loan_repayment" disabled>
              </div>
            </div>
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_full_name" class="form-label">Full Name</label>
                <input type="text" class="form-control shadow-none" id="loan_full_name">
              </div>
            </div>
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_email_address" class="form-label">Email address</label>
                <input type="email" class="form-control shadow-none" id="loan_email_address">
              </div>
            </div>
            <div class="col-lg-12">
              <button type="submit" class="btn btn-primary w-100">Get Your Loan Now</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> -->

<section class="banner position-relative overflow-hidden">
  <div class="container-fluid m-0 p-0">
    <div class="row align-items-center justify-content-center back-ground pt-5 pb-5">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="block text-center text-lg-start pe-xl-5">
          <h2 class="mb-5 banner-text text-center">Enfin… déplacer un véhicule revient à poster un colis</h2>
          <h4 class="mb-4 banner-text-2 mb-5">Des partenaires, convoyeurs et transporteurs de voitures professionnels, partout en France s'engagent à déplacer vos véhicules.</h4> 
          <div class="text-center">
          <a type="button" 
            class="btn banner-button text-light banner-button-hover rounded-pill" href="#">
            <b>E<span class="lowercase">xpedier un véhicule</span></b></a>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="ps-lg-5 text-center">
          <img  
            src="{{ asset('images/wallet/banner/banner_main.png') }}"
            alt="banner image" class="w-100 img-fluid" style="max-width: 100%; height:auto;">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section section-2 pt-5">
  <div class="container">
    <div class="row">
    <p class="fw-bold services-p text-center">1 clic = 1 devis</p>
      <div class="col-lg-12 col-md-6">
      <div class="card mt-4 rounded mx-auto card-register p-2" style="width:60%;"> 
            <div class="card-body">
              <h4 class="card-title text-center p-complete-info py-2">Indiquez vos adresses</h4>
			  <form action="/action_page.php">
  <div class="row">
	<div class="col-lg-6 col-md-12">
	<input type="text" class="form-control form-input-border mt-0" placeholder="Adresse d’enlèvement"><br>
	</div>
	<div class="col-lg-6 col-md-12">
	<input type="text" class="form-control form-input-border mt-0" placeholder="Adresse de livraison"><br>
	</div>
  <h4 class="card-title text-center p-complete-info py-2">Spécifiez votre véhicule</h4>
	<div class="col-lg-6 col-md-12">
	<div class="input-group">
			  <div class="select-container">
    <select name="cars" id="cars" class="form-control">
      <option hidden selected>Type de véhicule</option>
      <option value="Citadine">Citadine</option>
      <option value="Berline">Berline</option>
      <option value="Sportive">Sportive</option>
	  <option value="Collection">Collection</option> 
      <option value="Monospace">Monospace</option>
	  <option value="SUV-ou-4×4">SUV ou 4×4</option>
	  <option value="Utilitaire-3m3">Utilitaire 3m3</option>
	  <option value="6m3">6m3</option>
	  <option value="9m3">9m3</option>
	  <option value="12m3">12m3</option>
	  <option value="15m3">15m3</option>
	  <option value="20m3">20m3</option>
	  <option value="6m3">25m3</option>
	  <option value="6m3">30m3</option>
	  <option value="Camion-benne">Camion benne</option>
	  <option value="Camping-car">Camping-car</option>
	  <option value="Van-aménagé">Van-aménagé</option>

    </select>
    <i class="fas fa-caret-down fa-dropdown-icon"></i> <!-- Font Awesome dropdown icon -->
  </div>
  </div><br>
	</div>
  <div class="col-lg-6 col-md-12">
	<div class="input-group">
			  <div class="select-container">
    <select name="cars" id="cars" class="form-control">
      <option hidden selected>Etat du véhicule</option>
      <option value="En-état-de-marche">En état de marche</option>
      <option value="En-panne">En panne</option>
      <option value="Accidenté">Accidenté</option>
    </select>
    <i class="fas fa-caret-down fa-dropdown-icon"></i> <!-- Font Awesome dropdown icon -->
  </div>
  </div><br>
	</div>
  </div>
  <div class="text-center">
  <a type="button" 
            class="btn professionall-button-register text-dark mt-3 mb-3" href="#">
            Calculer
</a>
</div>
</form>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-3 pt-5">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-5">
        <div class="section-title">
          <p class="services-p fw-bold mb-3 nos-atouts-mobile"><b>Nos Atouts</b></p>
          <h2 class="text-dark differnce-section">Qu'est-ce qui différencie CoCarmoov ?</h2>
          <div class="content mb-0 mt-4">
            <h4 class="text-dark text-bold differnce-section">CoCarmoov est plus qu'un lien entre l'automobile et l'humain</h4>
            <p class="text-dark differnce-section service-p">Après 5 ans d'expérience au service de centaines d'acteurs de l'automobile, nous sommes convaincus que la satisfaction client et la performance des professionnels de transport sont alimentées par l’engagement offert par une interface pensée et efficace de collaboration. Comment ?</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
          <div class="d-block d-sm-flex align-items-center m-2">
            <div class="icon me-4 mb-4 mb-sm-0"><i class="fas fa-cogs mt-0" style="font-size:70px"></i> 
            </div>
            <div class="block differnce-section">
              <h5 class="mb-3 text-dark ">Intuitive et sécurisée</h5>
              <p class="mb-0 text-dark service-p">Commande en quelques clics</p>
                <p class="text-dark service-p">Assurance automobile incluse</p>
                <!-- <h5 class="mb-0 text-dark">Pas de frais cachés</h5>
                <p class="text-dark service-p"> Assurance, carburant, péages, transport</p> -->
            </div>
          </div>
        </div>
        <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
          <div class="d-block d-sm-flex align-items-center m-2">
            <div class="icon me-4 mb-4 mb-sm-0 align-items-center"> <i class="fa fa-handshake" style="font-size:70px"></i>
            </div>
            <div class="block differnce-section">
              <h5 class="mb-3 text-dark ">Réactive et proche</h5>
              <p class="mb-0 text-dark service-p">Pas de robots, des vrais interlocuteurs</p>
                <p class="text-dark service-p">Suivi et accompagnement régulier</p>
                <!-- <h5 class="mb-0 text-dark">Livraison sans attente</h5>
                <p class="text-dark service-p">Convoyage express sous 3 jours</p> -->
            </div>
          </div>
        </div>
        <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
          <div class="d-block d-sm-flex align-items-center m-2">
            <div class="icon me-4 mb-4 mb-sm-0"> <i class="fas fa-file-invoice-dollar" style="font-size:70px"></i>
            </div>
            <div class="block differnce-section">
              <h5 class="mb-3 text-dark">Transparente et engagée</h5>
              <p  class="mb-0 service-p text-dark">Pas de frais cachés (carburant, péages)</p>
              <p class="text-dark service-p">Tarif compétitif et indemnisation garantie</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="position-relative section-4">
  <div class="section container">
    <div class="row justify-content-center">
      <div class="col-lg-8 pt-3">
        <div class="section-title text-center differnce-section mt-5">
          <p class="services-p fw-bold differnce-section"><b>Nos formules</b></p>
          <h3 class='text-light'>Des centaines de véhicules déplacés chaque année d’un point A à un point B par …</h3>
        </div>
      </div>
    
        <div class="container pb-5">
        <div class="row align-items-center">
            <div class="col-lg-4 differnce-section text-center mt-4">
                <h2 class="text-center eco-h">Voie économique</h2>
                <img src="{{asset('images/wallet/eco.jpg')}}" class="rounded"/>
                <h4 class="text-center mt-3 text-light"><b>Vous déménagez et n’avez pas de conducteurs pour vos autres véhicules ?</b></h4>
                <p class="text-center text-light mt-3 solution-text"><b>Solution économique</b></p>
                <p class="text-center text-light solution-text-eco"><b>[Co-convoyage]</b></p>
                <p class="text-center text-light mt-3 solution-text-p"><b>Faites des économies en proposant vos véhicules à des co-convoyeurs particuliers pour les déplacer pendant qu'ils déménagent ou covoiturent.</b></p>
                <p class="text-center text-light mt-3 solution-text-p">Sous 15 jours en moyenne</p>
                <p class="text-center  mt-3 h5 solution-price-eco">À partir de 59€ TTC</p>
                <div class="text-center">
          <a type="button" 
            class="btn banner-button-1 text-light rounded-pill mt-4" href="#">
            <b>Rapatrier un véhicule</b></a>
            </div>
              </div>
            <div class="col-lg-4 differnce-section text-center mt-4">
              <h2 class="text-center exp-h ">Voie express</h2>
              <img src="{{asset('images/wallet/exp.jpg')}}" class="rounded"/>
              <h4 class="text-center mt-3 text-light">Vous vendez un véhicule ou le restituer, sans attente, avec des services à la clé ?</h4>
              <p class="text-center text-light mt-3 solution-text"><b>Solution express</b></p>
                <p class="text-center text-light solution-text-eco"><b>[Convoyage]</b></p>

              <p class="text-center text-light mt-3 solution-text-p"><b>Satisfaites  vos clients ou vous même en toute sérénité dans l'exécution opérationnelle en  louant les   services d'un convoyeur fiable sur CoCarmoov.</b></p>
              <p class="text-center text-light mt-3 solution-text-p">Sous 3 jours en moyenne</p>
               
              <p class="text-center h5 text-light mt-3 solution-price-exp">À partir de 79€ TTC</p>
              
              <div class="text-center">
          <a type="button" 
            class="btn banner-button-2 mt-4  text-light rounded-pill" href="#">
            <b>Déplacer un véhicule</b></a>
            </div>
            </div>
            <div class="col-lg-4 differnce-section text-center mt-4">
              <h2 class="text-center pre-h ">Voie premium</h2>
              <img src="{{asset('images/wallet/pre.jpg')}}" class="rounded"/>
              <h4 class="text-center text-light mt-3">Vous déplacez un véhicule de collection, de sport ou une voiture en panne ? </h4>
              <p class="text-center text-light mt-3 solution-text"><b>Solution premium</b></p>
                <p class="text-center text-light solution-text-eco"><b>[Transport]</b></p>
              
              <p class="text-center text-light mt-3 solution-text-p"><b>Faites transporter vos véhicules, en marche, en panne ou accidenté, avec une solution à 0 km, de porte à porte, grâce aux camions transporteurs partenaires.</b></p>
              <p class="text-center text-light mt-3 solution-text-p">Sous 10 jours en moyenne </p>
              <p class="text-center text-light h5 mt-3 solution-price-pre">À partir de 179€ TTC</p>
              
              <div class="text-center">
          <a type="button" 
            class="btn banner-button-3 text-light rounded-pill mt-4" href="#">
            <b>Transporter un véhicule</b></a>
            </div>
            </div>
        </div>
        </div>
    </div>
  </div>
</section>
<section class="section overflow-hidden bg-img">
  <div class="container frequently-margin">
    <div class="row justify-content-center overlay p-0 m-0">
      <div class="col-lg-10 mb-5">
        <div class="section-title text-center frequently-margin-2">
        <p class="services-p fw-bold"><b>Top des commandes</b></p>
          <!-- <p class="text-primary text-uppercase fw-bold mb-3">Our Service Holders</p> -->
          <h3 class="frequently-h">Véhicules fréquemment déplacés avec CoCarmoov</h3>
          <!-- <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing. egestas cursus pellentesque dignissim
            dui, congue. Vel etiam ut</p> -->
        </div>
      </div>
    </div>
    <div class="row position-relative pb-5">
      <div class="col-lg-6 col-md-12 pt-1">
        <div class="rounded p-4">
          <div class="d-block d-sm-flex align-items-center mb-4">
            <img 
              src="{{ asset('images/wallet/test.jpg') }}"
              alt="Leslie Alexander" class="img-fluid rounded" width="600" height="100">
            <div class="mt-sm-0 ms-0 ms-sm-3">
              <h3 class="mb-1">Achat / Vente</h3>
              <p class="mb-0 text-dark frequently-move">Un véhicule d'occasion haut de gamme se trouve à Strasbourg ? Pas de souci, Alexandre peut vous le convoyer sans vous ruiner.</p>
            </div>
          </div>
          <!-- <div class="content">Lorem ipsum dolor <a href="http://google.com">@reamansimond</a> demina egestas sit purus
            felis arcu. Vitae, turpisds tortr etiam faucibus ac suspendisse.</div> -->
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="rounded p-4">
        <div class="d-block d-sm-flex align-items-center">
            <img 
              src="{{ asset('images/wallet/test2.jpg') }}"
              alt="Leslie Alexander" class="img-fluid rounded" width="500" height="100">
            <div class="mt-sm-0 ms-0 ms-sm-3">
              <h3 class="mb-1">Réparation</h3>
              <p class="mb-0 text-dark frequently-move repairation-margin">Vous pouvez aller la chercher vous-même à Nice… ou la restituer via CoCarmoov pour 2× moins cher.</p>
            </div>
          </div>
          <!-- <div class="content">Lorem ipsum dolor <a href="http://google.com">@reamansimond</a> demina egestas sit purus
            felis arcu. Vitae, turpisds tortr etiam faucibus ac suspendisse.</div> -->
        </div>
      </div>
    </div>
    <div class="row position-relative">
    <div class="col-lg-6 col-md-12">
        <div class="rounded p-4">
          <div class="d-block d-sm-flex align-items-center mb-3">
            <img 
              src="{{ asset('images/wallet/test3.jpg') }}"
              alt="Leslie Alexander" class="img-fluid location-margin rounded" width="600" height="100">
            <div class="mt-sm-0 ms-0 ms-sm-3">
              <h3 class="location-text">Location</h3>
              <p class="mb-0 text-dark frequently-move">Votre parc d’utilitaires sur Paris est désert parce que vous louez en aller simple ! Pensez à notre formule économique pour les rapatrier.</p>
            </div>
          </div>
          <!-- <div class="content">Lorem ipsum dolor <a href="http://google.com">@reamansimond</a> demina egestas sit purus
            felis arcu. Vitae, turpisds tortr etiam faucibus ac suspendisse.</div> -->
        </div>
      </div>
      <div class="col-lg-6 col-md-12 pt-1">
        <div class="rounded p-4">
        <div class="d-block d-sm-flex align-items-center mb-3">
            <img 
              src="{{ asset('images/wallet/test4.jpg') }}"
              alt="Leslie Alexander" class="img-fluid evenement rounded" width="200" height="200">
            <div class="mt-sm-0 ms-0 ms-sm-3 evenment-text">
              <h3 class="mb-1">Evénement</h3>
              <p class="mb-0 text-dark frequently-move">Pas le temps de conduire ou l’habitude de faire un long trajet. Sinon, expédiez-le via CoCarmoov !</p>
            </div>
          </div>
          <!-- <div class="content">Lorem ipsum dolor <a href="http://google.com">@reamansimond</a> demina egestas sit purus
            felis arcu. Vitae, turpisds tortr etiam faucibus ac suspendisse.</div> -->
        </div>
      </div>
    </div>
    <div class="row position-relative">
    <div class="col-lg-6 col-md-12 pt-1">
        <div class="rounded p-4">
          <div class="d-block d-sm-flex align-items-center mb-3">
            <img 
              src="{{ asset('images/wallet/test5.jpg') }}"
              alt="Leslie Alexander" class="img-fluid rounded" width="700" height="100">
            <div class="mt-sm-0 ms-0 ms-sm-3">
              <h3 class="mb-1">Prestige</h3>
              <p class="mb-0 text-dark frequently-move prestige-margin">Votre voiture de luxe, vous la préférez livrée dans un sale état ou être transportée par un camion et ne pas prendre un kilomètre de plus au compteur </p>
            </div>
          </div>
          <!-- <div class="content">Lorem ipsum dolor <a href="http://google.com">@reamansimond</a> demina egestas sit purus
            felis arcu. Vitae, turpisds tortr etiam faucibus ac suspendisse.</div> -->
        </div>
      </div>
      <div class="col-lg-6 col-md-12 pt-1">
        <div class="rounded p-4">
        <div class="d-block d-sm-flex align-items-center mb-3">
            <img 
              src="{{ asset('images/wallet/test6.jpg')}}"
              alt="Leslie Alexander" class="img-fluid rounded" width="450" height="100">
            <div class="mt-sm-0 ms-0 ms-sm-3">
              <h3 class="mb-1">Vacances</h3>
              <p class="mb-0 text-dark frequently-move">Location de van aménagé, de camping-car… ! CoCarmoov assure son retour l’esprit tranquille.</p>
            </div>
          </div>
          <!-- <div class="content">Lorem ipsum dolor <a href="http://google.com">@reamansimond</a> demina egestas sit purus
            felis arcu. Vitae, turpisds tortr etiam faucibus ac suspendisse.</div> -->
        </div>
      </div>
  </div>
</section>
<section class="section section-blog">
	<div class="container overflow-hidden mb-4">
		<!-- <div class="row">
			<div class="col-lg-12">
				<h4 class="text-center">Avis des propriétaires</h4>
				</div>
		</div> -->
	<div class="row">
			<div class="col-lg-12 mb-4">
      <p class="fw-bold mb-3 services-p text-center">Témoignages</p>
				<h4 class="text-center">Les Voix de la Communauté</h4>
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
<section class="section testimonial-header">
	<div class="container">
		<div class="row">
			<div class="col-8 mx-auto text-center mt-5">
                <div><p class="formulas-section fw-bold"><b>Guide des formules</b></p></div>
                <h3 class="text-light text-center "><b>Informations utiles pour chaque type de transport</b></h3>
            </div>
	  </div>
  <div class="section container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <ul class="payment_info_tab nav nav-pills justify-content-center mb-4 " id="pills-tab" role="tablist">
          <li class="nav-item m-2" role="presentation"> <a
              class="nav-link btn btn-outline-primary effect-none text-light formula-nav-1 active" id="pills-how-much-can-i-recive-tab"
              data-bs-toggle="pill" href="#pills-how-much-can-i-recive" role="tab"
              aria-controls="pills-how-much-can-i-recive" aria-selected="true">La formule économique</a>
          </li>
          <li class="nav-item m-2" role="presentation"> <a
              class="nav-link btn btn-outline-primary effect-none text-light formula-nav-2" id="pills-how-much-does-it-costs-tab"
              data-bs-toggle="pill" href="#pills-how-much-does-it-costs" role="tab"
              aria-controls="pills-how-much-does-it-costs" aria-selected="true">La formule express</a>
          </li>
          <li class="nav-item m-2" role="presentation"> <a
              class="nav-link btn btn-outline-primary effect-none text-light formula-nav-3" id="pills-how-do-i-repay-tab"
              data-bs-toggle="pill" href="#pills-how-do-i-repay" role="tab" aria-controls="pills-how-do-i-repay"
              aria-selected="true">La formule premium</a>
          </li>
        </ul>
        <div class="rounded shadow bg-white p-5 tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-how-much-can-i-recive" role="tabpanel"
            aria-labelledby="pills-how-much-can-i-recive-tab">
            <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="accordion accordion-border-bottom" id="accordionFAQ">
          <div class="accordion-item">
         
            <h2 class="accordion-header accordion-button h5 border-0 active"
              id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" aria-expanded="true"
              aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9">Comment ça marche ?
            </h2>
            <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9"
              class="accordion-collapse collapse border-0 show"
              aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"> <p>Un co-convoyeur particulier de la communauté CoCarmoov qui a besoin de voyager ou de déménager, déplacera votre véhicule, c'est pourquoi nous proposons des prix très bas.</p>
                            <p>
                            Le co-convoyeur est soumis à une franchise et donne une caution bancaire (pré autorisation bancaire) avant chaque réservation, comme dans une location de véhicule.
                            </p>
                    </div>
            </div>
          
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec2" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec2" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec2">Mon véhicule est-il assuré pendant le co-convoyage ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec2" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec2" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Oui votre véhicule bénéficie automatiquement d'une assurance automobile (dommages, incendie et vol) par notre partenaire Wakam et d’une assistance routière AXA.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec2" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec3" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec3">Quand mon véhicule sera-t-il déplacé ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec3" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec3" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Dès que vous validez votre commande, CoCarmoov notifie sa communauté de co-convoyeurs particuliers susceptibles de co-convoyer votre véhicule. CoCarmoov ne garantit pas de trouver un co-convoyeur particulier.<br>
              Pour maximiser les chances, il faudra indiquer une période de départ possible suffisamment longue (idéalement 10 à 15 jours).<br>
              Le co-convoyeur particulier dispose de 24 à 48 heures pour déplacer votre véhicule selon la distance.
              </p>
            
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec4" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec4" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec4">Des frais supplémentaires à prévoir ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec4" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec4" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Le prix comprend : l'assurance automobile jusqu'à 45.000 euros, les péages et le carburant.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec5" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec5" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec5">Quand ma carte bancaire sera-t-elle débitée ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec5" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec5" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Tant que votre trajet n'est pas réservé par un co-convoyeur particulier, vous ne serez pas facturé.<br> 
Votre carte est débitée à 72h avant le départ lorsque votre trajet est réservé.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec6" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec6" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec6">Que se passe-t-il si j'annule ma commande ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec6" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec6" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Gratuit si le trajet n'est pas encore réservé ou avant 72h du départ s’il est déjà réservé.<br>
50% à 72h ou moins du départ, si le trajet est déjà réservé par un co-convoyeur.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec7" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec7" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec7">Comment fonctionne l’enlèvement ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec7" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec7" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Un contrat de co-convoyage pré-rempli vous sera envoyé par e-mail.<br> 
Utilisez-le pour vérifier avec le co-convoyeur tout dommage causé à votre véhicule.

</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec8" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec8" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec8">Comment se déroule le co-convoyage ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec8" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec8" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Le co-convoyeur parcourt la distance nécessaire pour relier les deux adresses le plus rapidement possible +20% de kilomètres supplémentaires (Exemple : pour 100 kilomètres de distance, le co-convoyeur est autorisé à parcourir 120 kilomètres maximum)

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
    <div class="tab-pane fade" id="pills-how-much-does-it-costs" role="tabpanel" aria-labelledby="pills-how-much-does-it-costs-tab">
  <div class="row justify-content-center">
    <div class="col-lg-12">
    <div class="accordion accordion-border-bottom" id="accordionFAQ">
          <div class="accordion-item">
         
            <h2 class="accordion-header accordion-button h5 border-0 active"
              id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d99" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d99" aria-expanded="false"
              aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d99">Comment ça marche ?
            </h2>
            <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d99"
              class="accordion-collapse collapse border-0 show"
              aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d99" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"> <p>Votre véhicule sera proposé à notre réseau de convoyeurs professionnels sélectionnés.<br>
Ceux-ci sont certifiés par nos services pour offrir une prestation irréprochable.

                            </p>
                    </div>
            </div>
          
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec34" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec34" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec34">Mon véhicule est-il assuré pendant le convoyage ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec34" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec34" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Oui votre véhicule bénéficie automatiquement d'une assurance automobile (dommages, incendie et vol) par notre partenaire Wakam et d’une assistance routière AXA.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec35" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec35" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec35">Quand mon véhicule sera-t-il déplacé ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec35" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec35" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Dès que vous validez votre commande, CoCarmoov notifie son réseau de convoyeurs professionnels susceptibles de convoyer votre véhicule.<br>
Le convoyage du véhicule dure 24 à 48 heures selon la distance.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec36" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec36" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec36">Des frais supplémentaires à prévoir ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec36" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec36" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Le prix comprend : l'assurance automobile jusqu'à 45.000 euros, les péages et le carburant ainsi que les éventuels services spécifiques commandés.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec37" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec37" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec37">Quand ma carte bancaire sera-t-elle débitée ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec37" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec37" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Tant que votre trajet n'est pas réservé par un convoyeur professionnel, vous ne serez pas facturé.<br> 
Votre carte est débitée à 72h avant le départ lorsque votre trajet est réservé.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec38" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec38" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec38">Que se passe-t-il si j'annule ma commande ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec38" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec38" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Gratuit si le trajet n'est pas encore réservé ou avant 72h du départ s’il est déjà réservé.<br>
35% entre 24-72h avant le départ, si le trajet est déjà réservé par un convoyeur.<br>
70% à moins de 24 heures avant le départ, si le trajet est déjà réservé par un convoyeur.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec39" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec39" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec39">Comment fonctionne l’enlèvement ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec39" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec39" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Un contrat de convoyage pré-rempli vous sera envoyé par e-mail.<br> 
Utilisez-le pour vérifier avec le convoyeur tout dommage causé à votre véhicule.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec40" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec40" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec40">Comment se déroule le convoyage ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec40" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec40" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Le convoyeur parcourt la distance nécessaire pour relier les deux adresses le plus rapidement possible +20% de kilomètres supplémentaires (Exemple : pour 100 kilomètres de distance, le convoyeur est autorisé à parcourir 120 kilomètres maximum)</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec41" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec41" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec41">Comment doit être mon véhicule ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec41" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec41" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Vous vous engagez à fournir un véhicule en bon état de marche, assuré (en cas de panne moteur) et avec un contrôle technique à jour (si le véhicule a plus de 4 ans).</p>
            </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>



          <div class="tab-pane fade " id="pills-how-do-i-repay" role="tabpanel"
            aria-labelledby="pills-how-do-i-repay-tab">
            <div class="row align-items-center">
            <div class="col-lg-12">
        <div class="accordion accordion-border-bottom" id="accordionFAQ">
        <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 active"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec81" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec81" aria-expanded="true"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec81">Comment ça marche ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec81" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec81" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Votre véhicule sera proposé à notre réseau de transporteurs professionnels partenaires.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec82" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec82" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec82">Quand mon véhicule sera-t-il déplacé ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec82" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec82" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Dès que vous validez votre commande, CoCarmoov notifie son réseau de transporteurs de véhicules susceptibles de transporter votre véhicule.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec83" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec83" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec83">Des frais supplémentaires à prévoir ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec83" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec83" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Le prix comprend : l'assurance automobile du transporteur ainsi que les éventuels services spécifiques commandés.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec84" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec84" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec84">Quand ma carte bancaire sera-t-elle débitée ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec84" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec84" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Tant que votre transport n'est pas réservé par un transporteur de véhicules partenaire, vous ne serez pas facturé.<br> 
Votre carte est débitée à 72h avant le départ lorsque votre trajet est réservé.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec85" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec85" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec85">Que se passe-t-il si j'annule ma commande ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec85" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec85" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Gratuit si le trajet n'est pas encore réservé ou avant 72h du départ s’il est déjà réservé.<br>
35% entre 24-72h avant le départ, si le trajet est déjà réservé par un transporteur.<br>
70% à moins de 24 heures avant le départ, si le trajet est déjà réservé par un transporteur.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec86" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec86" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec86">Comment fonctionne l’enlèvement ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec86" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec86" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Un contrat de transport pré-rempli vous sera envoyé par e-mail.<br> 
Utilisez-le pour vérifier avec le transporteur tout dommage causé à votre véhicule.<br>
Assurez-vous que les adresses de départ et d'arrivée peuvent accueillir un camion porte-voiture de 15 mètres.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec87" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec87" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec87">Comment doit être mon véhicule ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec87" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec87" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Vous vous engagez à fournir un véhicule dans l'état de fonctionnement mentionné.<br> 
Attention, quel que soit l'état du véhicule, celui-ci ne doit pas avoir de roues bloquées, et peut être transporté sans protection particulière.
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
        <div class="col-lg-4 formula-section-2">
        <div class="card rounded px-2" style="width: 28rem;">
  <div class="card-body">
    <h5 class="card-title text-center mt-5">Vous avez encore des questions ?</h5>
    <ul>
      <li class="text-dark text-size-formula-1">
      Consultez notre <a href="{{route('faq')}}"><b>FAQ</b></a> qui répond aux questions fréquentes de nos utilisateurs.
      </li>
      <li class="text-dark text-size-formula-1">
      Envoyez nous un message via <a href="{{route('contact_us')}}"><b>le formulaire de contact</b></a>
      </li>
      <li class="text-dark text-size-formula-1">
      Écrivez nous à l’adresse <a href="#"><b>contact@cocarmoov.fr</b></a>
      </li>
    </ul>
    <p class="text-dark text-size-formula-1 mx-3 mb-5">Nous serons ravis de vous répondre sous moins de 24 heures.</p>
  </div>
</div>
        </div>
</div>  
</section>

@endsection
