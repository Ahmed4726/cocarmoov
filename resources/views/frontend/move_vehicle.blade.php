@extends('frontend.frontend_main_layout')
@section('content')
<div id="progress-bar">
    <div class="progress-step">1. Formule</div>
    <div class="progress-step">2. Identification</div>
    <div class="progress-step">3. Détails</div>
    <div class="progress-step">4. Paiement</div>
    <div class="progress-step">5. Validation</div>
  </div>

<div class="container">
<div id="step2" class="form-step show-step">
    <h2 class="mb-4">Step 1: Choose Package</h2>
    <form id="generalInfoForm" class="row g-3">
        <div class="col-md-3 mb-3">
            <label for="fromAddress" class="form-label">From Address:</label>
            <input type="text" class="form-control" id="fromAddress" required value="{{ $car_move['pickup_name'] }}" readonly>
        </div>

        <div class="col-md-3 mb-3">
            <label for="toAddress" class="form-label">To Address:</label>
            <input type="text" class="form-control" id="toAddress" required value="{{ $car_move['delivery_name'] }}" readonly>
        </div>

        <div class="col-md-2 mb-3">
            <label for="carType" class="form-label">Car Type:</label>
            <input type="text" class="form-control" id="carType" required value="{{ $car_move['vehicle-type'] }}" readonly>
        </div>

        <div class="col-md-3 mb-3">
            <label for="carCondition" class="form-label">Car Condition:</label>
            <input type="text" class="form-control" id="carCondition" required value="{{ $car_move['vehicle-condition'] }}" readonly>
        </div>
        <div class="col-md-1 mb-3">
            <label for="Quantity" class="form-label">Quantity:</label>
            <input type="number" class="form-control" id="Quantity" required min = "1" value = "1" oninput="updatePrices()">
        </div>
        <section class="position-relative m-0">
            <div class="section container">
                <div class="row justify-content-center">
        {{-- @if($car_move == ) --}}
        @if (isset($economyPackage) && $economyPackage != null)
                    <div class="container pb-5 m-0">
                        <div class="row align-items-center">
                            <div class="col-lg-4 differnce-section text-center mt-4">
                                <div class="card">
                                    <h3 class="card-header text-center eco-h differnce-section">Voie économique</h3>
                                    <img src="{{asset('images/wallet/eco.jpg')}}" class="card-img-top rounded" alt="Voie économique">
                                    <div class="card-body">
                                        <p class="card-text text-center mt-3 text-dark app-font-family fs-5">Vous déménagez et n’avez pas de conducteurs pour vos véhicules ?</p>
                                        <p class="card-text text-center text-dark mt-3 solution-text"><b>Solution économique</b></p>
                                        <h4 class="card-text text-dark text-center differnce-section">[Co-convoyage]</h4>
                                        <p class="card-text text-center text-dark mt-3 solution-text-p"><b>Faites des économies en proposant vos véhicules à des co-convoyeurs particuliers pour les déplacer pendant qu'ils déménagent ou covoiturent.</b></p>
                                        <p class="card-text text-center text-dark mt-3 solution-text-p app-font-family">Sous 15 jours en moyenne</p>
                                        <p id="economyPriceDisplay" class="card-text text-center mt-3 h5 solution-price-eco app-font-family">À partir de {{ $economyPackage }} € {{ $tax_notation }}</p>
                                        <div class="text-center">
                                            <a type="button" class="btn banner-button-1 text-dark px-4 py-3 mt-4 app-font-family package-btn"
                    data-package="economy" onclick="selectAndProceed('economy')">Rapatrier un véhicule</a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
        @endif
        @if (isset($express_package) && $express_package != null)
                            <div class="col-lg-4 differnce-section text-center mt-4">
                                <div class="card">
                                <h3 class="card-header text-center exp-h differnce-section">Voie express</h3>
                                <img src="{{asset('images/wallet/exp.jpg')}}" class="rounded"/>
                                    <div class="card-body">
                                        <p class="card-text text-center mt-3 text-dark app-font-family fs-5">Vous vendez un véhicule ou le livrer avec des services<br> à la clé ?</p>
                                        <p class="card-text text-center text-dark mt-3 solution-text"><b>Solution économique</b></p>
                                        <h4 class="card-text text-dark text-center differnce-section">[Co-convoyage]</h4>
                                        <p class="card-text text-center text-dark mt-3 solution-text-p"><b>Faites des économies en proposant vos véhicules à des co-convoyeurs particuliers pour les déplacer pendant qu'ils déménagent ou covoiturent.</b></p>
                                        <p class="card-text text-center text-dark mt-3 solution-text-p app-font-family">Sous 15 jours en moyenne</p>
                                        <p id="expressPriceDisplay" class="card-text text-center h5 text-light mt-3 solution-price-exp app-font-family">À partir de {{ $express_package }} € {{ $tax_notation }}</p>
                                        <div class="text-center">
                                            <a type="button" class="btn banner-button-2 mt-4 px-4 py-3 text-dark app-font-family package-btn"
                                            data-package="express" onclick="selectAndProceed('express')">Déplacer un véhicule</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
        @if (isset($premium_package) && $premium_package != null)
                            <div class="col-lg-4 differnce-section text-center mt-4">
                                <div class="card">
                                <h3 class="card-header text-center pre-h differnce-section">Voie premium</h3>
                                    <img src="{{asset('images/wallet/pre.jpg')}}" class="card-img-top rounded" alt="Voie économique">
                                    <div class="card-body">
                                        <p class="card-text text-center mt-3 text-dark app-font-family fs-5">Vous déménagez et n’avez pas de conducteurs pour vos véhicules ?</p>
                                        <p class="card-text text-center text-dark mt-3 solution-text"><b>Solution économique</b></p>
                                        <h4 class="card-text text-dark text-center differnce-section">[Co-convoyage]</h4>
                                        <p class="card-text text-center text-dark mt-3 solution-text-p"><b>Faites des économies en proposant vos véhicules à des co-convoyeurs particuliers pour les déplacer pendant qu'ils déménagent ou covoiturent.</b></p>
                                        <p class="card-text text-center text-dark mt-3 solution-text-p app-font-family">Sous 15 jours en moyenne</p>
                                        <p id="premiumPriceDisplay" class="text-center text-light h5 mt-3 solution-price-pre app-font-family">À partir de {{ $premium_package }} € {{ $tax_notation }}</p>
                                        <div class="text-center">
                                            <a type="button" class="btn banner-button-3 text-dark px-4 py-3 mt-4 app-font-family package-btn"
                                            data-package="premium" onclick="selectAndProceed('premium')">Transporter un véhicule</a>
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
                </div>
            </div>
        </section>

        <div class="col-12">
            <button type="button" class="btn btn-primary" onclick="nextStep(2)">Next</button>
        </div>
    </form>

</div>
</div>


<div id="step3" class="form-step">
  <h2>Step 2: Packages</h2>
  <form id="packagesForm">
    <label>Selected Package:</label>
                <p id="selectedPackageDetails"></p>
                <p id="selectedPackagePrice"></p>
{{-- price show here in this step of the package and name too --}}
    <button type="button" onclick="prevStep(2)">Previous</button>
    <button type="button" onclick="nextStep(3)">Next</button>
  </form>
</div>

<div id="step4" class="form-step">
  <h2>Step 3: Authentication</h2>
  <form id="authenticationForm">
    <label for="email">Email:</label>
    <input type="email" id="email" >

    <label for="password">Password:</label>
    <input type="password" id="password" >

    <button type="button" onclick="prevStep(3)">Previous</button>
    <button type="button" onclick="nextStep(2)">Next</button>

  </form>
</div>

<div id="step5" class="form-step">
  <h2>Step 4: test</h2>
  <form id="authenticationForm">
    <label for="email">Email:</label>
    <input type="email" id="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" required>

    <button type="button" onclick="prevStep(3)">Previous</button>
    <button type="button" onclick="submitForm()">Submit</button>
  </form>
</div>
<script>

let selectedPackage = '';

function selectPackage(packageType) {
    // Reset styles for all package buttons
    $('.package-btn').removeClass('selected-package');

    // Add style to the selected package button
    $(`.package-btn[data-package="${packageType}"]`).addClass('selected-package');

    // Capture the selected package type
    selectedPackage = packageType;
    updatePrices();
}
// When going to the next step
function nextStep(step) {
  document.getElementById(`step${step}`).classList.remove('show-step');
  document.getElementById(`step${step + 1}`).classList.add('show-step');
  updateProgressBar(step + 1, false); // Assuming the next step is not completed
}

// When going to the previous step
function prevStep(step) {
  document.getElementById(`step${step}`).classList.remove('show-step');
  document.getElementById(`step${step - 1}`).classList.add('show-step');
  updateProgressBar(step - 1, true); // Assuming the previous step is completed
}


  function updateProgressBar(currentStep, isCompleted) {
  const progressSteps = document.querySelectorAll('.progress-step');
  progressSteps.forEach((step, index) => {
    if (index === currentStep) {
      step.style.backgroundColor = isCompleted ? '#fdcd02' : '#ddd';
    } else if (index < currentStep) {
      step.style.backgroundColor = '#fdcd02';  // Completed step color
    } else {
      step.style.backgroundColor = '#ddd';      // Incomplete step color
    }
  });
}


  function submitForm() {
    // Perform form submission logic here
    alert('Form submitted successfully!');
  }

  function selectAndProceed(packageType) {
        selectPackage(packageType);
        nextStep(2);
    }



  function updatePrices() {

    const quantityInput = document.getElementById('Quantity');

        // Update Economy Package Price
        const economyPriceDisplay = document.getElementById('economyPriceDisplay');
        const economyInitialPrice = parseFloat('{{ $economyPackage }}');
        const economyQuantity = parseFloat(quantityInput.value);
        const totalEconomyPrice = economyInitialPrice * economyQuantity;
        economyPriceDisplay.textContent = `À partir de ${totalEconomyPrice.toFixed(2)} € {{ $tax_notation }}`;

        // Update Express Package Price
        const expressPriceDisplay = document.getElementById('expressPriceDisplay');
        const expressInitialPrice = parseFloat('{{ $express_package }}');
        const expressQuantity = parseFloat(quantityInput.value);
        const totalExpressPrice = expressInitialPrice * expressQuantity;
        expressPriceDisplay.textContent = `À partir de ${totalExpressPrice.toFixed(2)} € {{ $tax_notation }}`;

        // Update Premium Package Price
        const premiumPriceDisplay = document.getElementById('premiumPriceDisplay');
        const premiumInitialPrice = parseFloat('{{ $premium_package }}');
        const premiumQuantity = parseFloat(quantityInput.value);
        const totalPremiumPrice = premiumInitialPrice * premiumQuantity;
        premiumPriceDisplay.textContent = `À partir de ${totalPremiumPrice.toFixed(2)} € {{ $tax_notation }}`;

        // Display the selected package and its price in the second step
        const selectedPackageDetails = document.getElementById('selectedPackageDetails');
        const selectedPackagePrice = document.getElementById('selectedPackagePrice');

        selectedPackageDetails.textContent = `Selected Package: ${selectedPackage}`;

        // Determine the total price based on the selected package
        let totalPackagePrice = 0;
        switch (selectedPackage) {
            case 'economy':
                totalPackagePrice = economyInitialPrice * parseFloat(quantityInput.value);
                break;
            case 'express':
                totalPackagePrice = expressInitialPrice * parseFloat(quantityInput.value);
                break;
            case 'premium':
                totalPackagePrice = premiumInitialPrice * parseFloat(quantityInput.value);
                break;
            default:
                break;
        }
        // alert(totalPackagePrice)
        selectedPackagePrice.textContent = `Total Price: ${totalPackagePrice.toFixed(2)} € {{ $tax_notation }}`;
    }

</script>



@endsection
