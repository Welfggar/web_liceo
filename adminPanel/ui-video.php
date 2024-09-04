<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Video"]; ?> | Dason - Admin & Dashboard Template</title>

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
                $maintitle = "Components";
                $title = "Video";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ratio video 16:9</h4>
                                <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <!-- 16:9 aspect ratio -->
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/1y_kfWUCFDQ" title="YouTube video" allowfullscreen></iframe>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ratio video 21:9</h4>
                                <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <!-- 21:9 aspect ratio -->
                                <div class="ratio ratio-21x9">
                                    <iframe src="https://www.youtube.com/embed/1y_kfWUCFDQ" title="YouTube video" allowfullscreen></iframe>
                                </div>

                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                </div> <!-- end row -->

                <div class="row">

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ratio video 4:3</h4>
                                <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <!-- 4:3 aspect ratio -->
                                <div class="ratio ratio-4x3">
                                    <iframe src="https://www.youtube.com/embed/1y_kfWUCFDQ" title="YouTube video" allowfullscreen></iframe>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ratio video 1:1</h4>
                                <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <!-- 1:1 aspect ratio -->
                                <div class="ratio ratio-1x1">
                                    <iframe src="https://www.youtube.com/embed/1y_kfWUCFDQ" title="YouTube video" allowfullscreen></iframe>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
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


</body>

</html>