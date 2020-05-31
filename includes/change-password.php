<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h3 class="mt-4"><i class="fas fa-eye"></i> <?php echo $admin_name; ?></h3>
            <ol class="breadcrumb mb-4 mt-3">
                <li class="breadcrumb-item active"><i class="card-body text-center"><i class="fas fa-eye"></i> Profile - <?php echo ucfirst($username); ?></i></li>
            </ol>
                <form action="" method="post" id="change-password-form">
                <div class="card mb-4">
                    <div class="card-header">Change Password</div>
                <div class="card-body">
                	<div class="table-responsive">
                		<table class=" table-sm">
                			<tbody>
                				<tr>
                                    <td><label for="current_password">Current Password:</label></td>
                                    <td><input type="password" name="current_password" placeholder="Current Password" id="current_password" class="form-control" required></td>
                                </tr>
                                <tr>
                                    <td><label for="new_password">New Password:</label></td>
                                    <td><input type="password" name="new_password" placeholder="New Password" class="form-control" id="new_password" required></td>
                                </tr>
                                <tr>
                                    <td><label for="confirm_password">Confirm Password:</label></td>
                                    <td><input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control" required id="confirm_password">
                                        <input type="hidden" name="uid" value="<?php echo $uid; ?>"></td>
                                </tr>
                			</tbody>
                		</table>
                	</div>
                     <div class="col-md-4 offset-md-4 col-sm-12">
                    <button type="submit" id="change-password-btn" class="btn btn-success btn-block">Update Password</button>
                </div>  
                </div>
            </div>
               
            </form>
        </div>
        </main>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-4 change-password-notify"></div>
                </div>
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