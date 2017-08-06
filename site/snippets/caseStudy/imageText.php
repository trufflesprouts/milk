<section class="imageText scroll-reveal-s">


  <div class="left-half">
    <?php if ($data->picture()->isNotEmpty()): ?>
      <img src="<?= $page->image($data->picture())->url() ?>" alt="">
    <?php endif ?>
  </div>

  <div class="right-half">
    <?= $data->text()->kt() ?>
  </div>

</section>
