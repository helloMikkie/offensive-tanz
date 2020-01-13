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
                <p><?= $article->date()->toDate('%e.%m.%Y') ?></p>
                <h2 class="text-neutral"><?= $article->title() ?></h2>
                <?php if ($article->subtitle()->isNotEmpty()) : ?>
                    <h3><?= $article->subtitle() ?></h3>
                <?php endif ?>
                <p><?= $article->author() ?></p>
                
            </article>
        </div>
    </a>

<?php endforeach ?>