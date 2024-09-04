<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Leaflet_Maps"]; ?> | Dason - Admin & Dashboard Template</title>

    <?php include 'layouts/head.php'; ?>
    <!-- leaflet Css -->
    <link href="assets/libs/leaflet/leaflet.css" rel="stylesheet" type="text/css" />
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
                $maintitle = "Maps";
                $title = "Leaflet Maps";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Example</h4>
                            </div>
                            <div class="card-body">
                                <div id="leaflet-map" class="leaflet-map"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Markers, circles and polygons</h4>
                            </div>
                            <div class="card-body">
                                <div id="leaflet-map-marker" class="leaflet-map"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Working with popups</h4>
                            </div>
                            <div class="card-body">
                                <div id="leaflet-map-popup" class="leaflet-map"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Markers with Custom Icons</h4>
                            </div>
                            <div class="card-body">
                                <div id="leaflet-map-custom-icons" class="leaflet-map"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Interactive Choropleth Map</h4>
                            </div>
                            <div class="card-body">
                                <div id="leaflet-map-interactive-map" class="leaflet-map"></div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Layer Groups and Layers Control</h4>
                            </div>
                            <div class="card-body">
                                <div id="leaflet-map-group-control" class="leaflet-map"></div>
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
<!-- leaflet plugin -->
<script src="assets/libs/leaflet/leaflet.js"></script>

<!-- leaflet map.init -->
<script src="assets/js/pages/leaflet-us-states.js"></script>
<script src="assets/js/pages/leaflet-map.init.js"></script>

</body>

</html>