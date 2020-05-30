<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h3 class="mt-4"><i class="fas fa-eye"></i> <?php echo $admin_name; ?></h3>
            <ol class="breadcrumb mb-4 mt-3">
                <li class="breadcrumb-item active"><i class="card-body text-center"><i class="fas fa-eye"></i> Profile - <?php echo ucfirst($username); ?></i></li>
            </ol>
                <div class="card mb-4">
                    <div class="card-header">Change Password</div>
                <div class="card-body">
                	<div class="table-responsive">
                		<table class="table table-sm">
                			<tbody>
                				<tr>
                                    <td><label>Current Password:</label></td>
                                    <td><input type="text" name="current_password" placeholder="Current Password" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><label>New Password:</label></td>
                                    <td><input type="text" name="new_password" placeholder="New Password" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><label>Confirm Password:</label></td>
                                    <td><input type="text" name="confirm_password" placeholder="Confirm Password" class="form-control form-control-sm"></td>
                                </tr>
                			</tbody>
                			<tfoot>
                				<tr>
                					<td>
                						<a href="admin.php?change-password" class="btn btn-warning btn-block">Update Password</a>
                					</td>		
                				</tr>
                			</tfoot>
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