

<section class="theater_strahl">
<article class="stack card-content">
        <p><?= $page->label() ?></p>
        <h2 class="text-theater_strahl"><?= $page->title() ?></h2>
        <p><?= $page->author() ?></p>
        <h3 class="text-theater_strahl"><?= $page->date()->toDate('D, d.m.Y') ?></h3>
        <p><?= $page->location() ?></p>
    </article>
</section>
