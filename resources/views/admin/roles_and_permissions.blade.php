@extends('admin.admin_layout')
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
                                <form>
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

                                    <!-- Your existing form elements go here -->

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Initialize Select2 with the custom class -->
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
                            var checkbox = '<div class="form-check"><input class="form-check-input" type="checkbox" value="' + permission.id + '" name="permissions[]" ' + checked + '><label class="form-check-label">' + permission.name + '</label></div>';
                            $('#permissionsContainer').append(checkbox);
                        });
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });
    </script>
</body>
</html>
@endsection
