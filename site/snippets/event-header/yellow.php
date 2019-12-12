
<section class="theater_oN">
<article class="stack card-content">
        <p><?= $page->label() ?></p>
        <h2 class="text-theater_oN"><?= $page->title() ?></h2>
        <p><?= $page->author() ?></p>
        <h3 class="text-theater_oN"><?= $page->date()->toDate('D, d.m.Y') ?></h3>
        <p><?= $page->location() ?></p>
    </article>
</section>
