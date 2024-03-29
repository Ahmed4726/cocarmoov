@extends('frontend.frontend_main_layout')
@section('content')
<div class="container-fluid pt-3 pb-4" style="background-color: #333132;">
<h2 class="text-center text-light"><b> {{ $mission->from_address }} - {{ $mission->to_address }}</b></h2>
<div class="card rounded">
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
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h3>id:</h3>
            {{ $mission['id'] }}


            <form action="/book-ride" method="POST">
                @csrf
                <label class="form-label" for="pick_up_time">Pickup-Time</label>
                <input class="form-control" type="datetime-local" name="pick_up_time" id="pick_up_time">

                <label class="form-label" for="delivery_time">Delivery-Time</label>
                <input class="form-control" type="datetime-local" name="delivery_time" id="delivery_time">

                <input type="hidden" name="car_id" id="car_id" value="{{ $mission['id'] }}">
                <input type="hidden" name="amount" id="amount" value="{{ $mission['package_amount'] }}">
                <input type="hidden" name="owner_id" id="owner_id" value="{{ $mission['user_id'] }}">
                
                <button class="btn btn-warning" type="submit">Book-Ride</button>
            </form>

        </div>
    </div>
</div>
@endsection
