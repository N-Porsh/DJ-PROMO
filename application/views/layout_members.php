<!DOCTYPE HTML>
<html>
    <head>
        <?php $this->load->view('includes/head'); ?>
    </head>
    <body class="no-sidebar">

        <!-- Header Wrapper -->
            <div id="header-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="12u">

                            <!-- Header -->
                                <header id="header">
                                <div class="inner">

                                    <!-- Logo -->
                                        <h1><a href="/" id="logo">DJ-PROMO</a></h1>

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
                                <div class="3u">
                                    <?php $this->load->view('includes/components/nav_members'); ?>
                                </div>

                                <div class="6u skel-cell-important">
                                    <div id="content">
                                        <!-- Content -->
                                        <?php $this->load->view($main_content); ?>

                                    </div>
                                </div>

                                <div class="3u skel-cell-important">
                                    <div id="content">
                                        <div class="box feature1">

                                            <?php $this->load->view('includes/components/members_sidebar'); ?>

                                        </div>

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