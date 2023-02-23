<?php // Zoeker

$mysqli = new mysqli("localhost:8889", "root", "root", "bvmparts");

/* check connection */
/*
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
*/
/* check if server is alive */
/*
if ($mysqli->ping()) {
    printf ("DB connection is ok!\n");
} else {
    printf ("Error: %s\n", $mysqli->error);
}
*/

// get the search from browser
$zoekterm = $_GET['q'];
$merk= $_GET['merk'];
var_dump($zoekterm);
var_dump($merk);

if($zoekterm == NULL) {
    // exectue code 
} else {
    
}

/*
// Define the SQL QUERY AND EXECUTE
$query = "SELECT * FROM onderdelen WHERE Omschrijving LIKE '%$zoekterm%' ";
$res = $mysqli->query($query);

//var_dump($query);


// STORE RESULTS IN ARRAY
// $onderdelen = array();

while ($row = $res->fetch_assoc()) {
    $onderdelen[] = $row;
}
*/

include 'includes/constants.php';
include 'includes/head.php';
include 'includes/functions.php';
include "componenten/header.php"; ?>

<?php // ----- | MAIN ARTICLES | ----> ?>

<main>
    <div class="uk-container ukl-padding-large">
<?php 
//var_dump($onderdelen);
?>
<hr/>

<dl class="uk-description-list uk-description-list-divider">

<?php 
// Prijs aanpassen van FLOAT naar STRING, en van excl. naar incl BTW
function recalc_price($value) {
    $find=",";
    $replace=".";
    $prijs_ex = str_replace($find, $replace, $value);
    $prijs_in = $prijs_ex * 1.2;
    $prijs_incl = number_format($prijs_in, 2, ',', '');
    // Geef opgemaakte getal in NL formaat terug
    echo $prijs_incl;
}
?>

<?php if(isset($onderdelen)) { 
    foreach ($onderdelen as $onderdeel) {
?>
    <dt>Merk: <?= $onderdeel[Merk] ?></dt>
    <dd><h2><?= strtoupper($onderdeel[Omschrijving]) ?></h2></dd>
    <dd>Groep: <?= $onderdeel[Groep] ?></dd>
    <dd>Categorie: <?= $onderdeel[Hoofd_categorie] ?></dd>
    <dd>Sub Categorie: <?= $onderdeel[Sub_categorie] ?></dd>
    <dd>Richtprijs: &euro; <?= recalc_price($onderdeel[AVP_ex]) ?></dd>

<?php
        }?>
</dl>

    <?php 
    } // end if $onderdelen === NULL
    ?>

    </div>
</main>

<?php include "componenten/footer.php"; 
/* close connection */
$mysqli->close();
?>

<script defer src="js/onderdelen-zoeker-23.js"></script>

