@extends('frontend.frontend_main_layout')
@section('content')
<section class="section faq-header">
	<div class="container">
		<div class="row">
			<div class="col-8 mx-auto text-center">
               
                <!-- <p class="mb-3 qa-banner-p">Un renseignement, besoin d’aide, ou simplement nous faire part de vos remarques ?</p> -->
                <h1 class="mb-2 faq-banner-h">Foire Aux Questions</h1>
                <form class="d-flex search mt-5">
                <i class="fas fa-search"></i>
                <input class="form-control rounded-pill" type="search" placeholder="Rechercher un article…" aria-label="Search">
                </form>

	</div>
</section>
<section class="faq_tab">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 mb-5">
        <ul class="payment_info_tab nav nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
          <li class="nav-item text-size-family m-2" role="presentation"> <a
              class="nav-link btn   effect-none text-dark active" id="pills-how-much-can-i-recive-tab"
              data-bs-toggle="pill" href="#pills-how-much-can-i-recive" role="tab"
              aria-controls="pills-how-much-can-i-recive" aria-selected="true">Déplacer un véhicule</a>
          </li>
          <li class="nav-item m-2" role="presentation"> <a
              class="nav-link btn effect-none text-dark " id="pills-how-much-does-it-costs-tab"
              data-bs-toggle="pill" href="#pills-how-much-does-it-costs" role="tab"
              aria-controls="pills-how-much-does-it-costs" aria-selected="true">Co-convoyer un véhicule</a>
          </li>
          <li class="nav-item m-2" role="presentation"> <a
              class="nav-link btn effect-none text-dark " id="pills-how-do-i-repay-tab"
              data-bs-toggle="pill" href="#pills-how-do-i-repay" role="tab" aria-controls="pills-how-do-i-repay"
              aria-selected="true">Je suis convoyeur</a>
          </li>
          <li class="nav-item m-2" role="presentation"> <a
              class="nav-link btn effect-none text-dark " id="pills-how-do-i-transport-tab"
              data-bs-toggle="pill" href="#pills-how-do-i-transport" role="tab" aria-controls="pills-pills-how-do-i-transport"
              aria-selected="true">Je suis transporteur</a>
          </li>
        </ul>
        <div class="rounded shadow bg-white p-5 tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-how-much-can-i-recive" role="tabpanel"
            aria-labelledby="pills-how-much-can-i-recive-tab">
            <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="accordion accordion-border-bottom" id="accordionFAQ">
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" aria-expanded="true"
              aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9">Qu'est-ce que CoCarmoov  ?
            </h2>
            <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9"
              class="accordion-collapse collapse border-0"
              aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"> <p class="app-font-family">CoCarmoov est une plateforme qui offre des services personnalisés de transport de véhicules touristiques et utilitaires légers. </p>
                                        <h5 id="intellectual-property-rights" class="app-font-family">CoCarmoov propose 3 formules pour déplacer ces véhicules : </h5>
                            <ul class="text-dark app-font-family">
                                <li>Formule économique (co-convoyage) : Une solution gagnant-gagnant peu onéreuse où un propriétaire professionnel ou particulier propose son véhicule à un co-convoyeur particulier pour le déplacer pendant qu’il covoiture ou déménage, et ce sous forme de co-convoyage sur notre plateforme.</li>
                                <li>Formule express (convoyage) : Une solution personnalisée où un acteur de l’automobile voire même un particulier engage les services d’un convoyeur certifié pour livrer ou restituer un véhicule neuf ou d’occasion, avec des services à la clé.</li>
                                <li>Formule premium (transport) : Une solution à 0 km, où le professionnel ou le particulier loue les services d’un transporteur par camion pour expédier ou rapatrier un véhicule neuf, de collection, en panne ou accidenté.</li>
                            </ul>
                            <p class="app-font-family text-dark app-font-family">
                            Ces services permettent aux clients de faire transporter leurs véhicules d'un point A à un point B sans avoir à les conduire eux-mêmes, ce qui est particulièrement utile pour les personnes déménageant dans une autre région ou les entreprises ayant besoin d’expédier des véhicules.
                            </p>
                    </div>
            </div>
          </div>
          
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec1" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec1" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec1">Quelles solutions vous proposez pour transporter ma voiture ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec1" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec1" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Nous avons 3 solutions pour transporter votre véhicule</p>
              <ul class="text-dark app-font-family">
                                <li>La solution la plus économique, le co-convoyeur particulier : 
Vous pouvez confier votre véhicule en toute confiance à notre communauté de co-convoyeurs particuliers. 
Le concept, vous proposez votre véhicule sur une plage de date durant laquelle le co-convoyeur pourra conduire votre voiture d'un point A à un point B pour une durée de 24h ou 48h en fonction de la distance. 
Le particulier aura à sa charge les frais de carburant et de péages.
C'est une solution économique pour vous et pour le co-convoyeur qui recherche un moyen peu onéreux pour se déplacer.
Attention : avec cette solution, nous ne pouvons pas vous garantir que le transport sera effectué.
</li>
                                <li>La solution la plus rapide, le convoyeur professionnel :
Nous avons un réseau regroupant plus de 500 partenaires professionnels du convoyage de voiture, et qui peuvent effectuer l'enlèvement et la livraison du véhicule sous un délai de 48 à 72h dès lors que vous avez choisi une plage de date.
Cette solution est idéale si vous souhaitez vous faire livrer votre véhicule rapidement.
</li>
                                <li>La solution 0 km, le camion porte-voiture :
Vous avez aujourd'hui la possibilité de choisir un transport par camion, et garantir que votre voiture ne roulera pas,
Une solution de confort où le transporteur vient récupérer le véhicule chez vous, et le livre à l'adresse de votre choix.
Ou bien, si votre véhicule est en panne ou immobilisé, nous proposons également un service de transport sur dépanneuse.
Pour cela lors de votre demande de tarifs, il faudra indiquer l'état du véhicule comme "En panne" ou "Accidenté".
Notez bien que si le véhicule est en panne ou accidenté, celui-ci ne doit pas avoir de roues bloquées, et peut être transporté sans protection particulière.
</li>
                            </ul>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec2" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec2" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec2">Mon véhicule est-il assuré  ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec2" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec2" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>L'assurance proposée dépend de la solution que vous avez choisie pour le déplacement de votre voiture :</p>
              <ul class="text-dark app-font-family">
                                <li>Les formules “co-convoyeur particulier” ainsi que “convoyeur professionnel” bénéficient d'une assurance automobile, veuillez consulter les garanties et conditions de notre assurance sur <a href="{{route('insurance')}}">https://www.cocarmoov.fr/assurance.</a></li>
                                <li>La formule transport par camion porte-voiture, le véhicule est assuré tous risques par le partenaire transporteur en cas de dommages causés au véhicule ou de vol.</li>
                            </ul>
             <h6 class="text-dark app-font-family">Attention : l'intérieur du véhicule n'est pas couvert par l’assurance, c'est pour cela que nous vous demandons qu'il soit totalement vide.</h6>               
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec3" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec3" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec3">Comment puis-je effectuer une réservation ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec3" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec3" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Pour effectuer une réservation, vous devez faire un devis sur <a href="#"> https://www.cocarmoov.fr/deplacer-un-vehicule </a>, une fois la formule choisie et réglée, votre réservation sera confirmée par e-mail.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec4" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec4" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec4">Pouvez-vous commander le trajet à ma place ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec4" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec4" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Pour des raisons de sécurité et de confidentialité, nous ne sommes pas autorisés à passer la commande pour vous. Toutefois, nous restons à votre disposition pour vous guider et vous aider en cas de blocage sur le site.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec5" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec5" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec3">Le site est-il sécurisé ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec5" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec5" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Absolument ! Les informations confidentielles sont demandées uniquement après la création de votre compte. Notre partenaire de paiement est totalement sécurisé.</p>
              <h6 class="text-dark app-font-family">Il existe deux moyens de s’assurer que le paiement sur notre site est sécurisé:</h6>
              <p class="text-dark app-font-family">La présence d’un petit cadenas dans la barre de votre navigateur</p>
              <p class="text-dark app-font-family">La marque (https://) indique que l’URL est sécurisée.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec6" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec6" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec6">Je n'arrive pas à me connecter ?  
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec6" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec6" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Si vous essayez de vous connecter avec Facebook, Apple ou Google, assurez-vous que vous utilisez le même compte que celui utilisé lors de votre inscription.</p>
              <p>Si vous essayez de vous connecter avec votre adresse e-mail, assurez-vous que c'est bien celle que vous aviez utilisée au moment de vous inscrire et renseignez à nouveau votre mot de passe.</p>
              <p>Vous ne vous souvenez plus de votre mot de passe  ? Pas d'inquiétude, choisissez "Mot de passe oublié" et entrez votre adresse e-mail. Nous vous enverrons un lien qui vous permettra de créer un nouveau mot de passe.</p>
              <p>Si vous avez un doute sur votre mode d'inscription ou que vous n'arrivez tout simplement pas à vous connecter, contactez-nous !</p>                                        
    </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec156" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec156" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec156">Je n'arrive pas à créer mon mot de passe !  
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec156" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec156" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family">
            <p>Afin de pouvoir créer votre compte, votre mot de passe doit contenir au moins 8 caractères, des lettres minuscules et majuscules, des chiffres et au moins un caractère spécial. Exemple : Année2024!</p>
    </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec157" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec157" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec157">J’ai oublié mon mot de passe !  
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec157" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec157" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family">
        <p class="text-dark app-font-family">Si vous avez oublié votre mot de passe, vous pouvez en créer un nouveau.</p>   
        <ul class="text-dark app-font-family">
                                <li>Il vous suffit d’indiquer l’adresse e-mail associée à votre compte CoCarmoov et nous vous enverrons un e-mail contenant la marche à suivre afin de pouvoir réinitialiser votre mot de passe.</li>
                            </ul>
          <p>Vous ne recevez pas notre e-mail  ? Vérifiez vos spams, il s’y trouve peut-être !</p> 
          <p>Vous avez reçu l'e-mail, mais le lien ne fonctionne pas ?</p>
          <ul class="text-dark app-font-family">
                                <li>Si vous avez fait plusieurs demandes de mise à jour de votre mot de passe successives, vous avez sûrement reçu plusieurs e-mails de notre part. Veillez à cliquer sur le lien contenu dans le dernier e-mail que vous avez reçu.</li>
                                <li>Pour des raisons de sécurité, vous disposez de 24 heures pour modifier votre mot de passe à partir de cet e-mail. Passé ce délai, si vous n'avez pas modifié votre mot de passe, vous devrez faire une nouvelle demande car le lien contenu dans le e-mail ne sera plus valide.</li>    
                            </ul> 
    </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec158" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec158" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec158">Je ne trouve pas où choisir mon type de véhicule !
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec158" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec158" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family">
                            <h5 class="text-dark app-font-family"></h5> 
        <p class="app-font-family text-dark">Vous pouvez choisir le type de véhicule à la deuxième étape. Il vous suffit de consulter le menu déroulant du "type de véhicule" et de faire défiler pour choisir le vôtre.</p>  
    </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec159" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec159" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec159">Je ne trouve pas le type de mon véhicule !
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec159" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec159" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family">
                            <h5 class="text-dark app-font-family"></h5> 
        <p class="app-font-family text-dark">Si vous ne trouvez pas le type de votre véhicule, vous pouvez choisir un véhicule équivalent, puis nous contacter à <a href='#'>contact@cocarmoov.fr</a> après la validation de votre commande afin de confirmer ensemble le bon type.</p>                                        
    </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec7" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec7" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec7">Est-il possible de déplacer une voiture sans permi ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec7" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec7" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Oui, nous avons la possibilité de déplacer les véhicules sans permis uniquement par camion porte-voiture. Afin d'obtenir un tarif, merci de renseigner "citadine" pour le type de véhicule.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec8" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec8" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec8">Est-ce que les voitures anglaises (volant à droite) sont acceptées ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec8" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec8" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Nous sommes en capacité de déplacer votre véhicule par un convoyeur professionnel ou par camion porte-voiture.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec9" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec9" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec9">Que considérez-vous comme véhicule de collection  ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec9" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec9" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Vous devez renseigner "véhicule de collection" lorsque vous êtes en possession d'une carte grise véhicule de collection ou que le véhicule a plus de 25 ans.</p>
              <p class="text-dark app-font-family">Pour ce type de véhicule, seul un transport par camion porte-voiture est envisageable.</p>
              <p class="text-dark app-font-family">Cette solution de transport vous sera directement proposée après avoir renseigné "véhicule de collection" comme type de véhicule sur notre site.</p>
              <p class="text-dark app-font-family">Si vous avez le moindre doute, vous pouvez nous envoyer un e-mail à <a href='#'>contact@cocarmoov.fr</a> en nous précisant le modèle et l’année de mise en circulation.</p>
              <p class="text-dark app-font-family">Nous vous répondrons sous 24h ouvrés.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec10" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec10" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec10">Est-il possible de faire déplacer mon véhicule électrique ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec10" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec10" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Oui, nous pouvons vous proposer un transport par convoyeur professionnel, ou par camion porte-voiture en fonction de la distance à parcourir.</p>
              <p class="text-dark app-font-family">Merci de nous contacter par e-mail à  <a href="#"><a href='#'>contact@cocarmoov.fr</a></a> si vous avez des spécificités à nous signaler.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec11" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec11" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec11">Est-il possible de réserver un transport si ma voiture a une immatriculation étrangère  ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec11" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec11" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Le transport par co-convoyeur particulier n'est pas possible.</p>
              <p class="text-dark app-font-family">En revanche, nous pouvons effectuer le transport par convoyeur professionnel ou par camion porte-voiture. </p>
              <p class="text-dark app-font-family">Veuillez sélectionner lors de votre commande “plaques WW” dans la liste des services spécifiques si vous choisissez un transport par convoyeur professionnel.</p>
              <p class="text-dark app-font-family">Vous pouvez nous contacter par e-mail à  <a href="#"><a href='#'>contact@cocarmoov.fr</a></a> si vous avez d’autres questions.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec12" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec12" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec12">J'achète un véhicule, les papiers ne sont pas à mon nom. Est-ce un problème ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec12" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec12" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Cela n'est pas un problème.</p>
              <p class="text-dark app-font-family">Cependant, les papiers de cession du véhicule doivent être à votre nom le jour du transport.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec13" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec13" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec13">Est-ce possible de transporter mon véhicule avec un coffre de toit ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec13" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec13" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Il est possible de déplacer votre voiture par un convoyeur professionnel ou un co-convoyeur particulier.</p>
              <p class="text-dark app-font-family">Si vous voulez que votre voiture soit transportée par un camion porte-voiture “plateau”, pensez à le notifier dans la section des remarques spécifiques.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec14" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec14" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec14">Comment faire si je ne trouve pas la taille de mon utilitaire sur votre liste ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec14" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec14" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Si vous ne trouvez pas la taille exacte d’utilitaire correspondante à votre véhicule, nous vous prions de choisir la taille la plus proche dans la liste de choix.</p>
              <p class="text-dark app-font-family">Pensez aussi à le notifier dans la section remarque spécifique lorsque vous renseignez les détails de votre commande.</p>
              <p class="text-dark app-font-family">Vous pouvez nous contacter à  <a href="#"><a href='#'>contact@cocarmoov.fr</a></a> pour vous confirmer le type de véhicule approprié à choisir.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec15" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec15" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec15">Quel type de véhicule ne transportons-nous pas ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec15" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec15" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Nous pouvons transporter tout véhicule ayant 4 roues et pouvant être conduit avec le permis B et n'excédant pas un poids de 3.5 tonnes.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec16" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec16" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec16">Est-ce que vous transportez les vans aménagés ou les campings cars ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec16" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec16" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Il est possible de déplacer votre véhicule par convoyeur professionnel ou par camion porte-voiture. 
Cependant il est important de préciser que notre assurance ne prend pas en compte le matériel à l'intérieur du véhicule.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec17" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec17" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec17">Est-ce que vous transportez les utilitaires ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec17" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec17" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Les camions peuvent être transportés par nos services à condition qu'ils respectent les critères suivants:</p>
              <ul class="text-dark app-font-family">
                 <li>Conduit avec un permis B </li>
                 <li>Taille max 15m3 </li>
                 <li>Poids max 3.5 tonnes</li>                   
              </ul>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec18" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec18" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec18">Est-il possible de faire transporter une remorque  ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec18" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec18" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content"><p class="text-dark app-font-family">Non, notre assurance ne couvre pas ce type de véhicule. Il est donc impossible de transporter une remorque.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec19" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec19" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec19">Est-ce que je peux effectuer une commande pour un aller-retour ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec19" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec19" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Il est possible de commander un aller-retour à la fois uniquement avec la formule “convoyeur professionnel” ou la formule “camion porte-voiture”. Il suffit de sélectionner lors de la commande dans la liste des services spécifiques “Restitution de véhicule”.</p>
              <p class="text-dark app-font-family">Si vous voulez  choisir la formule “co-convoyeur particulier”, il faudra donc commander l’aller et le retour séparément.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec20" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec20" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec20">Est-il possible de faire déplacer ma voiture vers/depuis la Corse ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec20" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec20" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Il est possible de faire déplacer votre véhicule vers/depuis la Corse par convoyage (délai de livraison d'environ 4-5 jours) ou par camion porte-voiture (délai de livraison de 2 à 3 semaines). </p>
              <p class="text-dark app-font-family">Pour obtenir un tarif, il suffit de nous envoyer un e-mail à l'adresse  <a href="#"><a href='#'>contact@cocarmoov.fr</a></a> avec les informations suivantes : </p>
              <ul>
              <li class="text-dark app-font-family">Adresse d’enlèvement :</li>
              <li class="text-dark app-font-family">Adresse de livraison :</li>
              <li class="text-dark app-font-family">Véhicule (marque + modèle) :</li>
              <li class="text-dark app-font-family">Etat du véhicule (en marche/en panne/accidenté) :</li>
              <li class="text-dark app-font-family">Véhicule disponible à partir de :</li>
              </ul>
            </div>
            </div>
                                </div>
                                <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec21" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec21" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec21">Est-il possible de faire transporter ma voiture depuis ou vers l'étranger ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec21" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec21" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Nous pouvons effectuer le transport de votre véhicule dans certains pays étrangers. Il s'agira forcément d'un transport par camion sous 15 à 21 jours ouvrés, sauf pour les pays limitrophes (Belgique, Allemagne, Luxembourg, Suisse, Italie et Espagne) où vous pouvez aussi choisir un convoyeur professionnel.</p>
              <p class="text-dark app-font-family">Pour obtenir un tarif, merci de nous envoyer un e-mail à  <a href="#"><a href='#'>contact@cocarmoov.fr</a></a> en nous précisant les villes, le modèle du véhicule, ses dates de disponibilité ainsi que son état (en marche / en panne / accidenté).</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec22" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec22" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec22">Est-il possible de faire transporter une limousine ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec22" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec22" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Oui. Le transport de limousine peut s'effectuer par convoyeur professionnel. Il suffit de nous envoyer un e-mail à l'adresse  <a href="#"><a href='#'>contact@cocarmoov.fr</a></a> avec les renseignements nécessaires (lieu de départ/arrivée, modèle du véhicule) afin de recevoir un devis.</p>
              <!-- <img src="" /> -->
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec223" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec223" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec223">Je suis bloqué(e) sur le site lorsque j'essaie de consulter les devis ! 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec223" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec223" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family">
              <p class="text-dark app-font-family">Il faut saisir manuellement l’adresse précise et cliquer sur la bonne proposition présente dans le menu déroulant.</p>
              <!-- <img src="" /> -->
              <p class="text-dark app-font-family">Si la liste des suggestions d’adresses n'apparaît pas, merci de vider le cache de votre navigateur en appuyant simultanément sur les touches : Ctrl + Shift + Suppr (pour Windows) / Cmd + Alt + E (pour Mac OS)</p>
             <div class="container">
                <div class="row">
                    <div class="col-md-12 mx-auto">
              <img src="{{asset('images/wallet/vider-cache-google-chrome.png')}}"  class="img-fluid mx-auto rounded"/>
              </div>
              </div>
              </div>
              <p class="text-dark app-font-family">Si vous êtes toujours bloqué, n'hésitez pas à nous contacter par e-mail à  <a href="#"><a href='#'>contact@cocarmoov.fr</a></a> ou via le chat.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec23" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec23" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec23">Est-il possible de déplacer mon véhicule si le contrôle technique n'est pas à jour ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec23" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec23" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Nous pouvons déplacer votre voiture sans contrôle technique uniquement avec la solution de transport par camion porte-voiture.</p>
              <h6 class="text-dark app-font-family">Attention : Le co-convoyeur particulier ou le convoyeur professionnel sont obligés de refuser le déplacement d’un véhicule sans contrôle technique, donc une pénalité de non conformité de véhicule pour le propriétaire.</h6>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec24" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec24" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec24">Pourquoi me conseiller de rendre ma voiture disponible entre 10 et 15 jours pour un co-convoyeur particulier ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec24" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec24" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Afin de maximiser vos chances qu'un co-convoyeur particulier réserve votre véhicule, nous vous préconisons de laisser un délai de 10 à 15 jours entre la date de prise en charge et la date limite de livraison pour rendre votre annonce attractive.</p>
              <p>Toutefois, nous ne pouvons pas vous garantir à 100% que votre véhicule sera réservé, cela dépend de la demande des particuliers.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec25" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec25" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec25">Est-ce que le prélèvement est effectué si ma voiture n'est pas réservée sur CoCarmoov ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec25" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec25" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Le prélèvement sera effectué uniquement si votre véhicule est réservé via notre plateforme et vous en serez immédiatement notifié par e-mail.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec26" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec26" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec26">Pourquoi le délai est aussi long pour le transport par camion ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec26" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec26" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Pour cette solution, le véhicule sera transporté par un camion porte-voiture ou plateau. Ceci dit, leur demande est élevée au point de surcharge en commandes, ce qui entraîne des délais plus longs pour la planification et l'exécution des transports.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec27" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec27" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec27">Quel est le type de camion qui se présentera pour récupérer mon véhicule ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec27" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec27" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Nos transporteurs partenaires utilisent des camions porte-voiture ou plateau transportant un seul véhicule, comme illustré sur l'image ci-dessous.</p>
              <p class="text-dark app-font-family">La longueur du camion est d’environ 15 mètres après descente du plateau, les adresses indiquées lors du passage de la commande doivent donc être accessibles à ce type de camion.</p>
              <p class="text-dark app-font-family">Si votre commande est passée et que ce n'est pas le cas, merci de nous contacter par e-mail à  <a href="#"><a href='#'>contact@cocarmoov.fr</a></a>.</p>
              <div class="container">
                <div class="row">
                    <div class="col-md-6">
              <img src="{{asset('images/wallet/camion-porte-voiture.jpg')}}" class="img-fluid rounded" />
              </div>
              <div class="col-md-6">
              <img src="{{asset('images/wallet/camion-plateau.jpg')}}" class="img-fluid rounded"/>
              </div>
              </div>
              </div>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec28" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec28" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec28">Pourquoi une telle différence de prix entre le co-convoyeur particulier et le convoyeur professionnel ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec28" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec28" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Contrairement à la solution économique du co-convoyeur particulier, la solution express du convoyeur professionnel consiste à mandater l'un des convoyeurs professionnels certifiés par nos services. Nous pouvons donc vous garantir un transport de qualité avec un délai de livraison en moyenne de 72h. De plus, il faut savoir que pour cette prestation, nous rémunérons les convoyeurs et payons les frais pour le trajet effectué contrairement au co-convoyeur particulier qui a une compensation symbolique de 10 centimes par kilomètre.</p>
              <p class="text-dark app-font-family">La solution du co-convoyeur particulier permet à n’importe quel particulier de se déplacer d'un point A à un point B. Il s'agit en quelque sorte d'un échange de service et partage de frais pour vous permettre de répondre à vos besoins respectifs. Cependant la faisabilité de votre trajet dépend du besoin des particuliers.</p> 
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec29" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec29" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec29">Si je choisis la solution par co-convoyeur particulier, ou convoyeur professionnel, puis-je accompagner le conducteur ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec29" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec29" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Nous sommes spécialisés dans le transport de voitures et non de personnes, ce qui est une toute autre activité qui nécessite une autorisation que nous n'avons pas.</p>
              <p class="text-dark app-font-family">Ce n'est donc pas possible d'accompagner le conducteur pendant le déplacement de votre voiture.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec30" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec30" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec30">Puis-je mettre mes bagages à bord de la voiture ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec30" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec30" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family">
                <ul class="text-dark app-font-family">
                    <li>La solution co-convoyeur particulier : </li>
                </ul>   
                <p class="text-dark app-font-family">Un à 2 sacs rangés dans le coffre sont autorisés.</p>
              <p class="text-dark app-font-family">En règle générale, les co-convoyeurs particuliers préfèrent réserver des véhicules vides afin de pouvoir mettre leurs propres objets personnels (sac, valise, carton).</p>
              <ul class="text-dark app-font-family">
                    <li>La solution convoyeur professionnel : </li>
                </ul>   
                <p>Vous pouvez tout à fait laisser des bagages et objets dans le véhicule tant que ces derniers ne gênent pas la conduite du convoyeur.</p>
              <p class="text-dark app-font-family">Attention : les affaires laissées à l'intérieur du véhicule ne sont pas couvertes par notre assurance.</p>
              <ul class="text-dark app-font-family">
                    <li>La solution camion porte-voiture :</li>
                </ul>   
                <p class="text-dark app-font-family">Il n'est pas du tout possible de laisser de bagages dans le véhicule pour ne pas surcharger le poids total autorisé (PTAC) du camion, et ce pour des raisons de sécurité routière.</p> 
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec31" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec31" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec31">Comment être sûr que le co-convoyeur, convoyeur ou transporteur est fiable ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec31" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec31" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Afin de garantir la fiabilité des conducteurs et la sérénité de nos clients sur le site, nous confirmons le profil de nos membres et partenaires CoCarmoov avant de pouvoir déplacer un véhicule, et ce:</p>
            <ul class="text-dark app-font-family">
<li>En ajoutant une photo de profil, </li>
<li>En faisant vérifier leur e-mail et leur numéro de téléphone mobile, </li>
<li>En vérifiant leur identité par authentification via permis de conduire + carte d’identité / titre de séjour / passeport.</li>
            </ul>
<p>Enfin, si vous avez le moindre doute ou besoin d'être à 100% rassuré, nous vous suggérons de demander à votre interlocuteur, au moment de l’enlèvement du véhicule avant le trajet, de vous présenter sa pièce d'identité et/ou son permis de conduire. Cela permet de vous assurer de la fiabilité de votre interlocuteur.</p>            
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec32" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec32" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec32">Comment pouvez-vous me garantir que le co-convoyeur particulier n'abusera pas de l'utilité de mon véhicule ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec32" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec32" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Lors de la prise en charge et de la restitution un état des lieux devra être effectué. Celui-ci est envoyé par e-mail au moment de la confirmation de votre commande. </p>
              <p>Si vous constatez une différence entre les deux états des lieux, nous vous invitons à le signaler depuis votre tableau de bord de gestion de commande ou à contacter notre service client afin qu'une personne de notre équipe vous explique les démarches à suivre pour une demande de dédommagement auprès de notre assurance, comprise dans votre contrat. </p>
              <p>De plus, lors de la réservation de votre co-convoyage, le co-convoyeur est soumis à une franchise, vous pouvez consulter les garanties de notre assurance sur <a href="{{route('insurance')}}">https://www.cocarmoov.fr/assurance.</a> </p>
              <p>Le kilométrage, quant à lui, est limité à la distance entre les 2 adresses fournies avec 20% maximum de kilomètre additionnel. Il ne peut donc pas aller où il le souhaite. Si la limite kilométrique indiquée sur le contrat est dépassée, vous serez dédommagé.</p>
            </div>
            </div>
          </div>
          <!-- <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec33" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec33" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec33">Si je choisis la solution par co-convoyeur particulier, ou convoyeur professionnel, puis-je accompagner le co-convoyeur ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec33" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec33" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Nous sommes spécialisés dans le transport de voitures et non de personnes, ce qui est une toute autre activité qui nécessite une autorisation que nous n'avons pas.</p>
              <p>Ce n'est donc pas possible d'accompagner le co-convoyeur pendant le déplacement de votre voiture.</p>
            <img src="" />
            </div>
            </div>
          </div> -->
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec34" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec34" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec34">Est-ce que mon badge télépéage est utilisé par le conducteur ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec34" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec34" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Non, les frais de péages sont à la charge du conducteur. Le badge ne sera donc pas utilisé, nous vous invitons à le ranger loin du pare-brise afin qu’il ne soit pas scanné au passage du péage.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec35" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec35" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec35">En cas de panne, qui prend en charge les frais de réparation ? Dans quels cas précisément ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec35" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec35" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">En cas de panne liée au mauvais entretien ou usure des pièces du véhicule, ces frais sont à la charge du propriétaire du véhicule. 
</p>
              <p class="text-dark app-font-family">Toutefois, si le propriétaire a des doutes quant à l'utilisation de son véhicule par le co-convoyeur, il devra à ses frais mandater un expert pour démontrer la responsabilité du co-convoyeur.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec36" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec36" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec36">Pour le transport sur camion porte-voiture, est-ce que je peux choisir la date de prise en charge ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec36" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec36" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Non, la date de prise en charge du véhicule dépend de la feuille de route du transporteur, c'est donc lui qui décide de la date et de l'heure de passage. </p>
              <p class="text-dark app-font-family">Toutefois, le transporteur a l'obligation de passer pendant le créneau de dates indiquées dans votre commande, et de vous prévenir au plus tard 24h avant son passage.</p>
              <p class="text-dark app-font-family">Si vous avez un impératif pour la date de prise en charge, veuillez choisir la solution "convoyeur professionnel".</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec37" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec37" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec37">Quand serais-je prévenu de la prise en charge et de la livraison de mon véhicule par le transporteur ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec37" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec37" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Si vous avez choisi la solution de transport par camion porte-voiture, vous serez prévenu des dates de prise en charge dès qu’un transporteur réserve votre véhicule. </p>
              <p class="text-dark app-font-family">En effet, c'est le transporteur qui s'organise en fonction de sa feuille de route. Il prendra contact avec la personne présente au départ dès la réservation du véhicule et il l’informera du créneau horaire de livraison au moment de l’enlèvement.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec29" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec38" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec38">Mon véhicule peut-il arriver plus tôt que prévu par camion ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec38" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec38" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Sachez qu'il faut compter 10 jours ouvrés pour la livraison du véhicule. Toutefois, le véhicule peut arriver plus tôt en fonction de la distance du transport. Vous serez prévenu par téléphone de la date de livraison après l’enlèvement du véhicule.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec39" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec39" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec39">Si aucun co-convoyeur particulier n'est trouvé, suis-je remboursé ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec39" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec39" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Lors de votre commande pour un co-convoyeur particulier, le montant réglé prend la forme d'une pré-autorisation bancaire. Vous n’êtes donc pas débité mais, en fonction de votre contrat avec votre banque, les montants peuvent apparaître sur votre relevé.</p>
              <p class="text-dark app-font-family">Rassurez-vous, si nous ne trouvons pas de co-convoyeur particulier pour votre trajet, la pré-autorisation bancaire est automatiquement supprimée lorsque votre commande expire.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec40" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec40" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec40">Ai-je plus de chance que mon véhicule soit réservé en mettant une adresse dans une grande ville ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec40" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec40" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Oui, plus le trajet est attractif, plus vous avez de chances que le véhicule soit réservé. En passant votre commande, pensez aussi à activer la possibilité de récupérer le conducteur à la gare la plus proche pour l’enlèvement et/ou la possibilité de déposer le conducteur à la gare la plus proche après la livraison si l’une des deux adresses se trouve loin des moyens de transport.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec41" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec41" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec41">Que se passe-t-il si aucun conducteur ne se propose pour le trajet déposé sur CoCarmoov ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec41" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec41" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Le transport ne pourra pas être effectué. Le trajet expirera après la date d'arrivée indiquée sur la commande. Vous ne serez donc pas débité.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec42" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec42" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec42">Est-il possible de modifier la ville de départ ou d'arrivée une fois mon trajet publié sur CoCarmoov ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec42" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec42" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Non, vous ne pourrez pas modifier la ville d'arrivée ou la ville de départ pour la commande déjà existante. Cependant, vous pouvez annuler l'annonce sur CoCarmoov avant que le véhicule soit réservé et passer une nouvelle commande avec les bonnes adresses.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec43" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec43" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec43">Comment annuler ma commande CoCarmoov ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec43" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec43" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Vous pouvez annuler votre commande depuis votre compte CoCarmoov en quelques clics. L’annulation est sans pénalités si le véhicule n’a pas encore été réservé. Si le véhicule a déjà été réservé, la pénalité dépend de la date d’annulation et de la formule de transport commandée.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec44" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec44" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec44">Ai-je des frais si j’annule le transport de ma voiture  ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec44" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec44" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Des frais peuvent s'appliquer en fonction de la formule de transport commandée et de la date d’annulation.</p>
            <p class="text-dark app-font-family">S’il s’agit d’un transport par co-convoyeur particulier (co-convoyage) :</p>
              <ul class="text-dark app-font-family">
                <li>Vous pouvez annuler votre commande sans frais tant que celle-ci n'a pas été réservée.</li>
                <li>0% si l’annulation intervient jusqu'à 72 heures avant le début du co-convoyage si le véhicule a déjà été réservé.</li>
                <li>50% si l’annulation intervient à 72h et moins avant le début du co-convoyage si le véhicule a déjà été réservé.</li>
            </ul>
            <p class="text-dark app-font-family">S’il s’agit d’un transport par convoyeur professionnel (convoyage) :</p>
            <ul class="text-dark app-font-family">
                <li>Vous pouvez annuler votre commande sans frais tant que celle-ci n'a pas été réservée.</li>
                <li>0% si l’annulation intervient jusqu'à 72 heures avant le début du convoyage si le véhicule a déjà été réservé.</li>
                <li>35% si l’annulation intervient entre 24 et 72h avant le début du convoyage si le véhicule a déjà été réservé.</li>
                <li>70% si l’annulation intervient moins de 24h avant le début du convoyage si le véhicule a déjà été réservé.</li>
            </ul>
            <p class="text-dark app-font-family">S’il s’agit d’un transport par camion porte-voiture (transporteur) :</p>
            <ul class="text-dark app-font-family">
            <li>Vous pouvez annuler votre commande sans frais tant que celle-ci n'a pas été réservée.</li>
            <li>0% si l’annulation intervient jusqu'à 72 heures avant le début du transport si le véhicule a déjà été réservé.</li>
            <li>35% si l’annulation intervient entre 24 et 72h avant le début du transport si le véhicule a déjà été réservé.</li>
            <li>70% si l’annulation intervient moins de 24h avant le début du transport si le véhicule a déjà été réservé.</li>
            </ul> 
          </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec45" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec45" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec45">Quand vais-je recevoir mon remboursement ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec45" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec45" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Vous recevrez votre remboursement entre 3 et 5 jours ouvrés (hors weekend et jours fériés) après l’annulation de votre commande ou le traitement de votre réclamation.</p>
              <p class="text-dark app-font-family">Nous vous remboursons toujours avec la carte ou le mode de paiement utilisé pour réserver.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec46" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec46" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec46">Comment modifier le nom du contact à l'arrivée ou au départ ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec46" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec46" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Afin de modifier les coordonnées des contacts renseignés, vous pouvez apporter une modification à votre commande avant sa réservation par un co-convoyeur ou nous écrire par e-mail à  <a href="#"><a href='#'>contact@cocarmoov.fr</a></a> si le véhicule est déjà réservé.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec47" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec47" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec47">Pourquoi masquons-nous les numéros de téléphone ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec47" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec47" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Vous l'avez peut-être remarqué ; tant que la réservation n'est pas finalisée, nous n'autorisons pas l'échange des numéros de téléphone au sein des discussions.</p>
              <p class="text-dark app-font-family">En effet, nous comprenons que transmettre votre numéro de téléphone pourrait faciliter certains échanges.</p>
              <p class="text-dark app-font-family">Cependant, nous voulons ainsi garantir la fiabilité du service dans son ensemble (sécurité, assurance) et protéger votre vie privée.</p>
              <p class="text-dark app-font-family">Nous vous invitons à communiquer avec votre interlocuteur grâce à la messagerie privée de CoCarmoov afin de vous mettre d'accord. </p>
              <p class="text-dark app-font-family">Une fois le paiement validé, le numéro de téléphone de votre interlocuteur s'affiche systématiquement !</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec48" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec48" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec48">Comment joindre le co-convoyeur particulier ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec48" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec48" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Nous vous envoyons les coordonnées du co-convoyeur par e-mail une fois qu'il a réservé le trajet. Vous pourrez donc le contacter à ce moment-là.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec49" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec49" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec49">Quels documents dois-je apporter au départ et à l'arrivée pour un transport ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec49" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec49" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Les documents demandés sont: </p>
              <ul class="text-dark app-font-family">
                 <li>Une copie de la carte grise </li>
                 <li>La carte d'identité de la personne présente sur place </li>
                 <li>Le formulaire pour effectuer l’état des lieux avant l’enlèvement du véhicule et à la restitution.</li>                       
              </ul>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec50" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec50" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec50">Dois-je être présent au départ et à l'arrivée de mon véhicule ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec50" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec50" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Il faut impérativement qu'une personne soit présente lors de l’enlèvement et lors de la livraison du véhicule.
Lors du passage de votre commande vous devez renseigner les informations des "Contacts" au départ et à l’arrivée. 
</p>
              <p class="text-dark app-font-family">Ces contacts peuvent être vous, mais peuvent aussi être toute autre personne de confiance pouvant assurer la prise en charge et restitution du véhicule.</p>
              <p class="text-dark app-font-family">Si vous souhaitez modifier les informations des contacts, vous pouvez le faire depuis votre compte tant que votre véhicule n’est pas encore réservé.</p>
              <p class="text-dark app-font-family">Si un conducteur l’a déjà réservé, merci de nous contacter à  <a href="#"><a href='#'>contact@cocarmoov.fr</a></a></p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec503" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec503" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec503">Le contrôle technique est obsolète le jour d’enlèvement de mon véhicule ! 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec503" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec503" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Si le véhicule a été déclaré en état de marche lors de la commande, il est impératif que le véhicule soit conforme aux conditions de circulation et de sécurité routière le jour de son enlèvement.</p>
              <p class="text-dark app-font-family">Exemple : Absence de contrôle technique, non conformité des plaques d’immatriculation, véhicule sur réserve carburant, pneus d’été en période d’hiver, absence de roue de secours ou de kit anti-crevaison, … etc</p>
              <p class="text-dark app-font-family">Le propriétaire doit tenir conforme le véhicule pour le rendez-vous d’enlèvement, faute de quoi une pénalité de non conformité du véhicule à la circulation est applicable :  </p>
              <ul class="text-dark app-font-family">
                <li>50% s’il s’agit d’un transport par co-convoyeur particulier (co-convoyage)</li>
                <li>70% s’il s’agit d’un transport par convoyeur professionnel (convoyage)</li>
              </ul>
              <p class="text-dark app-font-family">Dans le cas d’un transport par camion porte-voiture (transporteur) : Quel que soit l'état du véhicule (en marche / en panne / accidenté), celui-ci ne doit pas avoir de roues bloquées, et peut être transporté sans protection particulière. Faute de quoi une pénalité de 70% sera appliquée.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec51" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec51" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec51">Que faire quand la carte grise n'est pas à mon nom ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec51" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec51" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Vous pouvez toujours commander le transport même si le nom figurant sur la carte grise ne correspond pas à l'identité de la personne responsable de la commande.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec523" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec523" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec523">Dois-je remettre les clés de mon véhicule lors du départ  ? Comment les transmettre à l'arrivée ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec523" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec523" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Pour les voitures et utilitaires, les clés sont prises en charge par nos transporteurs.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec52" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec52" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec52">Mon véhicule n’est pas prêt pour être transporté à l’heure du rendez-vous d’enlèvement !
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec52" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec52" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family">
              <p class="text-dark app-font-family">Dès lors qu’un véhicule est mis en ligne pour être déplacé, son propriétaire est notifié systématiquement par e-mail dès que le véhicule est réservé. Le e-mail stipulerait les coordonnées du conducteur ou transporteur, ainsi que le jour et l’heure de l’enlèvement du véhicule.</p>
              <p class="text-dark app-font-family">Le propriétaire a la possibilité de paramétrer sa demande de transport s’il a besoin de temps pour préparer son véhicule, et ce dans la section des disponibilités du véhicule.</p>
              <p class="text-dark app-font-family">Si à l’heure du rendez-vous d’enlèvement le véhicule n’est pas prêt, le co-convoyeur ou transporteur peut signaler un passage à vide au bout d’une heure d’attente, ce qui applique la pénalité suivante :  </p>
              <ul class="text-dark app-font-family">
                <li>50% s’il s’agit d’un transport par co-convoyeur particulier (co-convoyage)</li>
                <li>70% s’il s’agit d’un transport par convoyeur professionnel (convoyage)</li>
                <li>70% s’il s’agit d’un transport par camion porte-voiture (transporteur)</li>
              </ul>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec53" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec53" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec53">Comment déclarer un sinistre ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec53" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec53" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Si vous êtes propriétaire et que suite à la restitution de votre véhicule, vous avez constaté un dommage :</p>
              <ul class="text-dark app-font-family">
                <li>Si vous avez choisi le transport par un co-convoyeur particulier : il faudra nous envoyer  le contrat de co-convoyage signé par les deux parties et des photos du véhicule.</li>
                <li>Si vous avez choisi le transport par un convoyeur professionnel : </li>
                <p class="text-dark app-font-family">- Si le convoyeur a utilisé l'application CoCarmoov pour réaliser les états des lieux, vous n'avez rien à nous envoyer. </p>
                <p class="text-dark app-font-family">- Si le convoyeur a utilisé un état des lieux papier (problème de connexion à l'application), il nous faut les états des lieux et les photos.</p>
                <li>Si vous avez choisi le transport par camion porte-voiture : nous devons recevoir les états des lieux départ et arrivée signés avec le transporteur ainsi que des photos du véhicule.</li>
            </ul>
            <p class="text-dark app-font-family">Merci de nous envoyer le nécessaire à l’adresse : <a href='#'>qualite@cocarmoov.fr</a> </p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec54" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec54" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec54">Quels documents dois-je envoyer en cas de sinistre  ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec54" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec54" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Pour les transports par convoyeur professionnel ou co-convoyeur particulier</p>
                <p class="text-dark app-font-family">Nous avons besoin des documents suivants:</p>
              <ul class="text-dark app-font-family">
                <li>Les photos relatives à votre sinistre</li>
                <li>Le devis correspondant aux dommages réclamés</li>
              </ul>
              <p class="text-dark app-font-family">Pour les transports par camion porte-voiture</p>
              <p class="text-dark app-font-family">Nous avons besoin des documents suivants: </p>
              <ul class="text-dark app-font-family">
                 <li>Les photos relatives à votre sinistre</li>
                 <li>L’état des lieux lors de l’enlèvement, indiquant l’état du véhicule avant son transport </li>
                 <li>L’état des lieux lors de la livraison, stipulant les réserves constatées par vous même avec le transporteur (tampon + signature + date obligatoire)</li>
                 <li>Le devis correspondant aux dommages réclamés</li>                   
              </ul>
              <p class="text-dark app-font-family">Envoyez ces documents à l’adresse e-mail : <a href='#'>qualite@cocarmoov.fr</a></p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec55" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec55" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec55">Qu’est-ce qui n’est pas pris en charge en cas de sinistre ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec55" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec55" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Pour le transport par convoyeur professionnel ou co-convoyeur particulier</p>
            <ul class="text-dark app-font-family">
<li>Tous les dommages non mentionnés sur les états des lieux ne seront pas pris en charge</li>
            </ul>
            <p class="text-dark app-font-family">Pour le transport par camion porte-voiture</p>
            <ul class="text-dark app-font-family">
                <li>Les micros-rayures ne sont pas prises en charge</li>
                <li>Etat des lieux d’enlèvement mal complété :</li>
            </ul>
            <p class="text-dark app-font-family">Toutes réserves non mentionnées sur l’EDL ne seront pas prises en charge</p>
                <p class="text-dark app-font-family">S’il manque le tampon, la signature ou la date : l’EDL risque d’être refusé par l’assurance</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec56" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec56" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec56">Où en est la gestion de mon sinistre ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec56" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec56" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Merci de contacter le service chargé des sinistres à l’adresse <a href='#'>qualite@cocarmoov.fr</a> en indiquant la référence de votre dossier afin d’obtenir des informations. </p>
              <p class="app-font-family text-dark">Nous vous répondrons dans un délai de 24h ouvrées maximum.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec57" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec57" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec57">Pourquoi est-ce à moi de faire les démarches pour obtenir un devis des réparations ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec57" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec57" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Vous êtes en possession du véhicule, c'est donc à vous de choisir le réparateur de votre choix.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec58" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec58" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec58">En cas de sinistre, ai-je le droit à un véhicule de prêt ?    
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec58" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec58" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">Pour le transport par camion</p>
              <ul class="text-dark app-font-family">
                <li>L’assurance de nos partenaires transporteurs ne proposent pas de véhicule de prêt</li>
              </ul>
              <p class="text-dark app-font-family">Pour le transport par convoyeur professionnel ou co-convoyeur particulier</p>
              <ul class="text-dark app-font-family">
                <li>Notre partenaire d’assurance ne propose pas de véhicule de prêt</li>
              </ul>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec583" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec583" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec583">J'ai fait co-convoyer ma voiture, et j'ai reçu une contravention !    
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec583" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec583" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family">
              <p class="text-dark app-font-family">En cas de contravention, vous devez vous rendre sur le site de l'ANTAI <a href="#">https://www.antai.gouv.fr/</a> (Agence National de Traitement des Infractions) afin de contester l'amende directement en ligne en y joignant le contrat de co-convoyage et rentrer les informations de votre co-convoyeur. </p>
              <p class="text-dark app-font-family">La copie du permis de conduire est facultative et n'est donc pas nécessaire au processus de contestation. 
Le co-convoyeur recevra alors directement l'amende chez lui.
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec59" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec59" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec59">La réglementation DSP2 qu'est-ce que c'est ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec59" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec59" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">La Directive sur les Services de Paiement est une directive européenne qui permet aux utilisateurs d'effectuer des paiements en ligne en toute sécurité.</p>
              <p class="text-dark app-font-family">Les entreprises qui l'appliquent assurent la sécurité de leur service d'une part, et permettent d'affirmer leur position en tant que société en règle.</p>
              <p class="text-dark app-font-family">La réglementation DSP2 est une réforme mise en place avec les banques qui va permettre aux clients d'obtenir une sécurité supplémentaire lors de leurs achats sur Internet.</p>
              <p class="text-dark app-font-family">En effet, tous les sites ayant mis en place la réglementation proposent une nouvelle procédure de paiement.</p>
              <p class="text-dark app-font-family">Maintenant lorsqu'un utilisateur voudra procéder au règlement de sa commande, il sera automatiquement redirigé vers l'application mobile de sa banque.</p>
              <p class="text-dark app-font-family">Cette nouvelle fonctionnalité va permettre aux banques de réduire drastiquement le nombre de fraudes en ligne.</p>
              <p class="text-dark app-font-family">Vous l'aurez compris, CoCarmoov faisant partie des bons élèves, a adhéré à ce nouveau système de paiement garantissant ainsi à ses clients, un paiement complètement sécurisé.</p>

            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec60" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec60" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec60">Autotrain n'existe plus ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec60" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec60" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>La SNCF a cessé son activité Autotrain depuis le 13 décembre 2019. Nous vous proposons donc 3 solutions alternatives de transport sur toute la France : un co-convoyeur particulier, un convoyeur professionnel ou un camion porte-voiture. Rendez-vous directement sur <a href="#">https://www.cocarmoov.fr/deplacer-un-vehicule</a> pour obtenir votre devis en 2 clics !</p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
          </div>
          <div class="tab-pane fade " id="pills-how-much-does-it-costs" role="tabpanel"
            aria-labelledby="pills-how-much-does-it-costs-tab">
            <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="accordion accordion-border-bottom" id="accordionFAQ">
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d161" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d161" aria-expanded="true"
              aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d161">Co-convoyer un véhicule, qu’est ce que c'est  ?
            </h2>
            <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d161"
              class="accordion-collapse collapse border-0"
              aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d161" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Chaque jour, des milliers de véhicules nécessitent d'être déplacés d'un lieu à un autre, généralement par le biais de camions transporteurs, sans qu'il y ait de passagers à bord.</p>
              <p class="text-dark app-font-family">Pour améliorer l'efficacité logistique de ces transferts, CoCarmoov présente une solution gagnant-gagnant écologique et collaborative (co-convoyage) : faire rapatrier les véhicules par des co-convoyeurs particuliers qui ont besoin de se déplacer.</p>
        <p class="text-dark app-font-family">Ces particuliers sont des individus qui planifient un trajet pour leurs propres besoins de déplacement ou de déménagement. Si leurs points de départ et d'arrivée correspondent à ceux du véhicule à déplacer, tout le monde y gagne : le particulier obtient une voiture pour se déplacer, tandis que le propriétaire du véhicule bénéficie d'un co-convoyeur pour le ramener à destination.</p>    
    <p class="text-dark app-font-family">Ainsi, CoCarmoov vous offre la possibilité de déplacer des véhicules et de partager les frais avec leurs propriétaires.</p>
            </div>
    </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec155" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec155" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec155">Qu’est ce qui diffère un co-convoyage d’une location classique de véhicules  ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec155" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec155" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>CoCarmoov vous offre la possibilité de déplacer des véhicules et de partager les frais avec leurs propriétaires.</p>
            <p class="text-dark app-font-family">Une location classique coûte chère, où au moins, elle est payante même si elle ne coûte que quelques euros.</p>
            <p class="text-dark app-font-family">Tandis que notre co-convoyage est indemnisant sur différents plans : </p>
            <ol class="text-dark app-font-family">
                <li>Vous collaborez avec le propriétaire du véhicule à diviser en deux vos empreintes carbone</li>
                <li>Vous êtes compensé 10 centimes par kilomètre pour vous aider à couvrir vos frais de route</li>
                <li>Vous réduisez davantage votre empreinte carbone par le covoiturage, déménagement ou le transport de colis.</li>
            </ol>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec62" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec62" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec62">Quelles sont les conditions pour co-convoyer un véhicule  ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec62" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec62" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Vous devez être âgé(e) de 25 ans minimum et posséder votre permis européen depuis au moins trois ans : ce sont des conditions imposées par notre assurance.</p>
            <p class="text-dark app-font-family">Vous pouvez consulter les conditions de notre assurance sur <a href="#">https://www.cocarmoov.fr/assurance</a></p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec63" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec63" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec63">Quelles sont les conditions pour pouvoir co-convoyer une voiture sur CoCarmoov  ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec63" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec63" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Vous devez être âgé(e) de 25 ans minimum et posséder votre permis délivré dans l'Union Européenne depuis au moins trois ans : ce sont des conditions imposées par notre assurance.</p>
            <p class="text-dark app-font-family">Vous pouvez consulter les conditions de notre assurance sur <a href="#">https://www.cocarmoov.fr/assurance</a></p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec64" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec64" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec64">Les permis étrangers sont-ils valables ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec64" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec64" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"> <ul class="text-dark app-font-family"><li>Seuls les permis délivrés par les pays européens sont acceptés au même titre que les permis de conduire français, et sans documents complémentaires. Ce sont les exigences de notre assurance. </li>
              <li class="text-dark app-font-family">Pour tout permis rédigé dans un autre alphabet que l'alphabet latin, une traduction est nécessaire, ou un permis international.</li>
              </ul>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec65" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec65" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec65">J'ai un permis étranger, puis-je co-convoyer un véhicule  ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec65" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec65" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"> <ul class="text-dark app-font-family"><li>Seuls les permis délivrés par les pays européens sont acceptés au même titre que les permis de conduire français, et sans documents complémentaires. Ce sont les exigences de notre assurance. </li>
              <li class="text-dark app-font-family">Pour tout permis rédigé dans un autre alphabet que l'alphabet latin, une traduction est nécessaire, ou un permis international.</li>
              </ul>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec165" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec165" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec165">Quels types de véhicules sont disponibles au co-convoyage sur CoCarmoov  ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec165" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec165" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"> <p class="text-dark app-font-family">Sur CoCarmoov, vous avez la possibilité de co-convoyer une vaste gamme de véhicules autorisés à être conduits avec un permis B. Cela signifie que vous avez accès au co-convoyage de voitures citadines, de berlines, de monospaces, ainsi que de divers types d'utilitaires, y compris ceux allant jusqu'à une capacité de 20 mètres cubes.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec66" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec66" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec66">Les dates, la durée ou le kilométrage du co-convoyage proposé ne me conviennent pas  ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec66" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec66" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Une modification de trajet (changement des dates, changement d’adresse de dépôt ou de récupération du véhicule, dépassement kilométrique) est possible avant sa réservation, sous réserve de l’accord du propriétaire du véhicule. </p>
               <p class="text-dark app-font-family">Pour cela, il suffit de vérifier si le bouton « Faire une proposition » est activé pour le co-convoyage en question et d’envoyer votre proposition avec les détails nécessaires.</p>
               <p class="text-dark app-font-family">Si le bouton est inactif, veuillez nous adresser un e-mail détaillant la modification souhaitée, nous revenons vers vous dès que nous avons la réponse du propriétaire.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec663" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec663" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec663">Je ne parviens pas à choisir une période de co-convoyage de 24 ou 48 heures !
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec663" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec663" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Si vous rencontrez des difficultés à sélectionner des dates sur le calendrier, vérifiez si ce n'est pas à cause de la date limite de disponibilité du véhicule.</p>
              <ul>                      
              <p class="text-dark app-font-family">Vous pouvez trouver toutes les informations nécessaires directement sur l'offre, notamment :</p>
                                    <li class="text-dark app-font-family">La durée du co-convoyage autorisé</li>
                                    <li class="text-dark app-font-family">Les horaires et jours d'ouverture des lieux de départ et d’arrivée</li>
                                    <li class="text-dark app-font-family">Les dates limites de départ et d’arrivée.</li>
                                    </ul>
                                  </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec68" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec68" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec68">Comment procéder à une réservation ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec68" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec68" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Pour effectuer une réservation, vous devez d'abord disposer d'un compte CoCarmoov.</p>
              <p class="text-dark app-font-family">Voici ensuite les étapes à suivre :</p>
              <ol class="text-dark app-font-family">
                <li> Connectez-vous à votre compte CoCarmoov</li>
                <li>Rendez-vous sur l'offre de co-convoyage qui vous intéresse</li>
                <li>Sélectionnez la date et l'heure de prise en charge du véhicule, ainsi que celles du retour</li>
                <li>Fournissez vos coordonnées postales et les informations relatives à votre permis de conduire</li>
                <li>Enfin, la dernière étape consiste à effectuer une pré-autorisation bancaire pour une caution en saisissant les numéros de votre carte, la date d'expiration et le cryptogramme (les trois derniers chiffres au dos de votre carte).
La réservation ne sera effective qu'une fois que vous aurez entré vos coordonnées bancaires, et tant que cela n'a pas été fait, l'offre reste en ligne.
</li>
              </ol>
              <p class="text-dark app-font-family">Une fois la réservation effectuée, vous recevrez un e-mail de confirmation. Si vous ne l'avez pas reçu dans les 2 heures qui suivent, veuillez vérifier vos courriers indésirables (spams) ou contacter notre service client.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec69" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec69" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec69">Puis-je mettre des bagages dans la voiture ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec69" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec69" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Tout à fait ! Vous pouvez déposer vos objets personnels dans le véhicule. Sachez que le propriétaire particulier de la voiture est autorisé à laisser 1 à 2 sacs maximum dans le coffre.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec70" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec70" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec70">Quels sont les frais à ma charge pendant le co-convoyage  ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec70" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec70" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Les frais de carburant et de péages sont à votre charge, que vous pouvez déduire de votre compensation convenue de 10 centimes par kilomètre.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec71" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec71" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec71">Puis-je faire du covoiturage avec un co-convoyage ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec71" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec71" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Le covoiturage est conseillé avec nos co-convoyages, via des plateformes telles que Blablacar par exemple. </p>
              <p class="text-dark app-font-family">Vous pourrez ainsi réduire davantage vos frais de carburant et de péages, mais aussi rendre service à un passager !</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec72" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec72" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec72">Puis-je déménager mon appartement avec un co-convoyage ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec72" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec72" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Le déménagement est autorisé avec nos co-convoyages, vous pouvez co-convoyer l’utilitaire pour 24 à 48h selon la disponibilité du véhicule et la distance à parcourir.</p>
              <p class="text-dark app-font-family">Vous pourrez ainsi faire des économies considérables, voire même covoiturer pour réduire vos frais de carburant et de péages.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec723" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec723" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec723">Ai-je des frais si je co-convoie  ? (Caution, franchise, etc.)
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec723" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec723" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family">
            <p class="text-dark app-font-family">Nous avons une caution ainsi qu’une franchise :</p>
            <p class="text-dark app-font-family">Au moment de réserver un co-convoyage, le dépôt d’une caution est systématique comme dans des locations classiques. Cette caution prend la forme d’une pré-autorisation bancaire. Vous n’êtes donc pas débité mais, en fonction de votre contrat avec votre banque, les montants peuvent apparaître sur votre relevé.</p>
            <p class="text-dark app-font-family">De même, une franchise est associée à chaque co-convoyage en cas de sinistre responsable.</p>
            <p class="text-dark app-font-family">Veuillez consulter notre liste des franchises à l’adresse <a href="{{route('insurance')}}">https://www.cocarmoov.fr/assurance</a> </p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec73" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec73" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec73">Est ce que l’assurance est comprise dans un co-convoyage  ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec73" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec73" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">Tous les co-convoyages disponibles sur CoCarmoov bénéficient d'une assurance. L'assurance est systématiquement incluse et comprise dans votre co-convoyage.</p>
              <p class="text-dark app-font-family">En fonction du co-convoyage choisi, vous pouvez avoir: </p>
              <ul>
              <li class="text-dark app-font-family">Le produit d'assurance du propriétaire du véhicule </li>
              <li class="text-dark app-font-family">Le produit d'assurance d'un partenaire CoCarmoov</li>
              </ul>
              <p class="text-dark app-font-family">Les conditions et garanties de l'assurance sont détaillées dans le détail de chaque co-convoyage.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec75" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec75" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec75">Pourquoi y a-t-il un dépôt de caution ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec75" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec75" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>Afin de valider votre réservation, vous devez effectuer une empreinte bancaire. Cela permet de garantir une fiabilité des réservations. Cette pré-autorisation bancaire sera levée une fois le véhicule restitué.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec76" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec76" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec76">Dans quels cas ma pré-autorisation bancaire peut-elle être débitée ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec76" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec76" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">La pré-autorisation bancaire sera débitée pour les cas suivants :</p>
              <ul>
              <li class="text-dark app-font-family">Vous ne vous présentez pas à l'adresse de départ au rendez-vous précédemment choisi sans prévenir</li>
              <li class="text-dark app-font-family">Vous ne respectez pas les conditions de la société de co-convoyage décrites dans le trajet concerné</li>
              <li class="text-dark app-font-family">Vous annulez votre réservation.</li>
              </ul>
              <p class="text-dark app-font-family">Les montants de débits sont détaillés dans chaque offre de co-convoyage dans l'onglet 'Tarifs'</p>
             
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec77" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec77" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec77">Qu'est-ce qu'une franchise d'assurance pendant un co-convoyage  ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec77" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec77" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="text-dark app-font-family">La franchise est le montant à partir duquel l'assurance prend le relais en cas de sinistre. </p>
              <p class="text-dark app-font-family"><b>Exemple :</b></p>
              <p class="text-dark app-font-family">Si vous avez un accident responsable avec une franchise de 2.500€</p>
              <ol class="text-dark app-font-family">
                <li>Les dégâts s'élèvent à 700€ => Vous êtes responsable de 700€</li>
                <li>Les dégâts s'élèvent à 3000€ => Vous êtes responsable de 2.500€, les 1000 euros restants seront pris en charge par l'assurance.</li>
              </ol>
              <p class="text-dark app-font-family">Pour nos co-convoyages, il y a une franchise en cas d’accident responsable.  </p>
              <p class="text-dark app-font-family">Veuillez consulter notre liste des franchises à l’adresse <a href="{{route('insurance')}}">https://www.cocarmoov.fr/assurance</a>  </p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec78" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec78" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec78">Quelles sont les exigences d'assurance pour les co-convoyeurs CoCarmoov ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec78" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec78" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">Chez CoCarmoov, nous nous efforçons toujours de vous offrir la meilleure assurance possible. </p>
              <p class="app-font-family text-dark">Pour être admissible à l'assurance pendant votre co-convoyage, vous devez respecter certaines conditions :</p>
              <ul class="text-dark app-font-family">
                <li>Respecter les conditions d'âge et d'ancienneté de permis en fonction de la catégorie du véhicule co-convoyé (consultez les conditions par catégorie) <a href="{{route('insurance')}}">https://www.cocarmoov.fr/assurance</a> </li>
                <li>Réserver le co-convoyage sur le site avec un moyen de paiement à votre nom, et votre carte doit être à relief.</li>
              </ul>
              <p class="app-font-family text-dark">Si vous ne respectez pas l'ensemble de ces règles, vous ne serez pas couvert en cas de litige. Nous comptons sur votre bon sens et votre responsabilité en tant que co-convoyeur CoCarmoov lors de vos co-convoyages.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec79" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec79" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec79">Quels sont les moyens de paiement acceptés ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec79" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec79" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">Afin de pouvoir réserver sur CoCarmoov, munissez vous d’une carte bancaire type VISA ou Mastercard. </p>
              <p class="app-font-family text-dark">Les cartes Maestro, Cirrus, Électron ou American Express ne sont pas acceptées. </p>
              <p class="app-font-family text-dark">Toutes les pré-autorisations sont effectuées directement sur notre site avec une carte bancaire. La transaction se déroule sur le serveur de paiement sécurisé de notre banque partenaire. Il vous suffira d’indiquer votre numéro de carte, sa date d’expiration et son cryptogramme visuel.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec80" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec80" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec80">Est-il possible d'inclure un deuxième co-convoyeur ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec80" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec80" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">Absolument ! Vous avez la possibilité d'ajouter jusqu'à deux co-convoyeurs sur le contrat de co-convoyage, et les deux seront couverts par l'assurance. </p>
              <p class="app-font-family text-dark">Le coût de cette option dépendra des conditions du propriétaire. Cependant, il n'est pas nécessaire d'ajouter les noms des passagers pour qu'ils bénéficient de la couverture d'assurance.</p>
              <p class="app-font-family text-dark">Pour ajouter un deuxième co-convoyeur, vous avez deux options :</p>
              <ul>
              <li class="app-font-family text-dark">Si vous récupérez le véhicule en agence de location, vous pouvez effectuer l'ajout directement sur place, et le nom du second co-convoyeur sera inscrit dans le contrat de co-convoyage.</li>
              <li class="app-font-family text-dark">Si vous récupérez le véhicule chez un particulier, veuillez nous en informer par e-mail et fournir une copie de son permis de conduire pour procéder à l'ajout.</li>
              </ul>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec81" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec81" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec81">Que faire si aucun véhicule n’est disponible ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec81" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec81" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">Il se peut que le trajet que vous recherchez ne soit pas disponible sur notre site. </p>
              <p class="app-font-family text-dark">Vous pouvez élargir votre recherche en indiquant les villes à proximité ou attendre que l’un de nos partenaires ajoute ce trajet. </p>
              <p class="app-font-family text-dark">Pour ne pas le rater, vous pouvez créer une alerte sur <a href="#">https://www.cocarmoov.fr/co-convoyer/creer-une-alerte</a> en mentionnant toutes les informations nécessaires (type de véhicule, dates, ainsi que vos coordonnées). 
                <p class="app-font-family text-dark">Vous recevrez un e-mail si votre trajet vient à être mis en ligne.</p>
            </p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec813" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec813" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec813">Je ne trouve pas le co-convoyage qui me correspond, je crée une alerte !
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec813" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec813" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family">
<p class="app-font-family text-dark">De nouveaux co-convoyages apparaissent régulièrement sur le site.</p>
<p class="app-font-family text-dark">Si vous n'avez pas trouvé le véhicule qui vous correspond, vous pouvez laisser une alerte avec vos coordonnées et vos critères pour recevoir un e-mail ou un sms dès qu'un véhicule est disponible.</p>
<p class="app-font-family text-dark">Je crée mon alerte sur <a href="#">https://www.cocarmoov.fr/co-convoyer/creer-une-alerte</a></p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec82" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec82" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec82">Comment puis-je mettre en place une alerte ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec82" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec82" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">À chaque recherche de co-convoyage, nous vous offrons la possibilité de configurer une alerte pour être informé dès qu'un co-convoyage correspondant à vos critères est disponible.</p>
              <p class="app-font-family text-dark">Vous avez plusieurs options :</p>
              <ul>
              <li class="app-font-family text-dark">Vous pouvez spécifier uniquement la ville de départ.</li>
              <li class="app-font-family text-dark">Vous pouvez indiquer uniquement la ville d'arrivée.</li>
              <li class="app-font-family text-dark">Vous avez également la possibilité de préciser à la fois la ville de départ et la ville d'arrivée.</li>
              </ul>
              <p class="app-font-family text-dark">Nos systèmes calculent automatiquement des rayons pour tenir compte des villes situées à proximité et vous garantir une recherche aussi complète que possible.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec83" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec83" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec83">Est-il possible de recevoir des alertes par SMS ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec83" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec83" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">Oui, cette option est disponible.</p>
              <p class="app-font-family text-dark">Pour recevoir des alertes par SMS, vous devez remplir les conditions suivantes :</p>
              <ol class="text-dark app-font-family">
                <li>Avoir renseigné votre numéro de téléphone mobile.</li>
                <li>Avoir spécifié à la fois la ville de départ et la ville d'arrivée dans votre alerte.</li>
                <li>Avoir défini une date précise ou une plage de dates dans votre alerte.</li>
              </ol>
              <p>Dès lors que vous ne souhaitez plus recevoir d'alertes par SMS, vous pouvez les désactiver en suivant ces étapes : 
"Mon compte" => "Profil" => "Informations" => Désactivez l'option "Recevoir alertes par SMS  ?"
</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec84" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec84" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec84">Comment supprimer une alerte ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec84" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec84" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">Chaque e-mail d'alerte contient un lien en bas intitulé "Supprimer ou gérer mes alertes". </p>
              <p class="app-font-family text-dark">En cliquant sur ce lien, vous accédez à la liste de toutes vos alertes actives sur CoCarmoov. </p>
              <p class="app-font-family text-dark">Cela vous permet de supprimer ou de modifier vos alertes en toute simplicité.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec85" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec85" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec85">Quels documents apporter pour le départ ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec85" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec85" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">Les documents requis pour un co-convoyage sont :</p>
            <ol class="text-dark app-font-family">
                <li> Un permis de conduire à votre nom.</li>
                <li> La carte bancaire à votre nom qui a été utilisée pour la réservation.</li>
            </ol>
            <p class="app-font-family text-dark">Dans certains cas de co-convoyage, des documents supplémentaires peuvent être requis et doivent être imprimés et présentés au moment du départ. Ces documents, le cas échéant, sont inclus dans votre e-mail de réservation. 
</p>
<p class="app-font-family text-dark">Cela peut inclure par exemple : un contrat de co-convoyage, un bon d'enlèvement ou une expertise du véhicule.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec86" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec86" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec86">Qu'est-ce qu'un bon d'enlèvement ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec86" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec86" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">Dans le cadre de certaines co-convoyages, notamment au départ de parcs automobiles, un bon d'enlèvement est généralement inclus dans votre e-mail de réservation.</p>
              <p class="app-font-family text-dark">Ce bon d'enlèvement vous donnera l'autorisation de récupérer le véhicule.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec87" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec87" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec87">Que faire si le véhicule réservé n’est pas conforme aux conditions de circulation ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec87" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec87" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">Si le véhicule réservé n’est pas en état de rouler au moment de l’enlèvement ou ne dispose pas du nécessaire pour être déplacé (contrôle technique expiré, plaques d’immatriculation non conformes, absence de roue de secours, véhicule en réserve carburant,...), contactez-nous par e-mail à l'adresse  <a href="#"><a href='#'>contact@cocarmoov.fr</a></a> ou par téléphone au 0X XX XX XX XX afin que nous trouvions une solution.</p>
              <p class="app-font-family text-dark">Si au bout d’une heure d’attente le véhicule n’est pas prêt pour être conduit, faites signer  votre contrat de co-convoyage avec la mention “véhicule non-conforme” et signalez-le via votre tableau de bord.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec88" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec88" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec88">Que faire si le véhicule réservé n’est pas disponible sur place ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec88" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec88" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">Si le véhicule n’est pas disponible au rendez-vous d’enlèvement, contactez-nous par e-mail à l'adresse  <a href="#"><a href='#'>contact@cocarmoov.fr</a></a> ou par téléphone au 0X XX XX XX XX afin que nous trouvions une solution.</p>
                <p class="app-font-family text-dark">Si au bout d’une heure d’attente le véhicule n’est toujours pas disponible, faites signer  votre contrat de co-convoyage avec la mention “véhicule absent” et signalez-le via votre tableau de bord.
                </p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec89" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec89" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec89">Puis-je utiliser le badge télépéage qui se trouve dans la voiture ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec89" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec89" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">Non, les frais de péages sont à votre charge.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec90" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec90" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec90">Comment annuler ma réservation ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec90" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec90" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">Pour annuler votre réservation, vous devez vous rendre sur votre compte dans l'onglet "Réservations", puis sur  le co-convoyage en question.</p>
              <p class="app-font-family text-dark">Le bouton "actions" vous permet d'annuler vous même votre réservation.</p>
              <p class="app-font-family text-dark">Attention, des pénalités s’appliquent en cas d’annulation d’un co-convoyage.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec91" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec91" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec91">Ai-je des frais si j’annule un co-convoyage ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec91" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec91" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">En cas d'annulation, les pénalités suivantes s'appliquent :</p>
              <p class="app-font-family text-dark">Pour les véhicules de tourisme, les frais d'annulation sont de 25 €</p>
              <p class="app-font-family text-dark">Pour les véhicules utilitaires, les frais d'annulation sont de 50 €</p>
              <p class="app-font-family text-dark">Ces pénalités sont doublées si vous annulez moins de 48h avant le départ</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec913" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec913" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec913">Je suis absent au rendez-vous de mon co-convoyage !
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec913" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec913" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family">
              <p class="app-font-family text-dark">Si vous ne vous présentez pas le jour de votre co-convoyage, une pénalité de 100€ vous sera appliquée.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec92" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec92" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec92">Que se passe-t-il en cas de restitution tardive du véhicule ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec92" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec92" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">En cas de retard pour la restitution du véhicule, vous êtes facturé(e) par demi-journée supplémentaire sur les véhicules appartenant aux particuliers. Veuillez consulter l’onglet ‘Tarifs’ lors de la réservation pour en savoir plus.</p>
              <p class="app-font-family text-dark">Les agences de location appliqueront leurs propres tarifs.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec93" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec93" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec93">Ai-je des frais si je dépasse le nombre de kilomètres autorisés ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec93" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec93" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">Le co-convoyage vous donne 20% de kilomètres supplémentaires en plus de ce qu’il vous faut pour effectuer le trajet entre les deux adresses.</p>
              <p class="app-font-family text-dark">Si vous dépassez l’enveloppe kilométrique autorisée, vous aurez une pénalité kilométrique de 0.5€ qui sera appliquée à la clôture de votre co-convoyage.</p>
              <p class="app-font-family text-dark">Note : La compensation de 10 centimes par kilomètre concerne la distance entre les deux adresses et non les kilomètres additionnels autorisés.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec933" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec933" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec933">J’ai oublié de remettre le carburant avant la restitution du véhicule !
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec933" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec933" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">En cas d’oubli de remise au même niveau de carburant, vous serez facturé 2.50€ par litre manquant après passage du client à la station service.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec94" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec94" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec94">Que prend en compte l'état des lieux du véhicule ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec94" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec94" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">L’état des lieux prend en compte l’état extérieur et intérieur de la voiture. Il est réalisé afin que vous rendiez la voiture dans le même état que vous l'avez récupérée.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec95" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec95" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec95">Je suis un co-convoyeur particulier, que dois-je faire en cas de sinistre ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec95" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec95" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">En cas de sinistre, seul ou avec le/les tiers le cas échéant. Contactez CoCarmoov au 0X XX XX XX XX (lundi-vendredi : 9h30-17h30). </p>
              <p class="app-font-family text-dark">Remplissez un constat amiable sur papier ou via l’application “e-constat auto” en présence des autorités de police ou de gendarmerie si nécessaire. Le numéro de contrat à communiquer : XX XXX XXX </p>
            <p class="app-font-family text-dark">Si vous n'arrivez pas à nous joindre et que :  </p>
            <ul>
            <li class="app-font-family text-dark">le véhicule est en état de rouler, envoyez un e-mail à <a href='#'>qualite@cocarmoov.fr</a> et continuez votre trajet. </li>
            <li class="app-font-family text-dark">le véhicule n'est plus en état de rouler, contactez l'assistance AXA au 01 55 92 26 92 puis prévenez-nous par e-mail à l’adresse <a href='#'>qualite@cocarmoov.fr</a>  </li>
            </ul>
            <p class="app-font-family text-dark">Merci de nous envoyer le contrat de co-convoyage signé par les deux parties, les états des lieux, le constat amiable s’il y a et les photos du véhicule si vous avez continué le trajet jusqu’au point de livraison.</p>
            <p class="app-font-family text-dark">Conservez bien la preuve de pré-autorisation de caution et de la franchise s’il y a.</p>
            </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec953" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec953" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec953">Je suis co-convoyeur, j'ai une panne ou un accident !
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec953" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec953" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family">
            <ul>
            <!-- <li class="app-font-family text-dark">le véhicule est en état de rouler, envoyez un e-mail à <a href='#'>qualite@cocarmoov.fr</a> et continuez votre trajet. </li>
            <li class="app-font-family text-dark">le véhicule n'est plus en état de rouler, contactez l'assistance AXA au 01 55 92 26 92 puis prévenez-nous par e-mail à l’adresse <a href='#'>qualite@cocarmoov.fr</a>  </li>
            </ul>
            <p class="app-font-family text-dark">Merci de nous envoyer le contrat de co-convoyage signé par les deux parties, les états des lieux, le constat amiable s’il y a et les photos du véhicule si vous avez continué le trajet jusqu’au point de livraison.</p>
            <p class="app-font-family text-dark">Conservez bien la preuve de pré-autorisation de caution et de la franchise s’il y a.</p> -->
            <p class="app-font-family text-dark">De manière générale, le véhicule est dit non roulant si : </p>
           <ul class="text-dark">
            <li class="app-font-family text-dark">Immobilisation du véhicule  </li>
            <li class="app-font-family text-dark">Véhicule accidenté </li>
            <li class="app-font-family text-dark">Véhicule en Panne  </li>
            <li class="app-font-family text-dark">Voyant moteur allumé  </li>
            <li class="app-font-family text-dark">Voyant rouge ou orange sur le tableau de bord</li>
            </ul>
            <p class="text-dark app-font-family">Qui contacter ?</p>
            <ul>
            <li class="app-font-family text-dark">En cas de panne ou d’accident sur autoroute, appeler depuis une borne ou alors appeler le 112 (assistance européenne) qui vous géolocalise et vous envoie directement la dépanneuse.  </li>
            </ul>
            <p class="app-font-family text-dark">Attention : sur autoroute, l'assistance n'intervient pas, seuls les dépanneurs sous contrat et agréés par les autoroutes peuvent intervenir. </p>
            <ul>
            <li class="app-font-family text-dark">Dans le cas où ce n’est pas sur autoroute, les co-convoyeurs doivent appeler l'assistance AXA au 01 55 92 26 92 et communiquer le numéro de contrat suivant : XX XXX XXX</li>
            </ul>
            <p class="app-font-family text-dark">Les garanties</p>
            <ul>
            <li class="app-font-family text-dark">Pour le véhicule :</li>
            </ul>
            <p class="app-font-family text-dark">Pour les pannes, le véhicule est remorqué, et charge au propriétaire de s'en occuper par la suite.
En cas de sinistre ou d'accident, le véhicule est remorqué au garage le plus proche et notre assurance s'occupe des réparations.
</p>
            <p class="app-font-family text-dark">De manière générale, le véhicule est dit non roulant si : </p>
           <ul class="text-dark">
            <li>Pour le conducteur et les passagers : (plusieurs choix)</li>
            </ul>
            <p class="app-font-family text-dark">- Rapatriement (le conducteur et les passagers sont rapatriés à leur point de départ)</p>
            <p class="app-font-family text-dark">- Continuation de voyage (prise en charge des passagers/conducteur jusqu'au lieu d'arrivée)</p>
            <p class="app-font-family text-dark">Pour bénéficier des garanties d'assistance, il faut absolument que le conducteur du véhicule appelle l'assistance.</p>
           
            </div>
            </div>
          </div>
          <!-- <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec954" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec954" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec954">Qui contacter ? 
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec954" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec954" data-bs-parent="#accordionFAQ">
           
            </div>
          </div> -->
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec96" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec96" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec96">Comment déclarer un sinistre en tant que co-convoyeur ?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec96" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec96" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p>En cas de sinistre, seul ou avec le/les tiers le cas échéant. Contactez CoCarmoov au 0X XX XX XX XX​ (lundi-vendredi : 9h30-17h30).</p>
              <p class="app-font-family text-dark">Si vous n'arrivez pas à nous joindre et que :  </p>
              <ul>
              <li class="app-font-family text-dark">le véhicule est en état de rouler, envoyez un e-mail à <a href='#'>qualite@cocarmoov.fr</a> et continuez votre trajet.  </li>
              <li class="app-font-family text-dark">le véhicule n'est plus en état de rouler, contactez l'assistance AXA au 01 55 92 26 92 (numéro de contrat à communiquer : XX XXX XXX) puis prévenez-nous par e-mail à l’adresse <a href='#'>qualite@cocarmoov.fr</a>  </li>
             </ul>
              <p class="app-font-family text-dark">Merci de nous envoyer le contrat de co-convoyage signé par les deux parties, les états des lieux, le constat amiable s’il y a et les photos du véhicule si vous avez continué le trajet jusqu’au point de livraison.</p>
              <p class="app-font-family text-dark">Conservez bien la preuve de pré-autorisation de caution et de la franchise s’il y a.</p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
          </div>
          <div class="tab-pane fade" id="pills-how-do-i-repay" role="tabpanel"
            aria-labelledby="pills-how-do-i-repay-tab">
            <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="accordion accordion-border-bottom" id="accordionFAQ">
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d101" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d101" aria-expanded="true"
              aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d101">Comment devenir convoyeur partenaire ?
            </h2>
            <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d101"
              class="accordion-collapse collapse border-0"
              aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d101" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">Si vous souhaitez contribuer au marché de la mobilité automobile aujourd'hui, vous pouvez devenir convoyeur partenaire et ainsi déplacer, en conduisant, des véhicules partout en France !</p>
              <p class="app-font-family text-dark">Pour cela, rendez-vous sur <a href="{{route('convoyor')}}">https://www.cocarmoov.fr/convoyeur</a> </p>
        <p class="app-font-family text-dark">Pour toutes questions, merci de contacter le service concerné à l'adresse : <a href="#">convoyeur@cocarmoov.fr</a> </p>    
            </div>
    </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="pills-how-do-i-transport" role="tabpanel"
            aria-labelledby="pills-how-do-i-transport-tab">
            <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="accordion accordion-border-bottom" id="accordionFAQ">
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 app-font-family"
              id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d102" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d102" aria-expanded="false"
              aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d102">Comment devenir transporteur partenaire ?
            </h2>
            <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d102"
              class="accordion-collapse collapse border-0"
              aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d102" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content app-font-family"><p class="app-font-family text-dark">Si vous êtes transporteur (dépanneur, remorqueur, porte 1 à 12 véhicules) et que vous souhaitez proposer vos services !</p>
              <p class="app-font-family text-dark">Pour cela, rendez-vous sur <a href="{{route('transporteur')}}">https://www.cocarmoov.fr/transporteur</a></p>
        <p class="app-font-family text-dark">Vous pouvez aussi contacter notre équipe en charge de la relation prestataire par e-mail : <a href="#">transporteur@cocarmoov.fr</a> ou par téléphone au 0X XX XX XX XX.</p>    
            </div>
    </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section mail-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
                <img src="{{asset('images/wallet/mail.png')}}" class="qa-find-img"  style="max-width: 40%; height:auto;" />
					<h2 class="mb-3 qa-find-h text-light">Contactez CoCarmoov</h2>
                    <p class="mb-3 qa-banner-p text-light">Une question à laquelle nous n’y avons pas répondu,<br> 
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
<p class="mb-2 qa-banner-p text-light mt-2 app-font-family">Quelle est votre adresse e-mail  ?</p>
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