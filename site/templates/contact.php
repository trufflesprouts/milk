<?php snippet('header') ?>


<main>
    <?php snippet('nav') ?>

    <div class="hero cf">
        <section class="contact-details">
            <h1><span class="blue"><?= $page->tagline1()->html() ?> </span><br><?= $page->tagline2()->html() ?></h1>

            <div class="description">
                <?= $page->description()->kirbytext() ?>
                <p><a target="_blank" href="<?= $page->directionsurl()->html() ?>"><?= $page->directionstext()->html() ?></a></p>
            </div>

            <div class="details">
                <?= $page->details()->kirbytext() ?>
            </div>
        </section>

        <section class="contact-form">
            <form action="<?php echo $page->url() ?>" method="POST">
                <input placeholder="Email" <?php if ($form->error('email')): ?> class="error"<?php endif; ?> name="email" type="email" value="<?php echo $form->old('email') ?>">

                <input placeholder="Name" <?php if ($form->error('name')): ?> class="error"<?php endif; ?> name="name" type="text" value="<?php echo $form->old('name') ?>">

                <textarea placeholder="Tell us a little bit about yourself and your project"<?php if ($form->error('message')): ?> class="error"<?php endif; ?> name="message"><?php echo $form->old('message') ?></textarea>

                <?php echo csrf_field() ?>
                <?php echo honeypot_field() ?>
                <input type="submit" value="> Submit">
            </form>
            <?php if ($form->success()): ?>
                Thank you for your message. We will get back to you soon!
            <?php else: ?>
                <?php snippet('uniform/errors', ['form' => $form]) ?>
            <?php endif; ?>
        </section>
    </div>

</main>

    <section class="map" style="background-image:url(<?= $page->image($page->mapImage()->value())->url() ?>)"></section>

<main>
    <section class="join-us scroll-reveal-s">
        <div class="text">
            <h1><?= $page->careertagline()->html() ?></h1>
            <?= $page->careertext()->kirbytext() ?>
        </div>
        <div class="img" style="background-image:url(<?= $page->image($page->careerImage()->value())->url() ?>)"></div>
    </section>

</main>
<?php snippet('footer') ?>
