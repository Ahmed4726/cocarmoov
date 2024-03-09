@extends('frontend.frontend_main_layout')
@section('content')
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
                <button class="btn btn-warning" type="submit">Book-Ride</button>
            </form>

        </div>
    </div>
</div>
@endsection
