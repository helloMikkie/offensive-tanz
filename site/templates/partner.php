<?php snippet('header') ?>

<!-- Header zu einzelnen Partnern -->

<main class="wrapper wrapper-large">

    <?php if ($page->title() == "Purple") : ?>
        <div class="card purple">
            <?php if ($page->images()->isNotEmpty()) : ?>
                <div class="card-image">
                    <?= $page->image()->crop(1200, 800) ?>
                    <p class="credit"><span>© </span><?= $page->image()->credit() ?></p>
                </div>
            <?php endif ?>
            <article class="stack-small card-content centered">
                <h2 class="text-purple"><?= $page->title() ?></h2>
                <?php if ($page->subtitle()->isNotEmpty()) : ?>
                    <p><?= $page->subtitle() ?></p>
                <?php endif ?>
            </article>
        </div>


    <?php elseif ($page->title() == "Tanzkomplizen") : ?>
        <div class="card tanzkomplizen">
            <?php if ($page->images()->isNotEmpty()) : ?>
                <div class="card-image">
                    <?= $page->image()->crop(1200, 800) ?>
                    <p class="credit"><span>© </span><?= $page->image()->credit() ?></p>
                </div>
            <?php endif ?>
            <article class="stack-small card-content centered">
                <h2 class="text-tanzkomplizen" style="letter-spacing: 0.06rem; "><?= $page->title()->upper() ?></h2>
                <?php if ($page->subtitle()->isNotEmpty()) : ?>
                    <p><?= $page->subtitle() ?></p>
                <?php endif ?>
            </article>
        </div>

    <?php elseif ($page->title() == "Theater Strahl") : ?>
        <div class="card theater_strahl">
            <?php if ($page->images()->isNotEmpty()) : ?>
                <div class="card-image">
                    <?= $page->image()->crop(1200, 800) ?>
                    <p class="credit"><span>© </span><?= $page->image()->credit() ?></p>
                </div>
            <?php endif ?>
            <article class="stack-small card-content centered">
                <h2 class="text-theater_strahl"><?= $page->title() ?></h2>
                <?php if ($page->subtitle()->isNotEmpty()) : ?>
                    <p><?= $page->subtitle() ?></p>
                <?php endif ?>
            </article>
        </div>

    <?php elseif ($page->title() == "Theater o.N.") : ?>
        <div class="card theater_oN">
            <?php if ($page->images()->isNotEmpty()) : ?>
                <div class="card-image">
                    <?= $page->image()->crop(1200, 800) ?>
                    <p class="credit"><span>© </span><?= $page->image()->credit() ?></p>
                </div>
            <?php endif ?>
            <article class="stack-small card-content centered">
                <h2 class="text-theater_oN"><?= $page->title() ?></h2>
                <?php if ($page->subtitle()->isNotEmpty()) : ?>
                    <p><?= $page->subtitle() ?></p>
                <?php endif ?>
            </article>
        </div>

    <?php endif ?>



    <!-- Text -->
    <div class="wrapper-medium">

        <section class="stack-medium">
            <?= $page->text()->blocks() ?>
        </section>
    <!-- Events der einzelnen Partner -->

    <section class="wrapper-large stack-medium">
        <h2 class="heading"><?= t('events') ?></h2>
        
        <?php if ($page->title() == "Purple") : ?>
            <div class="stack purple text-purple">
                <?php snippet('partner-events', ['partnerEvents' => page('events')->children()->filterBy('vorlage', 'Purple', ',')]) ?>
            </div>
        <?php elseif ($page->title() == "Tanzkomplizen") : ?>
            <div class="stack tanzkomplizen text-tanzkomplizen">
                <?php snippet('partner-events', ['partnerEvents' => page('events')->children()->filterBy('vorlage', 'Tanzkomplizen', ',')]) ?>
            </div>
        <?php elseif ($page->title() == "Theater Strahl") : ?>
            <div class="stack theater_strahl text-theater_strahl">
                <?php snippet('partner-events', ['partnerEvents' => page('events')->children()->filterBy('vorlage', 'Theater Strahl', ',')]) ?>
            </div>
        <?php elseif ($page->title() == "Theater o.N.") : ?>
            <div class="stack theater_oN text-theater_oN">
                <?php snippet('partner-events', ['partnerEvents' => page('events')->children()->filterBy('vorlage', 'Theater o.N.', ',')]) ?>
            </div>
        <?php endif ?>
    </section>

        </div>
</main>

<?php snippet('footer') ?>