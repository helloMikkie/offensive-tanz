<?php snippet('header') ?>

<main>
<!-- Header -->
<section class="hero-slides wrapper-large " style="background-image: url('/assets/img/bg-slides-c.svg')">

    <?php foreach ($page->images()->filterBy('filename', '*=', 'project-')->sortBy('sort', 'asc') as $image) : ?>
        <div class="slide">
            <?= $image->crop(900, 600)  ?>
            <p class="credit"><span>© </span><?= $image->credit() ?></p>
        </div>
        
    <?php endforeach ?>


</section>

<section class="stack wrapper wrapper-large">


        <?= $page->about()->blocks() ?>

        <?= $page->partners()->blocks() ?>

        <section class="stack event-list">
            <?php snippet('partner-header') ?>
        </section>

        <?= $page->mission()->blocks() ?>

 


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