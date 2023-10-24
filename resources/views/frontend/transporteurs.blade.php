@extends('frontend.frontend_main_layout')
@section('content')
<section class="page-header professionnel-header">
	<div class="container">
		<div class="row">
			<div class="col-12 mx-auto">
          <!-- <div><h2>banner image</h2></div> -->
				<!-- <div><h2 class="mb-2 text-capitalize qa-banner-text">Contact Us</h2></div> -->
                <h2 class="mb-3 text-center professionall-p text-center mt-5"><span class="fw-bold">Transformez votre conduite en source de revenus</span></h2>
                <p class="text-light text-center banner-p mx-4">
</p>
<p class="mb-3 banner-p text-light"><i class="fas fa-arrow-right mx-1 eligibility-section"></i>Rémunération compétitive et équitable<br>
<span class="subscription-text mx-5">Augmentez considérablement vos revenus tout en travaillant à votre rythme.</span><br>
</p>
<p class="mb-3 banner-p text-light "><i class="fas fa-arrow-right mx-1 eligibility-section"></i>Flexibilité totale<br>
<span class="subscription-text mx-5">Sélectionnez les missions qui correspondent à vos préférences en toute liberté.</span><br>
</p>
<p class="mb-3 banner-p text-light"><i class="fas fa-arrow-right mx-1 eligibility-section"></i>Paiements bimensuels<br>
<span class="subscription-text mx-5">Recevez votre rémunération 2 fois par mois pour une gestion optimisée de votre trésorerie.</span><br>
</p>
<div class="text-center">
<a type="button"
            class="btn convoyar-text-button text-light mt-3 mb-5" href="#">
            Devenir convoyeur partenaire
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
          <h3 class="mb-4 frequently-h">3 étapes pour devenir convoyeur professionnel sur CoCarmoov</h3>
				<div class="row mt-5">
					<div class="col-lg-4 col-md-12">
					<div class="icon me-4 mb-4 mb-sm-0 font-icon-color img-fluid"><img src="{{asset('images/wallet/inscription-profil.png')}}" style="width:50%;" height="auto"/>
					<h5 class="mt-2">Inscription et Profil</h5>	
					<p class="text-dark">Créez votre compte, complétez vos informations et téléchargez les documents requis.</p>
				</div>
					</div>
					<div class="col-lg-4 col-md-12">
					<div class="icon me-4 mb-4 mb-sm-0 font-icon-color img-fluid"><img src="{{asset('images/wallet/connaissances.png')}}" style="width: 50%;" height="auto"/>
					<h5 class="mt-2">Connaissances et Formations</h5>
					<p class="text-dark">Répondez au questionnaire et suivez notre formation en ligne interactive.</p>		
				</div>
					</div>
					<div class="col-lg-4 col-md-12">
					<div class="icon me-4 mb-sm-0 font-icon-color img-fluid"><img src="{{asset('images/wallet/validation-acces.png')}}" style="width:50%;" height="auto"/>
					<h5 class="mt-2">Validation et Accès</h5>	
					<p class="text-dark">Obtenez la validation de votre statut de convoyeur professionnel et accédez aux offres de convoyages.</p>	
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
          <h3 class="mb-4 frequently-h">Ce dont vous avez besoin pour rejoindre notre communauté de convoyeurs professionnels</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipreiscing elit. Lacus penatibus tincidunt</p> -->
        </div>
        <div class="row">
<div class="col-md-12">
<p class="text-dark">
<i class="fas fa-check eligibility-section mx-2"></i>Avoir <b>le droit de travailler en France</b><br>
<i class="fas fa-check eligibility-section mx-2"></i>Disposer d’un <b>statut d’entrepreneur</b> ou de <b>société</b><br>
<i class="fas fa-check eligibility-section mx-2"></i>Être <b>âgé d’au moins 21 ans</b><br>
<i class="fas fa-check eligibility-section mx-2"></i>Posséder un <b>permis de conduire de catégorie B en cours de validité depuis au moins 3 ans</b><br>
<i class="fas fa-check eligibility-section mx-2"></i>Souscrire une <b>assurance responsabilité civile professionnelle</b><br>
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
            class="btn professionall-button-register text-dark mt-3 mb-3" href="#">
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
            <h2 class="accordion-header accordion-button h5 border-0 active"
              id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" aria-expanded="true"
              aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9">Qu’est ce qui est inclus dans le prix de la prestation ?
            </h2>
            <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9"
              class="accordion-collapse collapse border-0 show"
              aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"> <p>Le prix de la prestation englobe votre rémunération, les frais de rapprochement, les frais de route (carburant, péages), ainsi que les services optionnels (tels que les plaques W garage, le lavage extérieur ou complet, la remise de carburant, la démonstration au client et la signature de documents).
                            </p>
                    </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec2" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec2" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec2">Suis-je couvert par une assurance en tant que convoyeur pour CoCarmoov ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec2" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec2" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Pour devenir convoyeur sur CoCarmoov, vous devez disposer d'une assurance responsabilité civile professionnelle.<br>
CoCarmoov offre également une assurance pour couvrir les véhicules lors des missions de convoyage.<br>
En cas de sinistre, une participation vous sera demandée, couvrant la moitié des frais de réparation ou la moitié de la franchise si les coûts de réparation excèdent cette franchise.<br>
Pour plus de détails, vous pouvez consulter les conditions de notre assurance sur https://www.cocarmoov.fr/assurance<br>
Dans les cas où le sinistre ne relève pas de la couverture de l'assurance CoCarmoov (par exemple, erreur de carburant ou passage dans une trémie sans considération de la hauteur du véhicule), les frais seront entièrement à votre charge, où vous pouvez faire intervenir votre propre assurance responsabilité civile professionnelle.<br>
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec2" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec3" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec3">Y a-t-il des frais si j’annule un convoyage après sa réservation ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec3" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec3" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Oui, des frais d'annulation sont prévus :<br>
25€ si l’annulation intervient avant 48 heures du départ.<br>
50€ si l’annulation intervient à 48 heures ou moins du départ.

              </p>
            
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec4" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec4" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec4">Comment se déroule le convoyage ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec4" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec4" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Le processus de convoyage comprend les étapes suivantes :<br>
Le convoyeur présente son permis de conduire le jour de l'enlèvement du véhicule.<br>
Le convoyeur réalise un état des lieux en présence du contact de départ et prend en charge le véhicule.<br>
Il conduit le véhicule jusqu'à destination et le restitue conformément aux conditions de la prestation.

</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec5" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec5" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec5">Des frais à prévoir ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec5" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec5" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Certaines situations peuvent entraîner des frais :<br>
Absence au rendez-vous du convoyage : pénalité de 100€.<br>
État des lieux de départ manquant : pénalité de 30%.<br>
État des lieux d'arrivée manquant : pénalité de 30%.<br>
Restitution tardive du véhicule : facturation de 10€ par heure.<br>
Dépassement de l'enveloppe kilométrique autorisée : pénalité kilométrique de 0,5€.<br>
Oubli de remise au même niveau de carburant : facturation de 2,50€ par litre manquant après passage du client à la station-service.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec6" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec6" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec6">Je ne trouve pas le convoyage qui me correspond, que puis-je faire ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec6" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec6" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p>Nous ajoutons régulièrement de nouvelles offres de convoyage sur le site.<br>
Si vous ne trouvez pas le trajet qui vous convient, vous pouvez créer une alerte depuis votre espace convoyeur pour recevoir un e-mail dès qu'un trajet aux alentours est disponible.
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
            class="btn professionall-button-register text-light mt-3 mb-3" href="#">
            Devenir convoyeur partenaire

</a>
</div>
    </div>
</section>
    
@endsection
