<?php snippet('header') ?>

<!-- Hero Aniamtion -->
<section class="hero-animation">
    <?php snippet('animation') ?>

    <?php if ($page->featured() == 'true') : ?>

        <a class="badge" href="#newsletter">
            <?= $page->badgetext()->blocks() ?>
        </a>

    <?php endif ?>
</section>



<!-- Introtext -->

<section class="wrapper stack stack-medium wrapper-small">
    <?= $page->introtext()->blocks() ?>
</section>



<!-- Header -->
<section class="hero-slides wrapper-large " style="background-image: url('<?= url('assets/img/bg-slides-c.svg') ?>'">

    <?php foreach ($page->images()->sortBy('sort', 'desc') as $image) : ?>
        <div class="slide">
            <?= $image->crop(900, 600)  ?>
            <?php if($image->credit()->isNotEmpty()): ?>
                <p class="credit"><span>© </span><?= $image->credit() ?></p>
            <?php endif ?>
        </div>
        
    <?php endforeach ?>
  

</section>



<main class="wrapper">

    <div class="wrapper-large">
    <!--  Featured Events:  Limited by 3 -->

   
    <section class="stack-medium event-list">
    <h2 class="heading"><?= t('events') ?></h2>
        <?php snippet('upcoming', [
            'upcomingEvents' => page('events')
                ->children()
                ->listed()
                ->filterBy('featured', true)
                ->sortBy('date', 'asc')
                ->limit(3)
        ]) ?>
    </section>
    </div>

    <div class="stack-medium wrapper-large">
<!--  Featured Articles:  Limited by 3 -->
<h2 class="heading"><?= t('articles') ?></h2>
    <section class="event-list download-list">
   
        <?php snippet('articles', [
            'article' => page('articles')
                ->children()
                ->listed()
                ->filterBy('featured', true)
                ->sortBy('date', 'asc')
                ->limit(3)
        ]) ?>
    </section>

    </div>
</main>

<!-- Feedback -->
<section class="stack">
    <?php snippet('feedback') ?>
</section>
<!-- Footer -->

<?php snippet('footer') ?>