<!-----------------------------------------------------------------------------
   --------------------------------------------------------------------------
   -------GENERAL CLEANING---------------------------------------------------
   --------------------------------------------------------------------------
   ---------------------------------------------------------------------------->
   <div class="inputGroup checkboxx">
        <input id="checkbox2" type="checkbox" name="general">
        <label for="checkbox2">Allgemeine Reinigung</label>
  </div>
    <div class="thinLine"></div>
    <div class="cl1" style="display:none">
        <div class="row" style="margin-top: 25px">
           <div id="error-area"></div>
            <div class="col-md-4" style="padding-top:16px;">
                <label>Fläche in m&sup2;</label></div>
            <div class="col-md-8">
                <input type="text" id="area" class=" col-md-8 form-control mb-4" placeholder="z.B 4.OG" name="area">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4" style="padding-top:12px">
                <label>Art der Reinigung</label>
            </div>
            <div class="col-md-8">
                <select onchange="sel()" class="browser-default custom-select mb-4" id="clean-select" name="clReason">
                    <option value="" disabled selected="none">-Bitte wählen-</option>
                    <option name="cl-1" value="Normale Reinigung">Normale Reinigung</option>
                    <option name="cl-2" value="Endreinigung">Endreinigung</option>
                    <option name="cl-3" value="Umzugsreinigung">Umzugsreinigung</option>
                    <option name="cl-4" value="Nach Handwerker">Nach Handwerker</option>
                    <option name="cl-5" value="Frühjahrsputz">Frühjahrsputz</option>
                    <option name="cl-6" value="Garagereinigung">Garagereinigung</option>
                    <option name="cl-7" value="Stark verschmutztes Objekt">Stark verschmutztes Objekt</option>
                    <option name="cl-8" value="Nach Wasserschaden">Nach Wasserschaden</option>
                    <option name="cl-9" value="Messie Wohnung">Messie Wohnung</option>
                    <option name="cl-10" value="Taubenkot Entfernen">Taubenkot Entfernen</option>
                    <option name="cl-11" value="Bodenreinigung">Bodenreinigung</option>
                    <option name="cl-12" value="Bodensanierung">Bodensanierung</option>
                    <option name="cl-13" value="Gastronomiereinigung">Gastronomiereinigung</option>
                    <option name="cl-14" value="Nikotingeruch entfernen">Nikotingeruch entfernen</option>
                    <option name="cl-15" value="Entrümpelung und Entsorgung">Entrümpelung und Entsorgung</option>
                </select>
            </div>
        </div>
        
        <?php include "parts/general-cleanings.html"; ?>

        <h4 id="prljavo1" style="margin-top:25px; margin-bottom:10px; font-weight: bold;
    color: teal;">Grad der Verschmutzung</h4>
        <div id="error-prljavo"></div>
        <div class="row" style="display:flex; justify-content: space-between;">
            <div class="custom-control custom-radio mb-4">
                <img src="https://noblesternreinigung.at/wp-content/uploads/2019/08/1.png" width="50" style="margin: 0 auto">
                <div class="custom-control custom-radio mb-4">
                    <input type="radio" class="big-radio custom-control-input" id="genDirt1" name="prljavo" value="Leight">
                    <label class="custom-control-label" for="genDirt1">Leight</label>
                </div>
            </div>
            <div class="custom-control custom-radio mb-4">
                <img src="https://noblesternreinigung.at/wp-content/uploads/2019/08/2.png" width="50" style="margin: 0 auto">
                <div class="custom-control custom-radio mb-4">
                    <input type="radio" class="big-radio custom-control-input" id="genDirt2" name="prljavo" value="Normal">
                    <label class="custom-control-label" for="genDirt2">Normal</label>
                </div>
            </div>

            <div class="custom-control custom-radio mb-4">
                <div class="custom-control custom-radio mb-4">
                    <img src="https://noblesternreinigung.at/wp-content/uploads/2019/08/3.png" width="50" style="margin: 0 auto">
                    <input type="radio" class="big-radio custom-control-input" id="genDirt3" name="prljavo" value="Stark">
                    <label class="custom-control-label" for="genDirt3">Stark</label>
                </div>
            </div>

            <div class="custom-control custom-radio mb-4">
                <div class="custom-control custom-radio mb-4">
                    <img src="https://noblesternreinigung.at/wp-content/uploads/2019/08/4.png" width="50" style="margin: 0 auto">
                    <input type="radio" class="big-radio custom-control-input" id="genDirt4" name="prljavo" value="Extreme">
                    <label class="custom-control-label" for="genDirt4">Extreme</label>
                </div>
            </div>
        </div>
        <h4 style="margin-top:25px; margin-bottom:10px;">Zusätzliche informationen</h4>
        <textarea id="" class="form-control mb-4" placeholder="Zusätzliche informationen" style="resize: vertical; margin-bottom: 32px!important;" name="dodatneInfo"></textarea>
    </div>


<script>
    function sel() {
        var selectCl = document.getElementById("clean-select");
        var cleaning = selectCl.options[selectCl.selectedIndex].value;

        if (cleaning == 'Normale Reinigung') {
            document.getElementById("cleaning-1").style.display = "block";
        } else {
            document.getElementById("cleaning-1").style.display = "none";
        }

        if (cleaning == 'Endreinigung') {
            document.getElementById("cleaning-2").style.display = "block";
        } else {
            document.getElementById("cleaning-2").style.display = "none";
        }

        if (cleaning == 'Umzugsreinigung') {
            document.getElementById("cleaning-3").style.display = "block";
        } else {
            document.getElementById("cleaning-3").style.display = "none";
        }

        if (cleaning == 'Nach Handwerker') {
            document.getElementById("cleaning-4").style.display = "block";
        } else {
            document.getElementById("cleaning-4").style.display = "none";
        }

        if (cleaning == 'Frühjahrsputz') {
            document.getElementById("cleaning-5").style.display = "block";
        } else {
            document.getElementById("cleaning-5").style.display = "none";
        }

        if (cleaning == 'Garagereinigung') {
            document.getElementById("cleaning-6").style.display = "block";
        } else {
            document.getElementById("cleaning-6").style.display = "none";
        }

        if (cleaning == 'Stark verschmutztes Objekt') {
            document.getElementById("cleaning-7").style.display = "block";
        } else {
            document.getElementById("cleaning-7").style.display = "none";
        }

        if (cleaning == 'Nach Wasserschaden') {
            document.getElementById("cleaning-8").style.display = "block";
        } else {
            document.getElementById("cleaning-8").style.display = "none";
        }

        if (cleaning == 'Messie Wohnung') {
            document.getElementById("cleaning-9").style.display = "block";
        } else {
            document.getElementById("cleaning-9").style.display = "none";
        }

        if (cleaning == 'Taubenkot Entfernen') {
            document.getElementById("cleaning-10").style.display = "block";
        } else {
            document.getElementById("cleaning-10").style.display = "none";
        }

        if (cleaning == 'Bodenreinigung') {
            document.getElementById("cleaning-11").style.display = "block";
        } else {
            document.getElementById("cleaning-11").style.display = "none";
        }

        if (cleaning == 'Bodensanierung') {
            document.getElementById("cleaning-12").style.display = "block";
        } else {
            document.getElementById("cleaning-12").style.display = "none";
        }

        if (cleaning == 'Gastronomiereinigung') {
            document.getElementById("cleaning-13").style.display = "block";
        } else {
            document.getElementById("cleaning-13").style.display = "none";
        }

        if (cleaning == 'Nikotingeruch entfernen') {
            document.getElementById("cleaning-14").style.display = "block";
        } else {
            document.getElementById("cleaning-14").style.display = "none";
        }

        if (cleaning == 'Entrümpelung und Entsorgung') {
            document.getElementById("cleaning-15").style.display = "block";
        } else {
            document.getElementById("cleaning-15").style.display = "none";
        }

    }

</script>
