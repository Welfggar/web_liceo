<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["User_List"]; ?> | Dason - Admin & Dashboard Template</title>

    <?php include 'layouts/head.php'; ?>
    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
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
                $maintitle = "Contacts";
                $title = "User List";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <h5 class="card-title">Contact List <span class="text-muted fw-normal ms-2">(834)</span></h5>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                            <div>
                                                <ul class="nav nav-pills">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="apps-contacts-list.php" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="bx bx-list-ul"></i></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="apps-contacts-grid.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-light"><i class="bx bx-plus me-1"></i> Add New</a>
                                            </div>

                                            <div class="dropdown">
                                                <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="table-responsive mb-4">
                                    <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 50px;">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="checkAll">
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Position</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Tags</th>
                                                <th style="width: 80px; min-width: 80px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                                        <label class="form-check-label" for="contacusercheck1"></label>
                                                    </div>
                                                </th>
                                                <td>
                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle me-2">
                                                    <a href="#" class="text-body">Phyllis Gatlin</a>
                                                </td>
                                                <td>UI/UX Designer</td>
                                                <td>phyllisgatlin@Dason.com</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="#" class="badge badge-soft-primary">Photoshop</a>
                                                        <a href="#" class="badge badge-soft-primary">illustrator</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="contacusercheck2">
                                                        <label class="form-check-label" for="contacusercheck2"></label>
                                                    </div>
                                                </th>
                                                <td>
                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-sm rounded-circle me-2">
                                                    <a href="#" class="text-body">James Nix</a>
                                                </td>
                                                <td>Frontend Developer</td>
                                                <td>jamesnix@Dason.com</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Html</a>
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Css</a>
                                                        <a href="#" class="badge badge-soft-primary font-size-11">2 + more</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="contacusercheck3">
                                                        <label class="form-check-label" for="contacusercheck3"></label>
                                                    </div>
                                                </th>
                                                <td>
                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-sm rounded-circle me-2">
                                                    <a href="#" class="text-body">Darlene Smith</a>
                                                </td>
                                                <td>Backend Developer</td>
                                                <td>darlenesmith@Dason.com</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Php</a>
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Java</a>
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Python</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="contacusercheck4">
                                                        <label class="form-check-label" for="contacusercheck4"></label>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="avatar-sm d-inline-block align-middle me-2">
                                                        <div class="avatar-title bg-soft-primary text-primary font-size-20 m-0 rounded-circle">
                                                            <i class="bx bxs-user-circle"></i>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-body">William Swift</a>
                                                </td>
                                                <td>Full Stack Developer</td>
                                                <td>williamswift@Dason.com</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Ruby</a>
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Php</a>
                                                        <a href="#" class="badge badge-soft-primary font-size-11">2 + more</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="contacusercheck5">
                                                        <label class="form-check-label" for="contacusercheck5"></label>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="avatar-sm d-inline-block align-middle me-2">
                                                        <div class="avatar-title bg-soft-primary text-primary font-size-20 m-0 rounded-circle">
                                                            <i class="bx bxs-user-circle"></i>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-body">Kevin West</a>
                                                </td>
                                                <td>Frontend Developer</td>
                                                <td>kevinwest@Dason.com</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Html</a>
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Css</a>
                                                        <a href="#" class="badge badge-soft-primary font-size-11">2 + more</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="contacusercheck6">
                                                        <label class="form-check-label" for="contacusercheck6"></label>
                                                    </div>
                                                </th>
                                                <td>
                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-sm rounded-circle me-2">
                                                    <a href="#" class="text-body">Tommy Hayes</a>
                                                </td>
                                                <td>UI/UX Designer</td>
                                                <td>tommyhayes@Dason.com</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Photoshop</a>
                                                        <a href="#" class="badge badge-soft-primary font-size-11">illustrator</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="contacusercheck7">
                                                        <label class="form-check-label" for="contacusercheck7"></label>
                                                    </div>
                                                </th>
                                                <td>
                                                    <img src="assets/images/users/avatar-8.jpg" alt="" class="avatar-sm rounded-circle me-2">
                                                    <a href="#" class="text-body">Diana Owens</a>
                                                </td>
                                                <td>Graphic Designer</td>
                                                <td>dianaowens@Dason.com</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Photoshop</a>
                                                        <a href="#" class="badge badge-soft-primary font-size-11">illustrator</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="contacusercheck8">
                                                        <label class="form-check-label" for="contacusercheck8"></label>
                                                    </div>
                                                </th>
                                                <td>
                                                    <img src="assets/images/users/avatar-9.jpg" alt="" class="avatar-sm rounded-circle me-2">
                                                    <a href="#" class="text-body">Paul Sanchez</a>
                                                </td>
                                                <td>Angular Developer</td>
                                                <td>paulsanchez@Dason.com</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Php</a>
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Javascript</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="contacusercheck9">
                                                        <label class="form-check-label" for="contacusercheck9"></label>
                                                    </div>
                                                </th>
                                                <td>
                                                    <img src="assets/images/users/avatar-9.jpg" alt="" class="avatar-sm rounded-circle me-2">
                                                    <a href="#" class="text-body">Peter Dryer</a>
                                                </td>
                                                <td>Web Designer</td>
                                                <td>peterdryer@Dason.com</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Html</a>
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Css</a>
                                                        <a href="#" class="badge badge-soft-primary font-size-11">2 + more</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="contacusercheck10">
                                                        <label class="form-check-label" for="contacusercheck10"></label>
                                                    </div>
                                                </th>
                                                <td>
                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-sm rounded-circle me-2">
                                                    <a href="#" class="text-body">Gerald Moyer</a>
                                                </td>
                                                <td>Backend Developer</td>
                                                <td>geraldmoyer@Dason.com</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Php</a>
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Javascript</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input" id="contacusercheck11">
                                                        <label class="form-check-label" for="contacusercheck11"></label>
                                                    </div>
                                                </th>
                                                <td>
                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle me-2">
                                                    <a href="#" class="text-body">Gail McGuire</a>
                                                </td>
                                                <td>Backend Developer</td>
                                                <td>gailmcGuire@Dason.com</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Php</a>
                                                        <a href="#" class="badge badge-soft-primary font-size-11">Javascript</a>
                                                        <a href="#" class="badge badge-soft-primary font-size-11">2+ more</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- end table -->
                                </div>
                                <!-- end table responsive -->
                            </div>
                        </div>
                    </div>
                </div>



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
<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- init js -->
<script src="assets/js/pages/datatable-pages.init.js"></script>

</body>

</html>