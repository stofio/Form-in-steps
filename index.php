<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/style-nonNoblestern.css">
<link rel="stylesheet" href="css/custom.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-validation.js"></script>
<script src="https://kit.fontawesome.com/2e03fa4dd0.js"></script>
<body>

<form id="regForm" action="/action_page.php" name="appointment">
  <div class="tab">
    <?php include 'parts/general.php'; ?>
    <?php include 'parts/windows.html'; ?>
    <?php include 'parts/carpet.html'; ?>
    <?php include 'parts/unpholstery.html'; ?>
  </div>
  <div class="tab">
    <?php include 'parts/details.html'; ?>
  </div>
  <div class="tab">
    <div class="row" style="padding-bottom: 15px;">
        <div class="col-md-8">
           <label id="test" for="dateofbirth" style="margin: 15px 0 0 0;">Datum</label>
           <input name="datum" type="date" id="datum">
        </div>
        <div class="col-md-4">
           <select id="vreme" name="vreme" class="form-control" style="margin-top: 10px !important;">
              <option value="" selected="">-</option>
              <option value="7:00">7:00</option>
              <option value="8:00">8:00</option>
              <option value="9:00">9:00</option>
              <option value="10:00">10:00</option>
              <option value="11:00">11:00</option>
              <option value="12:00">12:00</option>
              <option value="13:00">13:00</option>
              <option value="14:00">14:00</option>
              <option value="15:00">15:00</option>
              <option value="16:00">16:00</option>
              <option value="17:00">17:00</option>
              <option value="18:00">18:00</option>
              <option value="19:00">19:00</option>
            </select>
          </div>
        </div>
        <div style="margin-top: 25px">
          <input name="email" type="text" id="email" class="form-control mb-4" placeholder="E-mail-adresse">
        </div>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button class="buttonForm" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button class="buttonForm" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:72px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
<script src="parts/validation.js"></script>

<script>
    jQuery('#checkbox2').change(function() {
        if (jQuery(this).is(":checked")) {
            jQuery('.cl1').addClass("show");
        } else {
            jQuery('.cl1').removeClass("show");
        }
    });
    jQuery('#checkbox3').change(function() {
        if (jQuery(this).is(":checked")) {
            jQuery('.cl2').addClass("show");
        } else {
            jQuery('.cl2').removeClass("show");
        }
    });
    jQuery('#checkbox4').change(function() {
        if (jQuery(this).is(":checked")) {
            jQuery('.cl3').addClass("show");
        } else {
            jQuery('.cl3').removeClass("show");
        }
    });
    jQuery('#checkbox5').change(function() {
        if (jQuery(this).is(":checked")) {
            jQuery('.cl4').addClass("show");
        } else {
            jQuery('.cl4').removeClass("show");
        }
    });
</script>

<script>
var currentTab = 1; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next >";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}


function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && isInvalid(currentTab)) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>


</body>
</html>
