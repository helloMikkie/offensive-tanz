<?php if ($page->time()->isNotEmpty()) : ?>
    <li><span><?= t('uhrzeit') ?></span><?= $page->time() ?> <?= t('uhr') ?></li>
<?php endif ?>

<?php if ($page->location()->isNotEmpty()) : ?>
        <li><span><?= t('ort') ?></span><?= $page->location() ?></li>
<?php endif ?>

<?php if ($page->duration()->isNotEmpty()) : ?>
        <li><span><?= t('dauer') ?></span><?= $page->duration() ?> h</li>
<?php endif ?>

<?php if ($page->tickets()->isNotEmpty()) : ?>

        <li><span><?= t('tickets') ?></span><a href="mailto:<?= $page->tickets() ?>"><?= $page->tickets() ?></a></li>
<?php endif ?> 

<?php if ($page->age()->isNotEmpty()) : ?>
        <li><span><?= t('alter') ?></span><?= $page->age() ?>+</li>
<?php endif ?>
    </ul>

    <!-- Caption -->

<?php if ($page->caption()->isNotEmpty()) : ?>   
    <p class="event-info-caption"><?= $page->caption() ?></p>
<?php endif ?>