<?php

$projects = page('work')->children()->visible();

$limit = 10;

if(isset($limit)) $projects = $projects->limit($limit);

?>

<div class="fancy-grid">

  <?php foreach($projects as $project): ?>
    <?php if($project->title() != page('home')->featuredproject()->toPage()->title()): ?>
      <figure>
          <a href="<?= $project->url() ?>">
            <?php if($image = $project->coverImage()->toFile()): ?>
              <img src="<?= $image->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>">
              <figcaption>
                <p><?= $project->title()->html() ?></p>
                <p class="tags"><?= $project->tags()->html() ?></p>
              </figcaption>
            <?php endif ?>
          </a>
      </figure>
    <?php endif ?>
  <?php endforeach ?>

</div>
