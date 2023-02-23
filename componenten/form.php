<section id="contact" class="uk-background-primary uk-padding-large mk-margin-top">
    <div class="uk-container uk-background-cover uk-panel uk-background-blend-multiply" style="background-image: url(images/bg-form.jpg);">
        <div uk-grid>
            <div class="uk-width-1-1 uk-width-1-2@m uk-height-1-1" style="background-color: rgba(255,255,255, 0.8);">
                <h2 class="mk-font-lato mk-font-lato-700 uk-padding-small mk-color-primary uk-text-left" style="margin-top: 35px">Onderdelen nodig?</h2>
                <form method="post" action="https://www.flexyform.com/f/95ef236c554b3808cd3b33180e3464b5f58914ca">

                <div class="uk-width-1-2 uk-width-4-5@m mk-form-input">
                    <input name="naam" id="naam" class="uk-input" type="text" placeholder="Naam">
                    <div id="naam-warn" class="uk-text-danger mk-text-small uk-hidden"><i class="fas fa-exclamation"></i>&nbsp;Dit veld is niet correct!</div>
                </div>

                <div name="e-mail" class="uk-width-1-2 uk-width-4-5@m mk-form-input">
                    <input name="_reply_to" id="email" class="uk-input" type="e-mail" placeholder="E-mailadres">
                    <div id="email-warn" class="uk-text-danger mk-text-small uk-hidden"><i class="fas fa-exclamation"></i>&nbsp;Het e-mailadres klopt niet</div>
                </div>

                <div class="uk-width-1-2 uk-width-4-5@m mk-form-input">
                    <input name="telefoon" id="telefoon" class="uk-input" type="text" placeholder="Telefoon">
                    <div id="telefoon-warn" class="uk-text-danger mk-text-small uk-hidden"><i class="fas fa-exclamation"></i>&nbsp;Dit veld mag alleen cijfers bevatten</div>
                </div>

                <div class="uk-width-1-2 uk-width-4-5@m mk-form-input">
                    <input name="vraag" id="vraag" class="uk-input" type="text" placeholder="Uw vraag">
                </div>
                <input type="hidden" name="_recaptcha" id="_recaptcha"/>

                <div id="knop" class="uk-width-4-5 mk-form-input">
                    <button id="verzend" type="submit" class="uk-button uk-disabled">Versturen</button>
                </div>

                </form>
            </div>
            <div class="uk-visible@m uk-width-1-2@m"></div>
        </div>    
    </div>
</section>
<script src="https://www.google.com/recaptcha/api.js?render=6Lf7UsoUAAAAACT2Z6gLyh7RTDfyYGxfZ-M4D0ph"></script>
<script src="https://www.flexyform.com/js/recaptcha.js"></script>