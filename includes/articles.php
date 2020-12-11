<?php $articles = getArticles(); ?>

<section id="articles" class="row">
  <div class="title-content offset-1 col-10">
    <h1>Retrouvez nos articles</h1>
  </div>
  <div class="articles-content offset-1 col-10">
    <?php foreach ($articles as $article) { ?>
    <article>
      <div class="img-content d-flex d-md-none">
        <img src="<?= $domains.'/assets/media/images/articles/'.$article['image'] ?>">
      </div>
      <div class="article-content">
        <h2><?= $article['title'] ?></h2>
        <h3>rédigé par <?= $article['author'] ?></h3>
        <small>publié le <?= date("d/m/Y", strtotime($article['created_at'])) ?></small>
        <p><?= substr($article['content'], 0, 400) ?></p>
        <a href="<?= $domains.'/article/'.$article['id'] ?>"><di class="more">Lire la suite</di></a>
      </div>
      <div class="img-content d-none d-md-flex">
        <img src="<?= $domains.'/assets/media/images/articles/'.$article['image'] ?>">
      </div>
    </article>
    <?php } ?>
  </div>
</section>