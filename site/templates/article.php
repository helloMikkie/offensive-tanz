<?php snippet('header') ?>

<?php if ($page->images()->isNotEmpty()) : ?>
    <?php snippet('event-slides/none') ?>
<?php endif ?>

<main class="wrapper wrapper-large">

    <div class="card download download-list ">
   
        <article class="stack-small card-content ">
        <p><?= $page->author() ?></p>
        
            <h2 class="text-neutral"><?= $page->title() ?></h2>
            <?php if ($page->subtitle()->isNotEmpty()) : ?>
                <h3 class="gray"><?= $page->subtitle() ?></h3>
            <?php endif ?>
            <div class="card-content-date">
                <p><?= $page->date()->toDate('%e.%m.%Y') ?></p>
            </div>
            
        </article>
    </div>


    <!-- Text Editor -->
    <section class="wrapper-medium stack-medium">
        <?= $page->text()->blocks() ?>
    </section>

    <section class="wrapper-large stack-medium">
    <?= $page->subtext()->blocks() ?>
    </section>


</main>


<?php snippet('footer') ?>