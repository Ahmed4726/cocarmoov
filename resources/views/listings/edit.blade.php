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
                                        <option value="Manual" {{ $listing->gear_box == 'Manual' ? 'selected' : '' }}>Boîte manuelle</option>
                                        <option value="Automatic" {{ $listing->gear_box == 'Automatic' ? 'selected' : '' }}>Boîte automatique</option>
                                        <option value="hybride" {{ $listing->gear_box == 'hybride' ? 'selected' : '' }}>Hybride</option>
                                        <option value="electric" {{ $listing->gear_box == 'electric' ? 'selected' : '' }}>Électrique</option>
                                        <option value="hydrogen" {{ $listing->gear_box == 'hydrogen' ? 'selected' : '' }}>Hydrogène</option>
                                    </select>
                                </p>
                                <p><strong>Status:</strong>
                                    <select class="form-control" name="status" id="status">
                                        <option value="">Choose</option>
                                        <option value="Available" {{ $listing->status == 'Available' ? 'selected' : '' }}>Available</option>
                                        <option value="Booked" {{ $listing->status == 'Booked' ? 'selected' : '' }}>Booked</option>
                                    </select>
                                </p>
                                <p><strong>Son Nom delivery:</strong>
                                    <input type="text" class="form-control" id="son_nom_delivery" name="son_nom_delivery" placeholder="Son Nom" value="{{ $listing->son_nom_delivery }}">
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Departure Dates (From):</strong> <input class="form-control" type="datetime-local" name="CarMoveDepartureDateFrom" value="{{ $listing->car_move_departure_date_from }}"></p>
                                <p><strong>Departure Dates (To):</strong> <input class="form-control" type="datetime-local" name="CarMoveDepartureDateTo" value="{{ $listing->car_move_departure_date_to }}"></p>

                                <p><strong>Residence Delivery:</strong>
                                    <select class="form-control" name="residence_delivery" id="residence_delivery" placeholder="Nature du lieu">
                                        <option value="Résidence" {{ $listing->residence_delivery == 'Résidence' ? 'selected' : ''}}>Résidence</option>
                                        <option value="Agence" {{ $listing->residence_delivery == 'Agence' ? 'selected' : ''}}>Agence</option>
                                        <option value="Concession" {{ $listing->residence_delivery == 'Concession' ? 'selected' : ''}}>Concession</option>
                                        <option value="Garage" {{ $listing->residence_delivery == 'Garage' ? 'selected' : ''}}>Garage</option>
                                        <option value="Parc automobile" {{ $listing->residence_delivery == 'Parc automobile' ? 'selected' : ''}}>Parc automobile</option>
                                        <option value="Magasin" {{ $listing->residence_delivery == 'Magasin' ? 'selected' : ''}}>Magasin</option>
                                        <option value="Société" {{ $listing->residence_delivery == 'Société' ? 'selected' : ''}}>Société</option>
                                    </select>
                                </p>
                                <p><strong>Son Nom:</strong>
                                    <input type="text" class="form-control" id="son_nom" name="son_nom" value="{{ $listing->son_nom }}" placeholder="Son Nom">
                                </p>
                                <p><strong>Residence Pick Up:</strong>
                                    <select class="form-control" name="residence_pick_up" id="residence_pick_up" placeholder="Nature du lieu">
                                        <option value="Résidence" {{ $listing->residence_pick_up == 'Résidence' ? 'selected' : ''}}>Résidence</option>
                                        <option value="Agence" {{ $listing->residence_pick_up == 'Agence' ? 'selected' : ''}}>Agence</option>
                                        <option value="Concession" {{ $listing->residence_pick_up == 'Concession' ? 'selected' : ''}}>Concession</option>
                                        <option value="Garage" {{ $listing->residence_pick_up == 'Garage' ? 'selected' : ''}}>Garage</option>
                                        <option value="Parc automobile" {{ $listing->residence_pick_up == 'Parc automobile' ? 'selected' : ''}}>Parc automobile</option>
                                        <option value="Magasin" {{ $listing->residence_pick_up == 'Magasin' ? 'selected' : ''}}>Magasin</option>
                                        <option value="Société" {{ $listing->residence_pick_up == 'Société' ? 'selected' : ''}}>Société</option>
                                    </select>
                                </p>
                                <p><strong>Heures:</strong>
                                    <select class="form-control mb-3" name="heures" id="heures" placeholder="Besoin de temps pour préparer le véhicule :">
                                        <option value="3 heures" {{ $listing->heures == '3 heures' ? 'selected' : ''}}>3 heures </option>
                                        <option value="6 heures" {{ $listing->heures == '6 heures' ? 'selected' : ''}}>6 heures  </option>
                                        <option value="12 heures" {{ $listing->heures == '12 heures' ? 'selected' : ''}}>12 heures  </option>
                                        <option value="24 heures" {{ $listing->heures == '24 heures' ? 'selected' : ''}}>24 heures </option>
                                        <option value="48 heures" {{ $listing->heures == '48 heures' ? 'selected' : ''}}>48 heures </option>
                                    </select>
                                </p>
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
