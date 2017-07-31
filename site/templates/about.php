<?php snippet('header') ?>

<section class="hero" style="background-image:url(<?= $page->image($page->coverImage()->value())->url() ?>)">
      <main>
            <?php snippet('nav') ?>
            <h1><?= $page->tagline()->html() ?></h1>
            <div class="intro text">
              <?= $page->text()->kirbytext() ?>
            </div>
      </main>
</section>
<main>
      <section class="services">
            <h1>What We Do</h1>
            <?php foreach($page->services()->toStructure() as $servicecategory): ?>
            <div class="category">
                  <h2><?= $servicecategory->category()->html() ?></h2>
                  <p><?= $servicecategory->serviceslist()->markdown() ?></p>
            </div>
            <?php endforeach ?>
      </section>
</main>
<?php snippet('footer') ?>
