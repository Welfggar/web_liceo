<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Jquery_Knob"]; ?> | Dason - Admin & Dashboard Template</title>

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
                $title = "Jquery Knob";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Examples</h4>
                                <p class="card-title-desc">Nice, downward compatible, touchable, jQuery dial</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="text-center" dir="ltr">
                                            <h5 class="font-size-14 mb-3">Disable display input</h5>
                                            <input class="knob" data-width="150" data-fgcolor="#1c84ee" data-displayinput="false" value="35">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="text-center" dir="ltr">
                                            <h5 class="font-size-14 mb-3">Cursor mode</h5>
                                            <input class="knob" data-width="150" data-cursor="true" data-fgcolor="#34c38f" value="29">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="text-center" dir="ltr">
                                            <h5 class="font-size-14 mb-3">Display previous value</h5>
                                            <input class="knob" data-width="150" data-min="-100" data-fgcolor="#16daf1" data-displayprevious="true" value="44">
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-sm-6">
                                        <div class="text-center" dir="ltr">
                                            <h5 class="font-size-14 mb-3">Angle offset</h5>
                                            <input class="knob" data-width="150" data-angleoffset="90" data-linecap="round" data-fgcolor="#fa5f1c" value="35">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="text-center" dir="ltr">
                                            <h5 class="font-size-14 mb-3"> 5-digit values, step 1000</h5>
                                            <input class="knob" data-width="150" data-min="-15000" data-displayprevious="true" data-max="15000" data-step="1000" value="-11000" data-fgcolor="#ffcc5a">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="text-center" dir="ltr">
                                            <h5 class="font-size-14 mb-3">Angle offset and arc</h5>
                                            <input class="knob" data-width="150" data-cursor="true" data-fgcolor="#ef6767" value="29">
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-sm-6">
                                        <div class="text-center" dir="ltr">
                                            <h5 class="font-size-14 mb-3">Readonly</h5>
                                            <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#e83e8c" value="80" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="text-center" dir="ltr">
                                            <h5 class="font-size-14 mb-3"> Angle offset and arc</h5>
                                            <input class="knob" data-width="150" data-height="150" data-displayPrevious=true data-fgColor="#050505" data-skin="tron" data-cursor=true value="75" data-thickness=".2" data-angleOffset=-125 data-angleArc=250 value="44" />
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
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
<!-- jquery-knob plugin  -->
<script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
<!-- jquery-knob init -->
<script src="assets/js/pages/jquery-knob.init.js"></script>
</body>

</html>