<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ARPL - Portal</title>
    <meta name="description" content="ARPL - Portal">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/scss/style.css">
    <link href="<?php echo ROOT_URL; ?>assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">
<!--                <img src="--><?php //echo ROOT_URL; ?><!--images/logo.pn" alt="">-->
                ARPL</a>
            <!--            <a class="navbar-brand hidden" href="-->
            <?php //echo ROOT_URL; ?><!--"><img src="images/logo.png" alt="Logo"></a>-->
        </div>

        <?php if (isset($_SESSION['is_logged_in'])) : ?>
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <?php if (isset($_SESSION['user_data']['admin'])) : ?>
                        <?php if ($_SESSION['user_data']['admin'] == 'zx2cv') : ?>
                            <h3 class="menu-title">Welcome Admin</h3><!-- /.menu-title -->
                            <li class="active">
                                <a href="<?php echo ROOT_URL; ?>Admin/registered"> <i class="menu-icon fa fa-bars"></i>Registered
                                    Admin</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo ROOT_URL; ?>Admin/register"> <i
                                            class="menu-icon fa fa-dashboard"></i>Add
                                    Admin</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo ROOT_URL; ?>Admin/"> <i class="menu-icon fa fa-edit"></i>View
                                    Teachers</a>
                            </li>

                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['user_data']['teacher'])) : ?>
                        <?php if ($_SESSION['user_data']['teacher'] == 'teacher') : ?>
                            <h3 class="menu-title">Welcome</h3><!-- /.menu-title -->
                            <li class="active">
                                <a href="<?php echo ROOT_URL; ?>Teacher/"> <i class="menu-icon fa fa-bars"></i>Classrooms
                                    List</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo ROOT_URL; ?>Teacher/addClassroom"> <i
                                            class="menu-icon fa fa-edit"></i>Add
                                    Classroom</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo ROOT_URL; ?>Teacher/students"> <i class="menu-icon fa fa-bars"></i>Students
                                    List</a>
                            </li>
                            <li class="active">
                                <a href="<?php echo ROOT_URL; ?>Teacher/evaluateStudents"> <i
                                            class="menu-icon fa fa-edit"></i>Evaluate
                                    Students</a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        <?php endif; ?>
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <button id="menuToggle" class="menutoggle pull-left">
                    <i class="fa fa fa-tasks"></i>
                </button>
                <div class="header-left">
                    <!--                    <button class="search-trigger"><i class="fa fa-search"></i></button>-->
                    <!--                    <div class="form-inline">-->
                    <!--                        <form class="search-form">-->
                    <!--                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..."-->
                    <!--                                   aria-label="Search">-->
                    <!--                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>-->
                    <!--                        </form>-->
                    <!--                    </div>-->

                    <!--                    <div class="dropdown for-notification">-->
                    <!--                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"-->
                    <!--                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                    <!--                            <i class="fa fa-bell"></i>-->
                    <!--                            <span class="count bg-danger">5</span>-->
                    <!--                        </button>-->
                    <!--                        <div class="dropdown-menu" aria-labelledby="notification">-->
                    <!--                            <p class="red">You have 3 Notification</p>-->
                    <!--                            <a class="dropdown-item media bg-flat-color-1" href="#">-->
                    <!--                                <i class="fa fa-check"></i>-->
                    <!--                                <p>Final Reporte Uploaded</p>-->
                    <!--                            </a>-->
                    <!--                            <a class="dropdown-item media bg-flat-color-4" href="#">-->
                    <!--                                <i class="fa fa-info"></i>-->
                    <!--                                <p>News Update</p>-->
                    <!--                            </a>-->
                    <!--                            <a class="dropdown-item media bg-flat-color-5" href="#">-->
                    <!--                                <i class="fa fa-warning"></i>-->
                    <!--                                <p>Activity 3 of Project CRM (Done)</p>-->
                    <!--                            </a>-->
                    <!--                        </div>-->
                    <!--                    </div>-->

                    <div class="dropdown for-message">

                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <?php if (isset($_SESSION['is_logged_in'])) : ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo ROOT_URL; ?>images/user.png"
                                 alt="User Avatar">
                        </a>
                    <?php endif; ?>
                    <div class="user-menu dropdown-menu">

                        <!--                        <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>-->
                        <!--                        <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>-->

                        <?php if (isset($_SESSION['is_logged_in'])) : ?>
                            <a class="nav-link" href="<?php echo ROOT_URL; ?>admin/logout"><i
                                        class="fa fa-power -off"></i>Logout</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <?php if (isset($_SESSION['is_logged_in'])) : ?>
                        <h1>Dashboard</h1>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <?php if (isset($_SESSION['is_logged_in'])) : ?>
                        <ol class="breadcrumb text-right">
                            <li class="active">Welcome <?php echo $_SESSION['user_data']['name']; ?></li>
                        </ol>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">

        <div class="row">
            <?php Messages::display(); ?>
            <?php require($view); ?>
        </div>


    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="<?php echo ROOT_URL; ?>assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="<?php echo ROOT_URL; ?>assets/js/plugins.js"></script>
<script src="<?php echo ROOT_URL; ?>assets/js/main.js"></script>


<script src="<?php echo ROOT_URL; ?>assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="<?php echo ROOT_URL; ?>assets/js/dashboard.js"></script>
<script src="<?php echo ROOT_URL; ?>assets/js/widgets.js"></script>
<script src="<?php echo ROOT_URL; ?>assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="<?php echo ROOT_URL; ?>assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="<?php echo ROOT_URL; ?>assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="<?php echo ROOT_URL; ?>assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<script>
    (function ($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>


</body>
</html>