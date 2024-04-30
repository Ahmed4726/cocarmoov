@extends('admin.admin_layout')
@section('content')
<head>

        <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
          .pac-container
          {
            z-index: 9999;
          }
    </style>
</head>
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 font-monospace">Proposals</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-5">
                    <!-- Left col -->
                    <div class="col-lg-12">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">

                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                            <thead>
                                                <th scope='col'>Car Name</th>
                                                <th scope='col'>Pick-up Time</th>
                                                <th scope='col'>Delivery Time</th>
                                                <th scope='col'>Actual Amount</th>
                                                <th scope='col'>Offer Amount</th>
                                                <th scope='col'>Status</th>
                                            </thead>
                                        <tbody>
                                            @foreach($proposals as $proposal)
                                                <tr>
                                                    <td>{{ $proposal->car_type }}</td>
                                                    <td>{{ $proposal->pick_up_time }}</td>
                                                    <td>{{ $proposal->delivery_time }}</td>
                                                    <td>{{ $proposal->actual_amount }}</td>
                                                    <td>{{ $proposal->offer_amount }}</td>
                                                    <td>{{ $proposal->status }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{-- {{ $alerts->links() }} --}}
                                </div><!-- /.card-body -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script>
 document.querySelectorAll('.btn-sm').forEach(button => {
    button.addEventListener('click', function() {
        const proposalId = this.getAttribute('data-proposal-id');
        const carId = this.getAttribute('data-car-id');
        const status = this.getAttribute('data-status');
        const action = this.getAttribute('data-action');

        // Send a POST request using fetch API
        fetch(action, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Add CSRF token if using Laravel's CSRF protection
            },
            body: JSON.stringify({
                proposal_id: proposalId,
                car_id: carId,
                status: status
            })
        })
        .then(response => {
            // Check if the response was successful
            if(response.ok) {
                // Parse the JSON response
                return response.json();
            } else {
                // If the response is not okay, throw an error
                throw new Error('Request failed');
            }
        })
        .then(data => {
            // Alert the success message from the parsed JSON data
            alert(data.success);
            window.location.reload();
            // Optionally, you can redirect or update UI after successful request
        })
        .catch(error => {
            // Catch any errors that occurred during the request
            console.error('Error:', error);
            // Alert an error message
            alert('Request failed');
        });
    });
});

</script>

@endsection
