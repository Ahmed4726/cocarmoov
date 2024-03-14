@extends('admin.admin_layout')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{ $user->family_name }}</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
    <div class="form-group mt-2">
        <label for="email">Adresse e-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="entrez votre Prénom"  value="{{ $user->email }}"  required readonly>
    </div>
    <div class="form-group">
        <label for="name">Prénom</label>
        <input type="text" class="form-control" id="name" name="last_name" placeholder="entrez votre Nom" value="{{ $user->last_name }}" required  readonly>
    </div>
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" class="form-control" id="name" name="family_name" value="{{ $user->family_name }}" required readonly>
    </div>
    <div class="form-group">
        <label for="name">Numéro de téléphone</label>
        <input type="text" class="form-control" id="name" name="phone_number" value="{{ $user->phone_number }}"  required readonly>
    </div>
    <div class="form-group">
    <label for="birthday">Date de naissance</label>
    <input type="date" class="form-control" id="birthday" name="birthday" value="{{ $user->birthday }}" readonly>
    </div>
 <h2>Informations sur l'Entreprise</h2>
 <div class="form-group">
    <label for="company_name">Raison sociale de l'entreprise</label>
    <input type="text" class="form-control" id="company_name" name="company_name" value="{{ $user->company_name }}" readonly>
    </div>
 <div class="form-group">
    <label for="adddress">Adresse</label>
    <input type="text" class="form-control" id="birthday" name="adddress" value="{{ $user->adddress }}" readonly>
    </div>

    <div class="form-group">
    <label for="postal_code">Code postal</label>
    <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ $user->postal_code }}" readonly>
    </div>
    <div class="form-group">
    <label for="birthday">Ville</label>
    <input type="text" class="form-control" id="city" name="city" value="{{ $user->city }}" readonly>
    </div>
    <!-- /.post -->
    <h2>langues</h2>
    <div class="form-group">
    <label for="languages">langues</label>
    <input type="text" class="form-control" id="language" name="language" value="{{ $user->language }}" readonly>
    </div>

    <!-- <div class="form-group">
    <label for="birthday">Date de naissance</label>
    <input type="date" class="form-control" id="birthday" name="birthday">
    </div> -->
    <!-- /.post -->
    <h2>Driving lisence</h2>
 <div class="form-group">
    <label for="date">Date de issuence</label>
    <input type="date" class="form-control" id="issue_date" name="issue_date" value="{{ $user->issue_date }}" readonly>
    </div>

    <div class="form-group">
    <label for="date">Date de expire</label>
    <input type="date" class="form-control" id="expiry_date" name="expiry_date" value="{{ $user->expiry_date }}" readonly>
    </div>
    <div class="form-group">
    <label for="birthday">Lieu de naissance</label>
    <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" value="{{ $user->place_of_birth }}" readonly>
    </div>
    <div class="form-group">
    {{-- <label for="birthday">Date de naissance</label>
    <input type="date" class="form-control" id="birthday" name="birthday" value="{{ $user->birthday }}">
    </div>
    <div class="form-group">
    <label for="birthday">Date de naissance</label>
    <input type="date" class="form-control" id="birthday" name="birthday" value="{{ $user->birthday }}">
    </div> --}}
    <!-- /.post -->
    <h2>Bank account details</h2>
 <div class="form-group">
    <label for="birthday">Titulaire du compte</label>
    <input type="text" class="form-control" id="account_owner" name="account_owner" value="{{ $user->account_owner }}" readonly>
    </div>
    <div class="form-group">
    <label for="birthday">Numéro IBAN</label>
    <input type="text" class="form-control" id="IBAN_number" name="IBAN_number" value="{{ $user->IBAN_number }}" readonly>
    </div>
    <div class="form-group">
    <label for="birthday">Code BIC</label>
    <input type="text" class="form-control" id="swift_code" name="swift_code" value="{{ $user->swift_code }}" readonly>
    </div>
    <div class="form-group">
    <label for="birthday">Numéro de carte bancaire</label>
    <input type="text" class="form-control" id="card_number" name="card_number" value="{{ $user->card_number }}" readonly>
    </div>
    {{-- <section class="content"> --}}

            <h2>Fichiers</h2>

<!-- Photo -->
<div class="form-group">
    <label for="photo">Photo</label>
    @if($user->photo)
        <a href="{{ asset($user->photo) }}" target="_blank">  View</a>
    @endif
    {{-- <input type="file" class="form-control" name="photo" id="photo"> --}}
</div>

<!-- Pièce d'identité -->
<div class="form-group">
    <label for="id_card">Pièce d'identité</label>
    @if($user->id_card)
        <a href="{{ asset($user->id_card) }}" target="_blank">  View</a>
    @endif
    {{-- <input type="file" class="form-control" name="id_card" id="id_card"> --}}
</div>

<!-- Documents de mission -->
<div class="form-group">
    <label for="mission_document">Documents de mission</label>
    @if($user->mission_document)
        <a href="{{ asset($user->mission_document) }}" target="_blank">  View</a>
    @endif
    {{-- <input type="file" class="form-control" name="mission_document" id="mission_document"> --}}
</div>

<!-- Permis de conduire -->
<div class="form-group">
    <label for="driving_lisence">Permis de conduire</label>
    @if($user->driving_lisence)
        <a href="{{ asset($user->driving_lisence) }}" target="_blank">  View</a>
    @endif
    {{-- <input type="file" class="form-control" name="driving_lisence" id="driving_lisence"> --}}
</div>

<!-- Extrait KBis -->
<div class="form-group">
    <label for="company_registeration">Extrait KBis</label>
    @if($user->company_registeration)
        <a href="{{ asset($user->company_registeration) }}" target="_blank">  View</a>
    @endif
    {{-- <input type="file" class="form-control" name="company_registeration" id="company_registeration"> --}}
</div>

<!-- Responsabilité civile professionnelle -->
<div class="form-group">
    <label for="professional_liabilities">Responsabilité civile professionnelle</label>
    @if($user->professional_liabilities)
        <a href="{{ asset($user->professional_liabilities) }}" target="_blank">  View</a>
    @endif
    {{-- <input type="file" class="form-control" name="professional_liabilities" id="professional_liabilities"> --}}
</div>

<!-- Assurance convoyage -->
<div class="form-group">
    <label for="carmov_insurance">Assurance convoyage</label>
    @if($user->carmov_insurance)
        <a href="{{ asset($user->carmov_insurance) }}" target="_blank">  View</a>
    @endif
    {{-- <input type="file" class="form-control" name="carmov_insurance" id="carmov_insurance"> --}}
</div>

<!-- Plaques W garage -->
<div class="form-group">
    <label for="trade_plates">Plaques W garage</label>
    @if($user->trade_plates)
        <a href="{{ asset($user->trade_plates) }}" target="_blank">  View</a>
    @endif
    {{-- <input type="file" class="form-control" name="trade_plates" id="trade_plates"> --}}
</div>

<!-- RIB -->
<div class="form-group">
    <label for="bank_details">RIB</label>
    @if($user->bank_details)
        <a href="{{ asset($user->bank_details) }}" target="_blank">  View</a>
    @endif
    {{-- <input type="file" class="form-control" name="bank_details" id="bank_details"> --}}
</div>

<!-- Contrat signé -->
<div class="form-group">
    <label for="signed_contract">Contrat signé</label>
    @if($user->signed_contract)
        <a href="{{ asset($user->signed_contract) }}" target="_blank">  View</a>
    @endif
    {{-- <input type="file" class="form-control" name="signed_contract" id="signed_contract"> --}}
</div>

<!-- Certificat de capacité -->
<div class="form-group">
    <label for="transport_capacity">Certificat de capacité</label>
    @if($user->transport_capacity)
        <a href="{{ asset($user->transport_capacity) }}" target="_blank">  View</a>
    @endif
    {{-- <input type="file" class="form-control" name="transport_capacity" id="transport_capacity"> --}}
</div>

<!-- Assurance transport -->
<div class="form-group">
    <label for="transport_insurance">Assurance transport</label>
    @if($user->transport_insurance)
        <a href="{{ asset($user->transport_insurance) }}" target="_blank">  View</a>
    @endif
    {{-- <input type="file" class="form-control" name="transport_insurance" id="transport_insurance"> --}}
</div>

<!-- Carte grise véhicule transporteur -->
<div class="form-group">
    <label for="vehicle_carrier_reg">Carte grise véhicule transporteur</label>
    @if($user->vehicle_carrier_reg)
        <a href="{{ asset($user->vehicle_carrier_reg) }}" target="_blank">  View</a>
    @endif
    {{-- <input type="file" class="form-control" name="vehicle_carrier_reg" id="vehicle_carrier_reg"> --}}
</div>

<!-- Attestation de cotisations sur les revenus à jour -->
<div class="form-group">
    <label for="income_contribution">Attestation de cotisations sur les revenus à jour</label>
    @if($user->income_contribution)
        <a href="{{ asset($user->income_contribution) }}" target="_blank">  View</a>
    @endif
    {{-- <input type="file" class="form-control" name="income_contribution" id="income_contribution"> --}}
</div>

<!-- Test d'État des Lieux -->
<h2>Test d'État des Lieux</h2>

<div class="form-group">
    <label for="vehicle_condition_test">Etat des lieux Test</label>
    @if($user->vehicle_condition_test)
        <a href="{{ asset($user->vehicle_condition_test) }}" target="_blank">  View</a>
    @endif
    {{-- <input type="file" class="form-control" name="vehicle_condition_test" id="vehicle_condition_test"> --}}
</div>

<label class="form-label" for="note">Note</label>
<div class="text-center">
    <form action="/profile-decision" method="POST">
        @csrf
    <input type="hidden" name="user_id" value="{{ $user->id }}">
    <textarea class="form-control" name="note" id="note" cols="1" rows="4"></textarea>
    <br>
    <button name="status" value="0" class="btn btn-danger" type="submit">Revise Profile</button>
    <button name="status" value="1" class="btn btn-warning" type="submit">Approve Profile</button>
</form>
    <br>
    <br>
    <br>
    <br>
</div>

        </div>
    {{-- </section> --}}
 </div>
@endsection
