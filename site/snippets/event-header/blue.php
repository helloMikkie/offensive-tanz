<section class="purple">
    <article class="stack card-content">
        <p><?= $page->label() ?></p>
        <h2 class="text-purple"><?= $page->title() ?></h2>
        <p><?= $page->author() ?></p>
        <h3 class="text-purple"><?= $page->date()->toDate('D, d.m.Y') ?></h3>
        <p><?= $page->location() ?></p>
    </article>
</section>
