@extends('frontend.frontend_main_layout')
@section('content')
<section class="section blog-header">
	<div class="container">
		<div class="row">
			<div class="col-12 mx-auto text-center">
                <div><h2 class="news-blog">CoCarmoov, est plus qu'un lien entre l'automobile et l'humain</h2></div>
            </div>
	</div>
</section>
<div class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        
        <div class="mb-5 text-center">
        <img loading="lazy" decoding="async" src="{{ asset('images/wallet/CoCarmoov-blog.png') }}" class="img-fluid rounded mt-3" alt="Post Thumbnail">
         
        </div>
        <div class="content">
          <p class="heading-example text-dark app-font-family">CoCarmoov est une révolution du transport automobile, elle est au transport automobile ce que la cerise est au gâteau. Après 5 ans d'expérience au service de centaines d'acteurs de l'automobile, nous sommes fiers de lancer la première plateforme où les professionnels de l'automobile, du convoyage de véhicules et du transport automobile peuvent collaborer efficacement.</p>
          <p class="text-dark app-font-family">CoCarmoov propose 3 formules pour déplacer ces véhicules : </p>
          <ul class="text-dark app-font-family">
            <li>Formule économique (co-convoyage) : Une solution gagnant-gagnant peu onéreuse où un propriétaire professionnel ou particulier propose son véhicule à un conducteur particulier pour le déplacer pendant qu’il covoiture ou déménage, et ce sous forme de co-convoyage sur notre plateforme.</li>
            <li>Formule express (convoyage) : Une solution personnalisée où un acteur de l’automobile voire même un particulier engage les services d’un convoyeur certifié pour livrer ou restituer un véhicule neuf ou d’occasion, avec des services à la clé.</li>
            <li>Formule premium (transport) : Une solution à 0 km, où le professionnel ou le particulier loue les services d’un transporteur par camion pour expédier ou rapatrier un véhicule neuf, de collection, en panne ou accidenté.</li>
          </ul>
          <p class="text-dark app-font-family">Ces services permettent aux clients de faire transporter leurs véhicules d'un point A à un point B sans avoir à les conduire eux-mêmes, ce qui est particulièrement utile pour les personnes déménageant dans une autre région ou les entreprises ayant besoin d’expédier des véhicules.</p>
          <div class="mb-5 text-center">
        <img src="{{ asset('images/wallet/histoire-cocarmoov.png') }}" class="img-fluid rounded" alt="Post Thumbnail">
        </div>
          <h3 class="text-dark text-center app-font-family">Nos valeurs</h3>
          <div class="mb-5 text-center">
        <img src="{{ asset('images/wallet/valeurs-cocarmoov.png') }}" class="img-fluid rounded" alt="Post Thumbnail">
        </div>
          
        </div>
        <div class="mb-5">
        <p class="list-inline-item app-font-family"><a href="#!" class="ml-1 app-font-family">Publié le 04 octobre 2023</a></p><br>

          <p class="list-inline-item app-font-family">Catégorie : <a href="#!" class="ml-1 app-font-family">A propos de CoCarmoov</a>
          </p>
          <p class="list-inline-item app-font-family">Mots clés : <a href="#!" class="ml-1 app-font-family">CoCarmoov </a> , <a href="#!"
              class="ml-1 app-font-family">Société de transport  </a>,
              <a href="#!"
              class="ml-1 app-font-family"> Transport automobile </a>,
              <a href="#!"
              class="ml-1 app-font-family"> Transport économique </a>,
              <a href="#!"
              class="ml-1 app-font-family">Transport express </a>,
              <a href="#!"
              class="ml-1 app-font-family">  Transport par camion </a>,
              <a href="#!"
              class="ml-1 app-font-family"> Transport premium </a>,
              <a href="#!"
              class="ml-1 app-font-family"> Transport prestige </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="section blog-header">
	<div class="container">
		<div class="row">
			<div class="col-12 mx-auto text-center">
                <div><h2 class="news-blog">Derniers Articles</h2></div>
                <div class="row">
                  <div class="col-md-4 mt-5">
									<img loading="lazy" class="rounded mb-3" decoding="async" src="{{ asset('images/wallet/car_of_the_year.jpg') }}" width="100%" height="auto" alt="Post Thumbnail">
                  <a href="{{route('news')}}" class="h5 mt-4 related-articles-text app-font-family">Voiture de l'année 2024 : découvrez les véhicules pré-sélectionnés</a>
                  </div>
                  <div class="col-md-4 mt-5">
									<img loading="lazy" class="rounded mb-3" decoding="async" src="{{ asset('images/wallet/leasing_auto.jpg') }}" width="100%" height="auto" alt="Post Thumbnail">
                  <a href="{{route('tips-tricks')}}" class="h5 mt-4 related-articles-text app-font-family">Comment économiser sur un leasing auto</a>
                  </div>
                  <div class="col-md-4 mt-5">
									<img loading="lazy" class="rounded mb-3" decoding="async" src="{{ asset('images/wallet/expedier-vehicule.jpg') }}" width="100%" height="auto" alt="Post Thumbnail">
                  <a href="{{route('pros')}}" class="h5 mt-4 related-articles-text app-font-family">Expédition de tous types de véhicules – Astuces pour une transition en toute simplicité</a>
                  </div>
                </div>
            </div>
	</div>
</section>
@endsection