<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h3 class="mt-4"><i class="fas fa-eye"></i> <?php echo $admin_name; ?></h3>
            <ol class="breadcrumb mb-4 mt-3">
                <li class="breadcrumb-item active"><i class="card-body text-center"><i class="fas fa-eye"></i> Profile - <?php echo ucfirst($username); ?></i></li>
            </ol>
                <div class="card mb-4">
                <div class="card-body">
                	<div class="table-responsive">
                		<table class="table">
                			<thead>
                				<tr class="bg-success text-white">
	                				<th>Field</th>
	                				<th>Value</th>
                				</tr>
                			</thead>
                			<tbody>
                				<tr>
                					<td><label>Full Name:</label></td>
                					<td><input type="text" readonly value="<?php echo $full_name; ?>" class="form-control form-control-sm"></td>
                				</tr>
                				<tr>
                					<td><label>Gender:</label></td>
                					<td><input type="text" readonly value="<?php echo $gender; ?>" class="form-control form-control-sm"></td>
                				</tr>
                				<tr>
                					<td><label>Phone Number:</label></td>
                					<td><input type="text" readonly value="<?php echo $phone; ?>" class="form-control form-control-sm"></td>
                				</tr>
                				<tr>
                					<td><label>E-mail:</label></td>
                					<td><input type="text" readonly value="<?php echo $email; ?>" class="form-control form-control-sm"></td>
                				</tr>
                				<tr>
                					<td><label>Username:</label></td>
                					<td><input type="text" readonly value="<?php echo $username; ?>" class="form-control form-control-sm"></td>
                				</tr>
                			</tbody>
                			<tfoot>
                				<tr>
                					<td>
                						<a href="?change-password" class="btn btn-warning btn-block">Change Password</a>
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