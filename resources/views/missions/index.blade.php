@extends('frontend.frontend_main_layout')
@section('content')
<br>
<div class="container-fluid">
<div class="card">
    <div class="card-body">
    <form name="search_form" action="/check-missions" method="POST" style="display: flex; gap: 8px; flex-wrap: wrap; align-items: center;">
        <input class="form-control" type="text" name="city_of_collection" id="city_of_collection" placeholder="City of Collection" style="flex: 1;">
        <input class="form-control" type="text" name="city_of_delivery" id="city_of_delivery" placeholder="City of Delivery" style="flex: 1;">
        <input class="form-control" type="datetime-local" name="datetime_of_collection" id="datetime_of_collection" style="flex: 1;">
        <button class="btn btn-warning" type="submit" style="flex: 1;">Search</button>
    </form>
</div>
</div>
</div>
{{-- <br> --}}
@foreach ($missions as $mission)


<div class="container-fluid">
<div class="card mt-4">
    <div class="card-body">
        <div class="container">
            <table class="table table-responsive">
                <tr>
                    <td class="col-md-4">
                        <p>City: {{ $mission->from_address }}</p>
                        <p>Delivery: {{ $mission->to_address }}</p>
                        <table>
                            <tr>
                                <td>Departure Period:</td>
                                <td>{{ $mission->car_move_departure_date_from }} - {{ $mission->car_move_departure_date_to }}</td>
                            </tr>
                        </table>
                    </td>
                    <td class="col-md-2">Distance: 890 km</td>
                    <td class="col-md-2">
                        <img src="{{ asset('/dist/img/cars/3m3.png') }}" alt="test" class="img-fluid" width="100" height="100">
                    </td>
                    <td class="col-md-2">
                        <table>
                            <tr>
                                <td>End's in:</td>
                                <td>5 Hours</td>
                            </tr>
                        </table>
                    </td>
                    <td class="col-md-3">
                        <a href="{{ route('booking', ['id' => $mission->id]) }}" class="btn btn-warning">Book Now</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>
@endforeach
@endsection
