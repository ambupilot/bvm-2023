<?php // BEDANKT PAGINA 
$page = 'bedankt'; 

include 'includes/constants.php';
include 'includes/head.php';
include 'includes/functions.php';
include "componenten/header.php"; ?>

<?php // ----- | MAIN ARTICLES | ----> ?>

<main>
    <div class="uk-container uk-padding-large" uk-grid>
        <div>
            <h1 class="uk-heading-small">Bedankt voor uw bericht.</h1>
        </div>
        <div class="uk-width-3-4">
            <p>Uw bericht is verzonden.</p>
            <p>Ik neem zo snel mogelijk contact met u op.</p>
            <p>Met vriendelijke groet,<br>
                Bert van Maasdijk</p>
        </div>
        <div class="uk-width-1-4">
            <div class="uk-width-1-2 uk-width-1-1@m"><img src="/images/stinger/IMG_8331.JPG" class="uk-border-rounded uk-box-shadow-xlarge" alt="Bedankt voor uw reactie via het contactformulier"></div>
        </div>
        <?php include "componenten/brands.php"; ?>
    </div>
</main>

<?php include "componenten/footer.php"; ?>