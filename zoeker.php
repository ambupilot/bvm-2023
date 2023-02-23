<?php // zoeker.php
$page = 'onderdelen-zoeker'; 

// open en check db connection
$mysqli = new mysqli("localhost:8889", "root", "root", "bvmparts");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
}

 // ----- | RENDEREN PAGINA ONDERDELEN | ---->
 include 'includes/constants.php';
 include 'includes/head.php';
 include 'includes/functions.php';
 include "componenten/header.php";

// ----- | UIT TE VOEREN CODE | ---->
// VARS ophalen en controleren
$zoekterm = $_POST['q'];
$merk= $_POST['merk'];
//var_dump($zoekterm);
//var_dump($merk);

// ----- | FUNCTIONS | ----> 

function showResultRows($parts) {
    
} // end function ?>

<?php
// ----- | MAIN DIV & HTML | ----> ?>
<main>
    <div class="uk-container uk-padding-large">
<h2>Onderdelenzoeker</h2>
        <form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
<?php
            // Wanneer beide vars niet zijn gedeclareerd
            if (!isset($merk) && !isset($zoekterm)  ) {
?>
            <h3>Kies het merk</h3>
            <p>Wanneer u 'alle' kiest, zoekt u merk onafhankelijk</p>
            <div class="uk-margin">
                        <select class="uk-select" aria-label="Select" name="merk" onchange="this.form.submit()">
                        <option>- Maak een keuze -</option>
                        <option>Alle</option>
                            <?php // <option>Universeel</option> ?>
                            <option>Kreidler</option>
                            <option>Zundapp</option>
                            <option>Yamaha</option>
                            <option>Honda</option>
                            <option>Sachs</option> <?php // Geen apart merk? ?>
                        </select>
            </div>


<?php
// Wanneer alleen $merk is gedeclareerd
            } else if (isset($merk) && !isset($zoekterm) ) {
?>
                    <h3>Wat zoekt u?</h3>
                    <p>Type een zoekterm in het veld</p>
                    <div class="uk-margin">
                        <input class="uk-input" type="text" placeholder="Type hier uw zoekterm" aria-label="Input" name="q">
                    </div>

                    <input type="hidden" name="merk" value="<?php echo $merk;?>" />
                    <button class="uk-button uk-button-primary" onclick="this.form.submit()">ZOEKEN</button>

<?php
            // Wanneer beide vars zijn gedeclareerd
            } else {
?>
            <div class="uk-margin" uk-grid>
                <div class="uk-width-1-2">
                    <p>U heeft gezocht naar:<br>
                    <strong>Merk:</strong> <?php echo $merk; ?><br/>
                    <strong>Zoekterm:</strong> <?php echo $zoekterm; ?>
                </div>
                <div class="uk-width-1-2">
                <button class="uk-button uk-button-primary" href="/zoeker.php">Opnieuw Zoeken</button>
                </div>
                <div class="uk-width-1-1">
                    <h3>Resultaten:</h3>
                </div>
               <div class="uk-width-1-1">
                
<?php
// SELECT * FROM onderdelen WHERE Merk LIKE '$merk' AND Omschrijving LIKE '%$zoekterm%'
// OUD: SELECT * FROM onderdelen WHERE Omschrijving LIKE '%$zoekterm%' 

// loop door merken

switch ($merk) {
    case "Kreidler":
    case "Zundapp":
    case "Yamaha":
    case "Honda":
        $query = "SELECT * FROM onderdelen WHERE Merk LIKE '$merk' AND Omschrijving LIKE '%$zoekterm%' ";
        break;
    default:
        $query = "SELECT * FROM onderdelen WHERE Omschrijving LIKE '%$zoekterm%' LIMIT 20";
    }
                $res = $mysqli->query($query);
                // store onderdelen in array
                //$onderdelen = array();
                while ($row = $res->fetch_assoc()) {
                    $onderdelen[] = $row;
                }
                
                //var_dump($onderdelen);

                ?><ul class="uk-list uk-list-striped"><?php
                foreach ($onderdelen as $onderdeel) {
                    ?>
                    <li>
                        <div uk-grid>
                        <div class="uk-width-2-3@m">
                       <h5><?= strtoupper($onderdeel[Omschrijving]) ?></h5>
                        <p>Merk: <?= $onderdeel[Merk] ?><br>
                        Code: <?= $onderdeel[Code] ?></p>
                        <div uk-lightbox>
                            <a class="uk-button uk-button-primary" href="/product_photos/<?php echo $onderdeel[Code];?>.jpg">Bekijk onderdeel</a>
                        </div><br>



                </div>
                <div class="uk-width-1-3@m">
                    <div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" 
                        data-src="/product_photos/<?php echo $onderdeel[Code];?>.jpg?fit=crop&w=300&h=150&q=80" 
                        uk-img>
                        <h3 class="uk-padding-sm" style="color:grey;">BVM Parts Wijchen</h3>
                    </div>
                </div>
                    <div>
                    </li>
                
                    <?php
                }
                ?></ul>


        



<?php
            } // end else (beide vars gedeclareert)
?>         
<?php
            // DIV voor zoekresultaten
            // CLOSE FORM
?>
        </div>
        </form>

<?php 
    // einde MAIN DIV ?>
    </div>
</main>




<?php

include "componenten/footer.php"; 

/* close db connection */
$mysqli->close();
?>

<script defer src="js/onderdelen-zoeker-23.js"></script>