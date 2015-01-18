<ul class="nav nav-pills nav-stacked">
    <li <?php echo ($this->uri->segment(2) == "dashboard")  ? 'class="active"' : ($this->uri->segment(2) == "") ? 'class="active"' : ''  ?>><a href="<?php echo site_url("members/dashboard") ?>">Dashboard</a></li>
    <li <?php echo ($this->uri->segment(2) == "profile")    ? 'class="active"' : '' ?>><a href="<?php echo site_url("members/profile") ?>">My Profile</a></li>
    <li <?php echo ($this->uri->segment(2) == "labels")     ? 'class="active"' : '' ?>><a href="<?php echo site_url("members/labels") ?>">Labels</a></li>
    <li <?php echo ($this->uri->segment(2) == "artists")    ? 'class="active"' : '' ?>><a href="<?php echo site_url("members/artists") ?>">Artists</a></li>
    <li <?php echo ($this->uri->segment(2) == "promote")    ? 'class="active"' : '' ?>><a href="<?php echo site_url("members/promote") ?>">Promote</a></li>
    <li <?php echo ($this->uri->segment(2) == "messages")   ? 'class="active"' : '' ?>><a href="<?php echo site_url("members/messages") ?>"><span class="badge pull-right">4</span>Messages</a></li>
    <li <?php echo ($this->uri->segment(2) == "support")    ? 'class="active"' : '' ?>><a href="<?php echo site_url("members/support") ?>">Support</a></li>
    <li><a href="<?php echo site_url("auth/logout") ?>">Logout</a></li>
</ul>