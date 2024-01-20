<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multi-Step Form</title>
  <style>
    .form-step {
      display: none;
    }
    .show-step {
      display: block;
    }
    #progress-bar {
      width: 100%;
      background-color: #ddd;
      height: 30px;
      display: flex;
    }
    .progress-step {
      flex: 1;
      text-align: center;
      line-height: 30px;
      font-weight: bold;
      color: #fff;
    }
  </style>
</head>
<body>

<div id="progress-bar">
  <div class="progress-step">1. General Info</div>
  <div class="progress-step">2. Packages</div>
  <div class="progress-step">3. Authentication</div>
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

    <button type="button" onclick="prevStep(2)">Previous</button>
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
    <button type="button" onclick="submitForm()">Submit</button>
  </form>
</div>

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
        step.style.backgroundColor = '#4CAF50';  // Completed step color
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

</body>
</html>
