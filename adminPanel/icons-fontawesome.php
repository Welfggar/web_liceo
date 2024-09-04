<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Font_Awesome_5"]; ?> | Dason - Admin & Dashboard Template</title>

    <?php include 'layouts/head.php'; ?>

    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <?php
                $maintitle = "Icons";
                $title = "Font Awesome 5";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Solid</h4>
                                <p class="card-title-desc">Use <code>&lt;i class="fas fa-ad"&gt;&lt;/i&gt;</code> <span class="badge bg-success">v 5.13.0</span>.</p>
                            </div>
                            <div class="card-body">
                                <div class="row icon-demo-content" id="solid">
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Regular</h4>
                                <p class="card-title-desc">Use <code>&lt;i class="far fa-address-book"&gt;&lt;/i&gt;</code> <span class="badge bg-success">v 5.13.0</span>.</p>
                            </div>
                            <div class="card-body">
                                <div class="row icon-demo-content" id="regular">
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Brands</h4>
                                <p class="card-title-desc">Use <code>&lt;i class="fab fa-500px"&gt;&lt;/i&gt;</code> <span class="badge bg-success">v 5.13.0</span>.</p>
                            </div>
                            <div class="card-body">
                                <div class="row icon-demo-content" id="brand">
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div> <!-- end row -->




            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php include 'layouts/right-sidebar.php'; ?>

<?php include 'layouts/vendor-scripts.php'; ?>
<!-- fontawesome icons init -->
<script src="assets/js/pages/fontawesome.init.js"></script>

</body>

</html>