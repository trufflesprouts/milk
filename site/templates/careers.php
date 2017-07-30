<?php snippet('header') ?>

      <h1><?= $page->tagline()->kirbytext() ?></h1>

      <div class="cf">
            <div class="open-positions">
                  <h2>Open Positions</h2>

                  <?php foreach($page->openpositions()->toStructure() as $position): ?>
                        <div class="position">
                              <h4><?= $position->title()->html() ?></h4>
                              <p><?= $position->description()->html() ?></p>
                        </div>
                  <?php endforeach ?>
            </div>

            <div class="internships">
                  <h2>Internships</h2>
                  <?= $page->internships()->kirbytext() ?>
            </div>
      </div>

      <div class="images">
            <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
            <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
            <?php endforeach ?>
      </div>

<?php snippet('footer') ?>
