<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $site->title() ?></title>

    <?= css([ 'assets/css/index.css',
              'assets/css/layout.css',
              'assets/css/components/header.css',
              'assets/css/components/footer.css',
              'assets/css/components/badge.css',
              'assets/css/components/feedback.css',
              '@auto']) ?>
    
</head>
<body>

<header class="header">
  <div class="header-content">

      <a class="header-logo" href="<?= $site->url() ?>">
        <img src="<?= url('assets/img/offensive-tanz.svg') ?>" alt="offensive-tanz">
      </a>
      <a class="header-logo-onScroll" href="<?= $site->url() ?>">
        Offensive Tanz
      </a>

      <button class="open-nav">&#9776;</button>

      <nav>
      
        <button class="close-nav">&times;</button>

        <ul class="nav-links">
          <?php foreach ($site->children()->listed() as $item): ?>
            <li><?= $item->title()->link() ?></li>
          <?php endforeach ?>
        </ul>

      </nav>

  </div>
</header>