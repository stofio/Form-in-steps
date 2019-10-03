/**
 * [The function call functins to check if there are invalids, 
 * and return display errors and messages at bottom of tab]
 * 
 * @param  {[int]}  tab [Is the current form tab, tab=case in switch statment]
 * @return {Boolean}     [If true, that means that something is wrong, invalid inputs]
 */
function isInvalid(tab) {
  var msgErrPolja = 'Hoppla, du hast da oben ein paar Fehler hinterlassen!';
  switch (tab) {
    case 0: //validate cleanings table
      var general = document.getElementById('checkbox2');
      var windows = document.getElementById('checkbox3');
      var carpet = document.getElementById('checkbox4');
      var unpholstery = document.getElementById('checkbox5');
      var invalids = [];
      var msgErrCheckbox = 'Sie müssen mindestens eine Reinigung wählen';

      if (!general.checked && !windows.checked && !carpet.checked && !unpholstery.checked) {
        showBoxError('error-ciscenja', 'error-msg-ciscenja', msgErrCheckbox);
        return true;
        break;
      }
      if (general.checked) {
        if (invalidGeneral()) {
          showBoxError('error-ciscenja', 'error-msg-ciscenja', msgErrPolja);
          invalids.push(invalidGeneral());
          return true;
        } else {
          document.getElementById('error-ciscenja').style.display = 'none';
        }
      }
      if (windows.checked) {
        if (invalidWindows()) {
          showBoxError('error-ciscenja', 'error-msg-ciscenja', msgErrPolja);
          invalids.push(invalidWindows());
          return true;
        } else {
          document.getElementById('error-ciscenja').style.display = 'none';
        }
      }
      if (carpet.checked) {
        if (invalidCarpet()) {
          showBoxError('error-ciscenja', 'error-msg-ciscenja', msgErrPolja);
          invalids.push(invalidCarpet());
          return true;
        } else {
          document.getElementById('error-ciscenja').style.display = 'none';
        }
      }
      if (unpholstery.checked) {
        if (invalidUnpholstery()) {
          showBoxError('error-ciscenja', 'error-msg-ciscenja', msgErrPolja);
          invalids.push(invalidUnpholstery());
          return true;
        } else {
          document.getElementById('error-ciscenja').style.display = 'none';
        }
      }
      for (var i = 0; i <= invalids.length; i++) {
        if (invalids[i] == true) {
          return true;
          break;
        }
      }
      break;
    case 1: //validate details table;
      if (invalidDetails()) {
        showBoxError('error-details', 'error-msg-details', msgErrPolja);
        return true; //invalid
      } else {
        document.getElementById('error-details').style.display = "none";
      }
      break;
    case 2: //validate last table
      if (invalidInformation()) {
        showBoxError('error-info', 'error-msg-info', msgErrPolja);
        return true;
      } else {
        document.getElementById('error-info').style.display = "none";
      }
      break;

    default:
      break;
  }
}

/**
 * [Checks if "general cleaning" is invalid and highlight error fields"]
 * 
 * @return {[bool]} [true if invalid]
 */
function invalidGeneral() {
  var invalid = false;
  var notChecked = true;
  var area = document.getElementById('area');
  var cleanSelect = document.getElementById('clean-select');
  var prljavoArray = document.getElementsByName('prljavo');
  var prljavoNr = prljavoArray.length;
  var prljavoErr = document.getElementById('prljavo1');

  for (var i = 0; i < prljavoNr; i++) //check if dirt type selected
  {
    if (prljavoArray[i].checked) {
      notChecked = false;
      prljavoErr.style.color = "teal"; //if error corrected
      break;
    } else {
      prljavoErr.style.color = "#e20606";
    }
  }
  if (area.value.trim() === "") {
    invalid = true;
    showInputError(area);
  } else { hideInputError(area) }
  if (cleanSelect.value === "") {
    invalid = true;
    showInputError(cleanSelect);
  } else { hideInputError(cleanSelect) }
  if (invalid || notChecked) {
    return true; //invalid
  }
}

/**
 * [Checks if "windows cleaning" is invalid and highlight error fields"]
 * 
 * @return {[bool]} [true if invalid]
 */
function invalidWindows() {
  var invalid = false;
  var ciscenjeNotChecked = true;
  var prljavoNotChecked = true;
  var velicina = document.getElementById('prozorV');
  var plafon = document.getElementById('plafonV');
  var ciscenjaArray = document.getElementsByName('ciscenje[]');
  var prljavoArray = document.getElementsByName('prljavoWin');
  var ciscenjeNr = ciscenjaArray.length;
  var prljavoNr = prljavoArray.length;
  var ciscenjeErr = document.getElementById('ciscenjaWin');
  var prljavoErr = document.getElementById('prljavo2');

  if (velicina.value.trim() === "") {
    invalid = true;
    showInputError(velicina);
  } else { hideInputError(velicina); }
  if (plafon.value.trim() === "") {
    invalid = true;
    showInputError(plafon);
  } else { hideInputError(plafon); }
  for (i = 0; i < ciscenjeNr; i++) {
    if (ciscenjaArray[i].checked) {
      ciscenjeNotChecked = false;
      ciscenjeErr.style.color = "teal"; //if error corrected
      break;
    } else {
      ciscenjeErr.style.color = "#e20606";
    }
  }
  for (j = 0; j < prljavoNr; j++) {
    if (prljavoArray[j].checked) {
      prljavoNotChecked = false;
      prljavoErr.style.color = "teal"; //if error corrected
      break;
    } else {
      prljavoErr.style.color = "#e20606";
    }
  }
  if (invalid || ciscenjeNotChecked || prljavoNotChecked) {
    return true; //invalid
  }
}

/**
 * [Checks if "carpet cleaning" is invalid and highlight error fields"]
 * 
 * @return {[bool]} [true if invalid]
 */
function invalidCarpet() {
  var invalid = false;
  var ciscenjeNotChecked = true;
  var prljavoNotChecked = true;
  var kolicina = document.getElementById('tepihK');
  var velicina = document.getElementById('tepihA');
  var ciscenjaArray = document.getElementsByName('ciscenje2[]');
  var prljavoArray = document.getElementsByName('prljavoCar');
  var ciscenjaNr = ciscenjaArray.length;
  var prljavoNr = prljavoArray.length;
  var ciscenjeErr = document.getElementById('ciscenjaCarp');
  var prljavoErr = document.getElementById('prljavo3');

  if (kolicina.value < 1 || kolicina.value === "") {
    invalid = true;
    showInputError(kolicina);
  } else { hideInputError(kolicina); }
  if (velicina.value.trim() === "") {
    invalid = true;
    showInputError(velicina);
  } else { hideInputError(velicina); }
  for (i = 0; i < ciscenjaNr; i++) {
    if (ciscenjaArray[i].checked) {
      ciscenjeNotChecked = false;
      ciscenjeErr.style.color = "teal"; //if error corrected
      break;
    } else {
      ciscenjeErr.style.color = "#e20606";
    }
  }
  for (j = 0; j < prljavoNr; j++) {
    if (prljavoArray[j].checked) {
      prljavoNotChecked = false;
      prljavoErr.style.color = "teal"; //if error corrected
      break;
    } else {
      prljavoErr.style.color = "#e20606";
    }
  }
  if (invalid || ciscenjeNotChecked || prljavoNotChecked) {
    return true;
  }
}

/**
 * [Checks if "unpholstery cleaning" is invalid and highlight error fields"]
 * 
 * @return {[bool]} [true if invalid]
 */
function invalidUnpholstery() {
  var invalid = false;
  var ciscenjeNotChecked = true;
  var prljavoNotChecked = true;
  var TwoSit = document.getElementById('TwoSit');
  var threeSit = document.getElementById('threeSit');
  var sessel = document.getElementById('sessel');
  var couch = document.getElementById('couch');
  var eKl = document.getElementById('eKl');
  var eGr = document.getElementById('eGr');
  var polOhng = document.getElementById('polOhng');
  var polMit = document.getElementById('polMit');
  var ciscenjaArray = document.getElementsByName('ciscenje3[]');
  var prljavoArray = document.getElementsByName('prljavoUnph');
  var ciscenjaNr = ciscenjaArray.length;
  var prljavoNr = prljavoArray.length;
  var ciscenjaUnph = document.getElementById('ciscenjaUnph');
  var prljavoErr = document.getElementById('prljavo4');
  var stvari = [TwoSit, threeSit, sessel, couch, eKl, eGr, polOhng, polMit];
  var a = stvari.length;
  if (TwoSit.value === "" && threeSit.value === "" && sessel.value === "" && couch.value === "" &&
    eKl.value === "" && eGr.value === "" && polOhng.value === "" && polMit.value === "") {
    for (c = 0; c < a; c++) {
      showInputError(stvari[c]);
    }
    invalid = true;
  } else {
    for (c = 0; c < a; c++) {
      hideInputError(stvari[c]);
    }
  }

  for (i = 0; i < ciscenjaNr; i++) {
    if (ciscenjaArray[i].checked) {
      ciscenjeNotChecked = false;
      ciscenjaUnph.style.color = "teal"; //if error corrected
      break;
    } else {
      ciscenjaUnph.style.color = "#e20606";
    }
  }
  for (j = 0; j < prljavoNr; j++) {
    if (prljavoArray[j].checked) {
      prljavoNotChecked = false;
      prljavoErr.style.color = "teal"; //if error corrected
      break;
    } else {
      prljavoErr.style.color = "#e20606";
    }
  }
  if (invalid || ciscenjeNotChecked || prljavoNotChecked) {
    return true;
  }
}

/**
 * [Checks if "details" tab is invalid and highlight error fields"]
 * 
 * @return {[bool]} [true if invalid]
 */
function invalidDetails() {
  var invalid = false;
  var notChecked = true;
  var objekatArray = document.getElementsByName('objekat');
  var sprat = document.getElementById('sprat');
  var namestaj = document.getElementById('namestaj');
  var objektiNr = objekatArray.length;
  var objekatErr = document.getElementById('objekat');

  for (var i = 0; i < objektiNr; i++) {
    if (objekatArray[i].checked) {
      objekatErr.style.color = "teal";
      notChecked = false;
      break;
    } else {
      objekatErr.style.color = "#e20606";
    }
  }
  if (sprat.value.trim() === "") {
    showInputError(sprat);
    invalid = true;
  } else {
    hideInputError(sprat);
  }
  if (namestaj.value === "") {
    showInputError(namestaj);
    invalid = true;
  } else {
    hideInputError(namestaj);
  }
  if (invalid || notChecked) {
    return true;
  }
}

/**
 * [Checks if "information" tab is invalid and highlight error fields"]
 * 
 * @return {[bool]} [true if invalid]
 */
function invalidInformation() {
  var invalid = false;
  datum = document.getElementById('datum');
  vreme = document.getElementById('vreme');
  email = document.getElementById('email');
  if (datum.value === "") {
    showInputError(datum);
    invalid = true;
  } else {
    hideInputError(datum);
  }
  if (vreme.value === "") {
    showInputError(vreme);
    invalid = true;
  } else {
    hideInputError(vreme);
  }
  if (!emailIsValid(email.value) || email.value === "") {
    showInputError(email);
    invalid = true;
  } else {
    hideInputError(email);
  }
  return invalid;
}

function emailIsValid(email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
}

function showInputError(box) {
  box.style.backgroundColor = "#ff00001a";
  box.style.border = "solid 1px #e20606";
}

function hideInputError(box) {
  box.style.backgroundColor = "white";
  box.style.border = "";
}

function showBoxError(boxId, paragraphId, msg) {
  document.getElementById(boxId).style.display = 'block';
  document.getElementById(paragraphId).innerHTML = msg;
}