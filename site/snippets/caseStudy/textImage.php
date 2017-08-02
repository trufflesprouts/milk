<section class="textImage">

<div class="left-half">
  <?= $data->text()->kt() ?>
</div>

<div class="right-half">
  <?php if ($data->picture()->isNotEmpty()): ?>
    <img src="<?= $page->image($data->picture())->url() ?>" alt="">
  <?php endif ?>
</div>

</section>
