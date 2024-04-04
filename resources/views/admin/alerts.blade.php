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
                        <h1 class="m-0 font-monospace">Alertes</h1>
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
                            <div class="card-header">
                                <h3 class="card-title mt-2">
                                Mes alertes
                                </h3>
                            </div>
                                <div class="text-right mt-2 mx-4">
                                    <button type="button" class="btn btn-primary text-dark text-bold"
                                            style="background-color: #FDCD02; border:none;" data-toggle="modal"
                                            data-target="#roleModal">créer une nouvelle alerte</button>
                                </div>
                                <div class="modal fade" id="roleModal" tabindex="-1" role="dialog"
                                     aria-labelledby="roleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="roleModalLabel">créer une nouvelle alerte</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="row" id="roleForm">
                                                    {{-- @csrf --}}
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="city_of_collection">Ville de collecte :</label>
                                                            <input type="text" class="form-control" id="city_of_collection"
                                                                   name="city_of_collection">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="city_of_delivery">Ville de livraison :</label>
                                                            <input type="text" class="form-control" id="city_of_delivery"
                                                                   name="city_of_delivery">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <button type="button" class="btn btn-primary text-dark text-bold" style="background-color: #FDCD02; border:none;"
                                                                id="saveAlertBtn">Enregistrer l'alerte
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                        <th scope='col'>Collection</th>
                                        <th scope='col'>Delivery</th>
                                        <th scope='col'>Trips</th>
                                        <th scope='col'>Action</th>
                                        </thead>
                                        <tbody>
                                        @foreach($alerts as $alert)
                                            <tr>
                                                <td>{{ $alert->city_of_collection }}</td>
                                                <td>{{ $alert->city_of_delivery }}</td>
                                                <td></td>
                                                <td>
                                                    <button class="btn btn-primary btn-sm editButton"
                                                            data-role-id="{{ $alert->id }}" data-target="#roleModal">Modifier
                                                    </button>
                                                    <button class="btn btn-danger btn-sm"
                                                            onclick="confirmDelete({{ $alert->id }})">Supprimer
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $alerts->links() }}
                                </div><!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Add these to the head section of your HTML -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
        <script>
            // script.js
            $(document).ready(function () {
                var cityOfCollectionInput = document.getElementById('city_of_collection');
                var cityOfCollectionAutocomplete = new google.maps.places.Autocomplete(cityOfCollectionInput);

                var cityOfDeliveryInput = document.getElementById('city_of_delivery');
                var cityOfDeliveryAutocomplete = new google.maps.places.Autocomplete(cityOfDeliveryInput);

                $('#saveAlertBtn').click(function () {
                    var cityOfCollection = cityOfCollectionInput.value;
                    var cityOfDelivery = cityOfDeliveryInput.value;
                    var editMode = $('#roleForm').data('edit-mode');
                    var alertId = $('#roleForm').data('alert-id'); // Assuming you set this data attribute

                    var url = editMode ? '/update-alert/' + alertId : '/add-alert';

                    // Perform AJAX request to /add-alert or /update-alert
                    $.ajax({
                        url: url,
                        type: editMode ? 'PUT' : 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        },
                        data: {
                            cityOfCollection: cityOfCollection,
                            cityOfDelivery: cityOfDelivery,
                            // Add other data as needed
                        },
                        success: function (response) {
                            if (response.hasOwnProperty('errors')) {
                                var errorMessage = 'Validation Error:<br>';
                                for (var key in response.errors) {
                                    errorMessage += response.errors[key][0] + '<br>';
                                }

                                Swal.fire({
                                    icon: 'error',
                                    title: 'Validation Error',
                                    html: errorMessage,
                                });
                            } else {
                                Swal.fire({
                                    icon: 'success',
                                    title: editMode ? 'Alert Updated Successfully!' : 'Alert Added Successfully!',
                                    showConfirmButton: true,
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        $('#roleModal').modal('hide');
                                        location.reload();
                                    }
                                });
                            }
                        },
                        error: function (error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Something Went Wrong',
                            });
                        }
                    });
                });

                $('.editButton').click(function () {
                    var alertId = $(this).data('role-id');

                    $.get('/edit-alert/' + alertId, function (alert) {
                        $('#city_of_collection').val(alert.city_of_collection);
                        $('#city_of_delivery').val(alert.city_of_delivery);

                        $('#roleModalLabel').text('Edit Alert');
                        $('#saveAlertBtn').text('Update Alert');

                        $('#roleForm').attr('data-edit-mode', true);
                        $('#roleForm').data('alert-id', alertId);

                        $('#roleModal').modal('show');
                    });
                });


            });

            function confirmDelete(Id) {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You won\'t be able to revert this!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            deleteRole(Id);
                            location.reload();
                        }
                    });
                }

                function deleteRole(Id) {
                    fetch(`/delete-alert/${Id}`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json',
                        },
                    })
                        .then(response => response.json())
                        .then(data => {
                            Swal.fire('Deleted!', data.message, 'success');
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            Swal.fire('Error!', 'An error occurred while deleting the role.', 'error');
                        });
                }
        </script>
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&libraries=places"></script> --}}
    </div>
</div>
@endsection
