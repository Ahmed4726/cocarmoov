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
            <h1 class="m-0 font-monospace">Bookings</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
<div class="row mb-5">
          <!-- Left col -->
          <section class="col-lg-12">
            <!-- Custom tabs (Charts with tabs)-->
            <ul class="nav nav-pills mb-2">
                    <li class="nav-item{{ Request::is('#revenue-chart') ? ' active' : '' }}  mx-2">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">In progress</a>
                    </li>
                    <li class="nav-item{{ Request::is('#revenue-chart') ? ' active' : '' }}">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">History</a>
                    </li>
                  </ul>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title mt-2">
                  Booking in progress
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                </div>
              </div><!-- /.card-body -->
            </div>
</div>
</div>
</div>
</div>
</section>
@endsection