<!-- Article list -->
  <section class="box article-list">
    <h2 class="icon fa-file-text-o"><?php echo $news_title ?></h2>

    <!-- Excerpt -->
    <?php foreach ($news as $article): ?>
      <article class="box excerpt">
        <a href="<?php echo base_url()."article/". $article['id'] ?>" class="image left"><img src="assets/images/pic04.jpg" alt=""></a>
        <div>
          <header>
            <span class="date"><?php echo date("F d", strtotime($article['date_created'])) ?></span>
            <h3><a href="<?php echo base_url()."article/". $article['id'] ?>"><?php echo $article['title'] ?></a></h3>
          </header>
          <p><?php echo character_limiter($article['text'], 240) ?></p>
        </div>
      </article>
  <?php endforeach; ?>

  </section>