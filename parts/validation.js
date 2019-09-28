function isInvalid(tab) {

    switch(tab) {
        case 0://validate cleanings table
            var general = document.getElementById('checkbox2');
            var windows = document.getElementById('checkbox3');
            var carpet = document.getElementById('checkbox4');
            var unpholstery = document.getElementById('checkbox5');
            if(general.checked)
            {
                var invalid = invalidGeneral() ? true : false;
                return invalid;
            }
            break;
        case 1://validate details table
             var invalid = invalidDetails() ? true : false;
             return invalid;
             break;
        case 2://validate last table
           if(invalidInformation()) {
               var invalid = invalidInformation() ? true : false;
               return invalid;
           }
            break;
        default: break;

    }
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function invalidDetails() {
    var invalid = false;
    var objekatArray = document.getElementsByName('objekat');
    var spt = document.getElementById('sprat');
    var namestaj = document.getElementById('namestaj');
    var sprat = spt.value.trim();

    var objekti = objekatArray.length;
    var notChecked = true;
    for(var i=0; i < objekti; i++)
    {
        if(objekatArray[i].checked)
        {
            notChecked = false;
            break;
        }
    }
    if(sprat === "")
    {
        invalid = true;
    }
    else if (namestaj.value === "")
    {
        invalid = true;
    }
    else { invalid = false; }
    if(invalid || notChecked)
    {
        return true;
    }
    else { return false; }
}

function invalidInformation() {
    var invalid = false;
    datum = document.getElementById('datum');
    vreme = document.getElementById('vreme');
    em = document.getElementById('email');
    email = em.value.trim();
    if(datum.value === ""){
        invalid = true;
    }
    else if(vreme.value === "") {
        invalid = true;
    }

    else if(email === "" || validateEmail(email)) {
        invalid = true;
    }
    else {
        invalid = false;
    }
    return invalid;
}

function invalidGeneral() {
    var invalid = false;
    var ar = document.getElementById('area');
    var cleanSelect = document.getElementById('clean-select');
    var prljavoArray = document.getElementsByName('prljavo');
    var area = ar.value.trim();

    var prljavo = prljavoArray.length;
    var notChecked = true;
    for(var i=0; i < prljavo; i++)
    {
        if(prljavoArray[i].checked)
        {
            notChecked = false;
            break;
        }
    }
    if(area === "") {
        invalid = true;
    }
    else if(cleanSelect.value === "") {
        invalid = true;
    }
    else { invalid = false; }
    if(invalid || notChecked)
    {
        return true;
    }
    else { return false; }
}