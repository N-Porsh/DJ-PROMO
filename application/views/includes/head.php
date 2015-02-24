        <title><?php echo $title ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!-- CSS: -->
        <noscript>
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/skel.css" >
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" >
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style-desktop.css" >
        </noscript>

        <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ie/v8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ie/v9.css" /><![endif]-->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-social.css"><!-- Bootstrap social icons -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dataTables.bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom_styles.css">
        <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.css"> -->


        <!-- JS: -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><!-- Latest compiled and minified JavaScript -->
        <script src="<?php echo base_url() ?>assets/js/jquery.dropotron.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/skel.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/skel-layers.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/init.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <!--[if lte IE 8]><script src="<?php echo base_url() ?>assets/css/ie/html5shiv.js"></script><![endif]-->

        <script src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/additional-methods.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/custom/client-side.js"></script>
        <script src="<?php echo base_url() ?>assets/js/noty/packaged/jquery.noty.packaged.js"></script>


        <?php if($this->ion_auth->logged_in()):?>
        <!-- pages -->
        <script src="<?php echo base_url() ?>assets/js/custom/members/profile.js"></script>
        <script src="<?php echo base_url() ?>assets/js/custom/members/labels.js"></script>
        <script src="<?php echo base_url() ?>assets/js/custom/members/artists.js"></script>
        <script src="<?php echo base_url() ?>assets/js/custom/members/promote.js"></script>
        <script src="<?php echo base_url() ?>assets/js/custom/members/support.js"></script>
        <!-- libs -->
        <script src="<?php echo base_url() ?>assets/js/ajaxfileupload.js"></script>
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url() ?>assets/js/custom/dataTables.bootstrap.js"></script>
        <?php endif; ?>