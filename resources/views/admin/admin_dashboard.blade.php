@extends('admin.admin_layout')
@section('content')
<head>
<!-- In your main layout or view file, typically in <head> section -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>


<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        @php
        $user=auth()->user()->email_verified_at;
        $phone = auth()->user()->phone_verification;
        @endphp
        @if ($phone === 'false')
        <!-- Button to trigger the modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#verificationModal">
            Phone Verification
        </button>
        @endif
<!-- Verification Modal -->
<div class="modal fade" id="verificationModal" tabindex="-1" role="dialog" aria-labelledby="verificationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verificationModalLabel">Enter Verification Code</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="verificationForm">
                    @csrf
                    <div class="form-group">
                        <label for="phoneNumber">Phone Number:</label>
                        <input type="text" class="form-control" value="{{ auth()->user()->phone_number }}" id="phoneNumber" placeholder="Enter your phone number" required>
                    </div>
                    <div class="form-group">
                        <label for="verificationCode">Verification Code:</label>
                        <input type="text" class="form-control" id="verificationCode" maxlength="6" required>
                    </div>
                    <button type="button" class="btn btn-primary" id="sendOtp" style="display: none;">Send OTP</button>
                    <button type="button" class="btn btn-secondary" id="resendCode">Resend Code</button>
                    <button type="submit" class="btn btn-primary" id="verifyOtp">Verify</button>
                </form>
            </div>
        </div>
    </div>
</div>
       @if ($user == null)
       <form method="post" action="{{ route('verification.send') }}" class="d-flex align-items-center">
            <span class="bg-secondary">Your email address is not verified. Please verify your email</span>
            @csrf
            <button type="submit" class="btn btn-link" style="color: #FDCD02 !important; margin-left: 5px;">Click here</button>
        </form>
          @endif
      <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 font-monospace">Tableau de bord</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>0</h3>
                <p>Carmoovs en cours</p>
              </div>
              <div class="icon">
              <i class="fas fa-arrow-circle-up"></i>

              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0</h3>
                <p>Voir mes Carmoovs</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>€0</h3>
                <p>Paiements en cours</p>
              </div>
              <div class="icon">
                <i class="fas fa-database"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>€0</h3>
                <p>Payer ce mois-ci</p>
              </div>
              <div class="icon">
                <i class="fas fa-database"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
            <!-- /.card -->
            <div class="row">
          <!-- Left col -->
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                emplois
                </h3>
                <!-- <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div> -->
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
</section>
<section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Remuneration
                </h3>
                <!-- <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div> -->
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
</section>
</div>
<div class="row mb-5">
          <!-- Left col -->
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Latest jobs added
                </h3>
                <!-- <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div> -->
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
              <div class='card-footer text-center'>
                <p>SEE MORE</p>
                <div>
            </div>
</section>
<section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Last minute jobs
                </h3>
                <!-- <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div> -->
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
              <div class='card-footer text-center'>
                <p>SEE MORE</p>
                <div>
            </div>
</section>
</div>
            <!-- /.card -->
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
    </section>
  </div>
<!-- ./wrapper -->
<!-- Custom JavaScript for modal functionality -->
<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
            // CSRF token setup for all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        // Handle send OTP button click
        $('#sendOtp').click(function() {
            var phoneNumber = $('#phoneNumber').val();

            $.ajax({
                url: "{{ route('send-otp') }}",
                method: 'POST',
                data: {
                    phone_number: phoneNumber
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'info',
                        title: 'OTP Sent!',
                        text: response.message,
                    });
                    $('#verifyOtp').show();
                    $('#sendOtp').hide();
                    $('#phoneNumber').prop('readonly', true);
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.responseJSON.message || 'Failed to send OTP. Please try again.';
                    Swal.fire({
                        icon: 'error',
                        title: 'Send OTP Failed',
                        text: errorMessage,
                    });
                }
            });
        });

        // Handle resend code button click
        $('#resendCode').click(function() {
            var phoneNumber = $('#phoneNumber').val();

            $.ajax({
                url: "{{ route('resend-otp') }}",
                method: 'POST',
                data: {
                    phone_number: phoneNumber
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'info',
                        title: 'Code Resent!',
                        text: response.message,
                    });
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.responseJSON.message || 'Failed to resend OTP. Please try again.';
                    Swal.fire({
                        icon: 'error',
                        title: 'Resend OTP Failed',
                        text: errorMessage,
                    });
                }
            });
        });

        // Handle form submission for OTP verification
        $('#verificationForm').submit(function(event) {
            event.preventDefault();

            var phoneNumber = $('#phoneNumber').val();
            var verificationCode = $('#verificationCode').val();

            $.ajax({
                url: "{{ route('verify-otp') }}",
                method: 'POST',
                data: {
                    phone_number: phoneNumber,
                    otp: verificationCode
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Verification Successful!',
                        text: response.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $('#verificationModal').modal('hide');
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.responseJSON.message || 'Verification failed. Please try again.';
                    Swal.fire({
                        icon: 'error',
                        title: 'Verification Failed',
                        text: errorMessage,
                    });
                }
            });
        });
    });
</script>

@endsection
