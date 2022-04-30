
<?php $__env->startSection('admin'); ?>


<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Student Year</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method = "post" action="<?php echo e(route('student.year.store')); ?>">
                        <?php echo csrf_field(); ?>
					  <div class="row">
						<div class="col-12">	
                            
                        <div class="col-md-6">
                            <div class="form-group">
								<h5> Student Year <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"name="name" class="form control" required="">
								</div>
							</div>


                                  
                                    
                        </div>

				            


							
							
						
						
						</div>
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		
 



			  
	  
	  </div>
  </div>







@endsetion
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\basic\resources\views/backend/setup/year/add_year.blade.php ENDPATH**/ ?>