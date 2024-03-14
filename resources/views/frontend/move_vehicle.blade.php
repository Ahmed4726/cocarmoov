@extends('frontend.frontend_main_layout')
@section('content')

<style>
.selected-package {
    background-color: #4285f4; /* Change this to your desired background color */
    color: #ffffff; /* Change this to your desired text color */
    /* Add any other styles you want for the selected package button */
}



</style>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-token1" content="{{ csrf_token() }}">

</head>

<div id="progress-bar">
    <div class="progress-step">1. Formule</div>
    <div class="progress-step">2. Identification</div>
    <div class="progress-step">3. Détails</div>
    <div class="progress-step">4. Paiement</div>
    <div class="progress-step">5. Validation</div>
  </div>

<div class="container">
<div id="step1" class="form-step show-step">
    <h2 class="mb-4">Step 1: Choose Package</h2>
    <form id="generalInfoForm" class="row g-3">
        <div class="col-md-3 mb-3">
            <label for="fromAddress" class="form-label">From Address:</label>
            <input type="text" class="form-control" id="fromAddress" value="{{ $car_move['pickup_name'] }}" readonly>
        </div>

        <div class="col-md-3 mb-3">
            <label for="toAddress" class="form-label">To Address:</label>
            <input type="text" class="form-control" id="toAddress" value="{{ $car_move['delivery_name'] }}" readonly>
        </div>

        <div class="col-md-3 mb-3">
            <label for="carType" class="form-label">Car Type:</label>
            <input type="text" class="form-control" id="carType" value="{{ $car_move['vehicle-type'] }}" readonly>
        </div>

        <div class="col-md-3 mb-3">
            <label for="carCondition" class="form-label">Car Condition:</label>
            <input type="text" class="form-control" id="carCondition" value="{{ $car_move['vehicle-condition'] }}" readonly>
        </div>
        <!-- <div class="col-md-1 mb-3">
            <label for="Quantity" class="form-label">Quantity:</label>
            <input type="number" class="form-control" id="Quantity" required min = "1" value = "1" oninput="updatePrices()">
        </div> -->
        <h3 class="text-center">Choisissez la formule de Carmoov souhaitée</h3>
        <section class="position-relative m-0">
            <div class="section container">
                <div class="row justify-content-center">
        @if (isset($economyPackage) && $economyPackage != null)
                    <div class="container pb-5 m-0">
                        <div class="row align-items-center">
                            <div class="col-lg-4 differnce-section text-center mt-4">
                                <div class="card rounded">
                                    <img src="{{asset('images/wallet/eco.jpg')}}" class="card-img-top rounded" alt="Voie économique">
                                    <div class="card-body">
                                    <h3 class="card-text text-center eco-h differnce-section">La formule économique <span>!</span></h3>

                                        <p class="card-text text-center mt-3 text-dark app-font-family fs-5">Co-convoyeur particulier</p>
                                        <!-- <h4 class="card-text text-dark text-center differnce-section">[Co-convoyage]</h4> -->
                                        <p class="card-text text-center text-dark mt-3 solution-text-p app-font-family">Sous 15 jours en moyenne</p>
                                        <p class="card-text text-center text-dark mt-3"><b>Assurance Wakam</b></p>
                                        <div class="form-group">
                                            <input type="checkbox" id="checkbox" name="checkbox_name"><span class="mx-1">Voir conditions</span>
                                        </div>
                                        <p class="card-text text-center text-dark mt-3 solution-text-p"><b>Ce prix est basé sur des véhicules similaires livrés sur CoCarmoov et les détails de votre annonce. </b></p>
                                        <p class="text-center  mt-3 h5 solution-price-eco app-font-family">{{ $economyPackage }} € {{ $tax_notation }}</p>
                                        <div class="text-center">
                                              <a type="button" class="btn banner-button-1 text-dark px-4 py-3 mt-5 app-font-family package-btn"
                                                data-package="economy" onclick="selectPackage('economy')">Choisir</a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                    </div>
        @endif
        @if (isset($express_package) && $express_package != null)
                            <div class="col-lg-4 differnce-section text-center mt-4">
                                <div class="card rounded">
                                <img src="{{asset('images/wallet/exp.jpg')}}" class="rounded" alt=""/>
                                    <div class="card-body">
                                    <h3 class="card-text text-center exp-h differnce-section">La formule express <span>!</span></h3>
                                    <p class="card-text text-center mt-3 text-dark app-font-family fs-5">Convoyeur professionnel</p>
                                    <!-- <h4 class="card-text text-dark text-center differnce-section">[Co-convoyage]</h4> -->
                                    <p class="card-text text-center text-dark mt-3 solution-text-p app-font-family">Sous 3 jours en moyenne</p>
                                    <p class="card-text text-center text-dark mt-3"><b>Assurance Generali</b></p>
                                    <div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox_name"><span class="mx-1">Voir conditions</span>
                                    </div>
                                    <p class="card-text text-center text-dark mt-3 solution-text-p"><b>Ce prix est basé sur des véhicules similaires livrés sur CoCarmoov et les détails de votre annonce. </b></p>
                                        <div class="card-text text-center mt-3 h5 solution-price-exp app-font-family">
                                        <div class="price-buttons d-inline">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <button onclick="adjustPrice('express', 'decrease')" class="btn btn-danger rounded-pill px-3 py-2">-</button>
                                                    </div>
                                                    <div class="col-md-5">
                                                    <p id="expressPriceDisplay">{{ $express_package }} € {{ $tax_notation }}</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button onclick="adjustPrice('express', 'increase')" class="btn btn-success rounded-pill px-3 py-2">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="express_checkbox" name="service_category" onclick="toggleExpressServices()">
                                            <span for="express_checkbox">Express Services</span>
                                        </div>
                                        <div class="text-center">
                                            <a type="button" class="btn banner-button-2 px-4 py-3 text-dark app-font-family package-btn"
                                            data-package="express" onclick="selectPackage('express')">Choisir</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
        @endif
        @if (isset($premium_package) && $premium_package != null)
                            <div class="col-lg-4 differnce-section text-center mt-4">
                                <div class="card rounded">
                                    <img src="{{asset('images/wallet/pre.jpg')}}" class="card-img-top rounded" alt="Voie économique">
                                    <div class="card-body">
                                    <h3 class="card-text text-center pre-h differnce-section">La formule premium <span>!</span></h3>
                                    <p class="card-text text-center mt-3 text-dark app-font-family fs-5">Convoyeur professionnel</p>
                                    <!-- <h4 class="card-text text-dark text-center differnce-section">[Co-convoyage]</h4> -->
                                    <p class="card-text text-center text-dark mt-3 solution-text-p app-font-family">Sous 3 jours en moyenne</p>
                                    <p class="card-text text-center text-dark mt-3"><b>Assurance du transporteur</b></p>

                                    <p class="card-text text-center text-dark mt-3 solution-text-p"><b>Ce prix est basé sur des véhicules similaires livrés sur CoCarmoov et les détails de votre annonce. </b></p>
                                            <div class="card-text text-dark mt-3 h5 solution-price-pre app-font-family">
                                            <div class="price-buttons d-inline">
                                                <div class="row mb-4">
                                                        <div class="col-md-3">
                                                    <button onclick="adjustPrice('premium', 'decrease')" class="btn btn-danger rounded-pill px-3 py-2">-</button>
                                                    </div>
                                                    <div class="col-md-5">
                                                    <p id="premiumPriceDisplay">{{ $premium_package }} € {{ $tax_notation }}</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <button onclick="adjustPrice('premium', 'increase')" class="btn btn-success rounded-pill px-3 py-2">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="premium_checkbox" name="service_category" onclick="togglePremiumServices()">
                                            <span for="premium_checkbox">Premium Services</span>
                                        </div>
                                        <div class="text-center">
                                            <a type="button" class="btn banner-button-3 text-dark px-4 py-3 app-font-family package-btn"
                                            data-package="premium" onclick="selectPackage('premium')">Choisir</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
        @endif
                            @if($premium_package === null && $express_package === null && $economyPackage === null)
                            <h3 class="text-center">Aucun forfait disponible</h3>
                        @endif
                            <!-- Repeat the structure for the other two columns (Voie express and Voie premium) -->
                        </div>
                </div>
                    <div class="col-md-12 text-center">
                        <button id="nextButton" type="button" class="btn btn-primary text-dark" onclick="handleNextStep({{ $isAuthenticated ? 'true' : 'false' }})">Suivant</button>
                    </div>
                </div>
            </div>

        </section>
        <div id="premium_services_section" style="display: none;">
            <div class="form-group">
                <input type="checkbox" id="premium_trailer_checkbox" name="premium_services" value="{{ $premium_package * 0.5 }}"><span for="premium_trailer_checkbox">Required enclosed car transporter trailer (price calculated ×0.5) [Closed trailer]</span>
            </div>

            <div class="form-group">
                <input type="checkbox" id="premium_cleaning_checkbox" name="premium_services" value="20"><span for="premium_cleaning_checkbox">Vehicle exterior cleaning (20€ excl. VAT) [Exterior cleaning]</span>
            </div>

            <div class="form-group">
                <input type="checkbox" id="premium_demonstration_checkbox" name="premium_services" value="20"><span for="premium_demonstration_checkbox">Demonstration (20€ excl. VAT) [Demonstration] </span>
            </div>

            <div class="form-group">
                <input type="checkbox" id="premium_contract_signature_checkbox" name="premium_services" value="20"><span for="premium_contract_signature_checkbox">Rental contract signature (20€ excl. VAT) [Rental contract signature]</span>
            </div>

            <div class="form-group">
                <input type="checkbox" id="premium_sale_certificate_checkbox" name="premium_services" value="30"><span for="premium_sale_certificate_checkbox">Sales & assignment certificate signature (30€ excl. VAT) [Sale contract signature]</span>
            </div>

            <div class="form-group">
                <input type="checkbox" id="premium_vehicle_return_checkbox" name="premium_services"><span for="premium_vehicle_return_checkbox">Return another vehicle after delivering the first (price calculated × 1) ! 3 * [Vehicle return]</span>
            </div>

            <div class="form-group">
                <input type="checkbox" id="premium_same_collection_address_checkbox" name="premium_services"><span for="premium_same_collection_address_checkbox">Check if same collection address</span>
            </div>

            <div class="form-group">
                <input type="checkbox" id="premium_extra_checkbox" name="premium_services"><span for="premium_extra_checkbox">Extra **: specify the service and the budget for € excl. VAT [Extra]</span>
            </div>
        </div>

        <div id="express_services_section" style="display: none;">
            <div class="form-group">
                <input type="checkbox" id="express_plates_checkbox" name="express_services" value="20"><span for="express_plates_checkbox">Required W Garage plates (20€ excl. VAT) ! 1 [W Garage plates]</span>
            </div>

            <div class="form-group">
                <input type="checkbox" id="express_cleaning_checkbox" name="express_services" value="20"><span for="express_cleaning_checkbox">Vehicle exterior cleaning (20€ excl. VAT) [Exterior cleaning]</span>
            </div>

            <div class="form-group">
                <input type="checkbox" id="express_refueling_checkbox" name="express_services" value="{{ 2 * ($distance * 0.99) }}"><span for="express_refueling_checkbox">Restore the same fuel level ! 2 (Distance ×0.09€ excl. VAT) [Refueling]</span>
            </div>

            <div class="form-group">
                <input type="checkbox" id="express_full_cleaning_checkbox" name="express_services" value="30"><span for="express_full_cleaning_checkbox">Vehicle interior & exterior cleaning (30€ excl. VAT) [Full cleaning]</span>
            </div>

            <div class="form-group">
                <input type="checkbox" id="express_demonstration_checkbox" name="express_services" value="20"><span for="express_demonstration_checkbox">Demonstration (20€ excl. VAT) [Demonstration]</span>
            </div>

            <div class="form-group">
                <input type="checkbox" id="express_extra_checkbox" name="express_services">
                <span for="express_extra_checkbox">Extra **: specify the service and the budget for € excl. VAT [Extra]</span>
            </div>

            <div id="express_extra_fields" style="display:none;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="extra_name">Name:</label>
                            <input class="form-control" type="text" id="extra_name" name="extra_name[]">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="extra_price">Price:</label>
                            <input class="form-control" type="number" id="extra_price" name="extra_price[]">
                        </div>
                    </div>
                <div class="col-md-4">
                    <button class="btn btn-primary mt-2" type="button" id="addMore">+</button>
                </div>
            </div>


        </div>
    </form>

</div>
</div>


<div id="step2" class="form-step">
    <h2>Step 2: Authentication</h2>
    <form id="authenticationForm">
      <label for="email">Email:</label>
      <input type="email" id="email1" >

      <label for="password">Password:</label>
      <input type="password" id="password1" >

      <button type="button" onclick="prevStep(2)">Previous</button>
      <button type="button" onclick="authenticateUser()">Next</button>

    </form>
  </div>


<div id="step3" class="form-step">
    {{-- sas --}}
    <h2>Step 3: Packages</h2>
    <form id="packagesForm">
        <label>Selected Package:</label>
                    <p id="selectedPackageDetails"></p>
                    <p id="selectedPackagePrice"></p>
        {{-- price show here in this step of the package and name too --}}
        <h2>Availability Details</h2>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="fromAddress" class="form-label">From Address:</label>
                <input type="text" class="form-control" id="fromAddress" value="{{ $car_move['pickup_name'] }}" readonly>
            </div>
            <div class="col-md-3 mb-3">
                <label for="toAddress" class="form-label">To Address:</label>
                <input type="text" class="form-control" id="toAddress" value="{{ $car_move['delivery_name'] }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <label for="collectionDate">Collection No Earlier Than</label>
                <input class="form-control" type="datetime-local" name="collectionDate" id="collectionDate" value="yyyy-mm-dd">
                {{-- <input class="form-control" type="time" name="collectiontime" id="collectiontime" value="hh:mm"> --}}
            </div>
            <div class="col-lg-6">
                <label for="deliveryDate">Delivery No later Than</label>
                <input class="form-control" type="datetime-local" name="deliveryDate" id="deliveryDate" placeholder="date...">
                {{-- <input class="form-control" type="time" name="deliverytime" id="deliverytime" placeholder="hrs"> --}}
            </div>
        </div>
        <h2>Vehicle Details</h2>
        <div class="row">
            <div class="col-md-2 mb-2">
                <label for="carType" class="form-label">Car Type:</label>
                <input type="text" class="form-control" id="carType" value="{{ $car_move['vehicle-type'] }}" readonly>
            </div>
            <div class="col-md-4 mb-3">
                <label for="carType" class="form-label">Make and Model</label>
                <input type="text" class="form-control" id="make_and_model" name="make_and_model" >
            </div>
            <div class="col-md-4 mb-3">
                <label for="carType" class="form-label">Number Plate</label>
                <input type="text" class="form-control" id="number_plate" name="number_plate" placeholder="AA99 AAA">
            </div>
            <div class="col-md-4 mb-3">
                <label for="carType" class="form-label">Seating Capacity</label>
                <select class="form-control" name="seating_capacity" id="seating_capacity">
                    <option value="">Choose</option>
                    <option value="2">2 seats</option>
                    <option value="3">3 seats</option>
                    <option value="4">4 seats</option>
                    <option value="5">5 seats</option>
                    <option value="6">6 seats</option>
                    <option value="7">7 seats</option>
                    <option value="8">8 seats</option>
                    <option value="9">9 seats</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="carType" class="form-label">GearBox</label>
                <select class="form-control" name="GearBox" id="GearBox">
                    <option value="">Transmission</option>
                    <option value="Manual">Manual</option>
                    <option value="Automatic">Automatic</option>
                </select>
            </div>
        </div>
            <button class="btn btn-warning" type="button" onclick="prevStep(3)">Previous</button>
            <button class="btn btn-warning" type="button" onclick="handleStep({{ $stripe_customer_id ? 'true' : 'false' }})">Next</button>
        </form>
</div>

<div id="step4" class="form-step">
    <h2>Step 4: Payment</h2>
    <form id="paymentForm">
        <div id="card-element">
            <!-- A Stripe Element will be inserted here. -->
        </div>
        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>
        <button type="button" class="btn btn-warning" onclick="submitPayment()">Submit Payment</button>
    </form>
</div>

<div id="step5" class="form-step">
    <h2>Step 5: Validation</h2>
<form id="hiddenValuesForm">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Address Details</h5>
            <input type="text" class="form-control mb-2" name="FromAddress" id="hiddenFromAddress" placeholder="From Address" readonly>
            <input type="text" class="form-control mb-2" name="ToAddress" id="hiddenToAddress" placeholder="To Address" readonly>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Vehicle Details</h5>
            <input type="text" class="form-control mb-2" name="CarType" id="hiddenCarType" placeholder="Car Type" readonly>
            <input type="text" class="form-control mb-2" name="CarCondition" id="hiddenCarCondition" placeholder="Car Condition" readonly>
            <input type="text" class="form-control mb-2" name="make_and_model" id="hidden_make_and_model" placeholder="Make and Model" readonly>
            <input type="text" class="form-control mb-2" name="number_plate" id="hidden_number_plate" placeholder="Number Plate" readonly>
            <input type="text" class="form-control mb-2" name="seating_capacity" id="hidden_seating_capacity" placeholder="Seating Capacity" readonly>
            <input type="text" class="form-control mb-2" name="GearBox" id="hiddenGearBox" placeholder="GearBox" readonly>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Package Details</h5>
            <input type="text" class="form-control mb-2" name="SelectedPackage" id="hiddenSelectedPackage" placeholder="Selected Package" readonly>
            <input type="text" class="form-control mb-2" name="PackageAmount" id="hiddenPackageAmount" placeholder="Package Amount" readonly>
            <input type="text" class="form-control mb-2" name="addon1" id="hiddenaddon1" placeholder="Addon 1" readonly>
            <input type="text" class="form-control mb-2" name="addon2" id="hiddenaddon2" placeholder="Addon 2" readonly>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Move Dates</h5>
            <input type="datetime-local" class="form-control mb-2" name="CarMoveDepartureDateFrom" id="hiddenCarMoveDepartureDateFrom" placeholder="Departure Date From" readonly>
            <input type="datetime-local" class="form-control mb-2" name="CarMoveDepartureDateTo" id="hiddenCarMoveDepartureDateTo" placeholder="Departure Date To" readonly>
        </div>
    </div>
    <br>
    <div class="text-center">
        <button class="btn btn-warning" type="button" onclick="sendAllFormData()">List my Car</button>
    </div>
</form>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

// Function to fetch CSRF token
function fetchCsrfToken(callback) {
    $.ajax({
        url: '/get-csrf-token',
        method: 'GET',
        success: function (response) {
            if (response.csrf_token) {
                callback(response.csrf_token);
            }
        },
        error: function (xhr, status, error) {
            console.error('Error fetching CSRF token:', error);
        },
    });
}



// var csrfToken = $('meta[name="csrf-token"]').attr('content');
// var csrfToken1 = $('meta[name="csrf-token1"]').attr('content');
// alert(csrfToken, csrfToken1)
updateProgressBar(1,true);

// document.addEventListener('DOMContentLoaded', function () {
        var stripe = Stripe('{{ config('services.stripe.key') }}');
        var elements = stripe.elements();
        var card = elements.create('card');
        card.mount('#card-element');
        // alert(card)
        card.addEventListener('change', function (event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        function handleStep(hasStripeCustomerId) {
            var Step = '';
            if(!hasStripeCustomerId) {
                Step = 3;
            } else {
                Step = 4;
                storeHiddenValues();
            }

            nextStep(Step);
        }




// Function to submit payment
function submitPayment() {
    // alert('ok')
    fetchCsrfToken(function (csrfToken) {
        stripe.createPaymentMethod({
            type: 'card',
            card: card,
        }).then(function (result) {
            if (result.error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                var paymentMethodId = result.paymentMethod.id;
                $.ajax({
                    url: '/process-payment',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    data: {
                        paymentMethodId: paymentMethodId,
                    },
                    success: function (response) {
                        if (response.success) {
                            alert('Payment successful! Payment Intent ID: ' + response.paymentIntentId);
                            // Redirect or show a success message
                            storeHiddenValues();
                            // sendAllFormData();
                            nextStep(4);
                        } else {
                            alert('Payment failed. Please try again.');
                            // Handle payment failure
                        }
                    },
                    error: function (error) {
                        console.error('Error:', error);
                        alert('An error occurred during payment. Please try again.');
                        // Handle payment error
                    }
                });
            }
        });
    });
}
    // });

// $(document).ready(function () {
//     alert('ok')
//       // Your progress bar update function call

//     });


let selectedPackage = '';

function selectPackage(packageType) {
    // Reset styles for all package buttons
    $('.package-btn').removeClass('selected-package');

    // Add style to the selected package button
    $(`.package-btn[data-package="${packageType}"]`).addClass('selected-package');

    // Capture the selected package type
    selectedPackage = packageType;

    // Update total price and selected package details
    updateTotalPrice();
    updateNextButton();

    // Call updateTotalPrice to update the display in the second step
    updateTotalPrice();
}

function handleNextStep(isAuthenticated) {
    // alert(isAuthenticated)
    var Step = '';
    if(isAuthenticated == true)
    {
        Step = 2;
    }
    else
    {
        Step = 1;
    }
            // Call the nextStep function with the determined step
            nextStep(Step);
        }


// When going to the next step
function nextStep(step) {
    // alert(step)
    if(step == 2)
    {
        // alert(step)
        $('#step1').addClass('d-none');
    }
    if(step == 4)
    {
        $('#step3').addClass('d-none');
    }
  const currentStepElement = document.getElementById(`step${step}`);

  if (currentStepElement && currentStepElement.classList) {
    currentStepElement.classList.remove('show-step');

    const nextStepElement = document.getElementById(`step${step + 1}`);

    if (nextStepElement && nextStepElement.classList) {
      nextStepElement.classList.add('show-step');
      updateProgressBar(step, false);
    } else {
      alert(`Next step element (step${step + 1}) not found or doesn't have classList.`);
    }
  } else {
    alert(`Current step element (step${step}) not found or doesn't have classList.`);
  }
}


// When going to the previous step
function prevStep(step) {
    if(step == 2)
    {
        $('#step1').removeClass('d-none');
    }
  document.getElementById(`step${step}`).classList.remove('show-step');
  document.getElementById(`step${step - 1}`).classList.add('show-step');
  updateProgressBar(step - 1, true); // Assuming the previous step is completed
}


function updateProgressBar(currentStep, isCompleted) {
  const progressSteps = document.querySelectorAll('.progress-step');
  progressSteps.forEach((step, index) => {
    if (index === currentStep) {
      step.style.backgroundColor = isCompleted ? '#ddd' : '#fdcd02';
    } else if (index > currentStep) {
      step.style.backgroundColor = '#ddd';  // Completed step color
    } else {
      step.style.backgroundColor = '#fdcd02';      // Incomplete step color
    }
  });
}


// Function to authenticate user
function authenticateUser() {
    fetchCsrfToken(function (csrfToken) {
        var email = $('#email1').val();
        var password = $('#password1').val();

        $.ajax({
            url: '/login-step',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
            },
            data: {
                email: email,
                password: password,
            },
            success: function (response) {
                if (response.success) {
                    // If authentication is successful, proceed to the next step
                    nextStep(2);  // You need to define the nextStep function
                } else if (response.fail) {
                    // If authentication fails, display an error message with SweetAlert
                    Swal.fire({
                        icon: 'error',
                        title: 'Authentication Failed',
                        text: 'Email and password do not match or are incorrect. Please try again.',
                    });
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('Error:', errorThrown);
                // Handle the error, e.g., display an error message
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred during authentication. Please try again later.',
                });
            }
        });
    });
}





  function submitForm() {
    // Perform form submission logic here
    alert('Form submitted successfully!');
  }

  function selectAndProceed(packageType) {
        selectPackage(packageType);
    }




    function togglePremiumServices() {

            var premiumCheckbox = document.getElementById("premium_checkbox");
            var premiumServicesSection = document.getElementById("premium_services_section");

            if (premiumCheckbox.checked) {
                premiumServicesSection.style.display = "block";
            } else {
                premiumServicesSection.style.display = "none";
            }
        }

        function toggleExpressServices() {
            var expressCheckbox = document.getElementById("express_checkbox");
            var expressServicesSection = document.getElementById("express_services_section");

            if (expressCheckbox.checked) {
                expressServicesSection.style.display = "block";
            } else {
                expressServicesSection.style.display = "none";
            }
        }


    const premiumPriceDisplay = document.getElementById('premiumPriceDisplay');
    const expressPriceDisplay = document.getElementById('expressPriceDisplay');
    const checkboxes = document.querySelectorAll('input[name^="express_services"], input[name^="premium_services"]');
    const expressExtraCheckbox = document.getElementById('express_extra_checkbox');
    const expressExtraFields = document.getElementById('express_extra_fields');
    const addMoreButton = document.getElementById('addMore');
    var selectedPackagePrice = 0;


    expressExtraCheckbox.addEventListener('change', toggleExtraFields);
    addMoreButton.addEventListener('click', addMoreFields);

    function toggleExtraFields() {
        expressExtraFields.style.display = expressExtraCheckbox.checked ? 'block' : 'none';
        updateTotalPrice();
    }

    function addMoreFields() {
        const newFields = expressExtraFields.cloneNode(true);
        expressExtraFields.parentNode.appendChild(newFields);
    }
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateTotalPrice);
    });

    function updateTotalPrice() {
    var totalPremiumPrice = parseFloat('{{ $premium_package }}');
    var totalExpressPrice = parseFloat('{{ $express_package }}');

    checkboxes.forEach(checkbox => {
        if (checkbox.checked) {
            if (checkbox.name.includes('express_services')) {
                totalExpressPrice += parseFloat(checkbox.value);
            } else if (checkbox.name.includes('premium_services')) {
                totalPremiumPrice += parseFloat(checkbox.value);
            }
        }
    });

    premiumPriceDisplay.textContent = `${totalPremiumPrice.toFixed(2)} € {{ $tax_notation }}`;
    expressPriceDisplay.textContent = `${totalExpressPrice.toFixed(2)} € {{ $tax_notation }}`;
// alert("ok")
    // Display selected package details in the next step
    $('#selectedPackageDetails').text(`Selected Package: ${selectedPackage}`);

    // Display selected package price in the next step

if(selectedPackage === 'economy')
{
    selectedPackagePrice = parseFloat('{{ $economyPackage }}');
}
    // Add logic to set the price based on the selected package
    if (selectedPackage === 'premium') {
        selectedPackagePrice = totalPremiumPrice;
    } else if (selectedPackage === 'express') {
        selectedPackagePrice = totalExpressPrice;
    }
// alert(selectedPackage)
    $('#selectedPackagePrice').text(`Selected Package Price: ${selectedPackagePrice.toFixed(2)} € {{ $tax_notation }}`);
}



    function adjustPrice(packageType, action) {
    var cartype = '{{ $selectedVehicleType }}';
    var distance = '{{ $distance }}';
    var car_owner = '{{ $car_owner }}';
    var priceElement = document.getElementById(packageType + 'PriceDisplay');
    var currentPrice = parseFloat(priceElement.innerText.replace('€', '').trim());
    var step = 1;
    var minPrice = 0;
    var maxPrice = 0;


    if((cartype == 'Citadine' || cartype == 'Berline') && packageType == 'express')
    {
        minPrice = 0.59 * distance + 59;
        maxPrice = 0.71 * distance + 59;
        if(car_owner == 'private')
            {
                maxPrice *= 1.2;
                minPrice *= 1.2;
            }
    }
    else if((cartype == 'Sportive' || cartype == 'Monospace' || cartype == '4x4') && packageType == 'express')
    {
        minPrice  = 0.60 * distance + 59;
        maxPrice  = 0.72 * distance + 59;
        if(car_owner == 'private')
            {
                maxPrice *= 1.2;
                minPrice *= 1.2;
            }
    }
    else if((cartype == '3m3' || cartype == '6m3') && packageType == 'express')
    {
        minPrice  = 0.63 * distance + 59;
        maxPrice  = 0.76 * distance + 59;
        if(car_owner == 'private')
            {
                maxPrice *= 1.2;
                minPrice *= 1.2;
            }
    }
    else if((cartype == '3m3' || cartype == '6m3') && packageType == 'express')
    {
        minPrice  = 0.63 * distance + 59;
        maxPrice  = 0.76 * distance + 59;
        if(car_owner == 'private')
            {
                maxPrice *= 1.2;
                minPrice *= 1.2;
            }
    }
    else if(cartype == '9m3' && packageType == 'express')
    {
        minPrice  = 0.66 * distance + 59;
        maxPrice  = 0.79 * distance + 59;
        if(car_owner == 'private')
            {
                maxPrice *= 1.2;
                minPrice *= 1.2;
            }
    }
    else if(cartype == '12m3' && packageType == 'express')
    {
        minPrice  = 0.76 * distance + 59;
        maxPrice  = 0.91 * distance + 59;
        if(car_owner == 'private')
            {
                maxPrice *= 1.2;
                minPrice *= 1.2;
            }
    }
    else if(cartype == '15m3' && packageType == 'express')
    {
        minPrice  = 0.80 * distance + 59;
        maxPrice  = 0.96 * distance + 59;
        if(car_owner == 'private')
            {
                maxPrice *= 1.2;
                minPrice *= 1.2;
            }
    }
    else if((cartype == '25m3' || cartype == '30m3' || cartype == 'Camion-benne' || cartype == 'Camping-car' || cartype == 'Van-aménagé') && packageType == 'express')
    {
        minPrice  = 0.85 * distance + 59;
        maxPrice  = 1.02 * distance + 59;
        if(car_owner == 'private')
            {
                maxPrice *= 1.2;
                minPrice *= 1.2;
            }
    }
    else if((cartype == 'Collection' || cartype == 'Citadine' || cartype == 'Berline' || cartype == 'Sportive' || cartype == 'Monospace' || cartype == '4×4' || cartype == '3m3' || cartype == '6m3' || cartype == '9m3' || cartype == '12m3' || cartype == '15m3' || cartype == 'Camion-benne' || cartype == 'Camping-car' || cartype == 'Van-aménagé') && packageType == 'premium')
    {
        minPrice  = 1.19 * distance + 149;
        maxPrice  = 1.79 * distance + 149;
        if(car_owner == 'private')
            {
                maxPrice *= 1.2;
                minPrice *= 1.2;
            }
    }

            if (action === 'increase' && currentPrice < maxPrice) {
                currentPrice += step;
            } else if (action === 'decrease' && currentPrice > minPrice) {
                currentPrice -= step;
            }



    // Update the price display
    priceElement.innerText = currentPrice.toFixed(2) + ' € {{ $tax_notation }}';

    // Prevent the default button behavior
    event.preventDefault();
}



    document.addEventListener('DOMContentLoaded', function() {
        updateNextButton();
    });

        function updateNextButton() {
        var nextButton = document.getElementById('nextButton');
        var isPackageSelected = selectedPackage !== undefined && selectedPackage !== '';
        nextButton.disabled = !isPackageSelected;
    }




    function storeHiddenValues() {
        // alert('ok')
    // Store values in the hidden form
    document.getElementById('hiddenFromAddress').value = document.getElementById('fromAddress').value;
    document.getElementById('hiddenToAddress').value = document.getElementById('toAddress').value;
    document.getElementById('hiddenCarType').value = document.getElementById('carType').value;
    document.getElementById('hiddenCarCondition').value = document.getElementById('carCondition').value;

    // Store values from the additional form fields
    document.getElementById('hidden_make_and_model').value = document.getElementById('make_and_model').value;
    document.getElementById('hidden_number_plate').value = document.getElementById('number_plate').value;
    document.getElementById('hidden_seating_capacity').value = document.getElementById('seating_capacity').value;
    document.getElementById('hiddenGearBox').value = document.getElementById('GearBox').value;


    document.getElementById('hiddenSelectedPackage').value = selectedPackage;
    document.getElementById('hiddenPackageAmount').value = selectedPackagePrice;

    // // Add more lines to store values for additional addons in the selected package
    // document.getElementById('hiddenAddon1').value = "Addon1";
    // document.getElementById('hiddenAddon2').value = "Addon2";

    document.getElementById('hiddenCarMoveDepartureDateFrom').value = document.getElementById('collectionDate').value;
    document.getElementById('hiddenCarMoveDepartureDateTo').value = document.getElementById('deliveryDate').value;
    }


    function sendAllFormData() {
        storeHiddenValues();
        // Ajax call to send all form data to Laravel controller
        sendDataToController('/listing', 'POST', new FormData(document.getElementById('hiddenValuesForm')));
    }

    function sendDataToController(url, method, data) {
        // alert(data)
        fetchCsrfToken(function (csrfToken) {
            // alert(data)
        // Ajax call to send data to Laravel controller
        // You may need to adjust the URL and other parameters based on your Laravel routes
        fetch(url, {
            method: method,
            body: data,
            headers: {
                'X-CSRF-TOKEN': csrfToken,
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Redirect to a specific URL upon success
                window.location.href = '/carmoovs'; // Change the URL as needed
            } else {
                // Handle error, e.g., show an error message
                alert('Error:', data.message);
            }
        })
        .catch((error) => {
            alert('Error:', error);
            // Handle error, e.g., show an error message
        });
    });
    }
</script>



@endsection









