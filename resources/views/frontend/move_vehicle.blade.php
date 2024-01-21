@extends('frontend.frontend_main_layout')
@section('content')
<div id="progress-bar">
  <div class="progress-step">1. Formule</div>
  <div class="progress-step">2. Identification</div>
  <div class="progress-step">3. Détails</div>
  <div class="progress-step">4. Paiement</div>
  <div class="progress-step">4. Validation</div>
</div>

<div id="step1" class="form-step show-step">
  <h2>Step 1: General Info</h2>
  <form id="generalInfoForm">
    <label for="fromAddress">From Address:</label>
    <input type="text" id="fromAddress" required>

    <label for="toAddress">To Address:</label>
    <input type="text" id="toAddress" required>

    <label for="carType">Car Type:</label>
    <input type="text" id="carType" required>

    <label for="carCondition">Car Condition:</label>
    <input type="text" id="carCondition" required>

    <button type="button" onclick="nextStep(1)">Next</button>
  </form>
</div>

<div id="step2" class="form-step">
  <h2>Step 2: Packages</h2>
  <form id="packagesForm">
    <label>Select Package:</label>
    <select id="packageSelect">
      <option value="economy">Economy</option>
      <option value="express">Express</option>
      <option value="premium">Premium</option>
    </select>
    <button type="button" onclick="prevStep(1)">Previous</button>
    <button type="button" onclick="nextStep(2)">Next</button>
  </form>
</div>

<div id="step3" class="form-step">
  <h2>Step 3: Authentication</h2>
  <form id="authenticationForm">
    <label for="email">Email:</label>
    <input type="email" id="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" required>

    <button type="button" onclick="prevStep(3)">Previous</button>
    <button type="button" onclick="nextStep(2)">Next</button>

  </form>
</div>

<div id="step3" class="form-step">
  <h2>Step 4: test</h2>
  <form id="authenticationForm">
    <label for="email">Email:</label>
    <input type="email" id="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" required>

    <button type="button" onclick="prevStep(4)">Previous</button>
    <button type="button" onclick="submitForm()">Submit</button>
  </form>
</div>

<section class="position-relative m-0">
    <div class="section container">
        <div class="row justify-content-center">

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
                                <p class="card-text text-center mt-3 h5 solution-price-eco app-font-family">À partir de 59€ TTC</p>
                                <div class="text-center">
                                    <a type="button" class="btn banner-button-1 text-dark px-4 py-3 mt-4 app-font-family" href="#">
                                        <b>Rapatrier un véhicule</b>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 differnce-section text-center mt-4">
                        <div class="card">
                        <h3 class="card-header text-center exp-h differnce-section">Voie express</h3>
                        <img src="{{asset('images/wallet/exp.jpg')}}" class="rounded"/>
                            <div class="card-body">
                                <p class="card-text text-center mt-3 text-dark app-font-family fs-5">Vous vendez un véhicule ou le livrer avec des services à la clé ?</p>
                                <p class="card-text text-center text-dark mt-3 solution-text"><b>Solution économique</b></p>
                                <h4 class="card-text text-dark text-center differnce-section">[Co-convoyage]</h4>
                                <p class="card-text text-center text-dark mt-3 solution-text-p"><b>Faites des économies en proposant vos véhicules à des co-convoyeurs particuliers pour les déplacer pendant qu'ils déménagent ou covoiturent.</b></p>
                                <p class="card-text text-center text-dark mt-3 solution-text-p app-font-family">Sous 15 jours en moyenne</p>
                                <p class="card-text text-center h5 text-light mt-3 solution-price-exp app-font-family">À partir de 79€ TTC</p>
                                <div class="text-center">
                                                <a type="button"
                            class="btn banner-button-2 mt-4 px-4 py-3 text-dark app-font-family" href="#">
                            <b>Déplacer un véhicule</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <p class="text-center text-light h5 mt-3 solution-price-pre app-font-family">À partir de 179€ TTC</p>
                                <div class="text-center">
                                <a type="button"
            class="btn banner-button-3 text-dark px-4 py-3 mt-4 app-font-family" href="#">
            <b>Transporter un véhicule</b></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Repeat the structure for the other two columns (Voie express and Voie premium) -->

                </div>
            </div>
        </div>
    </div>
</section>

<script>
  function nextStep(step) {
    document.getElementById(`step${step}`).classList.remove('show-step');
    document.getElementById(`step${step + 1}`).classList.add('show-step');
    updateProgressBar(step + 1);
  }

  function prevStep(step) {
    document.getElementById(`step${step}`).classList.remove('show-step');
    document.getElementById(`step${step - 1}`).classList.add('show-step');
    updateProgressBar(step - 1);
  }

  function updateProgressBar(currentStep) {
    const progressSteps = document.querySelectorAll('.progress-step');
    progressSteps.forEach((step, index) => {
      if (index <= currentStep) {
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
</script>



@endsection