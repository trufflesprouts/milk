<?php snippet('header') ?>
  <main>
    <?php snippet('nav') ?>

    <div class="title">
      <h1><?= $page->title()->html() ?></h1>
      <p><?= $page->tags()->html() ?></p>
    </div>

    <div class="case-study">
      <?php foreach($page->builder()->toStructure() as $section): ?>
        <?php snippet('caseStudy/' . $section->_fieldset(), array('data' => $section)) ?>
      <?php endforeach ?>
    </div>
  </main>

<?php snippet('footer') ?>
