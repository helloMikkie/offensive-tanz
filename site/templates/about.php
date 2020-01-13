<?php snippet('header') ?>

<main>
    <!-- Header -->
    <section class="hero-slides wrapper-large " style="background-image: url('/assets/img/bg-slides-c.svg')">
        <?php foreach ($page->images()->filterBy('filename', '*=', 'project-')->sortBy('sort', 'asc') as $image) : ?>
            <div class="slide">
                <?= $image->crop(1200, 800)  ?>
                <p class="credit"><span>© </span><?= $image->credit() ?></p>
            </div>
        <?php endforeach ?>
    </section>

    <!-- Content -->

    <section class="stack-medium wrapper wrapper-large">

        <?= $page->about()->blocks() ?>
    </section>
    <section class="stack-medium wrapper wrapper-large">
        <?= $page->partners()->blocks() ?>

        <section class="stack-medium event-list">
            <?php snippet('partner-header') ?>
        </section>
    </section>

    <section class="stack-medium wrapper wrapper-large">
        <?= $page->mission()->blocks() ?>
    </section>

    <section class="stack-medium wrapper wrapper-large">
        <?= $page->sponsors()->blocks() ?>


        <div class="switcher">
            <div>
                <?php foreach ($page->images()->filterBy('extension', 'svg')->sortBy('sort', 'asc') as $image) : ?>
                    <a href="<?= $image->link() ?>" target="_blank">
                        <?= svg($image) ?>
                    </a>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</main>

<?php snippet('footer') ?>