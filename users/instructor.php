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
        <title>Dashboard - FPI EED Instructor</title>
        <link href="../asset/css/styles.css" rel="stylesheet" />
        <link href="../asset/css/eed.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="instructor.php?dashboard">FPI EED - <?php echo $_SESSION['user_role']; ?></a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
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
                            <div class="sb-sidenav-menu-heading">Dashboard</div>
                            <a class="nav-link" href="instructor.php?dashboard"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMaterialsMgt" aria-expanded="false" aria-controls="collapseMaterialsMgt">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Materials Mgt.
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseMaterialsMgt" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="?view-materials"><i class="fas fa-eye"></i>&nbsp; View Materials</a>
                                <a class="nav-link" href="?manage-materials=add"><i class="fas fa-cogs"></i>&nbsp; Manage Mat.</a>
                            </nav>
                            </div>


                            <div class="sb-sidenav-menu-heading">
                            <?php  
                                $user = $eed->customQuery("SELECT * FROM users WHERE username = '{$user_tracking_id}' LIMIT 1");
                                $user = $user->fetchAll(PDO::FETCH_OBJ);
                                foreach($user as $u):
                                    $admin_name = ucfirst($u->surname). " ".ucfirst($u->firstname)." ".substr($u->midname, 0,1).".";
                                    echo $admin_name;
                                    $username = $u->username;
                                    $full_name = ucfirst($u->surname). " ".ucfirst($u->firstname)." ".ucfirst($u->midname);
                                    $email = $u->email;
                                    $gender = $u->gender;
                                    $phone = $u->phone;
                                    $password = $u->password;
                                    $uid = $u->uid;
                                endforeach;
                            ?>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProfile" aria-expanded="false" aria-controls="collapseProfile">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Profile
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseProfile" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="?profile"><i class="fas fa-eye"></i>&nbsp; View Profile</a>
                                <a class="nav-link" href="?change-password"><i class="fas fa-lock"></i>&nbsp; Edit Password</a>
                            </nav>
                            </div>
                            <a class="nav-link" href="logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                    Logout
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small"><?php echo ucfirst($user_tracking_id); ?> Logged in as:</div>
                        <?php echo $_SESSION['user_role']; ?>
                    </div>
                </nav>
            </div>

            <!-- php dashboad includes -->
            <?php 
            if(isset($_GET['dashboard'])){
                include '../includes/dashboard.php';
            }elseif(isset($_GET['manage-materials'])){
                include '../includes/manage-materials.php';
            }elseif(isset($_GET['view-materials'])){
                include '../includes/view-materials.php';
            }elseif(isset($_GET['profile'])){
                include '../includes/instructor-profile.php';
            }elseif(isset($_GET['change-password'])){
                include '../includes/change-password.php';
            }
            ?>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../asset/js/jquery.min.js"></script>
        <script src="../asset/js/scripts.js"></script>
        <script src="../asset/js/eed.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../asset/demo/datatables-demo.js"></script> 

<?php
	}else{
		echo "<script>location.href = '../index.php'</script>";
	}
?>