<?php snippet('header') ?>

<section class="hero-container" style="background-image:url(<?= $page->image($page->coverImage()->value())->url() ?>)">
  <main>
    <?php snippet('nav') ?>
    <div class="hero">
      <h1><?= $page->tagline()->html() ?></h1>
      <div class="intro text">
        <?= $page->text()->kirbytext() ?>
      </div>
    </div>
  </main>
</section>


<main>


  <section class="services-continer cf">
    <h1>What We Do</h1>
    <div class="services">
      <div class="text">
        <?php foreach($page->services()->toStructure() as $servicecategory): ?>
        <div class="category">
          <h2><?= $servicecategory->category()->html() ?></h2>
          <p><?= $servicecategory->serviceslist()->markdown() ?></p>
        </div>
        <?php endforeach ?>
      </div>
      <div class="img" style="background-image:url(<?= $page->image($page->servicesImage()->value())->url() ?>)">
      </div>
    </div>
  </section>


  <section class="approach-continer cf">
    <h1>Our Approach</h1>
    <div class="blocks">
      <?php foreach($page->approach()->toStructure() as $block): ?>
      <div class="block">
        <img src="<?= $page->image($block->icon()->value())->url() ?>" alt="">
        <div class="text">
          <h2><?= $block->title()->html() ?></h2>
          <p><?= $block->description()->markdown() ?></p>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </section>
</main>
<?php snippet('footer') ?>
