<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/style-nonNoblestern.css">
<link rel="stylesheet" href="css/custom.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/2e03fa4dd0.js"></script>
<body>

<form id="regForm" action="/action_page.php" name="appointment">  
  <!--first tab-->
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
  <!--second tab-->
  <div class="tab">
    <?php include 'parts/details.html'; ?>
  <div id="error-details" style="display: none;">
          <p class="error">
              <span id="error-msg-details"></span>
              <i id="errIcon2" class="fas fa-exclamation-triangle fa-lg heartBeat" style="color: #e20606; margin-right:5px"></i>
          <p/>
      </div>
  </div>
  <!--third tab-->
  <div class="tab">
    <?php include 'parts/information.html'; ?>
      <div id="error-info" style="display: none;">
          <p class="error">
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
<script type="text/javascript" src="js/tab_functionality.js" charset="utf-8"></script>

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
</body>
</html>
