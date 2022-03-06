<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD STUDENT</title>
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
                    <!----LOGO---->
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
                <div class="col-md-6" style="padding-right: 0px; float: right;">
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
                            <!-- TEACHER SUB MENU -->
                            <ul>
                                <li><a href="Add_Teacher_admin.php">Add Teacher</a></li>
                                <li><a href="manage_teacher_admin.php">Manage Teacher</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
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
                                <li><a href="#">Change Password</a></li>
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
            <div class="col-md-10" style="overflow: hidden;">
                <div class="row">
                    <div class="col-md-10">
                        <div class="panel-title">Add Student</div>
                    </div>
                    <div class="content-box-large box-with-header">
                        <form class="form-horizontal" id="formid" action="FormatedData.php" method="POST"
                            enctype="multipart/form-data">
                            <input type="hidden" id="action" name="custId" value="Students">
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">NAME</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="name" required="true"
                                        placeholder="Name" />
                                </div>
                                <input type="hidden" id="action" name="action" value="Student">
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Phone</label>
                                <div class="col-md-6">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone" rows="3" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Email</label>
                                <div class="col-md-6">
                                    <input type="text" name="email" class="form-control" required="true"
                                        placeholder="Email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Passsword</label>
                                <div class="col-md-6">
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        required="true" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Address</label>
                                <div class="col-md-6">
                                    <input type="text" name="address" class="form-control" placeholder="Address"
                                        rows="3" />
                                </div>
                            </div>
                            <div class="form-group" id="subject">
                                <label for="title" class="col-md-2 control-label">Subjects</label>
                                <div class="col-md-10">
                                    <div class="col-md-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" onchange="check_subject(this)">All
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="Subjects[]" value="5">Web programming
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="Subjects[]subject[]" value="4">Operating
                                                system
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="Subjects[]" value="3">System software
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="Subjects[]" value="2">Networking
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="Subjects[]" value="1">Microprocessor
                                            </label>
                                        </div>
                                        <div class="form-group" id="class">
                                            <label class="col-md-2 control-label">Class</label>
                                            <div class="col-md-10">
                                                <select class="selectpicker" name="Classes">
                                                    <option> SELECT CLASS</option>
                                                    <option value="Mechanical Department">Mechanical Department
                                                    </option>
                                                    <option value="Civil Department">Civil Department </option>
                                                    <option value="Computer Science">Computer Science Department
                                                    </option>
                                                    <option value="Electrical">Eletrical Department </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Login Status</label>
                                            <div class="col-sm-10">
                                                <select class="selectpicket" name="status">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <div class="col-sm-offset-5 col-sm-10">
                                                <button onclick="check()" ; id="submit" type="submit"
                                                    class="btn btn-primary">ADD</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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