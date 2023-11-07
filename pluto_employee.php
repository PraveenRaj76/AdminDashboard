<?php include ('pluto_header.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small><a href="pluto_admin_home.php">Home</a> /</small> Employees
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
							<!-- <a href="print_all_employees.php" target="_blank" style="background:none;">
							<button class="btn btn-danger pull-right"><i class="fa fa-print"></i> Print Employees List</button>
							</a>
							<br />
							<br /> -->
                    <div class="x_title">
                        <h2><i class="fa fa-users"></i> Employees Information</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                                <a href="pluto_admin_home.php" style="background:none;">
                                    <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button>
                                </a>
                            </li>
                            <li>
                                <a href="pluto_add_user.php" style="background:none;">
                                    <button class="btn btn-primary btn-outline"><i class="fa fa-plus"></i> Add</button>
                                </a>
							</li>
                            <li>
                                <a href="pluto_import_employees.php" style="background:none;">
                                    <button class="btn btn-success btn-outline"><i class="fa fa-upload"></i> Import</button>
                                </a>
							</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->

						<div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								
							<thead>
								<tr>
                                    <th>Employee Name</th>
                                    <th>PS NO</th>
                                    <th>Role</th>
                                    <th>Action</th>
								</tr>
							</thead>
							<tbody>
							
							<?php
							$result= mysqli_query($con,"select * from `employee` where `status` = 'Active' order by `id` ASC") or die (mysqli_error());
							while ($row= mysqli_fetch_array ($result) ){
							$ps_no=$row['ps_no'];
                            $imagePath = "user_images/".$row['ps_no'].".jpg";
							?>
							<tr>
								<td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                <td><?php echo $row['ps_no']; ?></td>
                                <td><?php echo $row['role']; ?></td>
<!--                                <td>--><?php //echo date("d-m-Y", strtotime($row['dob'])); ?><!--</td>-->
								<td>
									<a class="btn btn-primary" for="ViewAdmin" href="view_employee.php<?php echo '?ps_no='.$ps_no; ?>">
										<i class="fa fa-search"></i>
									</a>
									<a class="btn btn-warning" for="ViewAdmin" href="edit_employee.php<?php echo '?ps_no='.$ps_no; ?>">
									<i class="fa fa-edit"></i>
									</a>
									<a class="btn btn-danger" for="DeleteAdmin" href="#delete<?php echo $ps_no;?>" data-toggle="modal" data-target="#delete<?php echo $ps_no;?>">
										<i class="glyphicon glyphicon-trash icon-white"></i>
									</a>

									<!-- delete modal user -->
									<div class="modal fade" id="delete<?php  echo $ps_no;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i> User</h4>
										</div>
										<div class="modal-body">
												<div class="alert alert-danger">
													Are you sure you want to deallocate?
												</div>
												<div class="modal-footer">
												<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove icon-white"></i> No</button>
												<a href="delete_employee.php<?php echo '?ps_no='.$ps_no; ?>" style="margin-bottom:5px;" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> Yes</a>
												</div>
										</div>
										</div>
									</div>
									</div>
								</td> 
							</tr>
							<?php } ?>
							</tbody>
							</table>
						</div>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>