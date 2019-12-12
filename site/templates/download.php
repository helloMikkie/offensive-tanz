<?php snippet('header') ?>

<?php foreach ($page->documents()->filterBy('extension', 'pdf') as $pdf) : ?>

    <iframe src="<?= $pdf->url() ?>" style="display: block; margin-top: 8rem; margin-left: auto; margin-right: auto;  width: 90%; height: 100vh;">
        <?= $pdf->filename() ?>
        (<?= $pdf->niceSize() ?>)
    </iframe>

<?php endforeach ?>

<?php snippet('footer') ?>