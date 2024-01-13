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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                Invoices No.
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
              <div class="row">
                <!-- Column 1 -->
                <div class="col">
                    <h5>Jobs</h5>
                </div>

                <!-- Column 2 -->
                <div class="col">
                    <h5>Remuneration</h5>
                </div>

                <!-- Column 3 -->
                <div class="col">
                    <h5>Petrol</h5>
                </div>

                <!-- Column 4 -->
                <div class="col">
                    <h5>Tolls</h5>
                </div>

                <!-- Column 5 -->
                <div class="col">
                    <h5>Payment</h5>
                </div>

                <!-- Column 6 -->
                <div class="col">
                    <h5>Penalties</h5>
                    <!-- Add content for the sixth column if needed -->
                </div>
            </div>
                </div>
                <table class="table table-bordered table-striped">
                            <thead>
                                <th scope='col'>Movement</th>
                                <th scope='col'>Costs</th>
                                <th scope='col'>Total</th>
                                <th scope='col'>Action</th>
                            </thead>
                            <tbody>
                              
                            </tbody>
                        </table>
              </div><!-- /.card-body -->
            </div>  
</section>

<div class="container mt-4">
    <div class="row">
       
        <div class="col-lg-12">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title text-center">
                Bank details of the driver
                </h3>
              </div><!-- /.card-header -->
                <div class="card-body">
                    <h5>Account holder</h5>
                    <p></p>
                    <h5>IBAN number</h5>
                    <p></p>
                    <h5>SWIFT/BIC code</h5>
                    <p></p>
                </div>
            </div>
        </div>
</div>
</div>
</div>
</div>
</section>
@endsection