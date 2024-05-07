@extends('admin.admin_main_layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Select2 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
</head>
<body>
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- ... (Your existing code) ... -->

            <div class="container">
                <div class="row mx-5 mb-5">
                    <div class="col-md-12">
                        <!-- Add the following code for the dropdown -->
                        <div class="card">
                            <div class="card-body">
                                <form id="permissionsForm">
                                    @csrf
                                    <div class="form-group">
                                        <label for="roleSelect">Select Role:</label>
                                        <select class="form-control" id="roleSelect" name="role_id">
                                            <option value="">Choose Role</option>
                                            @foreach($role_list as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Add a container for checkboxes -->
                                    <div id="permissionsContainer">
                                        <!-- Permissions checkboxes will be appended here -->
                                    </div>

                                    <!-- Save Settings Button -->
                                    <button type="button" class="btn btn-primary" id="saveSettingsBtn">Save Settings</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Add this to the head section of your HTML -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

            <script>
                // Handle change event of the role dropdown
                $('#roleSelect').change(function() {
                    var roleId = $(this).val();
                    // Clear existing checkboxes
                    $('#permissionsContainer').empty();

                    // Fetch permissions via AJAX
                    $.ajax({
                        url: '/get-permissions/' + roleId,
                        type: 'GET',
                        success: function(data) {
                            var permissions = data.permissions;
                            var userPermissions = data.userPermissions;

                            // Append checkboxes for each permission
                            $.each(permissions, function(index, permission) {
                                var checked = userPermissions.includes(permission.id) ? 'checked' : '';
                                var checkbox = '<div class="form-check"><input class="form-check-input" type="checkbox" value="' + permission.id + '" name="permissions[]" ' + checked + '><label class="form-check-label">' + permission.name + ' ' + '('  + permission.description + ')' + '</label></div>';
                                $('#permissionsContainer').append(checkbox);
                            });
                        },
                        error: function(error) {
                            console.error(error);
                        }
                    });
                });

                // Handle click event of the Save Settings button
                $('#saveSettingsBtn').click(function() {
                    // Serialize the form data
                    var formData = $('#permissionsForm').serialize();

                    // Send the data to the server to save permissions
                    $.ajax({
                        url: '/save-permissions',
                        type: 'POST',
                        data: formData,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            // Handle success response with SweetAlert
                            Swal.fire({
                                title: 'Success!',
                                text: response.message, // Assuming your response has a 'message' key
                                icon: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {

                                    window.location.reload();
                                    // Redirect or perform any other action if needed
                                }
                            });
                        },
                        error: function(error) {
                            // Handle error response with SweetAlert
                            Swal.fire({
                                title: 'Error!',
                                text: 'An error occurred while saving permissions.',
                                icon: 'error',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK'
                            });
                            console.error(error);
                        }
                    });

                });
            </script>

</body>
</html>
@endsection
