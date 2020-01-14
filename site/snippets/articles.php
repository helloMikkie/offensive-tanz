<?php foreach ($article as $article) : ?>

    <a class="card-link" href="<?= $article->url() ?>">
        <div class="card download">
            <?php if ($article->images()->isNotEmpty()) : ?>
                <div class="card-image">
                    <?= $article->image()->crop(1200, 800) ?>
                    <p class="credit"><span>© </span><?= $article->image()->credit() ?></p>
                </div>
            <?php endif ?>
            <article class="stack-small card-content">
                <p><?= $article->author() ?></p>
                <h2 class="text-neutral"><?= $article->title() ?></h2>
                <?php if ($article->subtitle()->isNotEmpty()) : ?>
                    <h3 class="gray"><?= $article->subtitle() ?></h3>
                <?php endif ?>
                <div class="card-content-date">
                    <p><?= $article->date()->toDate('%e.%m.%Y') ?></p>
                </div>
                
            </article>
        </div>
    </a>

<?php endforeach ?>