<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/style-nonNoblestern.css">
<link rel="stylesheet" href="css/custom.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/2e03fa4dd0.js"></script>
<body>

<form id="regForm" action="/action_page.php" name="appointment">
  <div class="tab">
    <?php include 'parts/general.php'; ?>
    <?php include 'parts/windows.html'; ?>
    <?php include 'parts/carpet.html'; ?>
    <?php include 'parts/unpholstery.html'; ?>
    <div id="error-ciscenja" style="display: none;">
        <p class="error">
            <span id="error-msg-ciscenja"></span>
            <i id="errIcon1" class="fas fa-exclamation-triangle fa-lg heartBeat" style="color: #e20606; margin-right:5px"></i>
        <p/>
    </div>
  </div>
  <div class="tab">
    <?php include 'parts/details.html'; ?>
  </div>
  <div class="tab">
    <div class="" style="padding-bottom: 15px;">
           <label id="datumm" for="datum" style="margin: 15px 0 0 0;">Datum</label>
           <input name="datum" type="date" id="datum">
           <label id="zeit" for="vreme" style="margin: 15px 0 0 0;">Zeit</label>
           <select id="vreme" name="vreme" class="form-control" style="margin-top: 10px !important; width: 30%">
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
        <div style="margin-top: 15px">
          <input name="email" type="text" id="email" class="form-control mb-4" placeholder="E-mail-adresse">
        </div>
      <div id="error-info" style="display: none;">
          <p id="s1" class="error">
              <span id="error-msg-info"></span>
              <i id="errIcon3" class="fas fa-exclamation-triangle fa-lg heartBeat" style="color: #e20606; margin-right:5px"></i>
          <p/>
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

<script type="text/javascript" src="js/validation.js" charset="utf-8"></script>

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
var currentTab = 0; // Current tab is set to be the first tab (0)
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

function nextPrev(n)
{
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 &&  isInvalid(currentTab))
  {
    validateOnBlur();
    shakeIcon();
    return false;
  }
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

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}

function getInputsItems()
{
  var allItems = [];
  allItems.push(document.querySelectorAll('select'));
  allItems.push(document.querySelectorAll('input[type="text"]'));
  allItems.push(document.querySelectorAll('input[type="radio"]'));
  allItems.push(document.querySelectorAll('input[type="date"]'));
  allItems.push(document.getElementsByName('ciscenje[]'));
  allItems.push(document.getElementsByName('ciscenje2[]'));
  allItems.push(document.getElementsByName('ciscenje3[]'));
  var nodesArray = [];
  var allItemsArray;
  for(var i = 0; i < allItems.length; i++)
  {
    nodesArray.push(Array.prototype.slice.call(allItems[i]));//nodes to ArrayNodes
  }
  allItemsArray = [].concat.apply([], nodesArray);//ArrayNodes to array
  return allItemsArray;
}

function validateOnBlur()
{
  //triggered if error
  var allItemsArray = getInputsItems();
  for(j = 0; j < allItemsArray.length; j++)
  {
    allItemsArray[j].blur = function() {
      isInvalid(currentTab);
    };
  }
}

function discardOnBlur()
{
  var allItemsArray = getInputsItems();
  for(j = 0; j < allItemsArray.length; j++)
  {
    allItemsArray[j].blur = function() {
      return false;
    };
  }
}


//animation on error
/*
OVO SVE MOZE DA SE SPOJI U JEDNU FUNKCIJU "SHACKEICON" tako sto ic1 zamenis sa funkcijom (u shakeIcon)
 */
var errIcon1 = document.getElementById('errIcon1');
var errIcon2 = document.getElementById('errIcon2');
var errIcon3 = document.getElementById('errIcon3');
function shakeIcon()
{
  errIcon1.classList.add('heartBeat');
  setTimeout(ic1, 1100);
  errIcon2.classList.add('heartBeat');
  setTimeout(ic2, 1100);
  errIcon3.classList.add('heartBeat');
  setTimeout(ic3, 1100);
}
function ic1()
{
  errIcon1.classList.remove('heartBeat');
}
function ic2()
{
  errIcon2.classList.remove('heartBeat');
}
function ic3()
{
  errIcon3.classList.remove('heartBeat');
}

</script>


</body>
</html>
