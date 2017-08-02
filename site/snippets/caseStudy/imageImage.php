<section class="imageImage">

<div class="left-half">
  <?php if ($data->picture1()->isNotEmpty()): ?>
    <img src="<?= $page->image($data->picture1())->url() ?>" alt="">
  <?php endif ?>
</div>

<div class="right-half">
  <?php if ($data->picture2()->isNotEmpty()): ?>
    <img src="<?= $page->image($data->picture2())->url() ?>" alt="">
  <?php endif ?>
</div>

</section>
