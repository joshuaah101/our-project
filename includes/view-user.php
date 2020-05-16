<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><i class="fas fa-eye"></i> View User</h1>
            <ol class="breadcrumb mb-4 mt-3">
                <li class="breadcrumb-item active"><i class="card-body text-center"><i class="fas fa-eye"></i> View user</i></li>
            </ol>
                <div class="card mb-4">
                <div class="card-header"><i class="fas fa-users mr-1"></i>All users</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>User-Id</th>
                                    <th>Full Name</th>
                                    <th>Gender</th>
                                    <th>Position</th>
                                    <th>Department</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>User-Id</th>
                                    <th>Full Name</th>
                                    <th>Gender</th>
                                    <th>Position</th>
                                    <th>Department</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php 
                                $query = $eed->customQuery("SELECT * FROM instructor ORDER BY surname ASC");
                                $run = $query->fetchAll(PDO::FETCH_OBJ);
                                foreach($run as $ins):
                                ?>
                                <tr>
                                    <td><?php echo $ins->uid; ?></td>
                                    <td><?php echo $ins->surname." ".$ins->firstname." ".substr($ins->midname,0,1)."."; ?></td>
                                    <td><?php echo $ins->gender; ?></td>
                                    <td><?php echo $ins->position; ?></td>
                                    <td><?php echo $ins->department; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
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