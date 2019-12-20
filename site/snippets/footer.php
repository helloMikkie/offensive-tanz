<footer class="wrapper-large">
    <section class="footer-newsletter" id="newsletter">

        <div class="newsletter-content stack">
            <h2 class="heading">Newsletter</h2>


            <!-- Begin Mailchimp Signup Form -->

            <div id="mc_embed_signup" class="">
                <form action="https://offensive-tanz.us4.list-manage.com/subscribe/post?u=0a71f3ebdf03839bd4eed42b0&amp;id=1f2d129c32" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll" class="input-wrapper">

                        <div class="mc-field-group input-wrapper">
                            <input type="email" value="" name="EMAIL" class="required email " id="mce-EMAIL" placeholder="Email">
                        </div>

                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0a71f3ebdf03839bd4eed42b0_1f2d129c32" tabindex="-1" value=""></div>
                        <div class="clear">
                            <input type="submit" value="<?= t('anmelden') ?>" name="subscribe" id="mc-embedded-subscribe">
                        </div>
                    </div>
                </form>
            </div>

            <!--End mc_embed_signup-->

        </div>
                

        <p class="newsletter-datenschutz"><?= t('datenschutz') ?> <a href="<?= url('/datenschutz') ?>"><?= t('hier') ?></a>.</p>

    </section>







    <section class="white">
        <p><?= t('gefoerdert') ?> </p>
        <div class="switcher container ">
            <div>
                <a href="http://www.tanzpakt.de/home/" target="_blank"><?= svg('assets/img/logo-tanzpakt-bkm.svg') ?></a>
                <a href="https://www.berlin.de/sen/kultur/" target="_blank"><?= svg('assets/img/logo-senat.svg') ?></a>
            </div>
        </div>
    </section>


    <section class="black">
        <p><?= t('partner') ?> </p>
        <div class="switcher container">
            <div>
                <a href="https://tanzkomplizen.de/" target="_blank"><?= svg('assets/img/logo-tanzkomplizen-inv.svg') ?></a>
                <a href="https://www.theater-strahl.de/" target="_blank"><?= svg('assets/img/logo-theater_strahl-inv.svg') ?></a>
                <a href="https://www.theater-on.de/aktuell/" target="_blank"><?= svg('assets/img/logo-theater_oN-inv.svg') ?></a>
                <a href="https://purple-tanzfestival.de/" target="_blank"><?= svg('assets/img/logo-purple-inv.svg') ?></a>
            </div>
        </div>
    </section>

    <section class="footer-links white">
        <div class="cluster">
            <div>
                <a href="https://www.instagram.com/offensivetanz/" target="_blank"><?= svg('assets/img/instagram.svg') ?></a>
                <a href="https://www.facebook.com/OffensiveTanz/" target="_blank"><?= svg('assets/img/facebook.svg') ?></a>
                <!-- <a href=""><?= svg('assets/img/vimeo.svg') ?></a> -->
            </div>
        </div>
        <div class="cluster ">
            <div>
                <a href="<?= url('/kontakt') ?>"><?= page('kontakt')->title() ?></a>
                <a href="<?= url('/impressum') ?>"><?= page('impressum')->title() ?></a>
                <a href="<?= url('/datenschutz') ?>"><?= page('datenschutz')->title() ?></a>
            </div>
        </div>

    </section>


</footer>

<script src="<?= url('assets/js/smoothscroll.min.js') ?>"></script>
<script src="<?= url('assets/js/anime.min.js') ?>"></script>
<script src="<?= url('assets/js/headerScroll.js') ?>"></script>
<script src="<?= url('assets/js/animation.js') ?>"></script>
<script src="<?= url('/assets/js/openMenu.js') ?>"></script>
<script src="<?= url('/assets/js/slides.js') ?>"></script>
<script src="<?= url('/assets/js/scrollTo.js') ?>"></script>

</body>

</html>