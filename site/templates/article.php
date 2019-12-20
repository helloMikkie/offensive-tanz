<?php snippet('header') ?>

<?php if ($page->images()->isNotEmpty()) : ?>
    <?php snippet('event-slides/none') ?>
<?php endif ?>

<main class="wrapper wrapper-large">

    <div class="card download download-list ">
   
        <article class="stack card-content centered">
            <h2 class="text-neutral"><?= $page->title() ?></h2>
            <?php if ($page->subtitle()->isNotEmpty()) : ?>
                <p><?= $page->subtitle() ?></p>
            <?php endif ?>
            <p><?= $page->author() ?></p>
            <p><?= $page->date()->toDate('%e.%m.%Y') ?></p>
        </article>
    </div>


    <!-- Text Editor -->
    <section class="stack">
        <?= $page->text()->blocks() ?>
    </section>


</main>


<?php snippet('footer') ?>