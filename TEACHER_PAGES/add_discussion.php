<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Interface</title>
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
    <div class="header" style="    background-color: #aa0766de !important;">
        <div class="container" style="margin-left: 25px;">
            <div class="row">
                <div class="col-md-4">
                    <!-- Logo -->
                    <div class="logo">
                        <img src="../1290-imgxb.jpg" class="img-responsive"
                            style="background:white; height: 50px;vertical-align: middle;">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-lg-12">
                        </div>
                    </div>
                </div>

                <div class="col-md-6" style="padding-right:0px;float:right;">
                    <div class="navbar navbar-inverse" role="banner">
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
                            <!-- Main menu -->
                            <li class="current"><a href="Teacher_dashboard.php"><i class="fa fa-university"></i>
                                    Dashboard</a></li>


                            <li class="submenu">
                                <a href="#">
                                    <i class="fa fa-pencil"></i> Student
                                    <span class="caret pull-right"></span>
                                </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="">Manage Students</a></li>
                                </ul>
                            </li>



                            <li class="submenu">
                                <a href="#">
                                    <i class="fa fa-file-text"></i> Tutorial
                                    <span class="caret pull-right"></span>
                                </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="add_tutorial.php">Add Tutorial</a></li>
                                    <li><a href="manage_tutorial.php">Manage Tutorials</a></li>
                                </ul>

                            <li class="submenu">
                            <li><a href="news.php"><i class="fa fa-envelope"></i> Newsletter</a></li>
                            </li>


                            <li class="submenu">
                                <a href="#">
                                    <i class="fa fa-group"></i> Discussion
                                    <span class="caret pull-right"></span>
                                </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="add_discussion.php">Add Discussion</a></li>
                                    <li><a href="manage_discussion.php">Manage Discussions</a></li>
                                </ul>
                            </li>


                            <li class="submenu">
                                <a href="#">
                                    <i class="fa fa-wrench"></i> Settings
                                    <span class="caret pull-right"></span>
                                </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href=""></i> Change Password</a></li>
                                </ul>
                            </li>

                            <li><a href="../Login.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-10" style="overflow:hidden">

                    <div class="row">
                        <div class="col-md-10">
                            <div class="content-box-header">
                                <div class="panel-title">Add Discussion</div>
                            </div>

                            <div class="content-box-large box-with-header">
                                <form class="form-horizontal" action="" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Class</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="class" required="true">
                                                <option value="">Select Class</option>
                                                <option value="13">
                                                    Computer Science Department </option>
                                                <option value="15">
                                                    Mechanical Department </option>
                                                <option value="16">
                                                    Civil Department
                                                </option>
                                                <option value="23">
                                                    Electrical Department
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Subject</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="subject" required="true">
                                                <option value="">Select Subject</option>
                                                <option value="5">
                                                    Web programming </option>
                                                <option value="4">
                                                    Operating system </option>
                                                <option value="3">
                                                    System software </option>
                                                <option value="2">
                                                    Networking </option>
                                                <option value="1">
                                                    Microprocessor </option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Title</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="title" class="form-control" required="true"
                                                placeholder="Title" rows="4" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Description</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="description" placeholder="Description"
                                                rows="4" required="true"></textarea>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="form-group">
                                        <div class="col-sm-offset-5 col-sm-10">
                                            <button name="submit" type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                </form>
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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