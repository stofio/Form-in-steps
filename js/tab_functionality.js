var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

/**
 * [This function will display the specified tab of the form
 *  ... and fix the Previous/Next buttons]
 * @param  {[type]} n [description]
 * @return {[type]}   [description]
 */
function showTab(n) {
  
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  fixStepIndicator(n)
}

/**
 * [This function will figure out which tab to display]
 * @param  {[type]} n [description]
 * @return {[type]}   [description]
 */
function nextPrev(n)
{
  var x = document.getElementsByClassName("tab");
  if (n == 1 &&  isInvalid(currentTab))
  {
    validateOnKeyUp();
    shakeIcon();
    return false;
  }
  else 
  {
    dontValidateOnKeyUp();
  }
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  // if reached the end of the form...
  if (currentTab >= x.length) 
  {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function fixStepIndicator(n) 
{
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

function validateOnKeyUp()
{
  var allItemsArray = getInputsItems();
  for(j = 0; j < allItemsArray.length; j++)
  {
    allItemsArray[j].onkeyup = function() {
      isInvalid(currentTab);
    };
    allItemsArray[j].onchange = function() {
      isInvalid(currentTab);
    };
  }
}

function dontValidateOnKeyUp()
{
  var allItemsArray = getInputsItems();
  for(j = 0; j < allItemsArray.length; j++)
  {
    allItemsArray[j].onkeyup = function() {
      return 0;
    };
    allItemsArray[j].onchange = function() {
      return 0;
    };
  }
}

//animation on error
var errIcon1 = document.getElementById('errIcon1');
var errIcon2 = document.getElementById('errIcon2');
var errIcon3 = document.getElementById('errIcon3');
function shakeIcon()
{
  errIcon1.classList.add('heartBeat');
  setTimeout(function(){ errIcon1.classList.remove('heartBeat'); }, 1100);
  errIcon2.classList.add('heartBeat');
  setTimeout(function(){ errIcon2.classList.remove('heartBeat'); }, 1100);
  errIcon3.classList.add('heartBeat');
  setTimeout(function(){ errIcon2.classList.remove('heartBeat'); }, 1100);
}