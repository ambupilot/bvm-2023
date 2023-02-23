<?php // MOTOR ONDERDELEN
$page = 'motor-onderdelen'; 

include 'includes/constants.php';
include 'includes/head.php';
include 'includes/functions.php';
include "componenten/header.php"; ?>

<?php // ----- | MAIN ARTICLES | ----> ?>

<main>
    <div class="uk-container uk-padding-large">
    <h1 class="uk-heading-small">Motor onderdelen</h1>
    <p class="uk-text-primary">BVM Parts heeft een ruim assortiment vervangingsonderdelen voor uw motor</p>


<div class="uk-container uk-padding-large">
    <section uk-grid>
        <div class="uk-width-1-1 uk-width-3-4@m">
            <h3>Motor onderhoud of reparatie</h3>
            <p>Door het zeer grote netwerk van BVM Parts is bijna elk onderdeel te vinden.</p>
            <p>Naast het schoonmaken van je motor is het onderhoud essentieel.<br>
            BVM Parts levert bijna alle onderdelen voor het onderhoud of reparatie aan uw motorfiets.</p>
            <p>U kunt er vanuit gaan dat we voor vrijwel alle motoren de meeste onderdelen - origineel én imitatie - kunnen leveren.<br> 
            Kunt u iets niet vinden? Laat het dan weten, hoogst waarschijnlijk kan ik u toch van dienst zijn.</p>
            <h3>Banden</h3>
            <p>Motorrijden begint bij een goed contact met de weg.<br>
            Banden zijn het enige contact tussen uw motor en het asfalt.</p>
            <p>BVM Parts levert motorbanden van de merken Michelin, Continental, Sava enz.</p>
            <h3>Motorolie</h3>
            <p>Hoogwaardige motorolie voor uw motorfiets zorgt voor betere prestaties en een langere levensduur.<br>
            BVM Parts levert Kendall motorolie.</p>
        </div>
        <div class="uk-width-1-4@m" uk-grid>
        <div class="uk-width-1-3 uk-width-1-1@m"><?php onderdelenZoekerButton("uk-button-primary"); ?></div>
        <div class="uk-width-1-3 uk-width-1-1@m"><img src="/images/logos/michelin.png" alt="Voor alle mechanische- en motoronderdelen kunt u bij ons terecht"></div>
            <div class="uk-width-1-3 uk-width-1-1@m"><img src="/images/logos/Continental-logo.png" alt="COntinental banden"></div>
            <div class="uk-width-1-3 uk-width-1-1@m"><img src="/images/logos/kendall.png" alt="Bewegende delen houden uw brommer rijdend"></div>
        </div>
    </section>
</div>

<?php include "componenten/brands.php"; ?>

</div>
</main>

<?php include "componenten/footer.php"; ?>