
<section class="theater_strahl">
<article class="stack-small card-content">
        <p><?= t($page->label()->value(), ucfirst($page->label()->html())) ?></p>
        <h2 class="text-theater_strahl"><?= $page->title() ?></h2>
        <p><?= $page->author() ?></p>
        <h3 class="text-theater_strahl"><?= $page->date()->toDate('%a, %e.%m.%Y') ?></h3>
        <p><?= $page->location() ?></p>
    </article>
</section>
