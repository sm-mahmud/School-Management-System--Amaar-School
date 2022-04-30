
<?php $__env->startSection('admin'); ?>


<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">List of the all Student Class</h3>
				  <a href="<?php echo e(route('student.class.add')); ?>"class="btn btn-rounded btn-success mb-5">Add Student Class</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>SL Number</th>
								
								<th>Class</th>
								
								<th>Action</th>
					
							</tr>
						</thead>
						<tbody>
                            <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
								<td><?php echo e($key +1); ?></td>
								
								<td><?php echo e($student->name); ?> </td>
								
								<td>
                                    <a href="<?php echo e(route('student.class.edit',$student->id)); ?>" class='btn btn-info'>Edit</a>
                                    <a href="<?php echo e(route('student.class.delete',$student->id)); ?>" class='btn btn-danger'>Delete</a>
                                </td>
							</tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
						<tfoot>
							
						</tfoot>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->


			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>







@endsetion
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\basic\resources\views/backend/setup/student_class/view_class.blade.php ENDPATH**/ ?>