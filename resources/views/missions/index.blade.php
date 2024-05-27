@extends('frontend.frontend_main_layout')
@section('content')
<div class="container-fluid pt-3 pb-4" style="background-color: #333132;">
<h2 class="text-center text-light">Find a Job</h2>
<div class="card rounded">
    <div class="card-body">
    <form name="search_form" action="/check-missions" method="POST" style="display: flex; gap: 8px; flex-wrap: wrap; align-items: center;">
        <input class="form-control" type="text" name="city_of_collection" id="city_of_collection" placeholder="City of Collection" style="flex: 1;">
        <input class="form-control" type="text" name="city_of_delivery" id="city_of_delivery" placeholder="City of Delivery" style="flex: 1;">
        <!-- <input class="form-control" type="datetime-local" name="datetime_of_collection" id="datetime_of_collection" style="flex: 1;"> -->
        <button class="btn btn-warning" type="submit" style="flex: 1;">Search</button>
    </form>
</div>
</div>
</div>
{{-- <br> --}}
@foreach ($missions as $mission)
@if(($mission->selected_package == 'economy' && $role == 7) ||
        ($mission->selected_package == 'express' && $role == 6) ||
        ($mission->selected_package == 'premium' && $role == 8))
<div class="container-fluid">
<div class="card mt-4 rounded">
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="row mt-3">
                    <div class="col-md-2">
                        <p><b> {{ $mission->from_address }} - {{ $mission->to_address }}</b></p>
                        <!-- <p>Delivery: </p> -->
                        </div>
                        <div class="col-md-4">
                                <!-- <td>Departure Period:</td> -->
                                <div class="text-muted">Valid till {{ $mission->car_move_departure_date_from }} - {{ $mission->car_move_departure_date_to }}</div>
                        </div>
                    <div class="col-md-2">Distance: 890 km</div>
                    <div class="col-md-2">
                        <img src="{{ asset('/dist/img/cars/3m3.png') }}" alt="test" class="img-fluid" width="100" height="100">
                    </div>
                    <!-- <div class="col-md-2">
                                <div>End's in: 5 Hours</div>
                                
                    </div> -->
                    <div class="col-md-2">
                        <a href="{{ route('booking', ['id' => $mission->id]) }}" class="btn btn-warning">Book Now</a>
                    </div>
                </div>
        
            </div>
            </div>
        </div>
    </div>
</div>
</div>
@endif
@endforeach
@endsection
