<div class="card mb-4">
    <div class="card-header"><i class="fas fa-plus mr-1"></i>Add New Admin</div>
    <div class="card-body">
        <form action="" method="post" id="add-user">
            <div class="form-row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <input type="text" name="surname" class="form-control form-control-sm" placeholder="Surname" id="surname" required>
                        <label for="surname" class="small text-success">Enter Surname</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <input type="text" name="firstname" class="form-control form-control-sm" placeholder="First Name" id="firstname" required>
                        <label for="firstname" class="small text-success">Enter First Name</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <input type="text" name="midname" class="form-control form-control-sm" placeholder="Middle Name" id="midname" required>
                        <label for="midname" class="small text-success">Enter Middle Name</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <select name="gender" class="form-control form-control-sm" id="gender" required>
                            <option value="">Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <label for="gender" class="small text-success">Select Gender</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-sm" placeholder="Eg. something@example.com" id="email" required>
                        <label for="email" class="small text-success">E-mail</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-sm" placeholder="Username" id="username" required>
                        <label for="username" class="small text-success">Username</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-sm" placeholder="Password" id="password" required>
                        <label for="password" class="small text-success">Password</label>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <input type="phone" name="phone" class="form-control form-control-sm" placeholder="Phone number.." id="phone" required>
                        <label for="phone" class="small text-success">Phone</label>
                    </div>
                </div>

                <input type="hidden" name="role" value="1">

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <select name="vocation" class="form-control form-control-sm" id="vocation">
                            <option selected="">vocation</option>
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
                    $id_prefix = "FPI/EED/ADMIN/";
                 ?>
                <input type="hidden" name="uid" value="<?php echo $id_prefix.mt_rand(11111111,99999999);  ?>">
            </div>

            <div class="form-row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <button class="btn btn-success btn-sm btn-block" id="submit-add-user" type="submit"><i class="fas fa-plus"></i> Add Admin</button>
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