<?php foreach ($page->children() as $partner) : ?>

    <a class="card-link" href="<?= $partner->url() ?>">
        <?php if ($partner->title() == "Purple") : ?>
            <div class="card purple">

                <?php if ($partner->images()->isNotEmpty()) : ?>
                    <div class="card-image">
                        <?= $partner->image()->crop(1200, 800) ?>
                        <?php if ($partner->image()->credit()->isNotEmpty()) : ?>
                            <p class="credit"><span>© </span><?= $partner->image()->credit() ?></p>
                        <?php endif ?>

                    </div>
                <?php endif ?>
                <article class="stack-small card-content centered">
                    <h2 class="text-purple"><?= $partner->title() ?></h2>
                    <?php if ($partner->subtitle()->isNotEmpty()) : ?>
                        <p><?= $partner->subtitle() ?></p>
                    <?php endif ?>
                </article>
            </div>
    </a>


<?php elseif ($partner->title() == "Tanzkomplizen") : ?>

    <div class="card tanzkomplizen">
        <?php if ($partner->images()->isNotEmpty()) : ?>
            <div class="card-image">
                <?= $partner->image()->crop(1200, 800) ?>
                <?php if ($partner->image()->credit()->isNotEmpty()) : ?>
                    <p class="credit"><span>© </span><?= $partner->image()->credit() ?></p>
                <?php endif ?>
            </div>
        <?php endif ?>
        <article class="stack-small card-content centered">

            <h2 class="text-tanzkomplizen" style="letter-spacing: 0.06rem; "><?= $partner->title()->upper() ?></h2>
            <?php if ($partner->subtitle()->isNotEmpty()) : ?>
                <p><?= $partner->subtitle() ?></p>
            <?php endif ?>
        </article>
    </div>


<?php elseif ($partner->title() == "Theater Strahl") : ?>

    <div class="card theater_strahl">
        <?php if ($partner->images()->isNotEmpty()) : ?>
            <div class="card-image">
                <?= $partner->image()->crop(1200, 800) ?>
                <?php if ($partner->image()->credit()->isNotEmpty()) : ?>
                    <p class="credit"><span>© </span><?= $partner->image()->credit() ?></p>
                <?php endif ?>
            </div>
        <?php endif ?>
        <article class="stack-small card-content centered">

            <h2 class="text-theater_strahl"><?= $partner->title() ?></h2>
            <?php if ($partner->subtitle()->isNotEmpty()) : ?>
                <p><?= $partner->subtitle() ?></p>
            <?php endif ?>
        </article>
    </div>


<?php elseif ($partner->title() == "Theater o.N.") : ?>

    <div class="card theater_oN">
        <?php if ($partner->images()->isNotEmpty()) : ?>
            <div class="card-image">
                <?= $partner->image()->crop(1200, 800) ?>
                <?php if ($partner->image()->credit()->isNotEmpty()) : ?>
                    <p class="credit"><span>© </span><?= $partner->image()->credit() ?></p>
                <?php endif ?>
            </div>
        <?php endif ?>
        <article class="stack-small card-content centered">

            <h2 class="text-theater_oN"><?= $partner->title() ?></h2>
            <?php if ($partner->subtitle()->isNotEmpty()) : ?>
                <p><?= $partner->subtitle() ?></p>
            <?php endif ?>
        </article>
    </div>
    </a>

<?php endif ?>
<?php endforeach ?>