<section>
    <ul class="stack stack-small event-info event-info-theater_oN">
    <?php snippet('event-dates/event-info') ?>
</section>

<section class="stack">
    <?php if ($page->scedule()->isNotEmpty()) : ?>
        <h2><?= t('termine') ?></h2>
        <div class="cluster cluster-small">
            <div>
            <?php foreach ($page->scedule()->toStructure() as $termin) : ?>
                <p class="event-dates bg-theater_oN">
                    <?= $termin->datum()->toDate('%a, %e.%m.%Y') ?>, <?= $termin->zeit()->time('g') ?> <?= t('uhr') ?>
                </p>
            <?php endforeach ?>
            </div>
        </div>

    <?php endif ?>
</section>