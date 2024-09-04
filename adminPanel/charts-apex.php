<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Apexcharts"]; ?> | Dason - Admin & Dashboard Template</title>

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
                $title = "Apexcharts";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->


                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Line with Data Labels</h4>
                            </div>
                            <div class="card-body">

                                <div id="line_chart_datalabel" data-colors='["#1c84ee", "#34c38f"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Dashed Line</h4>
                            </div>
                            <div class="card-body">

                                <div id="line_chart_dashed" data-colors='["#1c84ee", "#ef6767", "#34c38f"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Spline Area</h4>
                            </div>
                            <div class="card-body">
                                <div id="spline_area" data-colors='["#1c84ee", "#34c38f"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Column Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="column_chart" data-colors='["#34c38f", "#1c84ee", "#ef6767"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Column with Data Labels</h4>
                            </div>
                            <div class="card-body">
                                <div id="column_chart_datalabel" data-colors='["#1c84ee"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Bar Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="bar_chart" data-colors='["#34c38f"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Line, Column & Area Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="mixed_chart" data-colors='["#ef6767", "#1c84ee", "#34c38f"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Radial Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="radial_chart" data-colors='["#1c84ee", "#34c38f", "#ef6767", "#ffcc5a"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                        <!--end card-->

                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Pie Chart</h4>
                            </div>
                            <div class="card-body">

                                <div id="pie_chart" data-colors='["#34c38f", "#1c84ee", "#ef6767", "#16daf1", "#ffcc5a"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Donut Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="donut_chart" data-colors='["#34c38f", "#1c84ee", "#ef6767", "#16daf1", "#ffcc5a"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
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
<!-- apexcharts js -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- apexcharts init -->
<script src="assets/js/pages/apexcharts.init.js"></script>

</body>

</html>