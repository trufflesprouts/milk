</main>

<section class="jumbotron">
<?php if ($data->picture()->isNotEmpty()): ?>
  <img src="<?= $page->image($data->picture())->url() ?>" alt="">
<?php endif ?>
</section>

<main>
