<div id="nav-menu" class="menu-container">
    <div class="menu">
        <ul class="social-media">
          <li><a href="<?= site()->instagram() ?>">instagram</a></li>
          <li><a href="<?= site()->behance() ?>">behance</a></li>
          <li><a href="<?= site()->twitter() ?>">twitter</a></li>
          <li><a href="<?= site()->facebook() ?>">facebook</a></li>
        </ul>
        <ul class="pages">
          <?php foreach($pages->visible() as $item): ?>
          <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
            <a href="<?= $item->url() ?>"><h1><?= $item->title()->html() ?></h1></a>  
          </li>
          <?php endforeach ?>
        </ul>
    </div>
</div>
