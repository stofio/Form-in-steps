function isInvalid(tab) {

    switch(tab) {
        case 0://validate cleanings table
            var general = document.getElementById('checkbox2');
            var windows = document.getElementById('checkbox3');
            var carpet = document.getElementById('checkbox4');
            var unpholstery = document.getElementById('checkbox5');
            /*
            PROMENITI OVDE NA PO SVAKI RETURN DOLE
             */
            if(general.checked)
            {
                var invalidGenerall = invalidGeneral() ? true : false;
                return invalidGenerall;
            }
            if(windows.checked)
            {
                var invalidWindowss = invalidWindows() ? true : false;
                return invalidWindowss;
            }
            if(carpet.checked)
            {
                var invalidCarpett = invalidCarpet() ? true : false;
                return invalidCarpett;
            }
            if(unpholstery.checked)
            {
                var invalidUnpholsteryy = invalidUnpholstery() ? true : false;
                return invalidUnpholsteryy;
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
    var notChecked = true;
    var objekatArray = document.getElementsByName('objekat');
    var sprat = document.getElementById('sprat').value.trim();
    var namestaj = document.getElementById('namestaj');
    var objektiNr = objekatArray.length;

    for(var i=0; i < objektiNr; i++) // check if objekat  selected
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
    if (namestaj.value === "")
    {
        invalid = true;
    }
    if(invalid || notChecked)
    {
        return true;
    }
}

function invalidInformation() {
    var invalid = false;
    datum = document.getElementById('datum');
    vreme = document.getElementById('vreme');
    email = document.getElementById('email').value.trim();
    if(datum.value === ""){
        invalid = true;
    }
    if(vreme.value === "")
    {
        invalid = true;
    }
    if(email === "" || validateEmail(email))
    {
        invalid = true;
    }
    return invalid;
}

function invalidGeneral() {
    var invalid = false;
    var notChecked = true;
    var area = document.getElementById('area').value.trim();
    var cleanSelect = document.getElementById('clean-select');
    var prljavoArray = document.getElementsByName('prljavo');
    var prljavoNr = prljavoArray.length;

    for(var i=0; i < prljavoNr; i++) //check if dirt type selected
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
    if(cleanSelect.value === "") {
        invalid = true;
    }
    if(invalid || notChecked)
    {
        return true;
    }
}

function invalidWindows() {
    var invalid = false;
    var ciscenjeNotChecked = true;
    var prljavoNotChecked = true;
    var velicina = document.getElementById('prozorV').value.trim();
    var plafon = document.getElementById('plafonV').value.trim();
    var ciscenjaArray = document.getElementsByName('ciscenje[]');
    var prljavoArray = document.getElementsByName('prljavoWin');
    var ciscenjeNr = ciscenjaArray.length;
    var prljavoNr = prljavoArray.length;

    if(velicina === "")
    {
        invalid = true;
    }
    if(plafon === "")
    {
        invalid = true;
    }
    for(i=0 ; i < ciscenjeNr; i++)
    {
        if(ciscenjaArray[i].checked)
        {
            ciscenjeNotChecked = false;
            break;
        }
    }
    for(j=0; j < prljavoNr; j++)
    {
        if(prljavoArray[j].checked)
        {
            prljavoNotChecked = false;
            break;
        }
    }
    if(invalid  || ciscenjeNotChecked || prljavoNotChecked)
    {
        return true;
    }
}

function invalidCarpet() {
    var invalid = false;
    var ciscenjeNotChecked = true;
    var prljavoNotChecked = true;
    var kolicina = document.getElementById('tepihK');
    var velicina = document.getElementById('tepihA').value.trim();
    var ciscenjaArray = document.getElementsByName('ciscenje2[]');
    var prljavoArray = document.getElementsByName('prljavoCar');
    var ciscenjaNr = ciscenjaArray.length;
    var prljavoNr = prljavoArray.length;

    if(kolicina.value < 1 || kolicina.value === "")
    {
        invalid = true;
    }
    if(velicina === "")
    {
        invalid = true;
    }
    for(i=0; i < ciscenjaNr; i++)
    {
        if(ciscenjaArray[i].checked)
        {
            ciscenjeNotChecked = false;
            break;
        }
    }
    for(j=0; j < prljavoNr; j++)
    {
        if(prljavoArray[j].checked)
        {
            prljavoNotChecked = false;
            break;
        }
    }
    if(invalid || ciscenjeNotChecked || prljavoNotChecked)
    {
        return true;
    }
}

function invalidUnpholstery() {
    var invalid = false;
    var ciscenjeNotChecked = true;
    var prljavoNotChecked = true;
    var TwoSit = document.getElementById('TwoSit').value;
    var threeSit = document.getElementById('threeSit').value;
    var sessel = document.getElementById('sessel').value;
    var couch = document.getElementById('couch').value;
    var eKl = document.getElementById('eKl').value;
    var eGr = document.getElementById('eGr').value;
    var polOhng = document.getElementById('polOhng').value;
    var polMit = document.getElementById('polMit').value;
    var ciscenjaArray = document.getElementsByName('ciscenje3[]');
    var prljavoArray = document.getElementsByName('prljavoUnph');
    var ciscenjaNr = ciscenjaArray.length;
    var prljavoNr = prljavoArray.length;

    if(TwoSit === "" && threeSit === "" && sessel === "" && couch === ""
        && eKl === "" && eGr === "" && polOhng === "" && polMit === "")
    {
        invalid = true;
    }
    for(i=0; i < ciscenjaNr; i++)
    {
        if(ciscenjaArray[i].checked)
        {
            ciscenjeNotChecked = false;
            break;
        }
    }
    for(j=0; j < prljavoNr; j++)
    {
        if(prljavoArray[j].checked)
        {
            prljavoNotChecked = false;
            break;
        }
    }
    if(invalid || ciscenjeNotChecked || prljavoNotChecked)
    {
        return true;
    }
}











