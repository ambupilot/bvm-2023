<?php // BROMMER ONDERDELEN
$page = 'brommer-onderdelen'; 

include 'includes/constants.php';
include 'includes/head.php';
include 'includes/functions.php';
include "componenten/header.php"; ?>

<?php // ----- | MAIN ARTICLES | ----> ?>

<main>
    <div class="uk-container uk-padding-large">
    <h1 class="uk-heading-small">Brommer onderdelen</h1>
    <p class="uk-text-primary">BVM Parts heeft een ruim assortiment vervangingsonderdelen voor uw bromfiets</p>


<div class="uk-container uk-padding-large">
    <section uk-grid>
        <div class="uk-width-1-1 uk-width-3-4@m">
            <h3>Houd uw bromfiets in goede conditie</h3>
            <p>Bewegende delen houden uw brommer rijdend. Dat zijn ook de delen die het meest aan slijtage onderheving zijn.<br>
            Zorg er voor dat uw bromfiets in topconditie blijft. Onderhoud is daarvoor essentieel.</p>
            <h3>Originele onderdelen en onderhouds produkten</h3>
            <p>Door het zeer grote netwerk van BVM Parts is bijna elk onderdeel te vinden.</p>
            <p>Voor alle mechanische- motor- en vervangingsonderdelen en onderhoudsmiddelen kunt u bij ons terecht.<br>
            Van as tot zitting, en van olie tot vet.</p>
            <p>Maar ook voor remonderdelen en frame- of vorkdelen, banden en velgen moet u bij BVM Parts zijn.</p>
            <h3>Top service</h3>
            <p>U kunt er vanuit gaan dat we voor vrijwel alle bromfietsen de meeste onderdelen kunnen leveren.<br> 
            Kunt u iets niet vinden? Laat het dan weten, hoogst waarschijnlijk kan ik u toch van dienst zijn.</p>
        </div>
        <div class="uk-width-1-4@m" uk-grid>
            <div class="uk-width-1-2 uk-width-1-1@m"><?php onderdelenZoekerButton("uk-button-primary"); ?></div>
            <div class="uk-width-1-2 uk-width-1-1@m"><img src="/images/parts/26138.jpg" alt="Voor alle mechanische- en motoronderdelen kunt u bij ons terecht"></div>
            <div class="uk-width-1-2 uk-width-1-1@m"><img src="/images/logos/kenda.png" alt="Bewegende delen houden uw brommer rijdend"></div>
            
        </div>
    </section>
</div>
<div class="uk-visible@m">
    <?php include "componenten/parts.php";?>
    
</div>


<?php //include "componenten/brands.php"; ?>

</div>
</main>

<?php include "componenten/footer.php"; ?>