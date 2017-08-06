<section class="fullImage scroll-reveal-s">
<?php if ($data->picture()->isNotEmpty()): ?>
  <img src="<?= $page->image($data->picture())->url() ?>" alt="">
<?php endif ?>
</section>
