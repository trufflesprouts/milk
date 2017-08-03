<header class="header cf">
  <div class="logo">
    <a href="<?= url() ?>">
      <img class="logo-black" src="<?= $site->Image('logo-black.svg')->url()?>" alt="milk">
      <img class="logo-white" src="<?= $site->Image('logo-white.svg')->url()?>" alt="milk">
    </a>
  </div>
  <nav>
    <a id="hamburger-icon" href="javascript:void(0);" onclick="hamburgerFunction()" title="Menu">
      <span class="line line-1"></span>
      <span class="line line-2"></span>
      <span class="line line-3"></span>
    </a>
    <?php snippet('menu') ?>
  </nav>
</header>
