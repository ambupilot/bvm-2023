<?php

function adres() {
    $adres = COMPANY_ADRESS;
    $pc = COMPANY_POSTCODE;
    $plaats = COMPANY_CITY;
    $output = $adres . '<br>' . $pc . ' ' . $plaats;
    return $output;
}

function icons($location) {
    if($location == 'intro') {
        echo '    
        <div class="footer__icons">
            <a href="tel:0646320020"><i class="fas fa-mobile-alt fa-3x footer__icon-phone-intro uk-hidden@m"></i></a>
            <a href="https://wa.me/31646320020"><i class="fab fa-whatsapp fa-3x footer__icon-whatsapp uk-hidden@m"></i></a>
            <a href="#"><i class="fab fa-facebook-f fa-3x footer__icon-fb"></i></a>
            <a href="https://www.marktplaats.nl/u/b-v-m-parts/12239169/"><img src="images/mp.png" class="footer__mp"></a>
        </div>
        '; }
    else {
        echo '    
        <div class="footer__icons">
            <a href="tel:0646320020"><i class="fas fa-mobile-alt fa-3x footer__icon-phone"></i></a>
            <a href="https://wa.me/31646320020"><i class="fab fa-whatsapp fa-3x footer__icon-whatsapp"></i></a>
            <a href="#" target="_blank"><i class="fab fa-facebook-f fa-3x footer__icon-fb"></i></a>
            <a href="https://www.marktplaats.nl/u/b-v-m-parts/12239169/" target="_blank"><img src="images/mp.png" class="footer__mp"></a>
        </div>
    '; }

}

function onderdelenZoekerButton($style) {
    echo '<a class="uk-button ' . $style . '" href=/onderdelen-zoeker.php>Onderdelen zoeker</a>';
}
?>