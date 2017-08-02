<?php snippet('header') ?>
  <main class="main">
    <?php snippet('nav') ?>

    <div class="title">
      <h1><?= $page->title()->html() ?></h1>
      <p><?= $page->tags()->html() ?></p>
    </div>


<?php snippet('footer') ?>
