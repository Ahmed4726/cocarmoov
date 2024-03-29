@extends('admin.admin_layout')
@section('content')



<div class="wrapper">
    <div class="content-wrapper">
        <div class="container">
            <h1 class="mb-4">Car Edit Mode</h1>
            <div class="card mb-4">
                <h3 class="card-title mx-4"><strong>Make and Model of Car:</strong> {{ $listing->make_and_model }}</h3>

                <div class="card-body">
                    <form action="{{ route('updateListing', ['id' => $listing->id]) }}" method="POST">
                        @csrf <!-- This is for Laravel CSRF protection -->
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Seating Capacity:</strong>
                                    <select class="form-control" name="seating_capacity" id="seating_capacity">
                                        <option value="">Choose</option>
                                        <option value="2" {{ $listing->seating_capacity == '2' ? 'selected' : '' }}>2 seats</option>
                                        <option value="3" {{ $listing->seating_capacity == '3' ? 'selected' : '' }}>3 seats</option>
                                        <option value="4" {{ $listing->seating_capacity == '4' ? 'selected' : '' }}>4 seats</option>
                                        <option value="5" {{ $listing->seating_capacity == '5' ? 'selected' : '' }}>5 seats</option>
                                        <option value="6" {{ $listing->seating_capacity == '6' ? 'selected' : '' }}>6 seats</option>
                                        <option value="7" {{ $listing->seating_capacity == '7' ? 'selected' : '' }}>7 seats</option>
                                        <option value="8" {{ $listing->seating_capacity == '8' ? 'selected' : '' }}>8 seats</option>
                                        <option value="9" {{ $listing->seating_capacity == '9' ? 'selected' : '' }}>9 seats</option>
                                    </select>
                                </p>
                                <p><strong>Make and Model of Car:</strong> <input class="form-control" type="text" name="make_and_model" value="{{ $listing->make_and_model }}"></p>
                                <p><strong>Number Plate:</strong> <input class="form-control" type="text" name="number_plate" value="{{ $listing->number_plate }}"></p>
                                <p><strong>Gear Box:</strong>
                                    <select class="form-control" name="GearBox" id="gear_box">
                                        <option value="">Transmission</option>
                                        <option value="Manual" {{ $listing->gear_box == 'Manual' ? 'selected' : '' }}>Manual</option>
                                        <option value="Automatic" {{ $listing->gear_box == 'Automatic' ? 'selected' : '' }}>Automatic</option>
                                    </select>
                                </p>
                                <p><strong>Status:</strong>
                                    <select class="form-control" name="status" id="status">
                                        <option value="">Choose</option>
                                        <option value="Available" {{ $listing->status == 'Available' ? 'selected' : '' }}>Available</option>
                                        <option value="Booked" {{ $listing->status == 'Booked' ? 'selected' : '' }}>Booked</option>
                                    </select>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Departure Dates (From):</strong> <input class="form-control" type="datetime-local" name="CarMoveDepartureDateFrom" value="{{ $listing->car_move_departure_date_from }}"></p>
                                <p><strong>Departure Dates (To):</strong> <input class="form-control" type="datetime-local" name="CarMoveDepartureDateTo" value="{{ $listing->car_move_departure_date_to }}"></p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>

<!-- Add your custom styles or scripts here if needed -->

@endsection
