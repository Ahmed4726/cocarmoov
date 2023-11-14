@extends('frontend.frontend_main_layout')
@section('content')
<section class="page-header insurance-header">
  <div class="container">
    <div class="row">
      <div class="col-8 mx-auto text-center">
        <img src="{{asset('images/wallet/politique-confidentialite-cocarmoov.png')}}" class="insurance-header-img img-fluid"  style="max-width: 100%; height:auto;" />
        <h2 class="mb-3 text-capitalize privacy-header-text privacy-header-h2">Mentions légales</h2>
      </div>
    </div>
  </div>
</section>
<section class="section section-blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">	
            <ul class="mt-5">
                <li class="text-dark font-family-all privacy-li">
                Éditeur :
                </li>
            </ul> 
            <p class="text-dark font-family-all privacy-p">CoCarmoov<br>
SAS au capital de XX.XXX EUR<br>
SIRET XXX XXX XXX XXX - APE 7990Z - R.C.S Marseille XXX XXX XXX<br>
Identification intracommunautaire FR XXX XXX XXX XX<br>
Siège social : 10 rue de la République 13001 Marseille<br>
</p>
<ul class="mt-5">
                <li class="text-dark font-family-all privacy-li">
                Hébérgeur :
                </li>
            </ul> 
            <p class="text-dark font-family-all privacy-p">IONOS<br>
SARL au capital de 100.000 EUR<br>
SIRET 431 303 775 000 16 - APE 642 B - R.C.S Sarreguemines B 431 303 775<br>
Identification intracommunautaire FR 13 431 303 775<br>
Siège social : 7, place de la gare BP 70109 - 57201 Sarreguemines Cedex<br>

</p>
        </div>
    </div>
    </div> 
</section>         
@endsection