<div class="card mb-4">
    <div class="card-header"><i class="fas fa-edit mr-1"></i>Modify a user</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>User-Id</th>
                        <th>Full Name</th>
                        <th>Gender</th>
                        <th>Vocation</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
           
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
                        <td><?php echo $ins->vocation; ?></td>
                        <td><?php echo $ins->department; ?></td>
                        <td><a href="edit-user.php?edit=<?php echo $ins->uid; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a> <a href="?manage-user=modify&delete=<?php echo $ins->uid; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <?php 
            if(isset($_GET['delete'])){
                $delete_key = $_GET['delete'];
                $delete = $eed->customQuery("DELETE FROM instructor WHERE uid = '{$delete_key}'");
                if($delete){
                    echo "<script>
                    alert('User Deleted Successfully');
                    location.href = 'admin.php?manage-user=modify';
                    </script>";
                }
            }
        ?>
    </div>
</div>
