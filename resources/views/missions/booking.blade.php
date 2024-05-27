@extends('frontend.frontend_main_layout')
@section('content')
<div class="container-fluid pt-3 pb-4" style="background-color: #333132;">
<h2 class="text-center text-light"><b> {{ $mission->from_address }} - {{ $mission->to_address }}</b></h2>
<p class="text-center text-light">#{{ $mission['id'] }}</p>
<div class="row">
    <div class="col-md-4 col-sm-12">

    </div>
    <div class="col-md-4 col-sm-12">

</div>
<div class="col-md-4 col-sm-12">

</div>
<div class="col-md-4 col-sm-12">

</div>
</div>
<!-- <div class="card rounded">
    <div class="card-body">
    <form name="search_form" action="/check-missions" method="POST" style="display: flex; gap: 8px; flex-wrap: wrap; align-items: center;">
        <input class="form-control" type="text" name="city_of_collection" id="city_of_collection" placeholder="City of Collection" style="flex: 1;">
        <input class="form-control" type="text" name="city_of_delivery" id="city_of_delivery" placeholder="City of Delivery" style="flex: 1;">
        <input class="form-control" type="datetime-local" name="datetime_of_collection" id="datetime_of_collection" style="flex: 1;">
        <button class="btn btn-warning" type="submit" style="flex: 1;">Search</button>
    </form>
</div>
</div> -->
</div>
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
    <div class="card rounded mt-3">
    <div class="card-header"><h3 class="text-center">Booking</h3></div>
        <div class="card-body">
            <form action="/book-ride" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <label class="form-label" for="pick_up_time">Pickup-Time</label>
            <input class="form-control" type="datetime-local" name="pick_up_time" id="collectionDate" value="{{ date('Y-m-d\TH:i',strtotime('+5 hours')) }}" min="{{ date('Y-m-d\TH:i',strtotime('+5 hours')) }}" step="1800" required>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="delivery_time">Delivery-Time</label>
            <input class="form-control" type="datetime-local" name="delivery_time" id="delivery_time" value="{{ date('Y-m-d\TH:i',strtotime('+5 hours')) }}" min="{{ date('Y-m-d\TH:i',strtotime('+5 hours')) }}" step="1800" required>
            <!-- <input class="form-control" type="datetime-local" name="delivery_time" id="delivery_time" required> -->
        </div>
    </div>

    <input type="hidden" name="car_id" id="car_id" value="{{ $mission['id'] }}">
    <input type="hidden" name="amount" id="amount" value="{{ $mission['package_amount'] }}">
    <input type="hidden" name="owner_id" id="owner_id" value="{{ $mission['user_id'] }}">
    <div class="text-center">
    <button class="btn btn-warning mt-2" type="submit">Book for €{{ $mission['package_amount'] }}</button>

    </div>
</form>

<!-- Modal -->
<div class="modal fade" id="offerModal" tabindex="-1" aria-labelledby="offerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="offerModalLabel">Make an Offer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/add-perposals" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label" for="pick_up_time">Pickup-Time</label>
                            <input class="form-control" type="datetime-local" name="pick_up_time" id="pick_up_time" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="delivery_time">Delivery-Time</label>
                            <input class="form-control" type="datetime-local" name="delivery_time" id="delivery_time" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                    <div class="col-md-6">
                        <label class="form-label" for="pick_up_time">Actual Amount</label>
                        <input class="form-control" name="amount" id="amount" value="{{ $mission['package_amount'] }}" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="pick_up_time">Offer Amount</label>
                        <input class="form-control" type="number" name="offer_amount" id="offer_amount" required>
                    </div>
                    <input type="hidden" name="car_id" id="car_id" value="{{ $mission['id'] }}">
                    <input type="hidden" name="owner_id" id="owner_id" value="{{ $mission['user_id'] }}">
                </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit Offer</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="text-center">
    <button class="btn btn-primary mt-2" type="button" data-bs-toggle="modal" data-bs-target="#offerModal">Make an Offer</button>
</div>
        </div>
    </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-12">
    <div class="card rounded mt-3">
    <div class="card-header"><h3 class="text-center">Vehicle</h3></div>
        <div class="card-body">
    <div class="row">
        <div class="col-md-12 text-center">
        <img src="{{ asset('/dist/img/cars/Citadine.png') }}" alt="test" class="img-fluid" width="200" height="200">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 text-center">
        <i class="fas fa-car"></i>
        <p class="text-center text-muted">Seating Capacity</p>
            <p class="text-center">{{ $mission['seating_capacity'] }}</p>
        </div>
        <div class="col-md-3 text-center">
        <i class="fas fa-solid fa-arrow-right"></i>
        <p class="text-center text-muted">Transmission</p>
            <p class="text-center">{{ $mission['gear_box'] }}</p>
        </div>
        <div class="col-md-3 text-center">
        <i class="fas fa-solid fa-arrow-right"></i>
        <p class="text-center text-muted">Model</p>
            <p class="text-center">{{ $mission['make_and_model'] }}</p>
        </div>
        <div class="col-md-3 text-center">
        <i class="fas fa-solid fa-arrow-right"></i>
        <p class="text-center text-muted">Immatriculation</p>
            <p class="text-center">{{ $mission['number_plate'] }}</p>
        </div>
    </div>
        </div>
    </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-12">
    <div class="card rounded mt-3">
        <div class="card-header"><h3 class="text-center">Insurance and Conditions</h3></div>
        <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <p class="text-center">Vehicle image</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 text-center">
        <i class="fas fa-solid fa-arrow-right"></i>
        <p class="text-center text-muted">Category</p>
            <p class="text-center">{{ $mission['car_type'] }}</p>
        </div>
        <div class="col-md-3 text-center">
        <i class="fas fa-car"></i>
        <p class="text-center text-muted">Seating Capacity</p>
            <p class="text-center">{{ $mission['seating_capacity'] }}</p>
        </div>
        <div class="col-md-3 text-center">
        <i class="fas fa-solid fa-arrow-right"></i>
        <p class="text-center text-muted">Transmission</p>
            <p class="text-center">{{ $mission['gear_box'] }}</p>
        </div>
        <div class="col-md-3 text-center">
        <i class="fas fa-solid fa-arrow-right"></i>
        <p class="text-center text-muted">Model</p>
            <p class="text-center">{{ $mission['make_and_model'] }}</p>
        </div>
    </div>
        </div>
    </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-12">
    <div class="card rounded mt-3">
        <div class="card-header"><h3 class="text-center">Penalties</h3></div>
        <div class="card-body">
            @if($role == 7)
    <div class="row">
        <div class="col-md-12 text-center">
            <h4>For economic formula</h4>
      <p>Annulation du carmoov après réservation du carmooveur, moins de 72h avant le départ, une pénalité de 50%.</p>
        </div>
    </div>
    @elseif ($role == 6)
    <div class="row">
        <div class="col-md-12 text-center">
            <h4>For express formula</h4>
      <p>Annulation du carmoov après réservation du carmooveur, moins de 72h avant le départ, une pénalité de 50%.</p>
    </div>
    </div>
    @else()
    <div class="row">
        <div class="col-md-12 text-center">
            <h4>For premium formula</h4>
    <p>Annulation du carmoov après réservation du carmooveur, moins de 24h avant le départ, pénalité de 70%.</p>
    </div>
    </div>
    @endif
        </div>
    </div>
    </div>
    </div>

</div>
@endsection
