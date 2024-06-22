@extends('frontend.frontend_main_layout')
@section('content')
<head>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlNsN-oe1DZYJudjA315dDh9iuAxBk0zM&libraries=places"></script>
    <style>
        .form-input-border {
            border: 1px solid #ced4da;
        }
        .professionall-button-register {
            background-color: #ffc107;
            color: #000;
        }
    </style>
</head>

<section class="banner position-relative overflow-hidden">
  <div class="container-fluid m-0 p-0">
    <div class="row align-items-center justify-content-center back-ground" style="padding-top:110px;padding-bottom:110px;">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="block text-center text-lg-start">
          <h2 class="mb-5 banner-text text-center section-title-mobile">Enfin… déplacer un véhicule revient à poster un colis</h2>
          <h5 class="mb-4 banner-text-2 mb-5 text-light" style="text-align: justify;">Des partenaires convoyeurs et transporteurs professionnels, partout en France s'engagent à déplacer vos véhicules.</h5>
          <div class="text-center">
          <a type="button"
            class="btn banner-button text-light banner-button-hover px-4 py-3" href="#">
            <b>E<span class="lowercase">xpédier un véhicule</span></b></a>
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
<section class="section section-2 pt-5 m-0 overflow-hidden" id="move_car">
  <div class="container">
    <div class="row">
    <p class="fw-bold services-p text-center">1 clic = 1 devis</p>
      <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="card mt-4 rounded mx-auto card-register p-2" style="width:60%;">
            <div class="card-body">
              <h4 class="card-title text-center p-complete-info py-2">Indiquez vos adresses</h4>
              <form action="/calculate" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <input type="text" class="form-control form-input-border mt-0" id="pickup" placeholder="Adresse d’enlèvement">
                        <input type="hidden" id="pickup-lat" name="pickup_lat">
                        <input type="hidden" id="pickup-lng" name="pickup_lng">
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <input type="text" class="form-control form-input-border mt-0" id="delivery" placeholder="Adresse de livraison">
                        <input type="hidden" id="delivery-lat" name="delivery_lat">
                        <input type="hidden" id="delivery-lng" name="delivery_lng">
                    </div>

                    <input type="text" id="pickupName" name="pickup_name" style="display: none;">
                    <input type="text" id="deliveryName" name="delivery_name" style="display: none;">
                    <input type="hidden" id="distance" name="distance">

                    <h4 class="card-title text-center p-complete-info py-2">Spécifiez votre véhicule</h4>
                    <div class="col-lg-6 col-md-12">
                        <div class="input-group">
                            <div class="select-container">
                                <select name="vehicle-type" id="vehicle-type" class="form-control form-input-border app-font-family">
                                    <option value="" selected class="app-font-family">Type de véhicule</option>
                                    <option value="Citadine" class="app-font-family">Citadine</option>
                                    <option value="Berline" class="app-font-family">Berline</option>
                                    <option value="Sportive" class="app-font-family">Sportive</option>
                                    <option value="Collection" class="app-font-family">Collection</option>
                                    <option value="Monospace" class="app-font-family">Monospace</option>
                                    <option value="4×4" class="app-font-family">SUV ou 4×4</option>
                                    <option value="3m3" class="app-font-family">Utilitaire 3m3</option>
                                    <option value="6m3" class="app-font-family">Utilitaire 6m3</option>
                                    <option value="9m3" class="app-font-family">Utilitaire 9m3</option>
                                    <option value="12m3" class="app-font-family">Utilitaire 12m3</option>
                                    <option value="15m3" class="app-font-family">Utilitaire 15m3</option>
                                    <option value="20m3" class="app-font-family">Utilitaire 20m3</option>
                                    <option value="25m3" class="app-font-family">Utilitaire 25m3</option>
                                    <option value="30m3" class="app-font-family">Utilitaire 30m3</option>
                                    <option value="Camion-benne" class="app-font-family">Camion benne</option>
                                    <option value="Camping-car" class="app-font-family">Camping-car</option>
                                    <option value="Van-aménagé" class="app-font-family">Van aménagé</option>
                                </select>
                                <i class="fas fa-caret-down fa-dropdown-icon"></i> <!-- Font Awesome dropdown icon -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="input-group">
                            <div class="select-container">
                                <select name="vehicle-condition" id="vehicle-condition" class="form-control form-input-border app-font-family">
                                    <option value="" selected>Etat du véhicule</option>
                                    <option value="En-état-de-marche" class="app-font-family">En état de marche</option>
                                    <option value="En-panne" class="app-font-family">En panne</option>
                                    <option value="Accidenté" class="app-font-family">Accidenté</option>
                                </select>
                                <i class="fas fa-caret-down fa-dropdown-icon"></i> <!-- Font Awesome dropdown icon -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h4 class="card-title text-center p-complete-info py-2">Spécifiez votre type de profil</h4>
                    <div class="col-lg-12 col-md-12">
                        <div class="input-group">
                            <div class="select-container">
                                <select name="vehicle-mover" id="vehicle-mover" class="form-control form-input-border app-font-family">
                                    <option value="" selected class="app-font-family">Sélectionner le type de profil</option>
                                    <option value="professional" class="app-font-family">Je suis professionnel</option>
                                    <option value="private" class="app-font-family">Je suis un particulier</option>
                                </select>
                                <i class="fas fa-caret-down fa-dropdown-icon"></i> <!-- Font Awesome dropdown icon -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn professionall-button-register text-dark mt-3 mb-3" id="calculate-button" disabled>
                        <b>Calculer</b>
                    </button>
                </div>
            </form>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-3 pt-5 m-0">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-5">
        <div class="section-title">
          <p class="services-p fw-bold mb-3 nos-atouts-mobile"><b>Nos Atouts</b></p>
          <h2 class="text-dark differnce-section section-title-mobile">Qu'est-ce qui différencie CoCarmoov ?</h2>
          <div class="content mb-0 mt-4">
            <h4 class="text-dark text-bold differnce-section">CoCarmoov est plus qu'un lien entre l'automobile et l'humain</h4>
            <p class="text-dark differnce-section service-p" style="text-align: justify;">Après 5 ans d'expérience au service de centaines d'acteurs de l'automobile, nous sommes convaincus que la satisfaction client et la performance des professionnels de transport sont alimentées par l’engagement offert par une interface pensée et efficace de collaboration. Comment ?</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
          <div class="d-block d-sm-flex align-items-center m-2">
            <div class="icon me-4 mb-4 mb-sm-0"><i class="fas fa-cogs mt-0" style="font-size:70px"></i>
            </div>
            <div class="block differnce-section">
              <h5 class="mb-3 text-dark app-font-family">Intuitive et sécurisée</h5>
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
              <h5 class="mb-3 text-dark app-font-family">Réactive et proche</h5>
              <p class="mb-0 text-dark service-p">Pas de robots, des vrais interlocuteurs</p>
                <p class="text-dark service-p">Suivi et accompagnement réguliers</p>
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
              <h5 class="mb-3 text-dark app-font-family">Transparente et engagée</h5>
              <p  class="mb-0 service-p text-dark">Pas de frais cachés (carburant, péages)</p>
              <p class="text-dark service-p">Tarif compétitif et indemnisation garantie</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="position-relative section-4 m-0">
  <div class="section container">
    <div class="row justify-content-center">
      <div class="col-lg-8 pt-3">
        <div class="section-title text-center differnce-section mt-5">
          <p class="services-p fw-bold differnce-section"><b>Nos formules</b></p>
          <h2 class='text-light differnce-section section-title-mobile'>Des centaines de véhicules déplacés chaque année d’un point A à un point B par …</h2>
        </div>
      </div>
        <div class="container pb-5 m-0">
        <div class="row align-items-center">
            <div class="col-lg-4 differnce-section text-center mt-4">
                <h3 class="text-center eco-h differnce-section">Voie économique</h3>
                <img src="{{asset('images/wallet/eco.jpg')}}" class="rounded"/>
                <p class="text-center mt-3 text-light app-font-family fs-5">Vous déménagez et n’avez pas de conducteurs pour vos véhicules ?</p>
                <p class="text-center text-light mt-3 solution-text"><b>Solution économique</b></p>
                <h4 class="text-light text-center differnce-section">[Co-convoyage]</h4>
                <p class="text-center text-light mt-3 solution-text-p"><b>Faites des économies en proposant vos véhicules à des co-convoyeurs particuliers pour les déplacer pendant qu'ils déménagent ou covoiturent.</b></p>
                <p class="text-center text-light mt-3 solution-text-p app-font-family">Sous 15 jours en moyenne</p>
                <p class="text-center  mt-3 h5 solution-price-eco app-font-family">À partir de 59€ TTC</p>
                <div class="text-center">
          <a type="button"
            class="btn banner-button-1 text-light px-4 py-3 mt-4 app-font-family" href="#">
            <b>Rapatrier un véhicule</b></a>
            </div>
              </div>
            <div class="col-lg-4 differnce-section text-center mt-4">
              <h3 class="text-center exp-h differnce-section">Voie express</h3>
              <img src="{{asset('images/wallet/exp.jpg')}}" class="rounded"/>
              <p class="text-center mt-3 text-light app-font-family fs-5">Vous vendez un véhicule ou le livrer avec des services à la clé ?</p>
              <p class="text-center text-light mt-3 solution-text"><b>Solution express</b></p>
                <h4 class="text-center text-light differnce-section">[Convoyage]</h4>
              <p class="text-center text-light mt-3 solution-text-p"><b>Satisfaites  vos clients ou vous même en toute sérénité dans l'exécution opérationnelle en  louant les   services d'un convoyeur fiable sur CoCarmoov.</b></p>
              <p class="text-center text-light mt-3 solution-text-p">Sous 3 jours en moyenne</p>

              <p class="text-center h5 text-light mt-3 solution-price-exp app-font-family">À partir de 79€ TTC</p>

              <div class="text-center">
          <a type="button"
            class="btn banner-button-2 mt-4 px-4 py-3 text-light app-font-family" href="#">
            <b>Déplacer un véhicule</b></a>
            </div>
            </div>
            <div class="col-lg-4 text-center mt-4">
              <h3 class="text-center pre-h differnce-section">Voie premium</h3>
              <img src="{{asset('images/wallet/pre.jpg')}}" class="rounded"/>
              <p class="text-center mt-3 text-light app-font-family fs-5">Vous déplacez un véhicule de collection, de sport ou en panne ?</p>
              <p class="text-center text-light mt-3 solution-text"><b>Solution premium</b></p>
              <h4 class="text-center text-light differnce-section">[Transport]</h4>
              <p class="text-center text-light mt-3 solution-text-p"><b>Faites transporter vos véhicules, en marche, en panne ou accidenté, avec une solution à 0 km, de porte à porte, grâce aux camions transporteurs partenaires.</b></p>
              <p class="text-center text-light mt-3 solution-text-p app-font-family">Sous 10 jours en moyenne </p>
              <p class="text-center text-light h5 mt-3 solution-price-pre app-font-family">À partir de 179€ TTC</p>

              <div class="text-center">
          <a type="button"
            class="btn banner-button-3 text-light px-4 py-3 mt-4 app-font-family" href="#">
            <b>Transporter un véhicule</b></a>
            </div>
            </div>
        </div>
        </div>
    </div>
  </div>
</section>
<section class="section overflow-hidden bg-img">
  <div class="container">
    <div class="row justify-content-center p-0 m-0">
      <div class="col-lg-10">
        <div class="section-title text-center frequently-margin-2">
        <p class="services-p fw-bold"><b>Top des commandes</b></p>
          <!-- <p class="text-primary text-uppercase fw-bold mb-3">Our Service Holders</p> -->
          <h2 class="frequently-h differnce-section section-title-mobile">Véhicules fréquemment déplacés avec CoCarmoov</h2>
          <!-- <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing. egestas cursus pellentesque dignissim
            dui, congue. Vel etiam ut</p> -->
        </div>
      </div>
    </div>
    <div class="row position-relative">
      <div class="col-lg-6 col-md-12 col-sm-12 mobile-view-50">
        <div class="rounded p-4">
          <div class="d-block d-sm-flex align-items-center mb-4">
            <img
              src="{{ asset('images/wallet/achat-vente-voiture-vehicule.jpg') }}"
              alt="Leslie Alexander" class="text-center img-fluid rounded" width="200" height="auto" />
            <div class="mt-sm-0 ms-0 ms-sm-3">
              <h4 class="mb-1 differnce-section mt-2">Achat / Vente</h4>
              <p class="mb-0 text-dark frequently-move" style="text-align: justify; font-size:16px; line-height:normal;">Un véhicule d'occasion haut de gamme se trouve à Strasbourg ? Pas de souci, Alexandre peut vous le convoyer sans vous ruiner.</p>
            </div>
          </div>
        </div>
      </div>
       <div class="col-lg-6 col-md-12 col-sm-12 d-none mobile-view-51">
        <div class="rounded p-4">
          <div class="d-block d-sm-flex align-items-center mb-4">
            <img
              src="{{ asset('images/wallet/achat-vente-voiture-vehicule.jpg') }}"
              alt="Leslie Alexander" class="text-center img-fluid rounded" width="100%" height="auto" />
            <div class="mt-sm-0 ms-0 ms-sm-3">
              <h4 class="mb-1 differnce-section mt-2">Achat / Vente</h4>
              <p class="mb-0 text-dark frequently-move" style="text-align: justify; font-size:16px; line-height:normal;">Un véhicule d'occasion haut de gamme se trouve à Strasbourg ? Pas de souci, Alexandre peut vous le convoyer sans vous ruiner.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 mobile-view-50">
        <div class="rounded p-4">
        <div class="d-block d-sm-flex align-items-center">
            <img
              src="{{ asset('images/wallet/reparation-mecanique-voiture-vehicule.jpg') }}"
              alt="Leslie Alexander" class="img-fluid rounded" width="200" height="auto" />
            <div class="mt-sm-0 ms-0 ms-sm-3">
              <h4 class="mb-1 differnce-section">Réparation</h4>
              <p class="mb-0 text-dark frequently-move" style="text-align: justify;font-size:16px;line-height:normal;">Vous pouvez aller la chercher vous-même à Nice… ou la restituer via CoCarmoov pour 2× moins cher.</p>
            </div>
          </div>
          <!-- <div class="content">Lorem ipsum dolor <a href="http://google.com">@reamansimond</a> demina egestas sit purus
            felis arcu. Vitae, turpisds tortr etiam faucibus ac suspendisse.</div> -->
        </div>
      </div>
        <div class="col-lg-6 col-md-12 col-sm-12 d-none mobile-view-51">
        <div class="rounded p-4">
        <div class="d-block d-sm-flex align-items-center mb-4">
            <img
              src="{{ asset('images/wallet/reparation-mecanique-voiture-vehicule.jpg') }}"
              alt="Leslie Alexander" class="img-fluid rounded" width="100%" height="auto" />
            <div class="mt-sm-0 ms-0 ms-sm-3">
              <h4 class="mb-1 differnce-section mt-2">Réparation</h4>
              <p class="mb-0 text-dark frequently-move" style="text-align: justify;font-size:16px;line-height:normal;">Vous pouvez aller la chercher vous-même à Nice… ou la restituer via CoCarmoov pour 2× moins cher.</p>
            </div>
          </div>
          <!-- <div class="content">Lorem ipsum dolor <a href="http://google.com">@reamansimond</a> demina egestas sit purus
            felis arcu. Vitae, turpisds tortr etiam faucibus ac suspendisse.</div> -->
        </div>
      </div>
    </div>
    <div class="row position-relative">
    <div class="col-lg-6 col-md-12 col-sm-12 mobile-view-50">
        <div class="rounded p-4">
          <div class="d-block d-sm-flex align-items-center mb-4">
            <img
              src="{{ asset('images/wallet/location-voiture-demenagement-utilitaire.jpg') }}"
              alt="Leslie Alexander" class="img-fluid rounded" width="200" height="auto" />
            <div class="mt-sm-0 ms-0 ms-sm-3">
              <h4 class="differnce-section mt-2">Location</h4>
              <p class="mb-0 text-dark frequently-move" style="text-align: justify; font-size:16px; line-height:normal;">Votre parc d’utilitaires sur Paris est désert parce que vous louez en aller simple ! Pensez à notre formule économique pour les rapatrier.</p>
            </div>
          </div>
        </div>
      </div>
       <div class="col-lg-6 col-md-12 col-sm-12 d-none mobile-view-51">
        <div class="rounded p-4">
          <div class="d-block d-sm-flex align-items-center mb-4">
            <img
              src="{{ asset('images/wallet/location-voiture-demenagement-utilitaire.jpg') }}"
              alt="Leslie Alexander" class="img-fluid rounded" width="100%" height="auto" />
            <div class="mt-sm-0 ms-0 ms-sm-3">
              <h4 class="differnce-section mt-2">Location</h4>
              <p class="mb-0 text-dark frequently-move" style="text-align: justify; font-size:16px; line-height:normal;">Votre parc d’utilitaires sur Paris est désert parce que vous louez en aller simple ! Pensez à notre formule économique pour les rapatrier.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 mobile-view-50">
        <div class="rounded p-4">
        <div class="d-block d-sm-flex align-items-center mb-4">
            <img
              src="{{ asset('images/wallet/transport-voyage-evenement-salon-foire.png') }}"
              alt="Leslie Alexander" class="img-fluid rounded mobile-img-5" width="200" height="auto" />
            <div class="mt-sm-0 ms-0 ms-sm-3">
              <h4 class="mb-1 differnce-section mt-2">Événement</h4>
              <p class="mb-0 text-dark frequently-move" style="text-align: justify;font-size:16px; line-height:normal;">Pas le temps de conduire ou l’habitude de faire un long trajet. Sinon, expédiez-le via CoCarmoov !</p>
            </div>
          </div>
        </div>
      </div>
         <div class="col-lg-6 col-md-12 col-sm-12 d-none mobile-view-51">
        <div class="rounded p-4">
        <div class="d-block d-sm-flex align-items-center mb-4">
            <img
              src="{{ asset('images/wallet/transport-voyage-evenement-salon-foire.png') }}"
              alt="Leslie Alexander" class="img-fluid rounded" width="100%" height="auto" />
            <div class="mt-sm-0 ms-0 ms-sm-3">
              <h4 class="mb-1 differnce-section mt-2">Événement</h4>
              <p class="mb-0 text-dark frequently-move" style="text-align: justify;font-size:16px; line-height:normal;">Pas le temps de conduire ou l’habitude de faire un long trajet. Sinon, expédiez-le via CoCarmoov !</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row position-relative">
    <div class="col-lg-6 col-md-12 col-sm-12 mobile-view-50">
        <div class="rounded p-4">
          <div class="d-block d-sm-flex align-items-center">
            <img
              src="{{ asset('images/wallet/transport-prestige-voiture-sport-collection-luxe.jpg') }}"
              alt="Leslie Alexander" class="img-fluid rounded" width="200" height="auto" />
            <div class="mt-sm-0 ms-0 ms-sm-3">
              <h4 class="mb-1 differnce-section mt-2">Prestige</h4>
              <p class="mb-0 text-dark frequently-move" style="text-align: justify; font-size:16px; line-height:normal;">Votre voiture de luxe, vous la préférez livrée dans un sale état ou être transportée par un camion et ne pas prendre un kilomètre de plus au compteur </p>
            </div>
          </div>
        </div>
      </div>
         <div class="col-lg-6 col-md-12 col-sm-12 d-none mobile-view-51">
        <div class="rounded p-4">
          <div class="d-block d-sm-flex align-items-center mb-4">
            <img
              src="{{ asset('images/wallet/transport-prestige-voiture-sport-collection-luxe.jpg') }}"
              alt="Leslie Alexander" class="img-fluid rounded" width="100%" height="auto" />
            <div class="mt-sm-0 ms-0 ms-sm-3">
              <h4 class="mb-1 differnce-section mt-2">Prestige</h4>
              <p class="mb-0 text-dark frequently-move" style="text-align: justify; font-size:16px; line-height:normal;">Votre voiture de luxe, vous la préférez livrée dans un sale état ou être transportée par un camion et ne pas prendre un kilomètre de plus au compteur </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 mobile-view-50">
        <div class="rounded p-4">
        <div class="d-block d-sm-flex align-items-center">
            <img
              src="{{ asset('images/wallet/restituer-un-vehicule.jpg')}}"
              alt="Leslie Alexander" class="img-fluid rounded" width="200" height="auto" />
            <div class="mt-sm-0 ms-0 ms-sm-3">
              <h4 class="mb-1 differnce-section mt-2">Vacances</h4>
              <p class="mb-0 text-dark frequently-move" style="text-align: justify; font-size:16px; line-height:normal;">Location de van aménagé, de camping-car… ! CoCarmoov assure son retour l’esprit tranquille.</p>
            </div>
          </div>
        </div>
      </div>
         <div class="col-lg-6 col-md-12 col-sm-12 d-none mobile-view-51">
        <div class="rounded p-4">
        <div class="d-block d-sm-flex align-items-center">
            <img
              src="{{ asset('images/wallet/restituer-un-vehicule.jpg')}}"
              alt="Leslie Alexander" class="img-fluid rounded" width="100%" height="auto" />
            <div class="mt-sm-0 ms-0 ms-sm-3">
              <h4 class="mb-1 differnce-section mt-2">Vacances</h4>
              <p class="mb-0 text-dark frequently-move" style="text-align: justify; font-size:16px; line-height:normal;">Location de van aménagé, de camping-car… ! CoCarmoov assure son retour l’esprit tranquille.</p>
            </div>
          </div>
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
				<h2 class="text-center differnce-section section-title-mobile">Les Voix de la Communauté</h2>
				</div>
		</div>
		<div id="carouselExampleControls " class="test-carousel">
  <div class="carousel-inner-test">
    <div class="carousel-item-test active">
	<div class="card h-100">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text app-font-family">Au moins on s’est partagé les frais.</p>
    <p class="card-text testimonial-text app-font-family">Très bien. Merci Cocarmoov</p>
	<p class="card-text app-font-family"><b>Patrice</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2 app-font-family">Nice -> Bordeaux</p>
	<p class="card-text testimonial-text app-font-family">Il y a 1 mois</p>
  </div>
</div>
    </div>
    <div class="carousel-item-test">
	<div class="card h-100">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text app-font-family">Ma première expérience en co-convoyage </p>
    <p class="card-text testimonial-text app-font-family">formidable Tout le monde est gagnant
</p>
	<p class="card-text app-font-family"><b>Alex</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2 app-font-family">Lille -> Pau</p>
	<p class="card-text testimonial-text app-font-family">Il y a 2 semaines</p>
  </div>
</div>
    </div>
    <div class="carousel-item-test">
	<div class="card h-100">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text app-font-family">Déménagement au top en 20m3</p>
    <p class="card-text testimonial-text app-font-family">Très bon compromis.</p>
	<p class="card-text app-font-family"><b>Lucas</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2 app-font-family">Nantes -> Montpellier</p>
	<p class="card-text testimonial-text app-font-family">Il y a 1 mois</p>
  </div>
</div>
    </div>
	<div class="carousel-item-test">
	<div class="card h-100">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text app-font-family">Co-convoyage</p>
    <p class="card-text testimonial-text app-font-family">ça donne envie de voyager
Souvent même.
</p>
	<p class="card-text app-font-family"><b> Léa</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2 app-font-family">Rennes -> Le Havre</p>
	<p class="card-text testimonial-text app-font-family">Il y a 1 semaine</p>
  </div>
</div>
    </div>
	<div class="carousel-item-test">
	<div class="card h-100">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text app-font-family">Je découvre une nouvelle plateforme à mon avis.</p>
    <p class="card-text testimonial-text app-font-family">J’espère que je trouverai souvent des véhicules.</p>
	<p class="card-text app-font-family"><b>Hugo</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2 app-font-family">Cergy -> Avignon</p>
	<p class="card-text testimonial-text app-font-family">Il y a 1 mois</p>
  </div>
</div>
    </div>
	<div class="carousel-item-test">
	<div class="card h-100">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text app-font-family">Je suis étudiante et le concept</p>
    <p class="card-text testimonial-text app-font-family">est très arrangeant.</p>
	<p class="card-text app-font-family"><b>Manon</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2 app-font-family">Besançon -> Saint-Étienne</p>
	<p class="card-text testimonial-text app-font-family">Il y a 3 semaines</p>
  </div>
</div>
    </div>
	<div class="carousel-item-test">
	<div class="card h-100">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text app-font-family">Déménagement à 50 euros de frais TTC.</p>
    <p class="card-text testimonial-text app-font-family">Merci pour le concept.</p>
	<p class="card-text app-font-family"><b>Reda</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2 app-font-family">Angers -> Limoges</p>
	<p class="card-text testimonial-text app-font-family">Il y a 1 semaine</p>
  </div>
</div>
    </div>
	<div class="carousel-item-test">
	<div class="card h-100">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text app-font-family">Concept écolo et économique</p>
    <p class="card-text testimonial-text app-font-family">Qui aurait pensé !</p>
	<p class="card-text app-font-family"><b>Mus</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2 app-font-family">Calais -> Cannes</p>
	<p class="card-text testimonial-text app-font-family">Il y a 2 semaines</p>
  </div>
</div>
    </div>
	<div class="carousel-item-test">
	<div class="card h-100">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text app-font-family">Ça se joue aux bons plans.</p>
    <p class="card-text testimonial-text app-font-family">Même en îDF.</p>
	<p class="card-text app-font-family"><b>Théo</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2 app-font-family">Courbevoie -> Saint-Denis</p>
	<p class="card-text testimonial-text app-font-family">Il y a 1 mois</p>
  </div>
</div>
    </div>
	<div class="carousel-item-test">
	<div class="card h-100">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text app-font-family">Bon petit déménagement de fin de stage.</p>
    <p class="card-text testimonial-text app-font-family">Merci au propriétaire.</p>
	<p class="card-text app-font-family"><b>Chloé</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2 app-font-family">Le Mans -> Aubervilliers</p>
	<p class="card-text testimonial-text app-font-family">Il y a 1 semaine</p>
  </div>
</div>
    </div>
	<div class="carousel-item-test">
	<div class="card h-100">
  	<div class="card-body text-center">
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
	<i class="fas fa-star checked"></i>
    <p class="card-text app-font-family">Bonne formule, à savoir la disponibilité !</p>
    <p class="card-text testimonial-text app-font-family">Trajet rentabilisé entre amis.</p>
	<p class="card-text app-font-family"><b>Djabir</b></p>
	<img  class="rounded"  src="{{ asset('images/wallet/profil-particulier.png') }}" width="20%" height="auto" alt="Post Thumbnail">
	<p class="card-text testimonial-text-2 app-font-family">Colmar -> Valenciennes</p>
	<p class="card-text testimonial-text app-font-family">Il y a 1 semaine</p>
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
                <div><p class="formulas-section fw-bold app-font-family"><b>Guide des formules</b></p></div>
                <h2 class="text-light text-center differnce-section section-title-mobile">Informations utiles pour chaque type de transport</h2>
            </div>
	  </div>
  <div class="section container mx-auto" style="width:100%;">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-sm-12 col-md-12">
        <ul class="payment_info_tab nav nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
          <li class="nav-item m-2" role="presentation"> <a
              class="nav-link btn btn-outline-primary app-font-family effect-none text-light formula-nav-1 active fw-bold" id="pills-how-much-can-i-recive-tab"
              data-bs-toggle="pill" href="#pills-how-much-can-i-recive" role="tab"
              aria-controls="pills-how-much-can-i-recive" aria-selected="true">La formule économique</a>
          </li>
          <li class="nav-item m-2" role="presentation"> <a
              class="nav-link btn btn-outline-primary app-font-family effect-none text-light formula-nav-2 fw-bold" id="pills-how-much-does-it-costs-tab"
              data-bs-toggle="pill" href="#pills-how-much-does-it-costs" role="tab"
              aria-controls="pills-how-much-does-it-costs" aria-selected="true">La formule express</a>
          </li>
          <li class="nav-item m-2" role="presentation"> <a
              class="nav-link btn btn-outline-primary app-font-family effect-none text-light formula-nav-3 fw-bold" id="pills-how-do-i-repay-tab"
              data-bs-toggle="pill" href="#pills-how-do-i-repay" role="tab" aria-controls="pills-how-do-i-repay"
              aria-selected="true">La formule premium</a>
          </li>
        </ul>
        <div class="card rounded p-5 shadow bg-white tab-content mx-auto" id="pills-tabContent" style="max-width:auto;">
          <div class="tab-pane fade show active" id="pills-how-much-can-i-recive" role="tabpanel"
            aria-labelledby="pills-how-much-can-i-recive-tab">
            <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="accordion accordion-border-bottom" id="accordionFAQ">
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button app-font-family h5 border-0 app-font-family"
              id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" aria-expanded="false"
              aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9">Comment ça marche ?
            </h2>
            <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9"
              class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"> <p>Un co-convoyeur particulier de la communauté CoCarmoov qui a besoin de voyager ou de déménager, déplacera votre véhicule, c'est pourquoi nous proposons des prix très bas.</p>
                            <p>
                            Le co-convoyeur est soumis à une franchise et donne une caution bancaire (pré autorisation bancaire) avant chaque réservation, comme dans une location de véhicule.
                            </p>
                    </div>
            </div>

          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec2" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec2" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec2">Mon véhicule est-il assuré pendant le co-convoyage ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec2" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec2" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Oui votre véhicule bénéficie automatiquement d'une assurance automobile (dommages, incendie et vol) par notre partenaire Wakam et d’une assistance routière AXA.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec2" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec3" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec3">Quand mon véhicule sera-t-il déplacé ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec3" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec3" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Dès que vous validez votre commande, CoCarmoov notifie sa communauté de co-convoyeurs particuliers susceptibles de co-convoyer votre véhicule. CoCarmoov ne garantit pas de trouver un co-convoyeur particulier.<br>
              Pour maximiser les chances, il faudra indiquer une période de départ possible suffisamment longue (idéalement 10 à 15 jours).<br>
              Le co-convoyeur particulier dispose de 24 à 48 heures pour déplacer votre véhicule selon la distance.
              </p>

            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec4" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec4" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec4">Des frais supplémentaires à prévoir ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec4" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec4" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Le prix comprend : l'assurance automobile jusqu'à 45.000 euros, les péages et le carburant.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec5" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec5" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec5">Quand ma carte bancaire sera-t-elle débitée ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec5" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec5" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Tant que votre trajet n'est pas réservé par un co-convoyeur particulier, vous ne serez pas facturé.<br>
Votre carte est débitée à 72h avant le départ lorsque votre trajet est réservé.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec6" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec6" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec6">Que se passe-t-il si j'annule ma commande ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec6" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec6" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Gratuit si le trajet n'est pas encore réservé ou avant 72h du départ s’il est déjà réservé.<br>
50% à 72h ou moins du départ, si le trajet est déjà réservé par un co-convoyeur.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec7" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec7" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec7">Comment fonctionne l’enlèvement ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec7" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec7" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Un contrat de co-convoyage pré-rempli vous sera envoyé par e-mail.<br>
Utilisez-le pour vérifier avec le co-convoyeur tout dommage causé à votre véhicule.

</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec8" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec8" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec8">Comment se déroule le co-convoyage ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec8" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec8" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Le co-convoyeur parcourt la distance nécessaire pour relier les deux adresses le plus rapidement possible +20% de kilomètres supplémentaires (Exemple : pour 100 kilomètres de distance, le co-convoyeur est autorisé à parcourir 120 kilomètres maximum)

</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec9" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec9" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec9">Comment doit être mon véhicule ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec9" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec9" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Vous vous engagez à fournir un véhicule en bon état de marche, assuré (en cas de panne moteur) et avec un contrôle technique à jour (si le véhicule a plus de 4 ans).
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
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d99" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d99" aria-expanded="true"
              aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d99">Comment ça marche ?
            </h2>
            <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d99"
              class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d99" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"> <p>Votre véhicule sera proposé à notre réseau de convoyeurs professionnels sélectionnés.<br>
Ceux-ci sont certifiés par nos services pour offrir une prestation irréprochable.

                            </p>
                    </div>
            </div>

          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec34" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec34" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec34">Mon véhicule est-il assuré pendant le convoyage ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec34" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec34" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Oui votre véhicule bénéficie automatiquement d'une assurance automobile (dommages, incendie et vol) par notre partenaire Wakam et d’une assistance routière AXA.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec35" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec35" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec35">Quand mon véhicule sera-t-il déplacé ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec35" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec35" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Dès que vous validez votre commande, CoCarmoov notifie son réseau de convoyeurs professionnels susceptibles de convoyer votre véhicule.<br>
Le convoyage du véhicule dure 24 à 48 heures selon la distance.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec36" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec36" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec36">Des frais supplémentaires à prévoir ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec36" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec36" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Le prix comprend : l'assurance automobile jusqu'à 45.000 euros, les péages et le carburant ainsi que les éventuels services spécifiques commandés.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec37" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec37" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec37">Quand ma carte bancaire sera-t-elle débitée ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec37" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec37" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Tant que votre trajet n'est pas réservé par un convoyeur professionnel, vous ne serez pas facturé.<br>
Votre carte est débitée à 72h avant le départ lorsque votre trajet est réservé.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec38" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec38" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec38">Que se passe-t-il si j'annule ma commande ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec38" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec38" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Gratuit si le trajet n'est pas encore réservé ou avant 72h du départ s’il est déjà réservé.<br>
35% entre 24-72h avant le départ, si le trajet est déjà réservé par un convoyeur.<br>
70% à moins de 24 heures avant le départ, si le trajet est déjà réservé par un convoyeur.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec39" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec39" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec39">Comment fonctionne l’enlèvement ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec39" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec39" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Un contrat de convoyage pré-rempli vous sera envoyé par e-mail.<br>
Utilisez-le pour vérifier avec le convoyeur tout dommage causé à votre véhicule.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec40" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec40" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec40">Comment se déroule le convoyage ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec40" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec40" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Le convoyeur parcourt la distance nécessaire pour relier les deux adresses le plus rapidement possible +20% de kilomètres supplémentaires (Exemple : pour 100 kilomètres de distance, le convoyeur est autorisé à parcourir 120 kilomètres maximum)</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec41" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec41" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec41">Comment doit être mon véhicule ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec41" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec41" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Vous vous engagez à fournir un véhicule en bon état de marche, assuré (en cas de panne moteur) et avec un contrôle technique à jour (si le véhicule a plus de 4 ans).</p>
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
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec81" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec81" aria-expanded="true"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec81">Comment ça marche ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec81" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec81" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Votre véhicule sera proposé à notre réseau de transporteurs professionnels partenaires.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec813" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec813" aria-expanded="true"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec813">Mon véhicule est-il assuré pendant le transport ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec813" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec813" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Votre véhicule est assuré par le partenaire transporteur de véhicules.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec82" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec82" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec82">Quand mon véhicule sera-t-il déplacé ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec82" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec82" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Dès que vous validez votre commande, CoCarmoov notifie son réseau de transporteurs de véhicules susceptibles de transporter votre véhicule.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec83" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec83" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec83">Des frais supplémentaires à prévoir ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec83" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec83" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Le prix comprend : l'assurance automobile du transporteur ainsi que les éventuels services spécifiques commandés.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec84" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec84" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec84">Quand ma carte bancaire sera-t-elle débitée ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec84" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec84" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Tant que votre transport n'est pas réservé par un transporteur de véhicules partenaire, vous ne serez pas facturé.<br>
Votre carte est débitée à 72h avant le départ lorsque votre trajet est réservé.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec85" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec85" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec85">Que se passe-t-il si j'annule ma commande ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec85" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec85" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Gratuit si le trajet n'est pas encore réservé ou avant 72h du départ s’il est déjà réservé.<br>
35% entre 24-72h avant le départ, si le trajet est déjà réservé par un transporteur.<br>
70% à moins de 24 heures avant le départ, si le trajet est déjà réservé par un transporteur.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec86" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec86" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec86">Comment fonctionne l’enlèvement ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec86" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec86" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Un contrat de transport pré-rempli vous sera envoyé par e-mail.<br>
Utilisez-le pour vérifier avec le transporteur tout dommage causé à votre véhicule.<br>
Assurez-vous que les adresses de départ et d'arrivée peuvent accueillir un camion porte-voiture de 15 mètres.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec87" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec87" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec87">Comment doit être mon véhicule ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec87" class="accordion-collapse collapse border-0 app-font-family"
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec87" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Vous vous engagez à fournir un véhicule dans l'état de fonctionnement mentionné.<br>
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
        <div class="col-lg-4 col-md-12 col-sm-12 formula-section-2">
        <div class="card rounded px-2 mx-2" style="width:100%;">
  <div class="card-body">
    <h5 class="card-title text-center mt-5 app-font-family">Encore des questions ?</h5>
    <ul>
      <li class="text-dark text-size-formula-1 app-font-family mx-3 mt-4" style="text-align: justify;">
      Consultez notre <a href="{{route('faq')}}"><b>FAQ</b></a> qui répond aux questions fréquentes de nos utilisateurs.
      </li>
      <li class="text-dark text-size-formula-1 app-font-family mx-3" style="text-align: justify;">
      Envoyez nous un message via <a href="{{route('contact_us')}}"><b>le formulaire de contact</b></a>
      </li>
      <li class="text-dark text-size-formula-1 app-font-family mx-3" style="text-align: justify;">
      Écrivez nous à l’adresse <a href="#"><b>contact@cocarmoov.fr</b></a>
      </li>
    </ul>
    <p class="text-dark text-size-formula-1 mx-3 mb-5 app-font-family" style="text-align: justify;">Nous serons ravis de vous répondre sous moins de 24 heures.</p>
  </div>
</div>
        </div>
</div>
</section>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlNsN-oe1DZYJudjA315dDh9iuAxBk0zM&libraries=places"></script>


<script>

document.addEventListener('DOMContentLoaded', function () {
        const pickup = document.getElementById('pickup');
        const delivery = document.getElementById('delivery');
        const vehicleType = document.getElementById('vehicle-type');
        const vehicleCondition = document.getElementById('vehicle-condition');
        const vehicleMover = document.getElementById('vehicle-mover');
        const calculateButton = document.getElementById('calculate-button');

        function checkFields() {
            if (
                pickup.value.trim() !== '' &&
                delivery.value.trim() !== '' &&
                vehicleType.value !== '' &&
                vehicleCondition.value !== '' &&
                vehicleMover.value !== ''
            ) {
                calculateButton.disabled = false;
            } else {
                calculateButton.disabled = true;
            }
        }

        pickup.addEventListener('input', checkFields);
        delivery.addEventListener('input', checkFields);
        vehicleType.addEventListener('change', checkFields);
        vehicleCondition.addEventListener('change', checkFields);
        vehicleMover.addEventListener('change', checkFields);
    });
function initAutocomplete() {
    var pickupAutocomplete = new google.maps.places.Autocomplete(document.getElementById('pickup'));
    var deliveryAutocomplete = new google.maps.places.Autocomplete(document.getElementById('delivery'));

    pickupAutocomplete.addListener('place_changed', function () {
        updatePlaceInfo('pickup', 'pickup-lat', 'pickup-lng');
        calculateDistance();
    });

    deliveryAutocomplete.addListener('place_changed', function () {
        updatePlaceInfo('delivery', 'delivery-lat', 'delivery-lng');
        calculateDistance();
    });

    // Prevent form submission on pressing Enter key
    document.getElementById('pickup').addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
            e.preventDefault();
        }
    });

    document.getElementById('delivery').addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
            e.preventDefault();
        }
    });

    function updatePlaceInfo(placeType, latId, lngId) {
        var autocomplete = (placeType === 'pickup') ? pickupAutocomplete : deliveryAutocomplete;
        var place = autocomplete.getPlace();

        if (place.geometry) {
            // Update latitude and longitude hidden fields
            document.getElementById(latId).value = place.geometry.location.lat();
            document.getElementById(lngId).value = place.geometry.location.lng();

            // Update name hidden field
            document.getElementById(`${placeType}Name`).value = place.name;
        }
    }

    function calculateDistance() {
        var service = new google.maps.DistanceMatrixService();
        var pickup = new google.maps.LatLng(
            parseFloat(document.getElementById('pickup-lat').value),
            parseFloat(document.getElementById('pickup-lng').value)
        );
        var delivery = new google.maps.LatLng(
            parseFloat(document.getElementById('delivery-lat').value),
            parseFloat(document.getElementById('delivery-lng').value)
        );

        service.getDistanceMatrix({
            origins: [pickup],
            destinations: [delivery],
            travelMode: 'DRIVING',
            unitSystem: google.maps.UnitSystem.METRIC, // Use METRIC for kilometers
        }, function (response, status) {
            if (status === 'OK') {
                var distance = response.rows[0].elements[0].distance.value / 1000; // Convert meters to kilometers
                // Update the hidden distance field in the form
                document.getElementById('distance').value = distance;
            }
        });
    }
}



    google.maps.event.addDomListener(window, 'load', initAutocomplete);

    function toRad(degrees) {
        return degrees * (Math.PI / 180);
    }

    function calculateAndDisplayResult() {
    var vehicleTypeSelect = document.getElementById('vehicle-type');
    var conditionSelect = document.getElementById('vehicle-condition');
    var selectedVehicleType = vehicleTypeSelect.options[vehicleTypeSelect.selectedIndex].value;
    var selectedCondition = conditionSelect.options[conditionSelect.selectedIndex].value;
// alert(selectedCondition)
    // Use Google Maps Distance Matrix API to get accurate distance
    var service = new google.maps.DistanceMatrixService();
    var pickup = new google.maps.LatLng(
        parseFloat(document.getElementById('pickup-lat').value),
        parseFloat(document.getElementById('pickup-lng').value)
    );
    var delivery = new google.maps.LatLng(
        parseFloat(document.getElementById('delivery-lat').value),
        parseFloat(document.getElementById('delivery-lng').value)
    );

    service.getDistanceMatrix({
        origins: [pickup],
        destinations: [delivery],
        travelMode: 'DRIVING',
        unitSystem: google.maps.UnitSystem.METRIC, // Use METRIC for kilometers
    }, function (response, status) {
        if (status === 'OK') {
            var distance = response.rows[0].elements[0].distance.value / 1000; // Convert meters to kilometers

            var result;
            var packages;
            if (selectedVehicleType === 'Citadine' || selectedVehicleType === 'Berline' || selectedVehicleType === 'Sportive' ||  selectedVehicleType === 'Monospace' || selectedVehicleType === '4×4' || selectedVehicleType === '3m3' || selectedVehicleType === '6m3' || selectedVehicleType === '9m3' || selectedVehicleType === '12m3' || selectedVehicleType === '15m3' || selectedVehicleType === 'Camion-benne'  || selectedVehicleType === 'Camping-car' || selectedVehicleType === 'Van-aménagé' && (selectedCondition === 'En-panne' || selectedCondition === 'Accidenté')) {
                result = 1.49 * distance + 149;
                packages = "Voie Premium";
            } else if (selectedVehicleType === 'Citadine' || selectedVehicleType === 'Berline' && selectedCondition === 'En étatde marche') {
              // alert("ok")
              result = 0.65 * distance + 59;
                packages = "Voie Express";
            } else if (selectedVehicleType === 'Sportive' ||  selectedVehicleType === 'Monospace' || selectedVehicleType === '4×4' && selectedCondition  === 'En étatde marche') {
              // alert("ok")
              result = 0.66 * distance + 59;
                packages = "Voie Express";
            } else if (selectedVehicleType === '3m3' || selectedVehicleType === '6m3'  && selectedCondition === 'En étatde marche') {
              // alert("ok")
              result = 0.69 * distance + 59;
                packages = "Voie Express";
            } else if (selectedVehicleType === '9m3' && selectedCondition === 'En étatde marche') {
              // alert("ok")
              result = 0.73 * distance + 59;
                packages = "Voie Express";
            } else if (selectedVehicleType === '12m3'  && selectedCondition === 'En étatde marche') {
              // alert("ok")
              result = 0.76 * distance + 59;
                packages = "Voie Express";
            } else if (selectedVehicleType === '15m3' && selectedCondition === 'En étatde marche') {
              // alert("ok")
              result = 0.84 * distance + 59;
                packages = "Voie Express";
            } else if (selectedVehicleType === '20m3' && selectedCondition === 'En étatde marche') {
              // alert("ok")
              result = 0.88 * distance + 59;
                packages = "Voie Express";
            } else if (selectedVehicleType === '25m3' || selectedVehicleType === '30m3' || selectedVehicleType === 'Camion-benne'  || selectedVehicleType === 'Camping-car' || selectedVehicleType === 'Van-aménagé' && selectedCondition === 'En étatde marche') {
              // alert("ok")
              result = 0.94 * distance + 59;
                packages = "Voie Express";
            } else if (selectedVehicleType === '20m3' || selectedVehicleType === '25m3' || selectedVehicleType === '30m3' && (selectedCondition === 'En-panne' || selectedCondition === 'Accidenté')) {
              // alert("ok")
              result = 0;
              packages = "Only Move with Express way";
            }else {
                result = 'Invalid selection';
            }

            displayResult(result, packages);
        } else {
            displayResult('Error calculating distance');
        }
    });
}


    function displayResult(result, packages) {
      alert("ok")
        var resultDiv = document.getElementById('resultDiv');
        resultDiv.style.textAlign = 'center'; // Center the text
        resultDiv.style.color = 'green'; // Set text color to yellow
        if(result != 0)
        {
          resultDiv.innerHTML = result ? 'Cost: ' + result.toFixed(2) + ' €' + ' ' + '(' + packages + ')'  : '';
        }
        else
        {
          resultDiv.style.textAlign = 'center'; // Center the text
        resultDiv.style.color = 'red'; // Set text color to yellow
          resultDiv.innerHTML = packages;
        }
    }
</script>
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if($showSweetAlert == true)
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Hello!',
            text: 'Please Log In to access this page',
        });
    </script>
@endif --}}

@endsection


{{-- <option value="Citadine" class="app-font-family">Citadine</option>
<option value="Berline" class="app-font-family">Berline</option>
<option value="Sportive" class="app-font-family">Sportive</option>
<option value="Collection" class="app-font-family">Collection</option>
<option value="Monospace" class="app-font-family">Monospace</option>
<option value="4×4" class="app-font-family">SUV ou 4×4</option>
<option value="3m3" class="app-font-family">Utilitaire 3m3</option>
<option value="6m3" class="app-font-family">Utilitaire 6m3</option>
<option value="9m3" class="app-font-family">Utilitaire 9m3</option>
<option value="12m3" class="app-font-family">Utilitaire 12m3</option>
<option value="15m3" class="app-font-family">Utilitaire 15m3</option>
<option value="20m3" class="app-font-family">Utilitaire 20m3</option>
<option value="25m3" class="app-font-family">Utilitaire 25m3</option>
<option value="30m3" class="app-font-family">Utilitaire 30m3</option>
<option value="Camion-benne" class="app-font-family">Camion benne</option>
<option value="Camping-car" class="app-font-family">Camping-car</option>
<option value="Van-aménagé" class="app-font-family">Van-aménagé</option> --}}
