<?php snippet('header') ?>

<main class="stack wrapper wrapper-large">  
    <h2 class="heading"><?= t('upcoming')?></h2>
    <section class="stack event-list">
         <?php snippet('upcoming', ['upcoming' => $upcomingEvents]) ?>
    </section>


    <h2 class="heading"><?= t('past')?></h2>
    <section class="stack event-list">
        <?php snippet('past', ['past' => $pastEvents]) ?>
    </section>  

</main>

<?php snippet('footer') ?>