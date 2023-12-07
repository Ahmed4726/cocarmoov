@extends('frontend.frontend_main_layout')
@section('content')
<section class="page-header professionnel-header">
	<div class="container">
		<div class="row">
			<div class="col-12 mx-auto">
          <!-- <div><h2>banner image</h2></div> -->
				<!-- <div><h2 class="mb-2 text-capitalize qa-banner-text">Contact Us</h2></div> -->
                <h2 class="mb-3 text-center professionall-p text-center mt-5"><span class="fw-bold">Développez votre activité de transport de véhicules davantage avec CoCarmoov</span></h2>
                <p class="text-light text-center banner-p mx-4">Devenez transporteur partenaire pour une croissance et des opportunités sans limite à travers la France.
</p>
<p class="mb-3 banner-p text-light"><i class="fas fa-arrow-right mx-1 eligibility-section"></i>Référencement gratuit<br>
<span class="subscription-text mx-5">Augmentez considérablement votre visibilité sur notre plateforme</span><br>
</p>
<p class="mb-3 banner-p text-light "><i class="fas fa-arrow-right mx-1 eligibility-section"></i>Opportunités de Croissance<br>
<span class="subscription-text mx-5">Profitez de missions de transport variées et stimulantes pour développer votre activité.</span><br>
</p>
<p class="mb-3 banner-p text-light"><i class="fas fa-arrow-right mx-1 eligibility-section"></i>Accès à un Large Marché<br>
<span class="subscription-text mx-5">Connectez-vous à notre vaste réseau d'entreprises en quête de services de transport de véhicules.</span><br>
</p>
<div class="text-center">
<a type="button"
            class="btn convoyar-text-button text-light mt-3 mb-5" href="#">
            Devenir transporteur partenaire
</a>
</div>
			</div>
		</div>
	</div>
</section>
<section class="section convoyor-section">
	<div class="container pt-5">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="section-title text-center">
                <p class="services-p fw-bold mb-3"><b>Comment ça fonctionne ?</b></p>
          <h3 class="mb-4 frequently-h">3 étapes pour devenir transporteur partenaire sur CoCarmoov</h3>
				<div class="row mt-5">
					<div class="col-lg-4 col-md-12">
					<div class="icon me-4 mb-4 mb-sm-0 font-icon-color img-fluid"><img src="{{asset('images/wallet/inscription-profil.png')}}" style="width:50%;" height="auto"/>
					<h5 class="mt-2 app-font-family">Inscription et Profil</h5>	
					<p class="text-dark app-font-family">Créez votre compte, complétez vos informations et téléchargez les documents requis.</p>
				</div>
					</div>
					<div class="col-lg-4 col-md-12">
					<div class="icon me-4 mb-4 mb-sm-0 font-icon-color img-fluid"><img src="{{asset('images/wallet/connaissances.png')}}" style="width: 50%;" height="auto"/>
					<h5 class="mt-2 app-font-family">Conditions et garanties</h5>
					<p class="text-dark app-font-family">Spécifiez vos capacités et conditions de transport ainsi que les garanties de votre assurance.</p>		
				</div>
					</div>
					<div class="col-lg-4 col-md-12">
					<div class="icon me-4 mb-sm-0 font-icon-color img-fluid"><img src="{{asset('images/wallet/validation-acces.png')}}" style="width:50%;" height="auto"/>
					<h5 class="mt-2 app-font-family">Validation et Accès</h5>	
					<p class="text-dark app-font-family">Faites valider votre statut de transporteur partenaire et accédez aux offres de transport.</p>	
				</div>
					</div>
				</div>
				</div>
			</div>
		</div>
    </div>
</section>  
<section class="section pt-5 pb-5">
<div class="container">
<div class="section-title text-center">
<p class="services-p fw-bold mb-3"><b>Conditions d’éligibilité</b></p>
          <h3 class="mb-4 frequently-h">Ce dont vous avez besoin pour rejoindre notre communauté de transporteurs partenaires</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipreiscing elit. Lacus penatibus tincidunt</p> -->
        </div>
        <div class="row">
<div class="col-md-12">
<p class="text-dark app-font-family">
<i class="fas fa-check eligibility-section mx-2"></i>Détenir <b>un certificat de capacité de transport</b><br>
<i class="fas fa-check eligibility-section mx-2"></i>Avoir une <b>société de transport</b><br>
<i class="fas fa-check eligibility-section mx-2"></i>Disposer d’<b>un camion dépanneur</b> ou d’<b>un camion plateau individuel</b><br>
<i class="fas fa-check eligibility-section mx-2"></i>Posséder un <b>permis de conduire de catégorie C en cours de validité depuis au moins 3 ans</b><br>
<i class="fas fa-check eligibility-section mx-2"></i>Souscrire une <b>assurance pour le transport de véhicules</b><br>
<i class="fas fa-check eligibility-section mx-2"></i>Être équipé d’un <b>smartphone</b> avec <b>une version récente d’iOS ou Android</b>
</p>
</div>
        </div>
</div>
</section>     
<section class="section convoyor-section">
	<div class="container pt-5">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="section-title text-center">
                <p class="services-p fw-bold"><b>Inscription</b></p>
				</div>
			</div>
            <div class="card rounded mx-auto card-register p-5" style="width:60%;"> 
          <h4 class="frequently-h text-center">Commencez dès maintenant votre inscription en remplissant ce formulaire simple.</h4>

            <div class="card-body">
			  <form action="/action_page.php">
  <br>
  <div class="row">
	<div class="col-lg-6 col-md-12">
	<input type="text" class="form-control form-input-border mt-0" placeholder="Prénom"></i><br>
	</div>
	<div class="col-lg-6 col-md-12">
	<input type="text" class="form-control form-input-border mt-0" placeholder="Nom"><br>
	</div>
	<div class="col-lg-6 col-md-12">
	<input type="text" class="form-control form-input-border mt-0" placeholder="E-mail"><br>
	</div>
	<div class="col-lg-6 col-md-12">
	<input type="text" class="form-control form-input-border mt-0" placeholder="Téléphone">
	</div>
  </div>
  <div class="text-center">
  <a type="button" 
            class="btn professionall-button-register text-dark mt-3 mb-3 app-font-family" href="#">
            S’inscrire
</a>
</div>
</form>
            </div>
          </div>
		</div>
    </div>
</section>  
<section class="section convoyor-faq">
	<div class="container pt-5 pb-2">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="section-title text-center">
                <p class="services-p fw-bold mb-3">Des questions fréquentes</p>
          <h3 class="mb-4 frequently-h text-light">Le plus important à savoir</h3>
				</div>
			</div>
        </div>
        <div class="row justify-content-center">
      <div class="col-lg-8 col-md-12">
      <div class="rounded shadow bg-white p-5">
      <div class="accordion accordion-border-bottom" id="accordionFAQ">
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" aria-expanded="true"
              aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9">Qu’est ce qui est inclus dans le prix de la prestation ?
            </h2>
            <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9"
              class="accordion-collapse collapse border-0"
              aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"> <p>Le prix de la prestation englobe votre rémunération, les frais de rapprochement, les frais de route (carburant, péages), ainsi que les services optionnels (tels que le lavage extérieur, la démonstration au client et la signature de documents).
                            </p>
                    </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec2" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec2" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec2">Quelles sont les responsabilités d’assurance pour le transporteur sur CoCarmoov ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec2" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec2" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Les transporteurs sur CoCarmoov doivent disposer d'une assurance pour le transport de véhicules.<br>
En cas de sinistre, les frais seront entièrement à leur charge, où ils font intervenir leur propre assurance.

</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec2" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec3" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec3">Y a-t-il des frais si j’annule un transport après sa réservation ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec3" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec3" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Oui, des frais d'annulation s’appliquent :<br>
50€ pour les annulations faites plus de 48 heures avant le départ.<br>
100€ pour les annulations faites 48 heures ou moins avant le départ.


              </p>
            
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec4" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec4" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec4">Comment se déroule le transport ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec4" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec4" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Le transporteur se présente le jour de l'enlèvement du véhicule, réalise un état des lieux en présence du contact de départ, prend en charge le véhicule, le transporte jusqu'à destination et le restitue conformément aux conditions de la prestation.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec5" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec5" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec5">Des frais à prévoir ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec5" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec5" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Certaines situations peuvent entraîner des frais :<br>
Absence au rendez-vous du transport : pénalité de 200€.<br>
État des lieux de départ manquant : pénalité de 30%.<br>
État des lieux d'arrivée manquant : pénalité de 30%.<br>
Restitution tardive du véhicule : facturation de 10€ par heure.

</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec6" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec6" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec6">Je ne trouve pas le transport qui me correspond, que puis-je faire ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec6" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec6" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Nous ajoutons régulièrement de nouvelles offres de transport sur le site.<br>
Si vous ne trouvez pas le trajet qui vous convient, vous pouvez créer une alerte depuis votre espace transporteur pour recevoir un e-mail dès qu'un trajet aux alentours est disponible.

</p>
            </div>
            </div>
          </div>
        </div>
				</div>
          </div>
        </div>
        <div class="text-center mt-5">
  <a type="button" 
            class="btn professionall-button-register text-light mt-3 mb-3 app-font-family" href="#">
            Devenir transporteur partenaire

</a>
</div>
    </div>
</section>
    
@endsection
