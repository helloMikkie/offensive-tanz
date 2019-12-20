<?php foreach ($article as $article) : ?>

    <a class="card-link" href="<?= $article->url() ?>">
        <div class="card download">
            <?php if ($article->images()->isNotEmpty()) : ?>
                <div class="card-image">
                    <?= $article->image()->crop(1200, 800) ?>
                    <p class="credit"><span>© </span><?= $article->image()->credit() ?></p>
                </div>
            <?php endif ?>
            <article class="stack card-content centered">
                <h2 class="text-neutral"><?= $article->title() ?></h2>
                <?php if ($article->subtitle()->isNotEmpty()) : ?>
                    <p><?= $article->subtitle() ?></p>
                <?php endif ?>
                <p><?= $article->author() ?></p>
                <p><?= $article->date()->toDate('%e.%m.%Y') ?></p>
            </article>
        </div>
    </a>

<?php endforeach ?>