<?php // BROMMER ONDERDELEN
$page = 'nieuw-gebruikt'; 

include 'includes/constants.php';
include 'includes/head.php';
include 'includes/functions.php';
include "componenten/header.php"; ?>

<?php // ----- | MAIN ARTICLES | ----> ?>

<main>
    <div class="uk-container uk-padding-large">
        <h1 class="uk-heading-small">Nieuw of gebruikt</h1>
        <p class="uk-text-primary">BVM Parts helpt u met uw aanschaf</p>

        <div class="uk-container uk-padding-large">

        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
        <div>
        <a class="uk-inline uk-border-rounded" href="images/oldtimer/4x3/slider-1.jpg" data-caption="Honda">
            <img src="images/oldtimer/4x3/slider-1.jpg" alt="">
        </a>
    </div>
    <div>
        <a class="uk-inline" href="images/oldtimer/4x3/slider-2.jpg" data-caption="Oldtimers">
            <img src="images/oldtimer/4x3/slider-2.jpg" alt="">
        </a>
    </div>
    <div>
        <a class="uk-inline" href="images/oldtimer/4x3/slider-3.jpg" data-caption="BVM Parts">
            <img src="images/oldtimer/4x3/slider-3.jpg" alt="">
        </a>
    </div>
    <div>
        <a class="uk-inline uk-border-rounded" href="images/oldtimer/4x3/slider-4.jpg" data-caption="Honda">
            <img src="images/oldtimer/4x3/slider-4.jpg" alt="">
        </a>
    </div>
    <div>
        <a class="uk-inline" href="images/oldtimer/4x3/slider-5.jpg" data-caption="Oldtimers">
            <img src="images/oldtimer/4x3/slider-5.jpg" alt="">
        </a>
    </div>
    <div>
        <a class="uk-inline" href="images/oldtimer/4x3/slider-6.jpg" data-caption="BVM Parts">
            <img src="images/oldtimer/4x3/slider-6.jpg" alt="">
        </a>
    </div>
</div>

        </div>
        <?php onderdelenZoekerButton("uk-button-default"); ?>
    </div>
</main>

<?php include "componenten/footer.php"; ?>