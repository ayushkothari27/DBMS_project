<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>College</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="../favicon.ico">

    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="../assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="../assets/scss/style.css">
    <link href="../assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#">
                            <!-- <img src="images/lo0go.png" alt="Logo"> -->
                            College Admin
                        </a>
                        <!-- <a class="navbar-brand hidden" href="#"><img src="images/logo2.png" alt="Logo"></a> -->
                    </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="../index.php">
                            <i class="menu-icon fa fa-dashboard"></i>Home </a>
                    </li>
                    <h3 class="menu-title">Operations</h3>
                    <!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-plus-square"></i>Add</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li class="active">
                                <i class="fa fa-puzzle-piece"></i>
                                <a href="../add-operation/faculty.php">Faculty</a>
                            </li>
                            <li>
                                <i class="fa fa-id-badge"></i>
                                <a href="../add-operation/student.php">Student</a>
                            </li>
                            <li>
                                <i class="fa fa-bars"></i>
                                <a href="../add-operation/committee.php">Committee</a>
                            </li>
                            <li>
                                <i class="fa fa-share-square-o"></i>
                                <a href="../add-operation/events.php">Events</a>
                            </li>
                            <li>
                                <i class="fa fa-id-card-o"></i>
                                <a href="../add-operation/seminarhall.php">Seminar Hall</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-book"></i>Read</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-puzzle-piece"></i>
                                <a href="../read-operation/faculty.php">Faculty</a>
                            </li>
                            <li>
                                <i class="fa fa-id-badge"></i>
                                <a href="../read-operation/student.php">Student</a>
                            </li>
                            <li>
                                <i class="fa fa-bars"></i>
                                <a href="../read-operation/committee.php">Committee</a>
                            </li>
                            <li>
                                <i class="fa fa-share-square-o"></i>
                                <a href="../read-operation/events.php">Events</a>
                            </li>
                            <li>
                                <i class="fa fa-id-card-o"></i>
                                <a href="../read-operation/seminarhall.php">Seminar Hall</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-pencil"></i>Update</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-puzzle-piece"></i>
                                <a href="../update-operation/faculty.php">Faculty</a>
                            </li>
                            <li>
                                <i class="fa fa-id-badge"></i>
                                <a href="../update-operation/student.php">Student</a>
                            </li>
                            <li>
                                <i class="fa fa-bars"></i>
                                <a href="../update-operation/committee.php">Committee</a>
                            </li>
                            <li>
                                <i class="fa fa-share-square-o"></i>
                                <a href="../update-operation/events.php">Events</a>
                            </li>
                            <li>
                                <i class="fa fa-id-card-o"></i>
                                <a href="../update-operation/seminarhall.php">Seminar Hall</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-trash"></i>Delete</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li>
                                <i class="fa fa-puzzle-piece"></i>
                                <a href="../delete-operation/faculty.php">Faculty</a>
                            </li>
                            <li>
                                <i class="fa fa-id-badge"></i>
                                <a href="../delete-operation/student.php">Student</a>
                            </li>
                            <li>
                                <i class="fa fa-bars"></i>
                                <a href="../delete-operation/committee.php">Committee</a>
                            </li>
                            <li>
                                <i class="fa fa-share-square-o"></i>
                                <a href="../delete-operation/events.php">Events</a>
                            </li>
                            <li>
                                <i class="fa fa-id-card-o"></i>
                                <a href="../delete-operation/seminarhall.php">Seminar Hall</a>
                            </li>
                        </ul>
                    </li>


                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-search"></i>Search</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-puzzle-piece"></i>
                                <a href="#">Faculty</a>
                            </li>
                            <li>
                                <i class="fa fa-id-badge"></i>
                                <a href="#">Student</a>
                            </li>
                            <li>
                                <i class="fa fa-bars"></i>
                                <a href="#">Committee</a>
                            </li>
                            <li>
                                <i class="fa fa-share-square-o"></i>
                                <a href="#">Events</a>
                            </li>
                            <li>
                                <i class="fa fa-id-card-o"></i>
                                <a href="#">Seminar Hall</a>
                            </li>
                        </ul>
                    </li>


                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-line-chart"></i>Charts</a>
                            <ul class="sub-menu children dropdown-menu">
                            <li>
                                    <i class="fa fa-puzzle-piece"></i>
                                    <a href="./faculty.php">Faculty</a>
                                </li>
                                <li>
                                    <i class="fa fa-id-badge"></i>
                                    <a href="./student.php">Student</a>
                                </li>
                                <li>
                                    <i class="fa fa-bars"></i>
                                    <a href="./committee.php">Committee</a>
                                </li>
                                <li>
                                    <i class="fa fa-share-square-o"></i>
                                    <a href="./events.php">Events</a>
                                </li>
                                <li>
                                    <i class="fa fa-id-card-o"></i>
                                    <a href="./seminarhall.php">Seminar Hall</a>
                                </li>
                            </ul>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7 fix">
                    <a id="menuToggle" class="menutoggle pull-left">
                        <i class="fa fa fa-tasks"></i>
                    </a>
                </div>
                <h1 class="top-header">Dwakadas J. Sanghvi College of Engineering</h1>
            </div>
        </header>
        <div style="padding:20px;"></div>
        <div class="row" style="margin:auto;">
            <div class="col-md-3"></div>
            <div class=" col-md-6">
              <div id='myChart'></div>
            </div>
        </div>

    </div>

    <script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>


    <script src="../assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script src="../assets/js/widgets.js"></script>
    <script src="../assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="../assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="../assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="../assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
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
    <script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
		<script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
</body>

</html>
