<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h3 class="mt-4"><i class="fas fa-eye"></i> View Materials</h3>
            <ol class="breadcrumb mb-4 mt-3">
                <li class="breadcrumb-item active"><i class="card-body text-center"><i class="fas fa-eye"></i> View material</i></li>
            </ol>
                <div class="card mb-4">
                <div class="card-header"><i class="fas fa-book mr-1"></i>All materials</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>s/n</th>
                                    <th>Topic</th>
                                    <th>Vocation</th>
                                    <th>Department</th>
                                    <th>Doc Type</th>
                                    <th>Doc size</th>
                                    <th>Level</th>
                                    <th>Video link</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php 
                                $query = $eed->customQuery("SELECT * FROM materials ORDER BY vocation ASC");
                                $run = $query->fetchAll(PDO::FETCH_OBJ);
                                $i = 1;
                                foreach($run as $mat):
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $mat->topic; ?></td>
                                    <td><?php echo $mat->vocation; ?></td>
                                    <td><?php echo $mat->department; ?></td>
                                    <td>.<?php echo $mat->doc_type; ?></td>
                                    <td><?php echo $mat->doc_size; ?>mb</td>
                                    <td><?php echo $mat->level; ?></td>
                                    <td><a href="<?php echo $mat->video_link; ?>" class="btn btn-block btn-primary">View video</a></td>
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