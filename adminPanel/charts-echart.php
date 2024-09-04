<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Echarts"]; ?> | Dason - Admin & Dashboard Template</title>

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
                $title = "Echarts";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Line Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="line-chart" data-colors='["#34c38f", "#ccc"]' class="e-charts"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Mix Line-Bar</h4>
                            </div>
                            <div class="card-body">
                                <div id="mix-line-bar" data-colors='["#34c38f", "#1c84ee", "#ef6767"]' class="e-charts"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Doughnut Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="doughnut-chart" data-colors='["#1c84ee", "#ffcc5a", "#ef6767", "#16daf1", "#34c38f"]' class="e-charts"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Pie Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="pie-chart" data-colors='["#ef6767", "#34c38f", "#16daf1", "#ffcc5a", "#1c84ee"]' class="e-charts"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Scatter Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="scatter-chart" data-colors='["#34c38f"]' class="e-charts"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Bubble Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="bubble-chart" data-colors='["rgb(28, 132, 238)", "rgb(143, 148, 255)", "rgba(28, 132, 238, 0.5)", "rgb(52, 195, 143)", "rgb(111, 255, 203)",  "rgb(52, 195, 143, 0.5)"]' class="e-charts"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Candlestick Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="candlestick-chart" data-colors='["#1c84ee", "#34c38f"]' class="e-charts"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Gauge Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="gauge-chart" data-colors='["#34c38f", "#1c84ee", "#ef6767"]' class="e-charts"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
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
<!-- echarts js -->
<script src="assets/libs/echarts/echarts.min.js"></script>
<!-- echarts init -->
<script src="assets/js/pages/echarts.init.js"></script>

</body>

</html>