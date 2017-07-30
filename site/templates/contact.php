<?php snippet('header') ?>


    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
    </header>

    <div class="wrap wide">
      <h2>Get in Touch</h2>

    <div class="contact-twitter text wrap cf">
      <?= $page->text()->kirbytext() ?>
    </div>

<?php snippet('footer') ?>
