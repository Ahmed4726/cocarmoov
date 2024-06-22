@extends('admin.admin_layout')
@section('content')

<div class="wrapper">
    <div class="content-wrapper">
        <div class="container">
            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
            <h1 class="mb-4">Car Listings</h1>

            @foreach($listings as $listing)
                <div class="card mb-4">
                    <h3 class="card-title mx-4">
                        <strong>Make and Model of Car:</strong> {{ $listing->make_and_model }}
                        <span style="color: {{ $listing->status == 'Available' ? 'green' : 'red' }}">(Status: {{ $listing->status }})</span>
                    </h3>


                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>From:</strong> {{ $listing->from_address }}</p>
                                <p><strong>To:</strong> {{ $listing->to_address }}</p>
                                <p><strong>Car Type:</strong> {{ $listing->car_type }}</p>
                                <p><strong>Condition:</strong> {{ $listing->car_condition }}</p>
                                <p><strong>Seating Capacity:</strong> {{ $listing->seating_capacity }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Number Plate:</strong> {{ $listing->number_plate }}</p>
                                <p><strong>Gear Box:</strong> {{ $listing->gear_box }}</p>
                                <p><strong>Selected Package:</strong> {{ $listing->selected_package }}</p>
                                <p><strong>Package Amount:</strong> ${{ $listing->package_amount }}</p>
                                <p><strong>Departure Dates:</strong> {{ $listing->car_move_departure_date_from }} - {{ $listing->car_move_departure_date_to }}</p>
                            </div>
                        </div>

                        <div class="mt-3">
                            @if ($listing->status == 'Available')
                                <a href="{{ route('editListing', ['id' => $listing->id]) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('deleteListing', ['id' => $listing->id]) }}" class="btn btn-danger">Delete</a>
                                <a href="{{ route('duplicateListing', ['id' => $listing->id]) }}" class="btn btn-warning">Duplicate</a>
                            @elseif ($listing->status == 'On-Move')
                                <a href="{{ route('duplicateListing', ['id' => $listing->id]) }}" class="btn btn-warning">Duplicate</a>
                            @elseif ($listing->status == 'Delivered')
                                <a href="{{ route('duplicateListing', ['id' => $listing->id]) }}" class="btn btn-warning">Duplicate</a>
                                <a href="{{ route('confirmDelivery', ['id' => $listing->id]) }}" class="btn btn-primary">Confirm-Delivery</a>
                                <a href="{{ route('Report-issue', ['id' => $listing->id]) }}" class="btn btn-danger">Report-issue</a>
                            @elseif ($listing->status == 'Completed')
                                <a href="{{ route('duplicateListing', ['id' => $listing->id]) }}" class="btn btn-danger">Duplicate</a>
                            @else
                            <div style="display: flex; gap: 5px;">
                                <form method="POST" action="{{ route('cancelListing', ['id' => $listing->id]) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </form>
                                <a href="{{ route('duplicateListing', ['id' => $listing->id]) }}" class="btn btn-warning">Duplicate</a>
                            </div>

                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Add your custom styles or scripts here if needed -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@12"></script>
<script>
    // Get all elements with the class 'cancelButton'
    const cancelButtonElements = document.querySelectorAll('.cancelButton');

    // Loop through each cancelButton element
    cancelButtonElements.forEach(cancelButton => {
        cancelButton.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default action of the link

            // Get the listing ID from the data-listing-id attribute
            const listingId = this.getAttribute('data-listing-id');

            // Show a confirmation dialog
            Swal.fire({
                title: 'Are you sure?',
                text: "This action cannot be undone.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, cancel it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If user confirms, redirect to the cancel route with the listing ID
                    window.location.href = "{{ url('cancelListing') }}/" + listingId;
                }
            });
        });
    });
</script>


@endsection
