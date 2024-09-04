<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Sparkline"]; ?> | Dason - Admin & Dashboard Template</title>

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
                $maintitle = "Charts";
                $title = "Sparkline";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->


                <div class="row">
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Pie Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="sparkline1" data-colors='["#34c38f", "#1c84ee", "#e9ecef"]' class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Bar Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="sparkline2" data-colors='["#34c38f"]' class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Line Chart</h4>
                            </div>
                            <div class="card-body analytics-info">
                                <div id="sparkline4" data-colors='["#1c84ee"]'></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Composite Bar Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="sparkline3" data-colors='["#1c84ee", "#34c38f"]' class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Line Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="sparkline5" data-colors='["#1c84ee", "rgba(28, 132, 238, 0.3)", "#34c38f", "rgba(52, 195, 143, 0.3)"]' class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="card bg-primary">
                            <div class="card-header bg-transparent">
                                <h4 class="card-title text-white mb-0">Discrete Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="sparkline6" data-colors='["#fff"]' class="text-center"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Bullet Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="sparkline7" data-colors='["#1c84ee", "#ef6767"]' class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Box Plot Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="sparkline8" data-colors='["#34c38f"]' class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Tristate Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="sparkline9" data-colors='["#1c84ee", "#34c38f", "#ef6767"]' class="text-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->



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
<script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- sparkline init -->
<script src="assets/js/pages/sparklines.init.js"></script>

</body>

</html>