<div class="box span12">

					<?php

					$message = $this->session->userdata('message');
					if(!empty($message)){
						echo "<span class='alert alert-danger'>$message</span>";
						$this->session->unset_userdata('message');
					}



					?>

					
					<div class="box-content">

						<form class="form-horizontal" action="<?php base_url()?>save-student" method="post">
						  <fieldset>
							
							<div class="control-group">
							  <label class="control-label" for="date01">Name</label>
							  <div class="controls">
								<input type="text"  name="student_name" class="input-xlarge" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Phone</label>
							  <div class="controls">
								<input type="text"  name="student_phone" class="input-xlarge" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Roll</label>
							  <div class="controls">
								<input type="text" name="student_roll" class="input-xlarge" >
							  </div>
							</div>

							<!-- <div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>    -->       
							
							<div class="form-actions">
							  <button type="submit" name="add_student" class="btn btn-primary">Add Student</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->