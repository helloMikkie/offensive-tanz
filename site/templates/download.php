<?php snippet('header') ?>

<?php foreach ($page->documents()->filterBy('extension', 'pdf') as $pdf) : ?>

    <iframe src="<?= $pdf->url() ?>" class="pdf-preview" >
        <?= $pdf->filename() ?>
        (<?= $pdf->niceSize() ?>)
    </iframe>

<?php endforeach ?>

<?php snippet('footer') ?>