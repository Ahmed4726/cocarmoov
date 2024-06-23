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
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid mb-5">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
            </div>
        @endif
            <div class="card">
              <div class="card-header">
              <ul class="nav nav-pills">
                <li class="nav-item {{ Request::is('show_profile') ? 'active' : '' }}">
                    <a href="{{ route('profile.index') }}" class="nav-link py-0">
                        <p class="text-dark">Profil</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('password-update') ? 'active' : '' }} rounded">
                    <a href="{{ route('password.form') }}" class="nav-link py-0">
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
              <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="password" class="form-control" id="current_password" name="current_password" required>
                </div>

                <div class="form-group">
                    <label for="new_password">New Password</label>
                    <input type="password" class="form-control" id="new_password" name="new_password" required>
                </div>

                <div class="form-group">
                    <label for="new_password_confirmation">Confirm New Password</label>
                    <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required>
                </div>

                <button type="submit" class="btn btn-primary">Update Password</button>
            </form>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>
@endsection
