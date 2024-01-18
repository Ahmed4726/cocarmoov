@extends('admin.admin_layout')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Password Reset</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
              <ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link active" href="#activity" data-toggle="tab">Profil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('password_update')}}" data-toggle="tab">Password</a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
    </li> -->
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
              

                    <form id="loginForm" class="form-horizontal" method="POST" action="{{ route('login') }}">
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
                 <h2>Company</h2>
                 <div class="form-group">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>

                    <div class="form-group">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>
                    <!-- /.post -->
                    <h2>Language</h2>
                 <div class="form-group">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>

                    <div class="form-group">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>
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
                    <!-- /.post -->
                    <h2>Bank account details</h2>
                 <div class="form-group">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>

                    <div class="form-group">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>
                    <!-- /.post -->
                    <h2>Documents</h2>
                 <div class="form-group">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>

                    <div class="form-group">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
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
 </div>
