<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4"><i class="fas fa-cogs"></i> Manage Instructor</h4>
            <ol class="breadcrumb mb-4 mt-3">
                <li class="breadcrumb-item active"><a href="?manage-instructor=add" class="text-center btn btn-success text-white"><i class="fas fa-plus-square"></i> Add an instructor</a></li>
                <li class="breadcrumb-item"><a href="?manage-instructor=modify" class="text-center btn btn-warning text-success"><i class="fas fa-edit"></i> Modify an instructor</a></li>
            </ol>
         
            <?php 
                if(isset($_GET['manage-instructor'])){
                    $action = $_GET['manage-instructor'];
                    if($action == 'add'){
                        include 'add-instructor.php';
                    }if($action == 'modify'){
                        include 'modify-instructor.php';
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