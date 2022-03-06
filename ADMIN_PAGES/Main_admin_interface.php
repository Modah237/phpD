<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Teacher</title>
    <link href="../css/jquery-ui.css" rel="stylesheet" media="screen">
    <script src="../js/jquery-ui.js.download"></script>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3Zc0uHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="../css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="../css/bootstrap-select.min.css" rel="stylesheet">
    <link href="../css/bootstrap-tags.css" rel="stylesheet">
    <link href="../css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../di.css" rel="stylesheet">
</head>

<body>
    <div class="header" style=" background-color: #aa0766de !important;">
        <div class="container" style="margin-left: 25px;">
            <div class="row">
                <div class="col-md-4">
                    <!-- logo -->
                    <div class="logo">
                        <img src="../1290-imgxb.jpg" class="img-responsive"
                            style="background: white; height: 50px; vertical-align: middle;">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-lg-12">
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="padding-right: 0px; float:right;">
                    <div class="navbar navbar-invers" role="banner">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar content-box" style="display: block;">
                    <ul class="nav">
                        <!-- MAIN MENU--->
                        <li class="current"><a href="Main_admin_interface.php">
                                <i class="fa fa-university"></i>
                                Dashboard</a>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="fa fa-graduation-cap"></i> Teacher
                                <span class="caret pull-right"></span>
                            </a>
                            <ul>
                                <li><a href="Add_Teacher_admin.php">Add Teacher</a></li>
                                <li><a href="manage_teacher_admin.php">Manage Teacher</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="">
                                <i class="fa fa-pencil"></i> Student
                                <span class="caret pull-right"></span>
                            </a>
                            <ul>
                                <li><a href="add_student_admin.php">Add Student</a></li>
                                <li><a href="Manage_Student_admin.php">Manage Students</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="fas fa-book"></i> Class
                                <span class="caret pull-right"></span>
                            </a>
                            <ul>
                                <li><a href="add_Class.php">Add Class</a></li>
                                <li><a href="#">Manage Class</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="fa fa-file-text"></i> Tutorial
                                <span class="caret pull-right"></span>
                            </a>
                            <ul>
                                <li><a href="Tuto.php">Add Tutorial</a></li>
                                <li><a href="manage_tutorial_admin.php">Manage Tutorial</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="fa fa-envelope"></i> Newsletter
                                <span class="caret pull-right"></span>
                            </a>
                            <ul>
                                <li><a href="#">Send Newsletter</a></li>
                                <li><a href="#">Manage Newsletter</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="fa fa-group"></i> Discussion
                                <span class="caret pull-right"></span>
                            </a>
                            <ul>
                                <li><a href="#">Add Discussion</a></li>
                                <li><a href="#">Manage Discussion</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="fa fa-wrench"></i> Settings
                                <span class="caret pull-right"></span>
                            </a>
                            <ul>
                                <li><a href="#">Change Paaword</a></li>
                                <li><a href="#">Configuration</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="../Login.php">
                                <i class="fas fa-sign-out-alt"></i>
                                LOGOUT
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-box-header">
                            <div class="panel-title">
                                Dashboard
                            </div>
                            admin
                        </div>

                        <div class="content-box-large box-with-header">
                            <style>
                            img:hover {
                                opacity: 0.6;
                                filter: alpha(opacity=50);
                            }

                            div.desc {
                                padding: 8px;
                                text-align: center;
                            }
                            </style>

                            <div class="row">
                                <div class="col-md-3"
                                    style="padding-left:50px; padding-right:50px; padding-top:20px;padding-bottom:20px;">
                                    <div class="thumbnail">
                                        <a href="Add_Teacher_admin.php">
                                            <img src="../images/teacher1.png" alt="Teacher">
                                            <div class="desc">Add Teacher</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-3"
                                    style="padding-left:50px; padding-right:50px; padding-top:20px;padding-bottom:20px;">
                                    <div class="thumbnail">
                                        <a href="manage_teacher_admin.php">
                                            <img src="../images/teacher2.png" alt="Teacher">
                                            <div class="desc">View Teacher</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-3"
                                    style="padding-left:50px; padding-right:50px; padding-top:20px;padding-bottom:20px;">
                                    <div class="thumbnail">
                                        <a href="add_student_admin.php">
                                            <img src="../images/student1.png" alt="Student">
                                            <div class="desc">Add Student</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-3"
                                    style="padding-left:50px; padding-right:50px; padding-top:20px;padding-bottom:20px;">
                                    <div class="thumbnail">
                                        <a href="Manage_Student_admin.php">
                                            <img src="../images/student2.png" alt="Student">
                                            <div class="desc">View Student</div>
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div class="row">

                                <div class="col-md-3"
                                    style="padding-left:50px;padding-right:50px;padding-top:20px;padding-bottom:20px;">
                                    <div class="thumbnail">
                                        <a href="add_Class.php">
                                            <img src="../images/class1.png" alt="Class">
                                            <div class="desc">Add Class</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-3"
                                    style="padding-left:50px;padding-right:50px;padding-top:20px;padding-bottom:20px;">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="../images/class2.png" alt="Class">
                                            <div class="desc">View Class</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-3"
                                    style="padding-left:50px;padding-right:50px;padding-top:20px;padding-bottom:20px;">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="../images/subject1.png" alt="Subject">
                                            <div class="desc">Add Subject</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-3"
                                    style="padding-left:50px;padding-right:50px;padding-top:20px;padding-bottom:20px;">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="../images/subject2.png" alt="Subject">
                                            <div class="desc">View Subject</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-3"
                                    style="padding-left:50px;padding-right:50px;padding-top:20px;padding-bottom:20px;">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="../images/tutorial1.png" alt="Tutorial">
                                            <div class="desc">Add Tutorial</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-3"
                                    style="padding-left:50px;padding-right:50px;padding-top:20px;padding-bottom:20px;">
                                    <div class="thumbnail">
                                        <a href="manage_tutorial_admin.php">
                                            <img src="../images/tutorial2.png" alt="Tutorial">
                                            <div class="desc">View Tutorial</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-3"
                                    style="padding-left:50px;padding-right:50px;padding-top:20px;padding-bottom:20px;">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="../images/newsletter1.png" alt="Newsletter">
                                            <div class="desc">Send Newsletter</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-3"
                                    style="padding-left:50px;padding-right:50px;padding-top:20px;padding-bottom:20px;">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="../images/newsletter2.png" alt="Newsletter">
                                            <div class="desc">View Newsletter</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <footer style="background-color:#aa0766de !important;">
        <div class="container">
            <div class="copy text-center">
                IUT @ 2021 E - Learning platform
            </div>
        </div>
    </footer>



    <script src="../js/jquery.js.download"></script>
    <!-- jQuery UI -->
    <script src="../js/jquery-ui.js.download"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js.download"></script>
    <script src="../js/bootstrap-formhelpers.min.js.download"></script>
    <script src="../js/bootstrap-select.min.js.download"></script>


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/jquery.dataTables.min.js.download"></script>
    <script src="../js/dataTables.bootstrap.js.download"></script>

    <script src="../js/custom.js.download"></script>
    <script src="../js/my_script.js.download"></script>

    <script>
    $(document).ready(function() {
        // Select
        $('.selectpicker').selectpicker();
        // Table	
        $('#example').dataTable();
    });
    </script>
</body>

</html>