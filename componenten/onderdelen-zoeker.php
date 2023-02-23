<?php
// ONDERDELEN ZOEKER PAGINA IN /COMPONENTEN !!
?>
<div class="uk-container" id="scrollTop">
<section class="uk-grid-collapse uk-child-width-expand@m uk-margin-large-top" uk-grid>
    <div class="uk-width-2-3@m">
        <h1 class="uk-heading-small">Onderdelen zoeker</h1>
        <h4 id="h4titel" class="mk-font-lato-700 mk-color-primary">Kan uw onderdeel uit de standaard voorraad geleverd worden?</h4>
        <div id="zoekblok">
        <p>Het aanbod nieuwe onderdelen is met ruim 14.000 artikelen te groot om op de website te plaatsen. Daarom bied BVM Parts de onderstaande zoekfunctie.</p>

        <p>BVM Parts maakt geen gebruik van een webwinkel voor gebruikte onderdelen. Voor gebruikte onderdelen kunt u het best gebruik maken van het
         <a href="#contact" uk-scroll>contactformulier</a>, even <a href="#contact" uk-scroll>mailen</a> of <a href="<?php echo COMPANY_PHONELINK; ?>">bellen</a> met Bert.</p>
         <p>Voor veel onderdelen is ook het bouwjaar en type van de motor/bromfiets van belang!</p>
            <hr>
            <h2>Onderdelen zoeken</h2>
            <h4>Kies eerst uw merk:</h4>
            <p>Geen merk? kies dan voor Universeel</p>
            
            <select id="selectMerk" name="merkKiezer" class="uk-select uk-width-3-4@m">
            <option value="kiezen">Kies een merk</option>
            <option value="UNIVERSEEL">Universeel</option>
                
            </select>
            <div id="invoerveld" class="uk-hidden uk-padding-small uk-padding-remove-horizontal">
                <h4>Omschrijf het onderdeel:</h4>
                <p class="uk-text-small">Let op: minimaal 3 karakters</p>
                    <div class="uk-margin">
                        <input id="searchBox" class="uk-input uk-width-3-4@m" type="text" placeholder="Gebruik minimaal 3 karakters">
                        <div class="uk-margin">
                            <a id="submitButton" class="uk-button uk-button-primary uk-width-1-2 uk-hidden">Zoeken</a>
                        </div>
                    </div>
            </div>
            
    </div> 

    <div id="outputResult">

        <div id="outputTekstblok" class="uk-padding-small uk-padding-remove-horizontal"></div>

        <ul class="uk-list uk-list-striped uk-hidden" id="resultList"></ul>
    </div>
    <button onClick="location.reload()" id="reloadButton" class="uk-button uk-button-primary uk-hidden">Opnieuw</button>    
    
    <div>


    </div>


    </div>


    <!-- Rechter kolom -->
    
    <div class="uk-width-1-3@m uk-padding-large uk-padding-small@m uk-padding-remove-vertical">
        <div class="uk-padding uk-hidden@m"></div>
        <h4 class="mk-font-lato-700 mk-color-primary uk-text-center">Merkoverzicht</h4>
        <div class="uk-column-1-4@s uk-column-1-2@m" id="outputMerken"></div>
    </div> <!-- // rechter kolom -->
</section>
</div>


<script defer src="js/partsData2.js"></script>
<script defer src="js/zoekscript.js"></script>
