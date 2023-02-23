<header>
    <div class="uk-background-primary mk-topbar" uk-grid uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
        <div class="uk-width-3-4 uk-width-1-4@m">
            <a class="uk-navbar-item uk-logo" href="/">
                <img src="images/bvm-parts@1x.png" alt="Logo BVM Parts Wijchen">
            </a>
        </div>
        <div class="uk-width-3-4@m uk-visible@m">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-right">
                    
                    <ul class="uk-navbar-nav">
                        <li><a href="brommer-onderdelen.php">brommer<br>onderdelen</a></li>
                        <li><a href="motor-onderdelen.php">motor<br>onderdelen</a></li>
                        <li><a href="oldtimers.php">oldtimers</a></li>
                        <li><a href="#contact" uk-scroll>contact</a></li>
                    </ul> 
                </div>
            </nav>
        </div>
        <div class="uk-width-1-4 uk-text-right uk-hidden@m uk-padding">
            <a href="#offcanvas-slide" uk-toggle><i class="fas fa-bars fa-2x mk-menu"></i></a>
        </div>
    </div>

    <div id="offcanvas-slide" uk-offcanvas>
        <div class="uk-offcanvas-bar">
            <h2>Menu</h2>
            
            <ul class="uk-nav uk-nav-default">
                <li class="mk-offcanvas-menu-link"><a href="brommer-onderdelen.php">brommer<br>onderdelen</a></li>
                <li class="mk-offcanvas-menu-link"><a href="motor-onderdelen.php">motor<br>onderdelen</a></li>
                <li class="mk-offcanvas-menu-link"><a href="oldtimers.php">oldtimers</a></li>
                <li class="mk-offcanvas-menu-link"><a href="onderdelen-zoeker.php">Onderdelen zoeken</a></li>
                <li class="mk-offcanvas-menu-link"><a href="#contact" uk-scroll>contact</a></li>
            </ul>
            
            <div class="offcanvas__icons  uk-flex uk-flex-center">
                <a href="<?php echo COMPANY_PHONELINK ; ?>"><i class="fas fa-mobile-alt fa-2x offcanvas__icon-phone"></i></a>
                <a href="<?php echo COMPANY_WHATSAPPLINK ; ?>"><i class="fab fa-whatsapp fa-2x offcanvas__icon-whatsapp"></i></a>
                <a href="<?php echo COMPANY_FBLINK ; ?>" target="new"><i class="fab fa-facebook-f fa-2x offcanvas__icon-fb"></i></a>
            </div>
            <div class="offcanvas__icons  uk-flex uk-flex-center">
                <a href="<?php echo COMPANY_MPLINK ; ?>" target="new"><img src="images/mp.png" class="offcanvas__mp"></a>
            </div>
        </div>
    </div>
<?php 
//echo $page; // check
if ($page == 'home') {
    include "componenten/hero.php";
}
?>
</header>
