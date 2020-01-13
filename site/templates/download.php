<?php snippet('header') ?>

<?php foreach ($page->documents()->filterBy('extension', 'pdf') as $pdf) : ?>

    <iframe src="<?= $pdf->url() ?>" style="display: block; margin-top: 10rem; margin-left: 1rem; margin-right: 1rem;  width:calc(100% - 2rem); height: 100vh;">
        <?= $pdf->filename() ?>
        (<?= $pdf->niceSize() ?>)
    </iframe>

<?php endforeach ?>

<?php snippet('footer') ?>