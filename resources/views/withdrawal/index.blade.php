@extends('admin.admin_layout')
@section('content')
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 font-monospace">Withdrawals</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Example of displaying success message -->
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <!-- Example of displaying error message -->
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
    <section class="content">
        <div class="container-fluid">
  <div class="row mb-5">
            <!-- Left col -->
            <section class="col-lg-12">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                  Total Balance: {{ $balance->total_balance }}
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
                <div class="container">
                    Pending Balance: {{ $balance->pending_balance ?? 0 }} <br>
                    Available Balance: {{ $balance->available_balance ?? 0 }}
                </div>
                <div class="container">
                    <form action="/withdraw" method="POST">
                        @csrf <!-- CSRF Token -->

                        <label for="amount">Amount</label>
                        <input type="number" name="amount" id="amount">

                        @error('amount')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="btn btn-warning">Withdraw</button>
                    </form>

                </div>

                </div>
              </div>
            </div>
            </section>
  </div>
@endsection
