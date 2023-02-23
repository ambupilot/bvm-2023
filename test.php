<?php // DISCLAIMER
$page = 'brommer-onderdelen'; 

include 'includes/constants.php';
include 'includes/head.php';
include 'includes/functions.php';
include "componenten/header.php"; ?>

<?php // ----- | MAIN ARTICLES | ----> ?>

<main>
    <div class="uk-container ukl-padding-large">

        <div class="inner" data-uk-grid>
            <div class="uk-width-1-2@m uk-padding-small">
            
                <legend class="uk-legend">Onderdelenzoeker...</legend>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Zoekwoord</label>
                    <div class="uk-form-controls">
                        <input id="inputZoekwoord" class="uk-input" id="form-stacked-text" type="text" placeholder="Type hier uw zoekterm">
                    </div>
                </div>

                <button id="zoekKnop" class="uk-button uk-button-primary uk-hidden">Zoek onderdeel</button>

            </div>

            <div class="uk-width-1-2@m uk-padding-small">
            <legend class="uk-legend">Resultaten...</legend>
            <p>Er worden maximaal 10 reaultaten getoond.</p>
                <div class="uk-padding-small">
                    rijtje met resultaten
                </div>


                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="images/parts/11227.jpg" alt="" uk-cover>
                        <canvas width="600" height="400"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Onderdeel titel</h3>
                            <p>Omschrijving van het onderdeel.</p>
                        </div>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="images/parts/122641.jpg" alt="" uk-cover>
                        <canvas width="600" height="400"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Onderdeel titel</h3>
                            <p>Omschrijving van het onderdeel.</p>
                        </div>
                    </div>


            </div>


        </div>


    </div>
</main>

<?php include "componenten/footer.php"; ?>

<script defer src="js/onderdelen-zoeker-23.js"></script>

