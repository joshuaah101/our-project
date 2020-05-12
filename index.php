<?php
    require 'init.php';
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="./asset/css/styles.css" rel="stylesheet" />
        <link href="./asset/css/eed.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-success">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-12">
                                <div class="card shadow-lg card-login border-0 bg-success rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-bold my-3">Admin Login</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post" id="user-login">
                                            <div class="form-group"><label class="mb-2" for="inputUsername">Username:</label><input class="form-control form-control-sm py-2" id="inputUsername" type="text" placeholder="Enter Username" name="username" required /></div>
                                            <div class="form-group"><label class="mb-2" for="inputPassword">Password:</label><input class="form-control form-control-sm py-2" id="inputPassword" name="password" type="password" placeholder="Enter password" required /></div>
                                            <!-- <div class="form-group">
                                                <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                                            </div> -->
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.html">Forgot Password?</a><button class="btn btn-warning" type="submit">Login</button></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-12 col-md-4 notify">
                                <!-- notification appears here -->
                            </div>
                        </div>
                    </div>
                </main>

               
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"> THE FEDERAL POLYTECHNIC ILARO, &copy; 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="./asset/js/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./asset/js/scripts.js"></script>
        <script src="./asset/js/eed.js"></script>
        <script src="./asset/js/eed.js"></script>
    </body>
</html>
