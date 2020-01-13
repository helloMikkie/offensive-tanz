<?php snippet('header') ?>

<?php if ($page->images()->isNotEmpty()) : ?>
    <?php snippet('event-slides/none') ?>
<?php endif ?>

<main class="wrapper wrapper-large">

    <div class="card download download-list ">
   
        <article class="stack card-content centered">
        <p><?= $page->date()->toDate('%e.%m.%Y') ?></p>
            <h2 class="text-neutral"><?= $page->title() ?></h2>
            <?php if ($page->subtitle()->isNotEmpty()) : ?>
                <h3><?= $page->subtitle() ?></h3>
            <?php endif ?>
            <p><?= $page->author() ?></p>
            
        </article>
    </div>


    <!-- Text Editor -->
    <section class="stack">
        <?= $page->text()->blocks() ?>
    </section>

    <section class="stack">
    <?= $page->subtext()->blocks() ?>
    </section>


</main>


<?php snippet('footer') ?>