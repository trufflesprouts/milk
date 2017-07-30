<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords() ?>">

  <?php echo js('assets/js/main.js') ?>
  <?= css('assets/css/index.css') ?>

</head>
<body>
  <main>
    <header class="header cf">
      <div class="logo">
        <a href="<?= url() ?>" rel="home">
          <img src="<?= $site->Images()->first()->url()?>" alt="milk">
        </a>
      </div>
      <nav>
        <a id="hamburger-icon" href="javascript:void(0);" onclick="hamburgerFunction()" title="Menu">
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
        </a>
        <?php snippet('menu') ?>
      </nav>
    </header>
