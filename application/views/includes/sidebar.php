<!-- Sidebar -->
    <section>
    <?php if(!$this->ion_auth->logged_in()): ?>
            <a data-toggle="modal" data-target="#SignInOrReg" class="button alt icon fa-sign-in">Sign in / Register</a>
        <?php else: ?>
            <a href="<?php echo site_url('members') ?>" class="button alt"><div class="logged_status"></div><!-- <img src="../assets/images/log_status.png" alt=""> --> Dashboard </a>
    <?php endif; ?>
    </section>
    <section>
        <header class="major">

            <h2 class="icon fa-file-text-o">News</h2>
        </header>
        <p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
        Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
        Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi
        consequat etiam.</p>
        <footer>
            <a href="#" class="button icon fa-info-circle">Find out more</a>
        </footer>
    </section>

    <section>
        <header class="major">
            <h2 class="icon fa-file-text-o">popular</h2>
        </header>
        <ul class="style2">
            <li><a href="#">Amet turpis, feugiat et sit amet</a></li>
            <li><a href="#">Ornare in hendrerit in lectus</a></li>
            <li><a href="#">Semper mod quis eget mi dolore</a></li>
            <li><a href="#">Quam turpis feugiat sit dolor</a></li>
            <li><a href="#">Amet ornare in hendrerit in lectus</a></li>
            <li><a href="#">Semper mod quisturpis nisi</a></li>
            <li><a href="#">Consequat etiam lorem phasellus</a></li>
            <li><a href="#">Amet turpis, feugiat et sit amet</a></li>
            <li><a href="#">Semper mod quisturpis nisi</a></li>
        </ul>
        <footer>
            <a href="#" class="button icon fa-info-circle">Find out more</a>
        </footer>
    </section>