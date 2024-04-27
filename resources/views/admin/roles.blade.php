@extends('admin.admin_main_layout')

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Other head elements -->
    </head>

    <!-- Include Bootstrap CSS (assuming you're using Bootstrap) -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->

    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="mx-5 font-monospace">Roles</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/main-dashboard">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Manage</a></li>
                                <li class="breadcrumb-item active">Roles</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <div class="container">
                <div class="row mx-5 mb-5">
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title mt-2">Add New</h3>
                                <div class="text-right">
                                    <button type="button" class="btn btn-primary text-dark text-bold"
                                        style="background-color: #FDCD02; border:none;" data-toggle="modal"
                                        data-target="#roleModal">Roles</button>

                                </div>
                            </div>

                            <!-- Role Modal -->
                            <div class="modal" id="roleModal" tabindex="-1" role="dialog"
                                aria-labelledby="roleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="roleModalLabel">Add Role</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Role Form -->
                                            <form id="roleForm">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="roleName">Name:</label>
                                                    <input type="text" class="form-control" id="roleName">
                                                </div>
                                                <div class="form-group">
                                                    <label for="roleDescription">Description:</label>
                                                    <textarea class="form-control" id="roleDescription"
                                                        rows="3"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary" id="saveRoleBtn">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <br>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                {{-- @dd($role->id) --}}
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->description }}</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm editButton" data-role-id="{{ $role->id }}" data-target="#roleModal">Edit</button>
                                            <button class="btn btn-danger btn-sm"onclick="confirmDelete({{ $role->id }})">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Include jQuery (assuming it's not already included) -->
                    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                    <!-- Include SweetAlert library -->
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

                    <script>

                        // Attach an event listener to be triggered when the modal is completely hidden
                    $('#roleModal').on('hidden.bs.modal', function () {
                        // Reset the form
                        $('#roleForm')[0].reset();

                        // Reset modal title
                        $('#roleModalLabel').text('Add Role');

                        // Reset edit mode attribute
                        $('#roleForm').removeAttr('data-edit-mode');

                        // Remove the event listener to prevent multiple bindings
                        $(this).off('hidden.bs.modal');
                    });

                $(document).ready(function () {
                    // Function to edit role
                    function editRole(roleId) {
                        $.ajax({
                            url: '/edit-role/' + roleId,
                            type: 'GET',
                            success: function (role) {
                                // Populate form fields with the retrieved data
                                $('#roleName').val(role.name);
                                $('#roleDescription').val(role.description);

                                // Update modal title to indicate editing
                                $('#roleModalLabel').text('Edit Role');

                                // Set a data attribute to indicate that the form is in editing mode
                                $('#roleForm').attr('data-edit-mode', true);

                                // Set the role ID to the form for submission
                                $('#roleForm').data('role-id', roleId);

                                // Attach an event listener to be triggered when the modal is shown
                                $('#roleModal').on('shown.bs.modal', function () {
                                    // Show the modal after the form fields are populated
                                    $(this).modal('show');

                                    // Remove the event listener to prevent multiple bindings
                                    $(this).off('shown.bs.modal');
                                });

                                // Trigger the modal to initiate the process
                                $('#roleModal').modal('show');
                            },
                            error: function (error) {
                                console.log('Error fetching role data: ', error);
                            }
                        });
                    }

                            // Listen for the form submission
                            $('#roleForm').submit(function (event) {
                                event.preventDefault(); // Prevent the form from submitting normally

                                // Get form data
                                const formData = {
                                    '_token': $('input[name="_token"]').val(),
                                    'name': $('#roleName').val(),
                                    'description': $('#roleDescription').val()
                                };
                                // Get the role ID
                                var roleId = $(this).data('edit-mode') ? $(this).data('role-id') : null;
                                // Determine the URL based on whether it's an edit or add action
                                const url = $('#roleForm').data('edit-mode') ? '/update-role/' + roleId : '{{ route("add.new.role") }}';
                                const method = $('#roleForm').data('edit-mode') ? 'PUT' : 'POST';
                                // alert(method)
                                // Perform an AJAX request to submit the form
                                $.ajax({
                                    type: method,
                                    url: url,
                                    data: formData,
                                    success: function (response) {
                                        // Handle success
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Role Added/Updated Successfully!',
                                            showConfirmButton: true,
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                // Reload the page
                                                location.reload();
                                            }
                                        });

                                        // Reset the form
                                        $('#roleForm')[0].reset();
                                        $('#roleModalLabel').text('Add Role'); // Reset modal title
                                        $('#roleForm').removeAttr('data-edit-mode'); // Reset edit mode attribute
                                        $('#roleModal').modal('hide'); // Hide the modal
                                    },
                                    error: function (xhr, status, error) {
                                        // Handle errors, including validation errors
                                        if (xhr.status === 422) {
                                            // Laravel validation error response (HTTP 422 Unprocessable Entity)
                                            const errors = xhr.responseJSON.errors;

                                            let errorMessage = 'Validation Error:<br>';
                                            for (let key in errors) {
                                                errorMessage += `${errors[key][0]}<br>`;
                                            }

                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Validation Error',
                                                html: errorMessage,
                                            });
                                        } else {
                                            // Other types of errors
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Error',
                                                text: 'An error occurred. Please try again.',
                                            });
                                        }
                                    }
                                });
                            });

                            // Example usage when clicking the edit button
                            // Assuming you have a button with the id 'editButton'
                            $('.editButton').click(function () {
                                var roleId = $(this).data('role-id');

                                editRole(roleId);
                            });
                            });

                        function confirmDelete(roleId) {
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
                                    // Call the deleteRole function if the user confirms
                                    deleteRole(roleId);
                                }
                            });
                        }

                        function deleteRole(roleId) {
                            // Add your logic for handling the delete action here
                            // You can use Ajax to send a request to the server to delete the role

                            // Example using Fetch API
                            fetch(`/delete-role/${roleId}`, {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // Add your CSRF token here
                                    'Content-Type': 'application/json',
                                },
                            })
                            .then(response => response.json())
                            .then(data => {
                                Swal.fire('Deleted!', data.message, 'success');
                                // Optionally, you can update the UI to remove the deleted role row
                                window.location.reload(); // Reload the page
                            })
                                .catch(error => {
                                    console.error('Error:', error);
                                    Swal.fire('Error!', 'An error occurred while deleting the role.', 'error');
                                });
                        }
                    </script>

@endsection
