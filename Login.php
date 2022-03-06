<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>login page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
    <div class="container vh-100 ">
        <div class="row justify-content-center h-100">
            <div class="card w-25 my-auto">
                <div class="card-header text-center text-muted">
                    <h2>Login Form</h2>
                </div>
                <div class="card-body">
                    <form action="Handle.php" method="POST">
                        <div class="form-group">
                            <label for="email">Username</label>
                            <input type="text" id="Username" class="form-control" name="Username" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="Password" class="form-control" name="Password" /><br>
                        </div>

                        <input type="submit" id="#submit" value="submit" class="submit-btn bg-light">
                    </form>
                    <?php
    
                    if (isset($_GET['error']) && isset($_SESSION["error"])) { $msg = $_SESSION["error"] ?>
                    <span style="color: red" id="err"><?php echo $msg; ?></span>
                    <?php } ?>
                    <script>
                    document.querySelector('#Username').addEventListener('click', () => {
                        document.querySelector('#err').innerHTML = " "
                    })
                    </script>
                </div>
                <div class="card-footer text-right">
                    <small>&copy; #MODAH </small>
                </div>
            </div>
        </div>
    </div>
</body>
<footer style="background-color:#aa0766de !important;">
    <div class="container">
        <div class="copy text-center">
            IUT @ 2021 E - Learning platform
        </div>
    </div>
</footer>

</html>

<?php
session_unset();
?>