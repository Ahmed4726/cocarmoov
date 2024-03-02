@extends('admin.admin_layout')
@section('content')

<div class="wrapper">
    <div class="content-wrapper">
        <div class="container">
            <h1 class="mb-4">Car Listings</h1>

            @foreach($listings as $listing)
                <div class="card mb-4">
                    <h3 class="card-title mx-4"><strong>Make and Model of Car:</strong> {{ $listing->make_and_model }}</h3>

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
                            <a href="{{ route('editListing', ['id' => $listing->id]) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('deleteListing', ['id' => $listing->id]) }}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Add your custom styles or scripts here if needed -->

@endsection
