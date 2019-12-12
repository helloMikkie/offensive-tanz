<?php foreach ($partnerEvents as $event) : ?>

    <a class="card-link card-content border " href="<?= $event->url() ?>">
        <h2><?= $event->title() ?></h2>
    
    </a>
<?php endforeach ?>