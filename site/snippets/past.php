<?php foreach ($pastEvents as $event) : ?>

    <?php if ($event->vorlage() == "Purple") : ?>

        <a class="card-link" href="<?= $event->url() ?>">
            <div class="card purple">
                <?php if ($event->images()->isNotEmpty()) : ?>
                    <div class="card-image">
                        <?= $event->image()->crop(1200,800) ?>
                        <p class="credit"><span>© </span><?= $event->image()->credit() ?></p>
                    </div>
                <?php endif ?>
                <article class="stack-small card-content ">
                    <p><?= t($event->label()->value(), ucfirst($event->label()->html())) ?></p>
                    <!-- <p><?= $event->label() ?></p> -->
                    <h2 class="text-purple"><?= $event->title() ?></h2>
                    <p><?= $event->author() ?></p>
                    <h3 class="text-purple"><?= $event->date()->toDate('%a, %e.%m.%Y') ?></h3>
                    <p><?= $event->location() ?></p>
                    <?php if($event->age()->isNotEmpty()): ?>
                    <div class="card-content-batch">
                        <p><?= $event->age() ?>+</p>
                    </div>
                    <?php endif ?>
                </article>
            </div>
        </a>


    <?php elseif ($event->vorlage() == "Tanzkomplizen") : ?>

        <a class="card-link" href="<?= $event->url() ?>">
            <div class="card tanzkomplizen">
                <?php if ($event->images()->isNotEmpty()) : ?>
                    <div class="card-image">
                        <?= $event->image()->crop(1200,800) ?>
                        <p class="credit"><span>© </span><?= $event->image()->credit() ?></p>
                    </div>
                <?php endif ?>
                <article class="stack-small card-content">
                    <p><?= t($event->label()->value(), ucfirst($event->label()->html())) ?></p>
                    <h2 class="text-tanzkomplizen"><?= $event->title() ?></h2>
                    <p><?= $event->author() ?></p>
                    <h3 class="text-tanzkomplizen"><?= $event->date()->toDate('%a, %e.%m.%Y') ?></h3>
                    <p><?= $event->location() ?></p>
                    <?php if($event->age()->isNotEmpty()): ?>
                    <div class="card-content-batch">
                        <p><?= $event->age() ?>+</p>
                    </div>
                    <?php endif ?>
                </article>
            </div>
        </a>

    <?php elseif ($event->vorlage() == "Theater Strahl") : ?>


        <a class="card-link" href="<?= $event->url() ?>">
            <div class="card theater_strahl">
                <?php if ($event->images()->isNotEmpty()) : ?>
                    <div class="card-image">
                        <?= $event->image()->crop(1200,800) ?>
                        <p class="credit"><span>© </span><?= $event->image()->credit() ?></p>
                    </div>
                <?php endif ?>
                <article class="stack-small card-content">
                    <p><?= t($event->label()->value(), ucfirst($event->label()->html())) ?></p>
                    <h2 class="text-theater_strahl"><?= $event->title() ?></h2>
                    <p><?= $event->author() ?></p>
                    <h3 class="text-theater_strahl"><?= $event->date()->toDate('%a, %e.%m.%Y') ?></h3>
                    <p><?= $event->location() ?></p>
                    <?php if($event->age()->isNotEmpty()): ?>
                    <div class="card-content-batch">
                        <p><?= $event->age() ?>+</p>
                    </div>
                    <?php endif ?>
                </article>
            </div>
        </a>

    <?php elseif ($event->vorlage() == "Theater o.N.") : ?>


        <a class="card-link" href="<?= $event->url() ?>">
            <div class="card theater_oN">
                <?php if ($event->images()->isNotEmpty()) : ?>
                    <div class="card-image">
                        <?= $event->image()->crop(1200,800) ?>
                        <p class="credit"><span>© </span><?= $event->image()->credit() ?></p>
                    </div>
                <?php endif ?>
                <article class="stack-small card-content">
                    <p><?= t($event->label()->value(), ucfirst($event->label()->html())) ?></p>
                    <h2 class="text-theater_oN"><?= $event->title() ?></h2>
                    <p><?= $event->author() ?></p>
                    <h3 class="text-theater_oN"><?= $event->date()->toDate('%a, %e.%m.%Y') ?></h3>
                    <p><?= $event->location() ?></p>
                    <?php if($event->age()->isNotEmpty()): ?>
                    <div class="card-content-batch">
                        <p><?= $event->age() ?>+</p>
                    </div>
                    <?php endif ?>
                </article>
            </div>
        </a>

    <?php elseif ($event->vorlage() == "Neutral") : ?>

        <a class="card-link" href="<?= $event->url() ?>">
            <div class="card neutral">
                <?php if ($event->images()->isNotEmpty()) : ?>
                    <div class="card-image">
                        <?= $event->image()->crop(1200,800) ?>
                        <p class="credit"><span>© </span><?= $event->image()->credit() ?></p>
                    </div>
                <?php endif ?>
                <article class="stack-small card-content">
                    <p><?= t($event->label()->value(), ucfirst($event->label()->html())) ?></p>
                    <h2 class="text-neutral"><?= $event->title() ?></h2>
                    <p><?= $event->author() ?></p>
                    <h3 class="text-neutral"><?= $event->date()->toDate('%a, %e.%m.%Y') ?></h3>
                    <p><?= $event->location() ?></p>
                    <?php if($event->age()->isNotEmpty()): ?>
                    <div class="card-content-batch">
                        <p><?= $event->age() ?>+</p>
                    </div>
                    <?php endif ?>
                </article>
            </div>
        </a>



    <?php endif ?>

<?php endforeach ?>