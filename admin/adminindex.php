<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
?>
<!--Author: W3layouts
//Author URL: http://w3layouts.com
//License: Creative Commons Attribution 3.0 Unported
//License URL: http://creativecommons.org/licenses/by/3.0/-->
<html lang="en">
<head>
    <title> Admin Panel</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="adminindex.php">Admin Panel</a>
                </h1>
                <span></span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="adminindex.php">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>
				<li>
                    <a href="#homeSubme" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-laptop"></i>
                        Approval & view
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubme">
                        <li>
                            <a href="userapproval.php">User Approval</a>
                        </li>
                        <!--<li>
                            <a href="viewuser.php">View users</a>
                        </li> -->
                    </ul>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-th"></i>
                        Rights for women
						 <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
					 <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="addrights.php">Add Rights</a>
                        </li>
                        <li>
                            <a href="addrights.php">Edit & View </a>
                       
                </li>
				</ul>
				 <li>
                    <a href="#homeSubmen" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-th"></i>
                        Awareness programs 
						 <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
					 <ul class="collapse list-unstyled" id="homeSubmen">
                        <li>
                            <a href="addawarenessprograms.php">Add Awareness programs</a>
                        </li>
                        <li>
                            <a href="addawarenessprograms.php">Edit & View</a>
                       
                </li>
				</ul>
				 <li>
                    <a href="#homeSub" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-th"></i>
                        Lawyers
						 <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
					 <ul class="collapse list-unstyled" id="homeSub">
                        <li>
                            <a href="addlawyers.php">Add Lawyers</a>
                        </li>
                        <li>
                            <a href="addlawyers.php">Edit & View Lawyers</a>
                       
                </li>
				</ul>
				 <li>
                    <a href="viewcases.php">
                        <i class="fas fa-th"></i>
                        New Cases
                    </a>
               </li>  
			    <li>
                    <a href="viewstatus.php" >
                        <i class="far fa-file"></i>
                       View Case status
                        
                    </a>
                    
                </li>         
                <!-- <li>
                    <a href="pricing.html">
                        <i class="fas fa-table"></i>
                        Pricing Tables
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        User
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forgot.html">Forgot password</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="far fa-map"></i>
                        Maps
                    </a>
                </li>-->
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <!-- Search-from -->
                   
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                        <li class="nav-item dropdown">
                           
                            <div class="dropdown-menu top-grid-scroll drop-1"> 
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-3">
                            
                            
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits">John Thomas</h3>
                                        <a href="mailto:info@example.com">johnthomas@gmail.com</a>
                                    </div>
                                </div>
								 <h4>
                                        
                                <a href="changepassword.php" class="dropdown-item mt-3">
                                    <h4>
                                       Change password</h4>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->
           
            <!-- Simple-chart --><!--// Simple-chart -->

            <!--// Bar-Chart -->
           
            <!--// Bar-Chart -->

            <!--// three-grids -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Calender -->
                    <div class="outer-w3-agile col-xl mt-3">
                        <h4 class="tittle-w3-agileits mb-4">Multi range Calender</h4>
                        <div class="multi-select-calender"></div>
                        <div class="box"></div>
                    </div>
                    <!--// Calender -->
                    <!-- Profile -->
                    <div class="outer-w3-agile col-xl mt-3 mx-xl-3 p-xl-0 px-md-5">
                        <div class="header">
                            <div class="text">
                                <img src="images/profile.jpg" class="img-fluid rounded-circle" alt="Responsive image">
                                <h2>John Thomas</h2>
                                <a href="mailto:info@example.com">
                                    <p>Site Administrator</p>
                                </a>
                            </div>
                        </div>
                        <div class="container-flud">
                            <div class="followers row">
                                <div class="f-left col">
                                   
                                        <i class="far fa-comments"></i>
                                    </a>
                                </div>
                                <div class="f-left col border-left border-right">
                                   
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                                <div class="f-left col">
                                   
                                        <i class="far fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <ul class="prof-widgt-content">
                            <li class="menu">
                                <ul>
                                   
                                    <li class="dropdown">
                                        <ul class="icon-navigation">
                                            <li>
                                                <a href="viewcontact.php">Inbox
                                                    <span class="float-right">[09]</span>
                                                </a>
                                            </li>
                                           
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu">
                                <ul>
                                    <li class="button">
                                        <a href="#">
                                            <i class="fas fa-user"></i> Profile</a>
                                    </li>
                                    <li class="dropdown">
                                        <ul class="icon-navigation">
                                            <li>
                                                <a href="changepassword.php">Change your password</a>
                                            </li>
                                           
                                            <li>
                                                <a href="../logout.php">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--// Profile -->
                    <!-- Browser stats --><!--// Browser stats -->
                </div>
            </div>
            <!--// Three-grids -->
            <!-- Countdown --><!--// Countdown -->
            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2022 Women_empowerment . All Rights Reserved 
                    <a href="http://w3layouts.com/"> </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->
    
    <!-- loading-gif Js -->
    <script src="js/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- Graph -->
    <script src="js/SimpleChart.js"></script>
    <script>
        var graphdata4 = {
            linecolor: "Random",
            title: "Thursday",
            values: [{
                    X: "6",
                    Y: 300.00
                },
                {
                    X: "7",
                    Y: 101.98
                },
                {
                    X: "8",
                    Y: 140.00
                },
                {
                    X: "9",
                    Y: 340.00
                },
                {
                    X: "10",
                    Y: 470.25
                },
                {
                    X: "11",
                    Y: 180.56
                },
                {
                    X: "12",
                    Y: 680.57
                },
                {
                    X: "13",
                    Y: 740.00
                },
                {
                    X: "14",
                    Y: 800.89
                },
                {
                    X: "15",
                    Y: 420.57
                },
                {
                    X: "16",
                    Y: 980.24
                },
                {
                    X: "17",
                    Y: 1080.00
                },
                {
                    X: "18",
                    Y: 140.24
                },
                {
                    X: "19",
                    Y: 140.58
                },
                {
                    X: "20",
                    Y: 110.54
                },
                {
                    X: "21",
                    Y: 480.00
                },
                {
                    X: "22",
                    Y: 580.00
                },
                {
                    X: "23",
                    Y: 340.89
                },
                {
                    X: "0",
                    Y: 100.26
                },
                {
                    X: "1",
                    Y: 1480.89
                },
                {
                    X: "2",
                    Y: 1380.87
                },
                {
                    X: "3",
                    Y: 1640.00
                },
                {
                    X: "4",
                    Y: 1700.00
                }
            ]
        };
        $(function () {
            $("#Hybridgraph").SimpleChart({
                ChartType: "Hybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: false,
                data: [graphdata4],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
        });
    </script>
    <!--// Graph -->
    <!-- Bar-chart -->
    <script src="js/rumcaJS.js"></script>
    <script src="js/example.js"></script>
    <!--// Bar-chart -->
    <!-- Calender -->
    <script src="js/moment.min.js"></script>
    <script src="js/pignose.calender.js"></script>
    <script>
        //<![CDATA[
        $(function () {
            $('.calender').pignoseCalender({
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '.');
                }
            });

            $('.multi-select-calender').pignoseCalender({
                multiple: true,
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '~' +
                        (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                        '.');
                }
            });
        });
        //]]>
    </script>
    <!--// Calender -->

    <!-- profile-widget-dropdown js-->
    <script src="js/script.js"></script>
    <!--// profile-widget-dropdown js-->

    <!-- Count-down -->
    <script src="js/simplyCountdown.js"></script>
    <link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
    <script>
        var d = new Date();
        simplyCountdown('simply-countdown-custom', {
            year: d.getFullYear(),
            month: d.getMonth() + 2,
            day: 25
        });
    </script>
    <!--// Count-down -->

    <!-- pie-chart -->
    <script src='js/amcharts.js'></script>
    <script>
        var chart;
        var legend;

        var chartData = [{
                country: "Lithuania",
                value: 260
            },
            {
                country: "Ireland",
                value: 201
            },
            {
                country: "Germany",
                value: 65
            },
            {
                country: "Australia",
                value: 39
            },
            {
                country: "UK",
                value: 19
            },
            {
                country: "Latvia",
                value: 10
            }
        ];

        AmCharts.ready(function () {
            // PIE CHART
            chart = new AmCharts.AmPieChart();
            chart.dataProvider = chartData;
            chart.titleField = "country";
            chart.valueField = "value";
            chart.outlineColor = "";
            chart.outlineAlpha = 0.8;
            chart.outlineThickness = 2;
            // this makes the chart 3D
            chart.depth3D = 20;
            chart.angle = 30;

            // WRITE
            chart.write("chartdiv");
        });
    </script>
    <!--// pie-chart -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>
</html>
<?php
}
else
header('location:../login/login.php');
?>
