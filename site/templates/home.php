<?php snippet('header') ?>

<!-- Hero Aniamtion -->
<section class="hero-animation">
    <?php snippet('animation') ?>

    <?php if ($page->featured() == 'true') : ?>
        <!-- <a class="badge" href="<?= $page->badgelink() ?>"> -->
        <a class="badge" href="#newsletter">
            <?= $page->badgetext()->blocks() ?>
        </a>

    <?php endif ?>
</section>



<!-- Introtext -->

<section class="wrapper stack wrapper-small">
<h2 class="heading">Offensive Tanz für junges Publikum</h2>
    <?= $page->introtext()->blocks() ?>
</section>



<!-- Header -->
<section class="hero-slides wrapper-large " style="background-image: url('assets/img/bg-slides-c.svg')">
<!-- <img class="hero-slides-bg" src="<?= url('assets/img/feedback.svg') ?>" alt=""> -->
    <?php foreach ($page->images()->sortBy('sort', 'desc') as $image) : ?>
        <div class="slide">
            <?= $image->crop(900, 600)  ?>
            <p class="credit"><span>© </span><?= $image->credit() ?></p>
        </div>
        
    <?php endforeach ?>
  

</section>



<!-- <section class="showreel wrapper-small">
    <?php foreach ($page->images()->sortBy('sort', 'asc') as $image) : ?>
        <div>
            <?= $image->resize(1200) ?>
            <p class="credit"><span>© </span><?= $image->credit() ?></p>
        </div>
    <?php endforeach ?>
</section> -->

<main class="wrapper wrapper-large">

    <!--  Featured Events:  Limited by 3 -->

    <h2 class="heading">Veranstaltungen</h2>
    <section class="stack event-list">
        <?php snippet('upcoming', [
            'upcomingEvents' => page('events')
                ->children()
                ->listed()
                ->filterBy('featured', true)
                ->sortBy('date', 'desc')
                ->limit(3)
        ]) ?>
    </section>

</main>

<!-- Feedback -->
<section class="stack">
    <?php snippet('feedback') ?>
</section>
<!-- Footer -->

<?php snippet('footer') ?>