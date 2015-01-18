<nav id="nav">
    <ul>
        <li <?php echo ($this->uri->segment(1) == "")         ? 'class="current_page_item"' : '' ?>><a href="<?php echo base_url() ?>">Home</a></li>
        <li <?php echo ($this->uri->segment(1) == "news")     ? 'class="current_page_item"' : '' ?>><a href="<?php echo base_url() ?>news">News</a></li>
        <li <?php echo ($this->uri->segment(1) == "about_us") ? 'class="current_page_item"' : '' ?>><a href="<?php echo base_url() ?>about_us">About us</a></li>
        <li <?php echo ($this->uri->segment(1) == "contact")  ? 'class="current_page_item"' : '' ?>><a href="<?php echo base_url() ?>contact">Contact</a></li>
    </ul>
</nav>