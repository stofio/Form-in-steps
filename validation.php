<script>
    jQuery(function() {
        //beginning form validation
        jQuery("form[name='appointment']").validate({
            groups: {
                contact: "email ime prezime ulica br plz grad telefon ulica2 br2 plz2",
                termin: "datum1 vreme1",
                check: "general window carpet upholstery"
            },
            rules: {
                email: "required",
                ime: "required",
                prezime: "required",
                ulica: "required",
                br: {
                    required: true,
                    digits: true },
                plz: {
                    required: true,
                    digits: true },
                grad: "required",
                telefon: "required",
                ulica2: "required",
                br2: {
                    required: true,
                    digits: true },
                plz2: {
                    required: true,
                    digits: true },
                grad2: "required",

                datum1: "required",
                vreme1: "required",

                objekat: "required",
                sprat: {
                    required: true,
                    digits: true },
                namestaj: "required",

                area: {
                    required: true,
                    digits: true },
                clReason: "required",
                prljavo: "required",

                prozorV: {
                    required: true,
                    digits: true },
                plafonV: {
                    required: true,
                    digits: true },
                prljavo2: "required",

                tepihV: {
                    required: true,
                    digits: true },
                tepihK: {
                    required: true,
                    digits: true },
                tepihA: {
                    required: true,
                    digits: true },
                prljavo3: "required",

                prljavo4: "required",

                placanje: "required",
                danR: "required",
                mesecR: "required",
                godinaR: "required",
                prihvata: "required",
            },

            errorPlacement: function(error, element) {
                if (element.attr("name") == "email" || element.attr("name") == "ime" || element.attr("name") == "prezime" || element.attr("name") == "ulica" || element.attr("name") == "br" || element.attr("name") == "plz" || element.attr("name") == "grad" || element.attr("name") == "telefon" || element.attr("name") == "ulica2" || element.attr("name") == "br2" || element.attr("name") == "plz2") {
                    error.appendTo('#error-contact');
                } else if (element.attr("name") == "datum1" || element.attr("name") == "vreme1") {
                    error.appendTo('#error-termin');
                }
                //objekat radio 
                else if (element.attr("name") == "objekat") {
                    error.appendTo('#error-objekat');
                }
                //prljavo radio
                else if (element.attr("name") == "prljavo") {
                    error.appendTo('#error-prljavo');
                }
                //prljavo radio2
                else if (element.attr("name") == "prljavo2") {
                    error.appendTo('#error-prljavo2');
                }
                //prljavo radio3        
                else if (element.attr("name") == "prljavo3") {
                    error.appendTo('#error-prljavo3');
                }
                //prljavo radio4
                else if (element.attr("name") == "prljavo4") {
                    error.appendTo('#error-prljavo4');
                }
                //placanje
                else if (element.attr("name") == "placanje") {
                    error.appendTo('#error-placanje');
                }
                //privacy
                else if (element.attr("name") == "prihvata") {
                    error.appendTo('#error-pol');
                }
                else if (element.attr("name") == "sprat") {
                    error.appendTo('#error-sprat');
                }
                else if (element.attr("name") == "area") {
                    error.appendTo('#error-area');
                }
                else if (element.attr("name") == "prozorV") {
                    error.appendTo('#error-prozorV');
                }
                else if (element.attr("name") == "plafonV") {
                    error.appendTo('#error-plafonV');
                }
                else if (element.attr("name") == "tepihV") {
                    error.appendTo('#error-tepihV');
                }
                else if (element.attr("name") == "tepihA") {
                    error.appendTo('#error-tepihA');
                }
                else if (element.attr("name") == "check") {
                    error.appendTo('#error-check');
                }
            },
            
             messages: {
                 email: 'Geben Sie Ihre Daten ein',
                 prezime: 'Geben Sie Ihre Daten ein',
                 ime: 'Geben Sie Ihre Daten ein',
                 ulica: 'Geben Sie Ihre Daten ein',
                 br: 'Muss eine Zahl sein',
                 plz: 'Muss eine Zahl sein',
                 grad: 'Geben Sie Ihre Daten ein',
                 telefon: 'Geben Sie Ihre Daten ein',
                 ulica2: 'Geben Sie Ihre Daten ein',
                 br2: 'Muss eine Zahl sein',
                 plz2: 'Muss eine Zahl sein',
                 objekat: 'Wählen Sie ein Objekt',
                 datum1: 'Datum wählen (maximal 3) Sie werden für die korrekte Planung kontaktiert',
                 vreme1: 'Datum wählen (maximal 3) Sie werden für die korrekte Planung kontaktiert',
                 prljavo: 'Schmutzmenge wählen',   
                 prljavo2: 'Schmutzmenge wählen', 
                 prljavo3: 'Schmutzmenge wählen', 
                 prljavo4: 'Schmutzmenge wählen', 
                 placanje: 'Wählen Sie eine Zahlungsmethode',
                 prihvata: 'Um fortzufahren, ist es notwendig, die Bedingungen zu akzeptieren',
                 sprat: 'Muss eine Zahl sein',
                 area: 'Muss eine Zahl sein',
                 prozorV: 'Muss eine Zahl sein',
                 plafonV: 'Muss eine Zahl sein',
                 tepihV: 'Muss eine Zahl sein',
                 tepihA: 'Muss eine Zahl sein',
                 
             }
        });
        });

</script>
