<?php snippet('header') ?>
      <section class="hero-container">
            <main class="hero">
                  <h1><?= $page->tagline()->html() ?></h1>
                  <div class="intro text">
                    <?= $page->text()->kirbytext() ?>
                  </div>
            </main>
      </section>

<?php snippet('footer') ?>
