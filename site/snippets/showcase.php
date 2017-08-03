<?php

$projects = page('work')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<div class="work-grid">

  <?php foreach($projects as $project): ?>

    <figure class="showcase-item column">
        <a href="<?= $project->url() ?>">
          <?php if($image = $project->coverImage()->toFile()): $thumb = $image->crop(300, 300); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>">
            <figcaption>
              <?= $project->title()->html() ?>
            </figcaption>
          <?php endif ?>
        </a>
    </figure>

  <?php endforeach ?>

</div>
