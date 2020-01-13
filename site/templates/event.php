<?php snippet('header') ?>

<main>


    <?php if ($page->vorlage() == 'Purple') : ?>
        <?php snippet('event-slides/blue') ?>
    <?php endif ?>
    <?php if ($page->vorlage() == 'Tanzkomplizen') : ?>
        <?php snippet('event-slides/red') ?>
    <?php endif ?>
    <?php if ($page->vorlage() == 'Theater Strahl') : ?>
        <?php snippet('event-slides/green') ?>
    <?php endif ?>
    <?php if ($page->vorlage() == 'Theater o.N.') : ?>
        <?php snippet('event-slides/yellow') ?>
    <?php endif ?>
    <?php if ($page->vorlage() == 'Neutral.') : ?>
        <?php snippet('event-slides/black') ?>
    <?php endif ?>


    <section class="stack-medium wrapper wrapper-large">

        <!-- Event-Header -->

        <?php if ($page->vorlage() == 'Purple') : ?>
            <?php snippet('event-header/blue') ?>
            <div class="stack">
                <?php snippet('event-dates/blue') ?>
            </div>

        <?php elseif ($page->vorlage() == "Tanzkomplizen") : ?>
            <?php snippet('event-header/red') ?>
            <div class="stack">
                <?php snippet('event-dates/red') ?>
            </div>

        <?php elseif ($page->vorlage() == "Theater Strahl") : ?>
            <?php snippet('event-header/green') ?>
            <div class="stack">
                <?php snippet('event-dates/green') ?>
            </div>


        <?php elseif ($page->vorlage() == "Theater o.N.") : ?>
            <?php snippet('event-header/yellow') ?>
            <div class="stack">
                <?php snippet('event-dates/yellow') ?>
            </div>

        <?php elseif ($page->vorlage() == "Neutral") : ?>
            <?php snippet('event-header/black') ?>
            <div class="stack">
                <?php snippet('event-dates/neutral') ?>
            </div>

        <?php endif ?>

    </section>

    <!-- Text Content  -->
    <section class="stack-medium wrapper wrapper-large">

        <h1 class="heading"><?= $page->title() ?></h1>
        <?= $page->description()->blocks() ?>
    </section>

    <!-- CONTENT: Artists List -->


        <?php if ($page->artists()->isNotEmpty()) : ?>
            <section class="stack-medium wrapper wrapper-large">
                <h2 class="heading"><?= t('kuenstler') ?></h2>
                <ul>
                    <?php foreach ($page->artists()->toStructure() as $artist) : ?>
                        <li><span class="list"><?= $artist->role() ?>&emsp;</span><?= $artist->name() ?></li>
                    <?php endforeach ?>
                </ul>
            </section>
        <?php endif ?>


        <!-- CONTENT: Staff List -->

        <?php if ($page->staffs()->isNotEmpty()) : ?>
            <section class="stack-medium wrapper wrapper-large">
                <h2 class="heading"><?= t('mitarbeiter') ?></h2>
                <ul>
                    <?php foreach ($page->staffs()->toStructure() as $staff) : ?>
                        <li><span class="list"><?= $staff->role() ?>&emsp;</span><?= $staff->name() ?></li>
                    <?php endforeach ?>
                </ul>
            </section>
        <?php endif ?>

        <!-- CONTENT: Subtext -->

        <?php if ($page->subtext()->isNotEmpty()) : ?>
            <section class="stack-medium wrapper wrapper-large">
                <?= $page->subtext()->blocks() ?>
            </section>
        <?php endif ?>


</main>


<?php snippet('footer') ?>