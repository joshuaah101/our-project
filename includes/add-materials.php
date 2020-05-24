<div class="card mb-4">
    <div class="card-header"><i class="fas fa-plus mr-1"></i>Add New Material</div>
    <div class="card-body">
        <form action="" method="post" id="add-user">
            <div class="form-row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <input type="text" name="topic" class="form-control form-control-md" placeholder="Topic" id="topic" required>
                        <label for="topic" class="small text-success">Enter Topic</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <input type="text" name="att_link" class="form-control form-control-md" placeholder="Attachment Link" id="att_link" required>
                        <label for="att_link" class="small text-success">Enter Attachment Link</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <select name="level" class="form-control form-control-md" id="level" required>
                            <option value="">Level</option>
                            <option value="ND 1">ND 1</option>
                            <option value="ND 2">ND 2</option>
                            <option value="HND 1">HND 1</option>
                            <option value="HND 2">HND 2</option>
                        </select>
                        <label for="level" class="small text-success">Select level</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <select name="department" class="form-control form-control-md" id="department" required>
                            <option value="">Department</option>
                            <?php 
                                $query = $eed->customQuery("SELECT * FROM department");
                                $run = $query->fetchAll(PDO::FETCH_OBJ);
                                foreach($run as $dp):
                                    $dept = ucwords($dp->department);
                            ?>
                            <option value="<?php echo $dept; ?>"><?php echo $dept; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="department" class="small text-success">Department</label>
                    </div>
                </div>

                <?php 
                    $id_prefix = "FPI/EED/MAT/";
                 ?>
                <input type="hidden" name="material_id" value="<?php echo $id_prefix.mt_rand(11111,99999);  ?>">
            </div>

            <div class="form-row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <button class="btn btn-success btn-block" id="submit-add-user" type="submit"><i class="fas fa-plus"></i> Add Material</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-4 add-user-notify">
            <!-- notification appears here -->
        </div>
    </div>
</div>