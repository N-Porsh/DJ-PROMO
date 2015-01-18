<!DOCTYPE HTML>
<html>
    <head>
        <?php $this->load->view('includes/head'); ?>
    </head>
    <body class="right-sidebar">



    <!-- Modal -->
    <?php $this->load->view('includes/components/auth_modal'); ?>



    <!-- Header Wrapper -->
    <div id="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="12u">

                    <!-- Header -->
                        <header id="header">
                            <div class="inner">
                                <!-- Logo -->
                                    <h1><a href="<?php echo base_url() ?>" id="logo">DJ-PROMO</a></h1>
                                <!-- Nav -->
                                <?php $this->load->view('includes/components/nav'); ?>
                            </div>
                        </header>

                </div>
            </div>
        </div>
    </div>



    <!-- Main Wrapper -->
    <div id="main-wrapper">
        <div class="wrapper style2">
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="8u">
                            <div id="content">
                                <!-- DYNAMIC CONTENT -->
                                <?php $this->load->view($main_content); ?>
                            </div>
                        </div>
                        <div class="4u">
                            <div id="sidebar">
                                <!-- SIDEBAR -->
                                <?php $this->load->view('includes/sidebar'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer Wrapper -->
    <div id="footer-wrapper">
        <?php $this->load->view('includes/footer'); ?>
    </div>


    </body>
</html>