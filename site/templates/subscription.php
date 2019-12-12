<?php snippet('header') ?>



    <div class="container-large subscription" style="background-image:url('/assets/img/bg-subscription.svg')">
        <div class="centered">
        <h1 class="heading"><?= $page->title() ?></h1>
        <?= $page->text()->blocks() ?>
        </div>
    </div>


<?php snippet('footer') ?>