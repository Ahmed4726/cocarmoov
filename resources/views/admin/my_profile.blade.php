@extends('admin.admin_layout')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid mb-5">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              <ul class="nav nav-pills">
                <li class="nav-item {{ Request::is('show_profile') ? 'active' : '' }}">
                    <a href="{{ route('profile.index') }}" class="nav-link py-0">
                        <p class="text-dark">Profil</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('password-update') ? 'active' : '' }}rounded">
                    <a href="{{ route('password.update') }}" class="nav-link py-0">
                        <p class="text-dark">Password</p>
                    </a>
                </li>
              </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  <div class="row">
                    <div class="col-md-12">
                    <h2>Information</h2>
                      <div class="text-center">
                  <!-- <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/user4-128x128.jpg"
                       alt="User profile picture"> -->
                       </div>
                       <!-- <button type="button" class="btn btn-primary text-dark text-bold"
                                            style="background-color: #FDCD02; border:none;" data-toggle="modal"
                                            data-target="#roleModal">Change profile photo</button> -->

                @if($user->note != null)
                    <label class="form-label" for="note">Note from admin</label>
                    <input class="form-control" name="note" id="note" value="{{$user->note}}" readonly>
                @endif
                Status: <span style="color:
    @switch($user->status)
        @case('Pending')
            orange; /* Or any other color for pending status */
            @break
        @case('Under Review')
            blue; /* Or any other color for under review status */
            @break
        @case('Verified')
            green; /* Or any other color for verified status */
            @break
        @default
            black; /* Default color */
    @endswitch
">
    {{ $user->status }}
</span>
                <form id="profile_form" method="POST" action="/profile-update" enctype="multipart/form-data">
                        @csrf
                    <!-- Email Address -->
                    <div class="form-group mt-2">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="entrez votre Prénom"  value="{{ $user->email }}"  required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="name">Prénom</label>
                        <input type="text" class="form-control" id="name" name="last_name" placeholder="entrez votre Nom" value="{{ $user->last_name }}" required autofocus>
                    </div>
					<div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" name="family_name" value="{{ $user->family_name }}" required>
                    </div>
					<div class="form-group">
                        <label for="name">Numéro de téléphone</label>
                        <input type="text" class="form-control" id="name" name="phone_number" value="{{ $user->phone_number }}"  required>
                    </div>
                    <div class="form-group">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" value="{{ $user->birthday }}">
                    </div>
                 <h2>Informations sur l'Entreprise</h2>
                 <div class="form-group">
                    <label for="company_name">Raison sociale de l'entreprise</label>
                    <input type="text" class="form-control" id="company_name" name="company_name" value="{{ $user->company_name }}">
                    </div>
                 <div class="form-group">
                    <label for="adddress">Adresse</label>
                    <input type="text" class="form-control" id="birthday" name="adddress" value="{{ $user->adddress }}">
                    </div>

                    <div class="form-group">
                    <label for="postal_code">Code postal</label>
                    <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ $user->postal_code }}">
                    </div>
                    <div class="form-group">
                    <label for="birthday">Ville</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{ $user->city }}">
                    </div>
                    <!-- /.post -->
                    <h2>langues</h2>
                    <div class="form-group">
                    <label for="languages">langues</label>
                    <input type="text" class="form-control" id="language" name="language" value="{{ $user->language }}">
                    </div>

                    <!-- <div class="form-group">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                    </div> -->
                    <!-- /.post -->
                    <h2>Driving lisence</h2>
                 <div class="form-group">
                    <label for="date">Date de issuence</label>
                    <input type="date" class="form-control" id="issue_date" name="issue_date" value="{{ $user->issue_date }}">
                    </div>

                    <div class="form-group">
                    <label for="date">Date de expire</label>
                    <input type="date" class="form-control" id="expiry_date" name="expiry_date" value="{{ $user->expiry_date }}">
                    </div>
                    <div class="form-group">
                    <label for="birthday">Lieu de naissance</label>
                    <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" value="{{ $user->place_of_birth }}">
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
                    <input type="text" class="form-control" id="account_owner" name="account_owner" value="{{ $user->account_owner }}">
                    </div>
                    <div class="form-group">
                    <label for="birthday">Numéro IBAN</label>
                    <input type="text" class="form-control" id="IBAN_number" name="IBAN_number" value="{{ $user->IBAN_number }}">
                    </div>
                    <div class="form-group">
                    <label for="birthday">Code BIC</label>
                    <input type="text" class="form-control" id="swift_code" name="swift_code" value="{{ $user->swift_code }}">
                    </div>
                    <div class="form-group">
                    <label for="birthday">Numéro de carte bancaire</label>
                    <input type="text" class="form-control" id="card_number" name="card_number" value="{{ $user->card_number }}">
                    </div>
                    <div class="form-group">
                        <label for="birthday">Stripe account ID</label>
                        <input type="text" class="form-control" id="stripe_account_id" name="stripe_account_id" value="{{ $user->stripe_account_id }}">
                    </div>

                    <!-- /.post -->
                    <h2>Fichiers</h2>

                    <!-- Photo -->
                <div class="form-group">
                    <label for="photo">Photo</label>
                    @if($user->photo)
                        <img id="photoPreview" src="{{ asset($user->photo) }}" alt="Photo Preview" style="max-width: 200px;">
                    @else
                        <img id="photoPreview" src="#" alt="Photo Preview" style="display: none; max-width: 200px;">
                    @endif
                    <input type="file" class="form-control" name="photo" id="photo" onchange="previewImage(this, 'photoPreview')">
                </div>

                <!-- ID Card -->
                <div class="form-group">
                    <label for="id_card">Pièce d'identité</label>
                    @if($user->id_card)
                        <img id="idCardPreview" src="{{ asset($user->id_card) }}" alt="ID Card Preview" style="max-width: 200px;">
                    @else
                        <img id="idCardPreview" src="#" alt="ID Card Preview" style="display: none; max-width: 200px;">
                    @endif
                    <input type="file" class="form-control" name="id_card" id="id_card" onchange="previewImage(this, 'idCardPreview')">
                </div>

                <!-- Mission Document -->
                <div class="form-group">
                    <label for="mission_document">Documents de mission</label>
                    @if($user->mission_document)
                        <img id="missionDocumentPreview" src="{{ asset($user->mission_document) }}" alt="Mission Document Preview" style="max-width: 200px;">
                    @else
                        <img id="missionDocumentPreview" src="#" alt="Mission Document Preview" style="display: none; max-width: 200px;">
                    @endif
                    <input type="file" class="form-control" name="mission_document" id="mission_document" onchange="previewImage(this, 'missionDocumentPreview')">
                </div>

                <!-- Driving License -->
                <div class="form-group">
                    <label for="driving_license">Permis de conduire</label>
                    @if($user->driving_lisence)
                        <img id="drivingLisensePreview" src="{{ asset($user->driving_lisence) }}" alt="Driving License Preview" style="max-width: 200px;">
                    @else
                        <img id="drivingLisensePreview" src="#" alt="Driving License Preview" style="display: none; max-width: 200px;">
                    @endif
                    <input type="file" class="form-control" name="driving_lisence" id="driving_lisence" onchange="previewImage(this, 'drivingLisensePreview')">
                </div>

                <!-- Extrait KBis -->
                <div class="form-group">
                    <label for="company_registration">Extrait KBis</label>
                    @if($user->company_registeration)
                        <img id="company_registerationPreview" src="{{ asset($user->company_registeration) }}" alt="Company Registration Preview" style="max-width: 200px;">
                    @else
                        <img id="company_registerationPreview" src="#" alt="Company Registration Preview" style="display: none; max-width: 200px;">
                    @endif
                    <input type="file" class="form-control" name="company_registeration" id="company_registeration" onchange="previewImage(this, 'company_registerationPreview')">
                </div>

                <!-- Responsabilité civile professionnelle -->
                <div class="form-group">
                    <label for="professional_liabilities">Responsabilité civile professionnelle</label>
                    @if($user->professional_liabilities)
                        <img id="professionalLiabilitiesPreview" src="{{ asset($user->professional_liabilities) }}" alt="Professional Liabilities Preview" style="max-width: 200px;">
                    @else
                        <img id="professionalLiabilitiesPreview" src="#" alt="Professional Liabilities Preview" style="display: none; max-width: 200px;">
                    @endif
                    <input type="file" class="form-control" name="professional_liabilities" id="professional_liabilities" onchange="previewImage(this, 'professionalLiabilitiesPreview')">
                </div>

                <!-- Assurance convoyage -->
                <div class="form-group">
                    <label for="carmov_insurance">Assurance convoyage</label>
                    @if($user->carmov_insurance)
                        <img id="carmovInsurancePreview" src="{{ asset($user->carmov_insurance) }}" alt="CarMov Insurance Preview" style="max-width: 200px;">
                    @else
                        <img id="carmovInsurancePreview" src="#" alt="CarMov Insurance Preview" style="display: none; max-width: 200px;">
                    @endif
                    <input type="file" class="form-control" name="carmov_insurance" id="carmov_insurance" onchange="previewImage(this, 'carmovInsurancePreview')">
                </div>

                <!-- Plaques W garage -->
                <div class="form-group">
                    <label for="trade_plates">Plaques W garage</label>
                    @if($user->trade_plates)
                        <img id="tradePlatesPreview" src="{{ asset($user->trade_plates) }}" alt="Trade Plates Preview" style="max-width: 200px;">
                    @else
                        <img id="tradePlatesPreview" src="#" alt="Trade Plates Preview" style="display: none; max-width: 200px;">
                    @endif
                    <input type="file" class="form-control" name="trade_plates" id="trade_plates" onchange="previewImage(this, 'tradePlatesPreview')">
                </div>

                <!-- RIB -->
                <div class="form-group">
                    <label for="bank_details">RIB</label>
                    @if($user->bank_details)
                        <img id="bankDetailsPreview" src="{{ asset($user->bank_details) }}" alt="Bank Details Preview" style="max-width: 200px;">
                    @else
                        <img id="bankDetailsPreview" src="#" alt="Bank Details Preview" style="display: none; max-width: 200px;">
                    @endif
                    <input type="file" class="form-control" name="bank_details" id="bank_details" onchange="previewImage(this, 'bankDetailsPreview')">
                </div>

                <!-- Contrat signé -->
                <div class="form-group">
                    <label for="signed_contract">Contrat signé</label>
                    @if($user->signed_contract)
                        <img id="signedContractPreview" src="{{ asset($user->signed_contract) }}" alt="Signed Contract Preview" style="max-width: 200px;">
                    @else
                        <img id="signedContractPreview" src="#" alt="Signed Contract Preview" style="display: none; max-width: 200px;">
                    @endif
                    <input type="file" class="form-control" name="signed_contract" id="signed_contract" onchange="previewImage(this, 'signedContractPreview')">
                </div>

                <!-- Certificat de capacité -->
                <div class="form-group">
                    <label for="transport_capacity">Certificat de capacité</label>
                    @if($user->transport_capacity)
                        <img id="transportCapacityPreview" src="{{ asset($user->transport_capacity) }}" alt="Transport Capacity Preview" style="max-width: 200px;">
                    @else
                        <img id="transportCapacityPreview" src="#" alt="Transport Capacity Preview" style="display: none; max-width: 200px;">
                    @endif
                    <input type="file" class="form-control" name="transport_capacity" id="transport_capacity" onchange="previewImage(this, 'transportCapacityPreview')">
                </div>

                <!-- Assurance transport -->
                <div class="form-group">
                    <label for="transport_insurance">Assurance transport</label>
                    @if($user->transport_insurance)
                        <img id="transportInsurancePreview" src="{{ asset($user->transport_insurance) }}" alt="Transport Insurance Preview" style="max-width: 200px;">
                    @else
                        <img id="transportInsurancePreview" src="#" alt="Transport Insurance Preview" style="display: none; max-width: 200px;">
                    @endif
                    <input type="file" class="form-control" name="transport_insurance" id="transport_insurance" onchange="previewImage(this, 'transportInsurancePreview')">
                </div>

                <!-- Carte grise véhicule transporteur -->
                <div class="form-group">
                    <label for="vehicle_carrier_reg">Carte grise véhicule transporteur</label>
                    @if($user->vehicle_carrier_reg)
                        <img id="vehicleCarrierRegPreview" src="{{ asset($user->vehicle_carrier_reg) }}" alt="Vehicle Carrier Reg Preview" style="max-width: 200px;">
                    @else
                        <img id="vehicleCarrierRegPreview" src="#" alt="Vehicle Carrier Reg Preview" style="display: none; max-width: 200px;">
                    @endif
                    <input type="file" class="form-control" name="vehicle_carrier_reg" id="vehicle_carrier_reg" onchange="previewImage(this, 'vehicleCarrierRegPreview')">
                </div>

                <!-- Attestation de cotisations sur les revenus à jour -->
                <div class="form-group">
                    <label for="income_contribution">Attestation de cotisations sur les revenus à jour</label>
                    @if($user->income_contribution)
                        <img id="incomeContributionPreview" src="{{ asset($user->income_contribution) }}" alt="Income Contribution Preview" style="max-width: 200px;">
                    @else
                        <img id="incomeContributionPreview" src="#" alt="Income Contribution Preview" style="display: none; max-width: 200px;">
                    @endif
                    <input type="file" class="form-control" name="income_contribution" id="income_contribution" onchange="previewImage(this, 'incomeContributionPreview')">
                </div>



                    <!-- Test d'État des Lieux -->
                    <h2>Test d'État des Lieux</h2>

                    <div class="form-group">
                        @if($user->vehicle_condition_test)
                            <img id="vehicle_condition_testPreview" src="{{ asset($user->vehicle_condition_test) }}" alt="Vehicle Condition Test" style="max-width: 200px;">
                        @else
                            <img id="vehicle_condition_testPreview" src="#" alt="Vehicle Condition Test" style="display: none; max-width: 200px;">
                        @endif
                        <input type="file" class="form-control" name="vehicle_condition_test" id="vehicle_condition_test" onchange="previewImage(this, 'vehicle_condition_testPreview')">
                    </div>
                    @if($user->status == 'Pending' || $user->status == 'Under review')
    <div class="text-center">
        <button class="btn btn-warning" type="submit">Submit Profile</button>
    </div>
@endif

                            <!-- /.post -->
                        </div>
                        </div>
                        </div>

                </form>
                  </div>
                  </div>
                </div>
                  <!-- /.tab-pane -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<script>
    function displayFileName() {
        const fileInput = document.getElementById('file');
        const filenameDisplay = document.getElementById('filename');
        filenameDisplay.innerText = fileInput.files[0].name;
    }

    function previewImage(input, imageId) {
        const preview = document.getElementById(imageId);
        const file = input.files[0];
        const reader = new FileReader();

        reader.onload = function (e) {
            preview.src = e.target.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    }

</script>
@endsection
