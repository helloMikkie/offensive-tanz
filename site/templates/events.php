<?php snippet('header') ?>

<main class="wrapper wrapper-large"> 

    <section class="stack-medium event-list">
    <h2 class="heading"><?= t('upcoming')?></h2>
        <?php snippet('upcoming', ['upcoming' => $upcomingEvents]) ?>
    </section>

    <section class="wrapper-medium stack-medium event-list">
    <h2 class="heading"><?= t('past')?></h2>
        <?php snippet('past', ['past' => $pastEvents]) ?>
    </section>  


</main>

<?php snippet('footer') ?>