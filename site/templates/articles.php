<?php snippet('header') ?>

<main class="wrapper wrapper-large">
    
    <section class="event-list download-list">

    <?php snippet('articles', [
        'article' => $page->children()->listed()
    ]) ?>


    </section>
</main>

<?php snippet('footer') ?>