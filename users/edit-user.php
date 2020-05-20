<?php
    require './auth.php';
    if($user_tracking_id){
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="FPI Programmers Hub Executive 2019/2020 set" />
        <title>Dashboard - FPI EED Admin</title>
        <link href="../asset/css/eed.css" rel="stylesheet" />
        <link href="../asset/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="admin.php?dashboard">FPI EED</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-success" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar -->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-cogs fa-fw"></i> Options</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="admin.php?dashboard"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a>
                            <a class="nav-link" href="admin.php?view-user"><div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                            View User</a>
                            <a class="nav-link" href="admin.php?manage-user=add"><div class="sb-nav-link-icon"><i class="fas fa-cogs"></i></div>
                            Manage User</a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="layout-static.html">Static Navigation</a><a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                        >Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Login</a><a class="nav-link" href="register.html">Register</a><a class="nav-link" href="password.html">Forgot Password</a></nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                        >Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a></nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                    Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Tables
                            </a>
                            <a class="nav-link" href="logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                    Logout
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo ucfirst($user_tracking_id); ?>
                    </div>
                </nav>
            </div>
    <div id="layoutSidenav_content">
        <main>
        <div class="container-fluid">
            <h5 class="mt-4"><a href="admin.php?manage-user=modify" class="btn btn-danger"><i class="fas fa-chevron-left"></i> Go Back</a></h5>
            <h4><i class="fas fa-edit"></i> Edit User</h4>
            <ol class="breadcrumb mb-4 mt-3">
                <li class="breadcrumb-item active"><i class="fas fa-edit"></i> <i>Edit a user</i></li>
                <!-- <li class="breadcrumb-item"></li> -->
            </ol>
            
<div class="card mb-4">
    <div class="card-body">
        <form action="" method="post" id="update-user">
            <?php 
                if(isset($_GET['edit'])){
                $id = $_GET['edit'];
                $id_check = $eed->customQuery("SELECT * FROM instructor WHERE uid = '{$id}' LIMIT 1");
                $run = $id_check->fetchAll(PDO::FETCH_OBJ);
                foreach($run as $id):
               
        ?>
            <div class="form-row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <input type="text" name="surname" class="form-control form-control-md" value="<?php echo $id->surname; ?>" id="surname" required>
                        <label for="surname" class="small text-success">Update Surname</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <input type="text" name="firstname" class="form-control form-control-md" value="<?php echo $id->firstname; ?>" id="firstname" required>
                        <label for="firstname" class="small text-success">Update First Name</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <input type="text" name="midname" class="form-control form-control-md" value="<?php echo $id->midname; ?>" id="midname" required>
                        <label for="midname" class="small text-success">Update Middle Name</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <select name="gender" class="form-control form-control-md" id="gender" required>
                            <option value="">Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <label for="gender" class="small text-success">Update Gender</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <select name="department" class="form-control form-control-md" id="dept" required>
                            <option value="">Department</option>
                            <?php 
                                $query = $eed->customQuery("SELECT * FROM department ORDER BY department ASC");
                                $run = $query->fetchAll(PDO::FETCH_OBJ);
                                foreach($run as $dp):
                                    $dept = ucwords($dp->department);
                            ?>
                            <option value="<?php echo $dept; ?>"><?php echo $dept; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="dept" class="small text-success">Update Department</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <select name="position" class="form-control form-control-md" id="position" required>
                            <option value="">Position</option>
                            <?php 
                            $pos = $eed->customQuery("SELECT * FROM position ORDER BY position ASC");
                                $run_pos = $pos->fetchAll(PDO::FETCH_OBJ);
                                foreach($run_pos as $post):
                                    $position = ucwords($post->position);
                            ?>
                            <option value="<?php echo $position; ?>"><?php echo $position; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="position" class="small text-success">Update Position</label>
                    </div>
                </div>
               
            <input type="hidden" name="user_id" value="<?php echo $id->uid; ?>">
            </div>
            <?php endforeach; } ?>

            <div class="form-row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <button class="btn btn-success btn-block" id="submit-update-user" type="submit"><i class="fas fa-edit"></i> Update User</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-4 update-user-notify">
            <!-- notification appears here -->
        </div>
    </div>
</div>
</div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">THE FEDERAL POLYTECHNIC ILARO, &copy; <?php echo date("Y"); ?></div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
</div><?php
            }else{
                echo "<script>location.href = '../index.php'</script>";
            }
        ?>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../asset/js/jquery.min.js"></script>
        <script src="../asset/js/eed.js"></script>
        <script src="../asset/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../asset/demo/datatables-demo.js"></script>
    </body>
</html>