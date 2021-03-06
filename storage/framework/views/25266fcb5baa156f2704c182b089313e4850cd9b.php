
<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">

    <!-- Favicon icon -->

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('images/favicon.png')); ?>">

    <title>aosk</title>

    <!-- Bootstrap Core CSS -->

        <link href="<?php echo e(asset('plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom CSS -->

<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <!-- You can change the theme colors from here -->

    <link href="<?php echo e(asset('css/colors/blue.css')); ?>" id="theme" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->

</head>



<body class="fix-header card-no-border">

    <!-- ============================================================== -->

    <!-- Preloader - style you can find in spinners.css -->

    <!-- ============================================================== -->

    <div class="preloader">

        <svg class="circular" viewBox="25 25 50 50">

            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>

    </div>

    <!-- ============================================================== -->

    <!-- Main wrapper - style you can find in pages.scss -->

    <!-- ============================================================== -->

    <div id="main-wrapper">

        <!-- ============================================================== -->

        <!-- Topbar header - style you can find in pages.scss -->

        <!-- ============================================================== -->

        <header class="topbar">

            <nav class="navbar top-navbar navbar-expand-md navbar-light">

                <!-- ============================================================== -->

                <!-- Logo -->

                <!-- ============================================================== -->

                <div class="navbar-header">

                    <a class="navbar-brand" href="index.html">

                        <!-- Logo icon --><b>

                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->

                            <!-- Dark Logo icon -->

                            <img src="<?php echo e(asset('images/logo-icon.png')); ?>" alt="homepage" class="dark-logo" />

                            <!-- Light Logo icon -->

                            <img src="<?php echo e(asset('images/logo-light-icon.png')); ?>" alt="homepage" class="light-logo" />

                        </b>

                        <!--End Logo icon -->

                        <!-- Logo text --><span>

                         <!-- dark Logo text -->

                         <img src="<?php echo e(asset('images/logo-text.png')); ?>" alt="homepage" class="dark-logo" />

                         <!-- Light Logo text -->    

                          <img src="<?php echo e(asset('images/logo-light-text.png')); ?>" class="light-logo" alt="homepage" /></span> </a>

                </div>

                <!-- ============================================================== -->

                <!-- End Logo -->

                <!-- ============================================================== -->

                <div class="navbar-collapse">

                    <!-- ============================================================== -->

                    <!-- toggle and nav items -->

                    <!-- ============================================================== -->

                    <ul class="navbar-nav mr-auto mt-md-0">

                        <!-- This is  -->

                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>

                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>

                    </ul>


                </div>

            </nav>

        </header>

        <!-- ============================================================== -->

        <!-- End Topbar header -->

        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- Left Sidebar - style you can find in sidebar.scss  -->

        <!-- ============================================================== -->

        <aside class="left-sidebar">

            <!-- Sidebar scroll-->

            <div class="scroll-sidebar">

                <!-- User profile -->

                <div class="user-profile">

                    <!-- User profile image -->

                    <div class="profile-img"> <img src="<?php echo e(asset('images/users/profile.png')); ?>" alt="user" />

                        <!-- this is blinking heartbit-->

                        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>

                    </div>

                    <!-- User profile text-->

                    <div class="profile-text">

                        <h5>Markarn Doe</h5>

                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>

                        <a href="app-email.html" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>

                        <a href="pages-login.html" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>

                        <div class="dropdown-menu animated flipInY">

                            <!-- text-->

                            <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>

                            <!-- text-->

                            <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>

                            <!-- text-->

                            <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>

                            <!-- text-->

                            <div class="dropdown-divider"></div>

                            <!-- text-->

                            <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>

                            <!-- text-->

                            <div class="dropdown-divider"></div>

                            <!-- text-->

                            <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>

                            <!-- text-->

                        </div>

                    </div>

                </div>

                <!-- End User profile text-->

                <!-- Sidebar navigation-->

                <nav class="sidebar-nav">

                    <ul id="sidebarnav">

                        <li class="nav-devider"></li>

                        <li class="nav-small-cap">Guru</li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Data </span></a>

                            <ul aria-expanded="false" class="collapse">

                                <li><a href="<?php echo e(route('teacher.create')); ?>">Input </a></li>

                            </ul>

                        </li>

                        <li class="nav-small-cap">Siswa</li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Data </span></a>

                            <ul aria-expanded="false" class="collapse">

                                <li><a href="<?php echo e(route('student.create')); ?>">Input </a></li>

                            </ul>

                        </li>

                    </ul>

                </nav>

                <!-- End Sidebar navigation -->

            </div>

            <!-- End Sidebar scroll-->

        </aside>

        <!-- ============================================================== -->

        <!-- End Left Sidebar - style you can find in sidebar.scss  -->

        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- Page wrapper  -->

        <!-- ============================================================== -->

        <?php echo $__env->yieldContent('content'); ?>

        <!-- ============================================================== -->

        <!-- End Page wrapper  -->

        <!-- ============================================================== -->

    </div>

    <!-- ============================================================== -->

    <!-- End Wrapper -->

    <!-- ============================================================== -->

    <!-- ============================================================== -->

    <!-- All Jquery -->

    <!-- ============================================================== -->

   <script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>

    <!-- Bootstrap tether Core JavaScript -->

    <script src="<?php echo e(asset('plugins/bootstrap/js/popper.min.js')); ?>"></script>



    <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>

    <!-- slimscrollbar scrollbar JavaScript -->

    <script src="<?php echo e(asset('js/jquery.slimscroll.js')); ?>"></script>

    <!--Wave Effects -->

    <script src="<?php echo e(asset('js/waves.js')); ?>"></script>

    <!--Menu sidebar -->

    <script src="<?php echo e(asset('js/sidebarmenu.js')); ?>"></script>

    <!--stickey kit -->

     <script src="<?php echo e(asset('plugins/sticky-kit-master/dist/sticky-kit.min.js')); ?>"></script>

    <script src="<?php echo e(asset('plugins/sparkline/jquery.sparkline.min.js')); ?>"></script>

    <!--Custom JavaScript -->

    <script src="<?php echo e(asset('js/custom.min.js')); ?>"></script>

    <!-- ============================================================== -->

    <!-- Style switcher -->

    <!-- ============================================================== -->

    <script src="<?php echo e(asset('plugins/styleswitcher/jQuery.style.switcher.js')); ?>"></script>

    

</body>



</html>

<?php /**PATH /home/user1/Unduhan/LaravelPert4/resources/views/teacher/_parsial/_master.blade.php ENDPATH**/ ?>