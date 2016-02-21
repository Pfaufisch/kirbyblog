<?php snippet('header') ?>

<div class="blog">

  <div class="post">
    <h1 class="post_title headline"><?php echo $page->title()->html() ?></h1>
    <?php echo $page->text()->kirbytext() ?>
    <span class="meta">Verfasst von <a href=#>Dominik Hayon</a> am <?php echo $page->date('d.m.Y') ?></span>
    <span class="backlink"><a href="<?php echo url('blog') ?>">&lsaquo; Zurück</a></span>
  </div>

</div>

<?php snippet('footer') ?>
