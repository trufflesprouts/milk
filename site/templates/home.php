<?php snippet('header') ?>

    <p><?php $imageName = $page->featuredproject()->toPage()->coverImage()->value() ?></p>
    <section>
        <div class="hero-container"
            style="background-image:url(<?= $page->featuredproject()->toPage()->image($imageName)->url() ?>)">
            <span></span>
            <main>
            <?php snippet('nav') ?>
            <!-- <a class="open-featured-project" onclick="transitionInternal('<?= $page->featuredproject() ?>')">↗</a> -->
            </main>
        </div>
        <div class="intro">
            <main>
                <?= $page->intro()->kirbytext() ?>
            </main>
        </div>
    </section>

    <?php snippet('fancyShowcase') ?>

    <!-- <p><a href="<?= page('work')->url() ?>">show all projects &hellip;</a></p> -->

<?php snippet('footer') ?>
