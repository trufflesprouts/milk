<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords() ?>">

  <script type="text/javascript">
    // Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon
    function hamburgerFunction() {
      var menu = document.getElementById("nav-menu");
      menu.classList.toggle('nav-active');
      var hamburger = document.getElementById("hamburger-icon");
      hamburger.classList.toggle('nav-active');
    }
  </script>

  <?= css('assets/css/index.css') ?>
  <?php echo css('@auto') ?>

</head>
<body>
