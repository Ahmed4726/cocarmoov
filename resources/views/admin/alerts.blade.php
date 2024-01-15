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
            <h1 class="m-0 font-monospace">Alerts</h1>
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
                <h3 class="card-title mt-2">
                My Alerts
                </h3>
                <div class="text-right">
                                    <button type="button" class="btn btn-primary text-dark text-bold"
                                        style="background-color: #FDCD02; border:none;" data-toggle="modal"
                                        data-target="#roleModal">Create new Alert</button>

                                </div>
                                <div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="roleModalLabel">Create new Alert</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="cityOfCollection">City of Collection:</label>
                                                            <select class="form-control city-autocomplete" id="cityOfCollection" name="city_of_collection"></select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="cityOfDelivery">City of Delivery:</label>
                                                            <select class="form-control city-autocomplete" id="cityOfDelivery" name="city_of_delivery"></select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <button type="button" class="btn btn-primary" id="saveAlertBtn">Save Alert</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                </div>
              </div><!-- /.card-body -->
            </div>
</div>
</div>
</div>
</div>
</section>
<!-- Add these to the head section of your HTML -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    // Initialize Select2 for city autocomplete
    $('.city-autocomplete').select2({
        ajax: {
            url: 'https://maps.googleapis.com/maps/api/place/autocomplete/json',
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    input: params.term,
                    types: 'cities',
                    key: 'YOUR_GOOGLE_API_KEY' // Replace with your Google API key
                };
            },
            processResults: function(data) {
                return {
                    results: $.map(data.predictions, function(item) {
                        return {
                            id: item.place_id,
                            text: item.description
                        };
                    })
                };
            },
            cache: true
        },
        placeholder: 'Start typing to search cities',
        minimumInputLength: 3
    });

    // Handle click event of the Save Alert button
    $('#saveAlertBtn').click(function() {
        // Add your logic to save the selected cities
        var cityOfCollection = $('#cityOfCollection').val();
        var cityOfDelivery = $('#cityOfDelivery').val();

        // Add your AJAX request or other logic here

        // Close the modal
        $('#roleModal').modal('hide');
    });
});


</script>
@endsection
