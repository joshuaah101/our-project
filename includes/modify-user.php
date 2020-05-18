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
                        <th>Position</th>
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
                        <td><?php echo $ins->position; ?></td>
                        <td><?php echo $ins->department; ?></td>
                        <td><a href="edit-user.php?edit=<?php echo $ins->uid; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a> <a href="?manage-user=modify&delete=<?php echo $ins->uid; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modify-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>