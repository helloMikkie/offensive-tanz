<section class="hero-slides wrapper-large" >

<?php if ($page->images()->isNotEmpty()) : ?>
    <?php foreach ($page->images()->sortBy('sort', 'desc') as $image) : ?>
        <div class="slide">
            <?= $image->crop(900, 600)  ?>
            <p class="credit"><span>© </span><?= $image->credit() ?></p>
        </div>
    <?php endforeach ?>
<?php endif ?>

</section>
