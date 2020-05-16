<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><i class="fas fa-cogs"></i> Manage User</h1>
            <ol class="breadcrumb mb-4 mt-3">
                <li class="breadcrumb-item active"><a href="?manage-user=add" class="card-body text-center btn btn-sm btn-success"><i class="fas fa-plus-square"></i> Add a user</a></li>
                <li class="breadcrumb-item active"><a href="?manage-user=modify" class="card-body text-center btn btn-sm btn-warning"><i class="fas fa-edit"></i> Modify a user</a></li>
            </ol>
         
            <?php 
                if(isset($_GET['manage-user'])){
                    $action = $_GET['manage-user'];
                    if($action == 'add'){
                        include 'add-user.php';
                    }elseif($action == 'modify'){
                        include 'modify-user.php';
                    }
            }
            ?>
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