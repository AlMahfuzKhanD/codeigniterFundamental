

<!-- <div class="container">
            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Student Roll</th>
        <th>Student Phone</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      
    </tbody>
  </table>

</div> -->
<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Student Id</th>
								  <th>Student Name</th>
								  <th>Student Phone</th>
								  <th>Student Roll</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php foreach ($student_info as  $info): ?>
							
							<tr>
								<td class="center"><?php echo $info->student_id;?></td>
								<td><?php echo $info->student_name;?></td>
								
								<td class="center"><?php echo $info->student_phone;?></td>
								<td class="center"><?php echo $info->student_role;?></td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>                                            
									</a>
									<a class="btn btn-info" href="<?php echo base_url()?>edit-student/<?php echo $info->student_id;?>">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
						<?php endforeach;?>
							
							
							
						  </tbody>
					  </table>            
					</div>

