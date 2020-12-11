<section id="article" class="row">
  <div class="offset-1 col-10">
    <h1><?= $article['title'] ?></h1>
    <h2>rédigé par <?= $article['author'] ?></h2>
    <h3>publié le <?= date("d/m/Y", strtotime($article['created_at']))?></h3>
    <p><?= $article['content'] ?></p>
  </div>
</section>