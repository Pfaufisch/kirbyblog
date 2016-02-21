<?php snippet('header') ?>

<div class="blog">


  <?php $articles = $page->children()->visible()->flip()->paginate(10) ?>

  <?php foreach($articles as $article): ?>
    <div class="post">
    <span class="date"><?php setlocale(LC_TIME, "de_DE.UTF8"); echo $article->date('d. F Y') ?></span>
    <h1 class="post_title headline"><a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a></h1>
    <p><?php echo kirbytext($article->text()) ?></p>
    </div>
  <?php endforeach ?>

  


  <?php if($articles->pagination()->hasPages()): ?>
    <nav class="pagination">

      <?php if($articles->pagination()->hasNextPage()): ?>
        <a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">&lsaquo; Ältere Einträge</a>
      <?php endif ?>

      <?php if($articles->pagination()->hasPrevPage()): ?>
        <a class="prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">Neuere Einträge &rsaquo;</a>
      <?php endif ?>

    </nav>
  <?php endif ?>
</div>


<?php snippet('footer') ?>
