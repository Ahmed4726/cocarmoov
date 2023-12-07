@extends('frontend.frontend_main_layout')
@section('content')
<section class="page-header contact-header">
	<div class="container">
		<div class="row mt-4 mb-5">
			<div class="col-8 mx-auto text-center">
          <div><img src="{{asset('images/wallet/QA-banner.png')}}" class="qa-header-img img-fluid"  style="max-width: 40%; height:auto;" /></div>
				<!-- <div><h2 class="mb-2 text-capitalize qa-banner-text">Contact Us</h2></div> -->
                <h2 class="mb-2 qa-banner-h">A toute question, une réponse</h2>
                <p class="qa-banner-p">Un renseignement, besoin d’aide, ou simplement nous faire part de vos remarques ?</p>
			</div>
		</div>
	</div>
</section>
<section class="section find-section pt-4">                         
	<div class="container pb-5">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
                <img src="{{asset('images/wallet/find-contact.png')}}" class="qa-find-img img-fluid"  style="max-width: 40%; height:auto;" />
					<h2 class="qa-find-h text-dark">Trouvez votre réponse</h2>
				</div>
			</div>
		</div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12 find-row-1" >
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="{{asset('images/wallet/move-car.png')}}" class="qa-find-img img-fluid mt-1"  style="max-width: 100%; height:auto;" />
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <a type="button" 
            class="btn find-text-button text-dark mt-3 mb-2" href="#">
            Déplacer un véhicule</a>
        <p class="card-text app-font-family">Tout ce qu’il faut savoir pour faire déplacer sa voiture</p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-lg-6 col-md-12" >
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="{{asset('images/wallet/rent-car.png')}}" class="qa-find-img img-fluid mt-1"  style="width: 100%; height:auto;" />

    </div>
    <div class="col-md-8">
      <div class="card-body">
        <a type="button" 
            class="btn find-text-button text-dark mt-3 mb-2" href="#">
            Co-convoyer un véhicule</a>
        <p class="card-text app-font-family">Tout ce qu’il faut savoir pour co-convoyer une voiture</p>
      </div>
    </div>
  </div>
</div>
</div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12" >
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="{{asset('images/wallet/pro-driver.png')}}" class="qa-find-img img-fluid mt-1"  style="width: 100%; height:auto;" />
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <a type="button" 
            class="btn find-text-button text-dark mt-3 mb-2" href="#">
            Je suis convoyeur</a>
        <p class="card-text app-font-family">Tout ce qu’il faut savoir pour convoyer sur notre plateforme</p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-lg-6 col-md-12" >
        <div class="card mb-3 find-card" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="{{asset('images/wallet/transporter.png')}}" class="qa-find-img img-fluid mt-1"  style="width: 100%; height:auto;" />

    </div>
    <div class="col-md-8">
      <div class="card-body">
      <a type="button" 
            class="btn find-text-button text-dark mt-3 mb-2" href="#">
            Je suis transporteur</a>
        <p class="card-text app-font-family">Tout ce qu’il faut savoir pour transporter sur notre plateforme</p>
        <!-- <a href="#" class="card-text-find"><span class="text-dark">En savoir plus</span></a> -->
      </div>
    </div>
  </div>
</div>
</div>
        </div>
        </div>
</section>
<section class="section mail-section">
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
                <img src="{{asset('images/wallet/mail.png')}}" class="qa-find-img img-fluid"  style="width: 40%; height:auto;" />
					<h2 class="mb-3 qa-find-h text-light">Contactez CoCarmoov</h2>
                    <p class="mb-3 qa-banner-p text-light app-font-family">Une question à laquelle nous n’y avons pas répondu,<br> 
écrivez-nous en remplissant le formulaire ci-dessous.
</p>
<div class="card">
  <div class="card-body">
    <p class="card-text text-center app-font-family"><img src="{{asset('images/wallet/quote.png')}}" class="qa-find-img img-fluid"  style="max-width: 19%; height:auto;" />L'équipe du service client CoCarmoov est située en France<br> Disponible du lundi au vendredi de 9h30 à 17h30.<br> 
Pas de robots : de vraies personnes sont là pour répondre à vos questions sous 24 heures<br>
(sauf le weekend et les jours fériés)<img src="{{asset('images/wallet/smile.png')}}" class="qa-find-img img-fluid"  style="max-width: 10%; height:auto;" />
</p>

  </div>
</div>
<p class="mb-2 qa-banner-p text-light mt-2 app-font-family">Quelle est votre adresse e-mail ?</p>
<form action="#" method="post">
        @csrf
      <div class="row pt-1">  
            <div class="col-md-12">
                    <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Saisissez votre adresse e-mail" name="email" id="email" required>
                    </div>
            </div>
      </div>
      <a type="button" 
            class="btn find-text-button text-light mt-3 mb-2 app-font-family" href="#">
            Suivant</a>
</form>     
				</div>
			</div>
		</div>
    </div>
</section>        
@endsection