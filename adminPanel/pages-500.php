<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Error_500"]; ?> | Dason - Admin & Dashboard Template</title>

    <?php include 'layouts/head.php'; ?>
    <!-- swiper css -->
    <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">

    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<div class="my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mb-5 pt-5">
                    <h1 class="error-title mt-5"><span>500!</span></h1>
                    <h4 class="text-uppercase mt-5">INTERNAL SERVER ERROR</h4>
                    <p class="font-size-15 mx-auto text-muted w-50 mt-4">It will be as simple as Occidental in fact, it will Occidental to an English person</p>
                    <div class="mt-5 text-center">
                        <a class="btn btn-primary waves-effect waves-light" href="index.php">Back to Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
</div>
<!-- end content -->

<?php include 'layouts/vendor-scripts.php'; ?>
<!-- swiper js -->
<script src="assets/libs/swiper/swiper-bundle.min.js"></script>
<!-- Plugins js-->
<script src="assets/libs/jquery-countdown/jquery.countdown.min.js"></script>

<!-- Countdown js -->
<script src="assets/js/pages/coming-soon.init.js"></script>

</body>

</html>