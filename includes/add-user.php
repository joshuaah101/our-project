<div class="card mb-4">
    <div class="card-header"><i class="fas fa-plus mr-1"></i>Add New User</div>
    <div class="card-body">
        <form action="" method="post" id="add-user">
            <div class="form-row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <input type="text" name="surname" class="form-control form-control-md" placeholder="Surname" id="surname" required>
                        <label for="surname" class="small text-success">Enter Surname</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <input type="text" name="firstname" class="form-control form-control-md" placeholder="First Name" id="firstname" required>
                        <label for="firstname" class="small text-success">Enter First Name</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <input type="text" name="midname" class="form-control form-control-md" placeholder="Middle Name" id="midname" required>
                        <label for="midname" class="small text-success">Enter Middle Name</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <select name="gender" class="form-control form-control-md" id="gender" required>
                            <option value="">Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <label for="gender" class="small text-success">Select Gender</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <select name="department" class="form-control form-control-md" id="department" required>
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
                        <label for="department" class="small text-success">Department</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <select name="vocation" class="form-control form-control-md" id="vocation" required>
                            <option value="">vocation</option>
                            <?php 
                            $pos = $eed->customQuery("SELECT * FROM vocation ORDER BY vocation ASC");
                                $run_pos = $pos->fetchAll(PDO::FETCH_OBJ);
                                foreach($run_pos as $post):
                                    $vocation = ucwords($post->vocation);
                            ?>
                            <option value="<?php echo $vocation; ?>"><?php echo $vocation; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="vocation" class="small text-success">vocation</label>
                    </div>
                </div>
                <?php 
                    $id_prefix = "FPI/EED/INST/";
                 ?>
                <input type="hidden" name="user_id" value="<?php echo $id_prefix.mt_rand(11111111,99999999);  ?>">
            </div>

            <div class="form-row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <button class="btn btn-success btn-block" id="submit-add-user" type="submit"><i class="fas fa-plus"></i> Create User</button>
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