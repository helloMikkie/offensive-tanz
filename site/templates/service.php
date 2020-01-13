<?php snippet('header') ?>

<main>

  <section class="stack-medium wrapper wrapper-large">
    <?= $page->intro()->blocks() ?>
  </section>

  <!-- Tickets -->
  <section class="stack-medium wrapper wrapper-large">
    <?= $page->tickets()->blocks() ?>

    <ul class="stack-medium">
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


  <section class="wrapper wrapper-medium stack-medium">

    <!-- Download   -->

    <?= $page->download()->blocks() ?>

    <section class="event-list download-list">
      <?php foreach ($page->children()->listed() as $download) : ?>
        <a class="card-link" href="<?= $download->url() ?>">
          <div class="card download">
            <?php if ($download->images()->isNotEmpty()) : ?>
              <div class="card-image">
                <?= $download->image()->crop(1200, 800) ?>
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

  </section>

  <!-- Presse -->
  <section class="wrapper wrapper-large stack-medium">
    <?= $page->press()->blocks() ?>


    <ul>

      <?php foreach ($page->documents()->filterBy('filename', '*=', 'press') as $pdf) : ?>
        <li class="presse">
          <a href="<?= $pdf->url() ?>" target="_blank">
            <?= $pdf->filename() ?>
            (<?= $pdf->niceSize() ?>)
          </a>
        </li>
      <?php endforeach ?>
    </ul>

    <?= $page->pressContact()->blocks() ?>

  </section>

  <!-- Kontakt -->

  <section class="wrapper wrapper-large stack-medium">

  <?= $page->contact()->blocks() ?>

  </section>


</main>
<?php snippet('footer') ?>