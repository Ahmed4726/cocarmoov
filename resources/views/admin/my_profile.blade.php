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
              

                    <form id="loginForm" method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email Address -->
                    <div class="form-group mt-2">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="entrez votre Prénom"  value=""  required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="name">Prénom</label>
                        <input type="text" class="form-control" id="name" name="last_name" placeholder="entrez votre Nom" required autofocus>
                    </div>
					<div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" name="family_name" required>
                    </div>
					<div class="form-group">
                        <label for="name">Numéro de téléphone</label>
                        <input type="text" class="form-control" id="name" name="phone_number"  required>
                    </div>
                    <div class="form-group">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>
                 <h2>Informations sur l'Entreprise</h2>
                 <div class="form-group">
                    <label for="birthday">Raison sociale de l'entreprise</label>
                    <input type="text" class="form-control" id="birthday" name="company_name">
                    </div>
                 <div class="form-group">
                    <label for="birthday">Adresse</label>
                    <input type="text" class="form-control" id="birthday" name="adddress">
                    </div>

                    <div class="form-group">
                    <label for="birthday">Code postal</label>
                    <input type="text" class="form-control" id="birthday" name="postal_code">
                    </div>
                    <div class="form-group">
                    <label for="birthday">Ville</label>
                    <input type="text" class="form-control" id="birthday" name="city">
                    </div>
                    <!-- /.post -->
                    <h2>langues</h2>
                    <div class="form-group">
                    <label for="languages">langues</label>
                    <input type="text" class="form-control" id="birthday" name="language">
                    </div>

                    <!-- <div class="form-group">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                    </div> -->
                    <!-- /.post -->
                    <h2>Driving lisence</h2>
                 <div class="form-group">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>

                    <div class="form-group">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>
                    <div class="form-group">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>
                    <div class="form-group">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>
                    <div class="form-group">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>
                    <!-- /.post -->
                    <h2>Bank account details</h2>
                 <div class="form-group">
                    <label for="birthday">Titulaire du compte</label>
                    <input type="text" class="form-control" id="birthday" name="birthday">
                    </div>
                    <div class="form-group">
                    <label for="birthday">Numéro IBAN</label>
                    <input type="text" class="form-control" id="birthday" name="birthday">
                    </div>
                    <div class="form-group">
                    <label for="birthday">Code BIC</label>
                    <input type="text" class="form-control" id="birthday" name="swift_code">
                    </div>
                    <div class="form-group">
                    <label for="birthday">Numéro de carte bancaire</label>
                    <input type="text" class="form-control" id="birthday" name="card_number">
                    </div>
                    <!-- /.post -->
                    <h2>Fichiers</h2>
                 <div class="form-group">
                 <label for="birthday">Photo</label>
                <input type="file" class="form-control" name="photo" id="filename">
                    </div>
                    <div class="form-group">
                 <label for="birthday">Pièce d'identité</label>
                <input type="file" class="form-control" name="id_card" id="filename">
                    </div>
                    <div class="form-group">
                 <label for="birthday">Documents de mission</label>
                <input type="file" class="form-control" name="mission_document" id="filename">
                    </div>
                    <div class="form-group">
                 <label for="birthday">Permis de conduire</label>
                <input type="file" class="form-control" name="driving_lisence" id="filename">
                    </div>
                    <div class="form-group">
                 <label for="birthday">Extrait KBis</label>
                <input type="file" class="form-control" name="company_registeration" id="filename">
                    </div>
                    <div class="form-group">
                 <label for="birthday">Responsabilité civile professionnelle</label>
                <input type="file" class="form-control" name="professional_liabilities" id="filename">
                    </div>
                    <div class="form-group">
                 <label for="birthday">Assurance convoyage</label>
                <input type="file" class="form-control" name="carmov_insurance" id="filename">
                    </div>
                    <div class="form-group">
                 <label for="birthday">Plaques W garage</label>
                <input type="file" class="form-control" name="trade_plates" id="filename">
                    </div>
                    <div class="form-group">
                 <label for="birthday">RIB</label>
                <input type="file" class="form-control" name="bank_details" id="filename">
                    </div>
                    <div class="form-group">
                 <label for="birthday">Contrat signé</label>
                <input type="file" class="form-control" name="signed_contract" id="filename">
                    </div>
                    <div class="form-group">
                 <label for="birthday">Certificat de capacité</label>
                <input type="file" class="form-control" name="transport_capacity" id="filename">
                    </div>
                    <div class="form-group">
                 <label for="birthday">Assurance transport</label>
                <input type="file" class="form-control" name="transport_insurance" id="filename">
                    </div>
                    <div class="form-group">
                 <label for="birthday">Carte grise véhicule transporteur</label>
                <input type="file" class="form-control" name="vehicle_carrier_reg" id="filename">
                    </div>
                    <div class="form-group">
                 <label for="birthday"> Attestation de cotisations sur les revenus à jour</label>
                <input type="file" class="form-control" name="income_contribution" id="filename">
                    </div>
                    <!-- /.post -->
                    <h2>Test d'État des Lieux</h2>
                    <div class="form-group">
                 <label for="birthday">Etat des lieux Test</label>
                <input type="file" class="form-control" name="vehicle_condition_test" id="filename">
                    </div>
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
</script> 
@endsection