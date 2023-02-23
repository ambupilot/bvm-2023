<?php include "form.php"; ?>
    
    <!-- FOOTER -->
    <footer class="footer uk-background-secondary" >
        <div class="uk-container uk-padding" uk-grid>
            <div class="uk-width-1-1 uk-align-center">
                <picture>
                    <source srcset="images/logo@1x.png 1x, images/logo@2x.png 2x" media="(max-width: 37.5em)">
                    <img srcset="images/logo@1x.png 1x, images/logo@2x.png 2x" alt="Logo B.V.M. Parts - Wijchen"
                        src="images/logo@2x.png 2x"
                        class="uk-align-center">
                </picture>
            </div>

            <div class="uk-width-1-2@m">

                <div class="footer__adres footer__copyright">
                    <div class="uk-flex uk-flex-middle" uk-grid>
                        <div class="uk-width-1-2@m">
                            <p>
                                <?php echo COMPANY_OWNER; ?><br>
                                <br>
                                <?php echo adres(); ?>
                            </p>
                        </div>
                        <div class="uk-width-1-2@m">
                            <p>
                                KvK: <?php echo COMPANY_KVK ; ?><br>
                                BTW: <?php echo COMPANY_BTW ; ?><br>
                                <br>
                                Bank: <?php echo COMPANY_BANK ; ?><br>
                                IBAN: <?php echo COMPANY_IBAN ; ?><br>
                                BIC: <?php echo COMPANY_BIC ; ?><br>
                            </p>
                        </div>
                    </div>
                    <?php icons(footer); ?>

                </div>
            </div>
            
            <div class="uk-width-1-2@m">
                <p class="footer__copyright">
                    Bert heeft al meer dan 40 jaar ervaring. Of het nu gaat om een klein onderdeel, of een zeldzaam deel
                    voor uw motor of brommer.
                    <br> Bert weet het te vinden!<br>
                    Het is niet voor niks dat mensen uit België, Duitsland en natuurlijk Nederland voor het beste advies
                    en de meeste kennis naar Bert toe komen!
                </p>
                <div class="footer__navigation">
                    <ul class="footer__list">
                        <li class="footer__item"><a href="disclaimer.php" class="footer__link">Disclaimer</a></li>
                        <li class="footer__item"><a href="cookie-policy.php" class="footer__link">Cookies</a></li>
                        <li class="footer__item"><a href="privacy-policy.php" class="footer__link">Privacy policy</a></li>
                        <!--<li class="footer__item"><a href="voorwaarden.php" class="footer__link">Voorwaarden</a></li>-->
                    </ul>

            </div>
        </div>
    </footer>
</body>
<script defer src="js/scripts-min.js"></script>
<script defer src="data/parts012023.js"></script>


<script defer src="js/uikit.min.js"></script>
<script defer src="js/uikit-icons.min.js"></script>
<script defer src="https://kit.fontawesome.com/d1e4984d62.js" crossorigin="anonymous"></script>
</html>