@extends('frontend.frontend_main_layout')
@section('content')
<section class="section blog-header">
	<div class="container">
		<div class="row">
			<div class="col-12 mx-auto text-center">
                <div><h2 class="news-blog">Voiture de l'année 2024 : découvrez les véhicules pré-sélectionnés</h2></div>
            </div>
	</div>
</section>
<div class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="mb-5 text-center">
        <img loading="lazy" decoding="async" src="{{ asset('images/wallet/car_of_the_year.jpg') }}" class="img-fluid rounded mt-3" alt="Post Thumbnail">
         
        </div>
        <div class="content">
          <p class="heading-example text-dark app-font-family">Le processus de sélection annuelle de la Voiture de l'année est déjà en cours, avec une première liste de candidats à affiner. Voici les modèles qui pourront avancer vers les prochaines étapes de sélection.</p>
          <p class="text-dark app-font-family">Malgré le fait que nous ne soyons qu'en octobre, les grands titres automobiles européens sont déjà à pied d'œuvre pour désigner la prochaine voiture de l'année. Dans un contexte européen marqué par l'arrivée de marques chinoises et des tensions sur le marché des véhicules neufs, le titre de "Car of the Year" aura une saveur particulière. À moins d'un rebondissement inattendu, le COTY devrait retrouver son rendez-vous habituel au salon de Genève, qui célèbrera son centenaire en Suisse, plutôt que de se tenir au Moyen-Orient, où se déroule actuellement le "GIMS". Alors, qui succédera au Jeep Avenger ?</p>
          <div class="text-center">
          <iframe class="rounded"  width="700" height="415" src="https://www.youtube.com/embed/uqoHxhDuLJ8?autoplay=1&mute=1" ></iframe>
            </div>
          <h3 id="heading-3" class="app-font-family">La liste des pré-sélections</h3>
          <p class="text-dark app-font-family">Le processus de sélection repose sur plusieurs phases d'élimination avant d'arriver à la finale avec 7 candidats, puis la révélation du modèle vainqueur au début du salon de Genève. Maintenant que la pré-sélection est connue, il est temps de se pencher sur les véhicules qui la composent. Il y a évidemment quelques surprises, notamment avec la présence de trois modèles Nio, même si le constructeur est pratiquement inexistant en Europe. À noter également la présence du Ford Bronco, qui se démarque au milieu de la pléthore de véhicules électriques ou hybrides. Du côté des constructeurs français, la sélection est plutôt limitée, avec trois candidats : Renault Espace et Scénic, Peugeot e-3008. </p>
          <p class="text-dark app-font-family">Cela n'est pas surprenant, car chez Renault, la R5 n'est pas encore dévoilée.</p>
          <p class="text-dark app-font-family">Voici la liste des véhicules pré-sélectionnés pour le Trophée européen de la Voiture de l'année 2024 :</p>
          <ul class="text-dark app-font-family">
            <li>
            - BMW i5</li>
<li>- BYD Seal</li>
<li>- Fiat 600e</li>
<li>- Fisker Ocean</li>
<li>- Ford Bronco</li>
<li>- Honda ZR-V</li>
<li>- Honda e:NY1</li>
<li>- Hyundai Kona</li>
<li>- Hyundai Ioniq 6</li>
<li>- Jeep Grand Cherokee</li>
<li>- Kia EV9</li>
<li>- Lexus RZ</li>
<li>- Lucid Air</li>
<li>- Nio ET5</li>
<li>- Nio EL6</li>
<li>- Nio ET7</li>
<li>- Peugeot e-3008</li>
<li>- Renault Espace</li>
<li>- Renault Scénic</li>
<li>- Toyota CH-R</li>
<li>- Toyota Prius</li>
          </ul>
          <p class="text-dark app-font-family">Il est important de noter que parmi ces 22 pré-sélectionnées, seules celles ayant déjà été évaluées par un nombre suffisant de journalistes seront éligibles pour la sélection finale. De plus, il est intéressant de constater que sur les 22 modèles pré-sélectionnés, 15 sont des véhicules 100 % électriques.</p>
          
          <!-- <h5 id="youtube-video">Youtube video</h5>
          <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
            <iframe src="https://www.youtube.com/embed/KFmA9W8i4X4"
              style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;" allowfullscreen
              title="YouTube Video"></iframe>
          </div> -->
        </div>
        <div class="mb-5">
          <p class="list-inline-item app-font-family"><a href="#!" class="ml-1">Publié le 04 octobre 2023</a></p><br>
          <p class="list-inline-item app-font-family">Catégorie : <a href="#!" class="ml-1">Actualité </a>
          </p>
          <p class="list-inline-item app-font-family">Mots clés : <a href="#!" class="ml-1">Acheter un véhicule </a> , <a href="#!"
              class="ml-1 app-font-family">Salon automobile </a> , <a href="#!"
              class="ml-1 app-font-family"> Véhicules électriques </a>
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
                <div><h2 class="news-blog app-font-family">Derniers Articles</h2></div>
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
                  <a href="{{route('pros')}}" class="h5 mt-4 related-articles-text app-font-family">Expedition de tous types de véhicules – Astuces pour une transition en toute simplicité</a>
                  </div>
                </div>
            </div>
	</div>
</section>
@endsection