@extends('admin.admin_layout')

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
                            <h1 class="mx-5 font-monospace">Permissions</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/main-dashboard">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Manage</a></li>
                                <li class="breadcrumb-item active">permissions</li>
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
                                        data-target="#permissionModal">Permissions</button>

                                </div>
                            </div>

                            <!-- permission Modal -->
                            <div class="modal" id="permissionModal" tabindex="-1" permission="dialog"
                                aria-labelledby="permissionModalLabel" aria-hidden="true">
                                <div class="modal-dialog" permission="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="permissionModalLabel">Add permission</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- permission Form -->
                                            <form id="permissionForm">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="permissionName">Name:</label>
                                                    <input type="text" class="form-control" id="permissionName">
                                                </div>
                                                <div class="form-group">
                                                    <label for="permissionDescription">Description:</label>
                                                    <textarea class="form-control" id="permissionDescription"
                                                        rows="3"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary" id="savepermissionBtn">Save</button>
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
                                @foreach($permissions as $permission)
                                {{-- @dd($permission->id) --}}
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $permission->name }}</td>
                                        <td>{{ $permission->description }}</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm editButton" data-permission-id="{{ $permission->id }}" data-target="#permissionModal">Edit</button>
                                            <button class="btn btn-danger btn-sm"onclick="confirmDelete({{ $permission->id }})">Delete</button>
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
                        $(document).ready(function () {
                            // Function to fetch permission data for editing
                            function editpermission(permissionId) {
                                // alert(permissionId)
                                $.ajax({
                                    url: '/edit-permission/' + permissionId,
                                    type: 'GET',
                                    success: function (permission) {
                                        // Populate form fields with the retrieved data
                                        $('#permissionName').val(permission.name);
                                        $('#permissionDescription').val(permission.description);

                                        // Update modal title to indicate editing
                                        $('#permissionModalLabel').text('Edit permission');

                                        // Set a data attribute to indicate that the form is in editing mode
                                        $('#permissionForm').attr('data-edit-mode', true);

                                        $('#permissionForm').data('permission-id', permissionId);
                                        // Show the modal
                                        $('#permissionModal').modal('show');
                                    },
                                    error: function (error) {
                                        console.log('Error fetching permission data: ', error);
                                    }
                                });
                            }

                            // Listen for the form submission
                            $('#permissionForm').submit(function (event) {
                                event.preventDefault(); // Prevent the form from submitting normally

                                // Get form data
                                const formData = {
                                    '_token': $('input[name="_token"]').val(),
                                    'name': $('#permissionName').val(),
                                    'description': $('#permissionDescription').val()
                                };
                                // Get the permission ID
                                var permissionId = $(this).data('edit-mode') ? $(this).data('permission-id') : null;
                                // Determine the URL based on whether it's an edit or add action
                                const url = $('#permissionForm').data('edit-mode') ? '/update-permission/' + permissionId : '{{ route("add.new.permission") }}';
                                const method = $('#permissionForm').data('edit-mode') ? 'PUT' : 'POST';
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
                                            title: 'Permission Added/Updated Successfully!',
                                            showConfirmButton: true,
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                // Reload the page
                                                location.reload();
                                            }
                                        });

                                        // Reset the form
                                        $('#permissionForm')[0].reset();
                                        $('#permissionModalLabel').text('Add permission'); // Reset modal title
                                        $('#permissionForm').removeAttr('data-edit-mode'); // Reset edit mode attribute
                                        $('#permissionModal').modal('hide'); // Hide the modal
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
                                var permissionId = $(this).data('permission-id');

                                editpermission(permissionId);
                            });
                            });

                        function confirmDelete(permissionId) {
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
                                    // Call the deletepermission function if the user confirms
                                    deletepermission(permissionId);
                                }
                            });
                        }

                        function deletepermission(permissionId) {
                            // Add your logic for handling the delete action here
                            // You can use Ajax to send a request to the server to delete the permission

                            // Example using Fetch API
                            fetch(`/delete-permission/${permissionId}`, {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // Add your CSRF token here
                                    'Content-Type': 'application/json',
                                },
                            })
                                .then(response => response.json())
                                .then(data => {
                                    Swal.fire('Deleted!', data.message, 'success');
                                    // Optionally, you can update the UI to remove the deleted permission row
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                    Swal.fire('Error!', 'An error occurred while deleting the permission.', 'error');
                                });
                        }
                    </script>

@endsection
