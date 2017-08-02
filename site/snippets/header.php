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
  <?php echo css('@auto') ?>

</head>
<body>
  <div class="transition-cover up"></div>
  <div class="transition-cover down"></div>
