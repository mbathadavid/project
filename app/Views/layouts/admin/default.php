<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/minia/layouts/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Apr 2024 13:54:18 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Horizontal Layout | Minia - Minimal Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico">
        
        <!-- twitter-bootstrap-wizard css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/libs/twitter-bootstrap-wizard/prettify.css">

        <!-- plugin css -->
        <link href="<?php echo base_url() ?>assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo base_url() ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-layout="horizontal">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <!-- Header Start -->
            <?php include(APPPATH . 'Views/partials/admin/header.php') ?>
            <!-- end Header -->
    
            <!-- Top Start -->
            <?php include(APPPATH . 'Views/partials/admin/top.php') ?>
            <!-- end Top -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <?php include(APPPATH . 'Views/partials/admin/pagetitle.php') ?>
                        <!-- end page title -->

                        
                        <?php $this->renderSection('content') ?>                        
                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

            
                <!-- start footer -->
                <?php include(APPPATH . 'Views/partials/admin/footer.php') ?>
                <!-- end footer -->
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        
        <!-- Right Sidebar -->
        <?php include(APPPATH . 'Views/partials/admin/rightbar.php') ?>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="<?php echo base_url() ?>assets/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url() ?>assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url() ?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url() ?>assets/libs/node-waves/waves.min.js"></script>
        <script src="<?php echo base_url() ?>assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="<?php echo base_url() ?>assets/libs/pace-js/pace.min.js"></script>

        <!-- apexcharts -->
        <script src="<?php echo base_url() ?>assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Plugins js-->
        <script src="<?php echo base_url() ?>assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo base_url() ?>assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        <!-- dashboard init -->
        <script src="<?php echo base_url() ?>assets/js/pages/dashboard.init.js"></script>

        <!-- twitter-bootstrap-wizard js -->
        <script src="<?php echo base_url() ?>assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="<?php echo base_url() ?>assets/libs/twitter-bootstrap-wizard/prettify.js"></script>

        <!-- form wizard init -->
        <script src="<?php echo base_url() ?>assets/js/pages/form-wizard.init.js"></script>

        <script src="<?php echo base_url() ?>assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/minia/layouts/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Apr 2024 13:54:18 GMT -->
</html>
