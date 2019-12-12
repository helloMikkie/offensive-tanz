<?php snippet('header') ?>

<main>
<!-- Header -->
<section class="hero-slides wrapper-large " style="background-image: url('assets/img/bg-slides-c.svg')">
<!-- <img class="hero-slides-bg" src="<?= url('assets/img/bg-slides-c.svg')?>" alt=""> -->

    <?php foreach ($page->images()->filterBy('filename', '*=', 'project-')->sortBy('sort', 'asc') as $image) : ?>
        <div class="slide">
            <?= $image->crop(900, 600)  ?>
            <p class="credit"><span>© </span><?= $image->credit() ?></p>
        </div>
        
    <?php endforeach ?>
  

</section>

<section class="stack wrapper wrapper-large">

        <!-- About -->

        <h2 class="heading">Wer wir sind</h2>
        <?= $page->about()->blocks() ?>

        <!-- Mission -->
        <h2 class="heading">Unserer Mission</h2>
        <?= $page->mission()->blocks() ?>

        <!-- Partner , Partner Header-->
        <h2 class="heading">Die Projektpartner</h2>
        <?= $page->partners()->blocks() ?>

        <section class="stack event-list">
            <?php snippet('partner-header') ?>
        </section>


        <!-- Sponsoren -->
        <h2 class="heading">Fördermodell und Förderer</h2>
        <?= $page->sponsors()->blocks() ?>

        <div class="switcher">
            <div>
                <?php foreach ($page->images()->filterBy('filename', '*=', 'logo')->sortBy('sort', 'asc') as $image) : ?>
                    <a href="<?= $image->link() ?>" target="_blank">
                        <?= $image ?>
                    </a>
                <?php endforeach ?>
            </div>
        </div>
        

    </section>

</main>

<?php snippet('footer') ?>