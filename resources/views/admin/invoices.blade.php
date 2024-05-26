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
            <h1 class="m-0 font-monospace">Invoices</h1>
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
                Invoices
                </h3>

                <div class="text-right">
                    <a href="/balance" class="btn btn-warning btn-custom">Withdraw</a>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
              <div class="container mb-2">
    <form action="/submit" method="post">
        <!-- Form Row 1 -->
        <div class="form-row">
            <div class="col">
                <input type="text" class="form-control" name="field1" placeholder="professional driver">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="field2" placeholder="activity">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="field3" placeholder="status">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="field4" placeholder="amount">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="field5" placeholder="action">
            </div>
            <div class="col">
            <button type="button" class="btn btn-primary text-dark text-bold"
                                        style="background-color: #FDCD02; border:none;">Search</button>
            </div>

        </div>

        <!-- Add more form rows as needed -->

        <!-- Submit Button -->

    </form>
</div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th scope='col'>ID</th>
                            <th scope='col'>PickUp Location</th>
                            <th scope='col'>Status</th>
                            <th scope='col'>Amount</th>
                            <th scope='col'>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $invoice)
                            <tr>
                                <td>{{ $invoice->id }}</td>
                                <td>{{ $invoice->pickup_address }}</td>
                                <td>{{ $invoice->status }}</td>
                                <td>{{ $invoice->amount }}</td>
                                <td>
                                    View on next tab in PDF <a href="{{ route('view.invoice', ['id' => $invoice->id]) }}" target="_blank">here</a>
                                    Download in PDF <a href="{{ route('download.invoice', ['id' => $invoice->id]) }}">here</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div><!-- /.card-body -->
            </div>
</div>
</div>
</div>
</div>
</section>
@endsection
