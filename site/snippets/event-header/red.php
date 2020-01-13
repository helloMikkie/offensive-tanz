


<section class="tanzkomplizen">
    <article class="stack-small card-content">
        <p><?= t($page->label()->value(), ucfirst($page->label()->html())) ?></p>
        <h2 class="text-tanzkomplizen"><?= $page->title() ?></h2>
        <p><?= $page->author() ?></p>
        <h3 class="text-tanzkomplizen"><?= $page->date()->toDate('%a, %e.%m.%Y') ?></h3>
        <!-- <p><?= $page->location() ?></p> -->
    </article>
</section>
