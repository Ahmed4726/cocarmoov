@extends('frontend.frontend_main_layout')
@section('content')
<section class="page-header insurance-header">
  <div class="container">
    <div class="row">
      <div class="col-8 mx-auto text-center">
        <img src="{{asset('images/wallet/insurance_head_img2.png')}}" class="insurance-header-img"  style="max-width: 100%; height:auto;" />
        <h2 class="mb-3 text-capitalize insurance-header-text insurance-header-h2">Assurance Wakam</h2>
        <h4 class="insurance-header-text mb-3 text-capitalize">100% tous risques</h4>
        <!-- <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
          <li class="list-inline-item"><a href="index.html">Home</a>
          </li>
          <li class="list-inline-item">/ &nbsp; <a href="privacy-policy.html">Privacy Policy</a>
          </li>
        </ul> -->
      </div>
    </div>
  </div>
</section>

<section class="section insurance-section-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="content text-center">
       
        <img src="{{asset('images/wallet/assurance-wakam-cocarmoov.png')}}" class="insurance-header-img"  style="max-width: 60%; height:auto;" />
          <p class="text-center section-2-text insuarnce-text-2 text-dark">Assurance Wakam avec assistance AXA pour toute la durée du transport.</p>
            <p class="text-center section-2-text text-dark insuarnce-text-3">Votre véhicule est automatiquement assuré.</p>
        </div>
      </div> 
     </div>
  </div>
</section>
<section class="section insurance-section-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <div class="content">
        <img src="{{asset('images/wallet/insurance-section-3.png')}}"  style="max-width: 30%; height:auto;" />
        <h3 class="text-center section-3-h text-light mb-5">Comment fonctionne l’assurance ?</h3>
          <p class="text-center section-2-text text-light">En partenariat avec le groupe d'assurance Wakam, CoCarmoov vous offre une assurance automobile. </p>
            <p class="text-center section-2-text text-light">Pendant la réalisation de chaque Co-convoyage ou Convoyage sur CoCarmoov, l'assurance Wakam remplace automatiquement l'assurance du propriétaire.</p>
            <!-- <p class="text-center section-2-text text-light">Vous n'avez aucune démarche à effectuer.</p> -->
            <p class="text-center section-2-text text-light">Un sinistre ! c'est l'assurance de CoCarmoov qui garantit la couverture complète pour le propriétaire, sans risquer de malus.</p>
        </div>
      </div> 
     </div>
  </div>
</section>
<section class="section insurance-section-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <div class="content">
        <img src="{{asset('images/wallet/insurance-section-4.png')}}" class="insurance-4-section-img"  style="max-width: 40%; height:auto;" />
          <h3 class="text-center section-4-h text-dark mb-5">Quelles sont les garanties de l’assurance ?</h3>
            <h4 class="text-center  text-dark">Dommages aux biens</h4>
            <div class="row">
                <div class="col-lg-6 col-md-12 ">
                    <p class="text-end section-2-text text-dark section-4-row">Dommages tout accident</p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="text-center section-2-text text-dark">45.000€ HT</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p class="text-end section-2-text text-dark section-4-row">Incendie, foudre, tempêtes</p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="text-center section-2-text text-dark">45.000€ HT</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p class="text-end section-2-text text-dark section-4-row">Catastrophes Naturelles</p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="text-center section-2-text text-dark">45.000€ HT</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p class="text-end section-2-text text-dark section-4-row">Vol du véhicule</p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="text-center section-2-text text-dark">45.000€ HT</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p class="text-end section-2-text text-dark section-4-row">Attentats</p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="text-center section-2-text text-dark">45.000€ HT</p>
                </div>
            </div>
            <h3 class="text-center  text-dark">Responsabilité civile circulation</h3>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <p class="text-end section-2-text text-dark section-4-row">Dommage matériel</p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p class="text-center section-2-text text-dark ">1.300.000€ HT</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <p class="text-end section-2-text text-dark section-4-row">Dommage corporel</p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p class="text-center section-2-text text-dark ">Illimité</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <p class="text-end section-2-text text-dark section-4-row">Défense pénale et recours</p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p class="text-center section-2-text text-dark">13.500€ HT</p>
                </div>
            </div>
            <h3 class="text-center text-dark">Liste des franchises pour le conducteur</h3>
            <div class="row">
                <div class="col-md-6 col-sm-12">  
                <p class="text-center section-2-text text-dark text-end"><b>Responsabilité civile</b></p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p class="section-2-text text-dark text-center">sans Franchise</p>
                </div>
           
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">  
                <p class="text-center section-2-text text-dark"><b>Défense et recours</b></p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p class="text-center section-2-text text-dark">Franchise de 300€ HT</p>
                </div>
             
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">  
                <p class="text-center section-2-text text-dark"><b>Dommages du véhicule</b></p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p class="text-center section-2-text text-dark">Franchise de 20%, minimum 2.500€ HT, maximum 5.000€ HT</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">  
                <p class="text-center section-2-text text-dark"><b>Incendie du véhicule</b></p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p class="text-center section-2-text text-dark">Franchise de 20%, minimum 2.500€ HT, maximum 5.000€ HT</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">  
                <p class="text-center section-2-text text-dark"><b>Catastrophes Naturelles</b></p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p class="text-center section-2-text text-dark">Franchise de 20%, minimum 2.500€ HT, maximum 5.000€ HT </p>
                </div>
               
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">  
                <p class="text-center section-2-text text-dark"><b>Vol du véhicule</b></p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p class="text-center section-2-text text-dark">Franchise de 20%, minimum 2.500€ HT, maximum 5.000€ HT</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">  
                <p class="text-center section-2-text text-dark"><b>Attentats</b></p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p class="text-center section-2-text text-dark">Franchise de 20%, minimum 2.500€ HT, maximum 5.000€ HT</p>
                </div>
            </div>
        </div>
      </div> 
     </div>
  </div>
</section>
<section class="section section-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="content">
        <img src="{{asset('images/wallet/insurance-section-5.png')}}" class="insurance-5-section-img mx-auto d-block"  style="max-width: 35%; height:auto;" />

          <h3 id="application-processing" class="section-5-h text-center">Quelles sont les conditions d’assurance ?</h3>
          <h4 id="intellectual-property-rights">Pour le conducteur du véhicule</h4>
          <ul class="section-2-text text-dark">
            <li>Age du conducteur : 25 ans minimum.</li>
            <li>Ancienneté du permis : 2 ans minimum.</li>
            <li>Zone de circulation autorisée : France et jusqu’à 2 frontières limitrophes.</li>
          </ul>
          <h4 id="the-use-of-the-information">Pour le propriétaire du véhicule</h4>
          <ul class="section-2-text text-dark">
            <li>Type de véhicule autorisé : 4 roues & tonnage inférieur ou égal à 3,5 tonnes.</li>
            <li>Identification du véhicule : immatriculation française ou étrangère.</li>
            <li>Assurance du véhicule : être assuré à l’année en cas de panne moteur.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section insurance-section-6">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <div class="content">
        <img src="{{asset('images/wallet/insurance-section-6.png')}}" class="insurance-6-section-img"  style="max-width: 30%; height:auto;" />
          <h3 class="text-center section-6-h text-light mb-5">Contrat d’assurance</h3>
            <p class="text-center section-2-text text-light">Consulter l’intégralité des termes contractuelles d’assurance à l’adresse suivante</p>
            <a type="button" 
            class="btn insurance-condition-button text-white rounded-pill" href="#">
            Conditions générales d’assurance</a>
            <!-- <p class="text-center section-2-text text-dark">Pour chaque prestation CoCarmoov, l'assurance XXX complète l’assurance annuelle du propriétaire.</p>
            <p class="text-center section-2-text text-dark">Vous n'avez aucune démarche à effectuer.</p>
            <p class="text-center section-2-text text-dark">En cas de sinistre, c’est l’assurance de CoCarmoov qui intervient, ce qui permet au propriétaire d'être entièrement couvert et sans risquer de malus.</p> -->
        </div>
      </div> 
     </div>
  </div>
</section>
@endsection