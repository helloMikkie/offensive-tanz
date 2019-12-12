<section class="">
    <article class="stack stack-small card-content">
        <p><?= $page->label() ?></p>
        <h2 class="text-tanzkomplizen"><?= $page->title() ?></h2>
        <p><?= $page->author() ?></p>
        <h3 class="text-tanzkomplizen"><?= $page->date()->toDate('D, d.n.Y') ?></h3>
        <!-- <p><?= $page->location() ?></p> -->
    </article>
</section>
