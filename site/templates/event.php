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


    <section class="stack wrapper wrapper-large">

        <!-- Event-Header -->

        <?php if ($page->vorlage() == 'Purple') : ?>
            <?php snippet('event-header/blue') ?>
            <?php snippet('event-dates/blue') ?>
        

        <?php elseif ($page->vorlage() == "Tanzkomplizen") : ?>
            <?php snippet('event-header/red') ?>
            <?php snippet('event-dates/red') ?>

        <?php elseif ($page->vorlage() == "Theater Strahl") : ?>
            <?php snippet('event-header/green') ?>
            <?php snippet('event-dates/green') ?>

        <?php elseif ($page->vorlage() == "Theater o.N.") : ?>
            <?php snippet('event-header/yellow') ?>
            <?php snippet('event-dates/yellow') ?>

        <?php elseif ($page->vorlage() == "Neutral") : ?>
            <?php snippet('event-header/black') ?>
            <?php snippet('event-dates/neutral') ?>

        <?php endif ?>

        <!-- Text Content  -->

        <h1 class="heading"><?= $page->title() ?></h1>

        <p><?= $page->description()->blocks() ?></p>

        <!-- CONTENT: Artists List -->

        <?php if ($page->artists()->isNotEmpty()) : ?>
            <section>
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
            <section>
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
            <p><?= $page->subtext()->blocks() ?></p>
        <?php endif ?>

    </section>

</main>


<?php snippet('footer') ?>