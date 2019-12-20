<?php snippet('header') ?>

<main>

  <section class="stack wrapper wrapper-large">
    <?= $page->intro()->blocks() ?>

        <!-- Tickets -->
    <?= $page->tickets()->blocks() ?>

    <ul class="stack">
      <?php foreach ($page->ticketlinks()->toStructure() as $link) : ?>
        <a href="<?= $link->link() ?>" class="service">
          <li><?= $link->name() ?> ⇢</li>
        </a>
      <?php endforeach ?>
    </ul>
  </section>

  <!-- Feedback -->

  <section class="stack">
    <?php snippet('feedback') ?>
  </section>


  <section class="wrapper stack">

    <!-- Download   -->

    <?= $page->download()->blocks() ?>

    <section class="event-list download-list">
      <?php foreach ($page->children()->listed() as $download) : ?>
        <a class="card-link" href="<?= $download->url() ?>">
          <div class="card download">
            <?php if ($download->images()->isNotEmpty()) : ?>
              <div class="card-image">
                <?= $download->image()->crop(600, 300) ?>
                <p class="credit"><span>© </span><?= $download->image()->credit() ?></p>
              </div>
            <?php endif ?>
            <article class="stack card-content centered">
              <h2><?= $download->title() ?></h2>
            </article>
          </div>
        </a>
      <?php endforeach ?>
    </section>



    <!-- Presse -->

    <?= $page->press()->blocks() ?>


    <ul>
      <?php foreach ($page->documents()->filterBy('filename', '*=', 'presse-') as $pdf) : ?>
        <li class="presse">
          <a href="<?= $pdf->url() ?>" target="_blank">
            <?= $pdf->filename() ?>
            (<?= $pdf->niceSize() ?>)
          </a>
        </li>
      <?php endforeach ?>
    </ul>

<!-- Kontakt -->

    <?= $page->pressContact()->blocks() ?>
    <!-- Kontakt -->
    <?= $page->contact()->blocks() ?>

  </section>


</main>
<?php snippet('footer') ?>