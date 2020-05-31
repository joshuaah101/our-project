<div class="card mb-4">
    <?php  
        $ins = $eed->customQuery("SELECT * FROM users WHERE role = '1'");
        $total = $ins->rowCount();
    ?>
    <div class="card-header"><i class="fas fa-edit mr-1"></i>Modify an Admin | Total Admin - <span class="text-success"><?php echo $total ?></span></div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>E-mail</th>
                        <th>Action</th>
                    </tr>
                </thead>
           
                <tbody>
                    <?php 
                    $query = $eed->customQuery("SELECT * FROM users WHERE role = '1' ORDER BY surname ASC");
                    $run = $query->fetchAll(PDO::FETCH_OBJ);
                    foreach($run as $ins):
                    ?>
                    <tr>
                        <td><?php echo $ins->surname." ".$ins->firstname." ".substr($ins->midname,0,1)."."; ?></td>
                        <td><?php echo $ins->username; ?></td>
                        <td><?php echo $ins->gender; ?></td>
                        <td><?php echo $ins->phone; ?></td>
                        <td><?php echo $ins->email; ?></td>
                        <td><a href="edit-admin.php?edit=<?php echo $ins->uid; ?>" class="btn  btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a> <a href="?manage-Admin=modify&delete=<?php echo $ins->uid; ?>" class="btn  btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <?php 
            if(isset($_GET['delete'])){
                $delete_key = $_GET['delete'];
                $delete = $eed->customQuery("DELETE FROM users WHERE uid = '{$delete_key}'");
                if($delete){
                    echo "<script>
                    alert('Admin Deleted Successfully');
                    location.href = '?manage-admin=modify';
                    </script>";
                }
            }
        ?>
    </div>
</div>
