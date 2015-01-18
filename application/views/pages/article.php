<h2 class="icon fa-file-text-o"><?php echo $news_title ?></h2>
<article>
        <header>
            <span class="date"><?php echo date("F d", strtotime($news['date_created'])) ?></span>
            <h3><?php echo $news['title'] ?></h3>
        </header>
        <p><?php echo $news['text'] ?></p>
        <?php echo anchor(base_url('news'), 'Back to News'); ?>
</article>