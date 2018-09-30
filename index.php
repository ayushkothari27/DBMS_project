<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>College</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

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
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Home </a>
                    </li>
                    <h3 class="menu-title">Operations</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus-square"></i>Add</a>
                        <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-puzzle-piece"></i><a href="./add-operation/faculty.html">Faculty</a></li>
                          <li><i class="fa fa-id-badge"></i><a href="./add-operation/student.html">Student</a></li>
                          <li><i class="fa fa-bars"></i><a href="./add-operation/committee.html">Committee</a></li>
                          <li><i class="fa fa-share-square-o"></i><a href="./add-operation/events.html">Events</a></li>
                          <li><i class="fa fa-id-card-o"></i><a href="./add-operation/seminarhall.html">Seminar Hall</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Read</a>
                        <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-puzzle-piece"></i><a href="#">Faculty</a></li>
                          <li><i class="fa fa-id-badge"></i><a href="#">Student</a></li>
                          <li><i class="fa fa-bars"></i><a href="#">Committee</a></li>
                          <li><i class="fa fa-share-square-o"></i><a href="#">Events</a></li>
                          <li><i class="fa fa-id-card-o"></i><a href="#">Seminar Hall</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>Update</a>
                        <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-puzzle-piece"></i><a href="#">Faculty</a></li>
                          <li><i class="fa fa-id-badge"></i><a href="#">Student</a></li>
                          <li><i class="fa fa-bars"></i><a href="#">Committee</a></li>
                          <li><i class="fa fa-share-square-o"></i><a href="#">Events</a></li>
                          <li><i class="fa fa-id-card-o"></i><a href="#">Seminar Hall</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-trash"></i>Delete</a>
                        <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-puzzle-piece"></i><a href="#">Faculty</a></li>
                          <li><i class="fa fa-id-badge"></i><a href="#">Student</a></li>
                          <li><i class="fa fa-bars"></i><a href="#">Committee</a></li>
                          <li><i class="fa fa-share-square-o"></i><a href="#">Events</a></li>
                          <li><i class="fa fa-id-card-o"></i><a href="#">Seminar Hall</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-search"></i>Search</a>
                        <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-puzzle-piece"></i><a href="#">Faculty</a></li>
                          <li><i class="fa fa-id-badge"></i><a href="#">Student</a></li>
                          <li><i class="fa fa-bars"></i><a href="#">Committee</a></li>
                          <li><i class="fa fa-share-square-o"></i><a href="#">Events</a></li>
                          <li><i class="fa fa-id-card-o"></i><a href="#">Seminar Hall</a></li>
                        </ul>
                    </li>


                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-line-chart"></i>Charts</a>

                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

        <div id="right-panel" class="right-panel">
          <header id="header" class="header">

              <div class="header-menu">

                  <div class="col-sm-7">
                      <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                  </div>
              </div>
        </header>
        <!-- <img src="images/college.jpg" style="height:608px;width:100% ;margin-top:-6px"> -->
    
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * from Student";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "id: " .$row["sapid"]. 
        // " <br> Name: " . $row["name"]. 
        // " <br> Address:  " . $row["address"]. 
        // " <br> Phone:  " . $row["mobile"].
        // "<br>gender: ".$row["gender"].
        // "<br>dept: ".$row["dept"].
        // "<br>age: ".$row["age"].
        // "<br>dob: ".$row["dob"]
        // ;
        echo "id: " .$row["sapid"]. 
        " <br> Year of joining: " . $row["year_of_joining"] ;
    }
} else {
    echo "0 results";
}
?>    
    </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>

