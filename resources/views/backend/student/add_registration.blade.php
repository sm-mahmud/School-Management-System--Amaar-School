@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Registration</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method = "post" action="{{route('student.reg.store')}}">
                        @csrf
					  <div class="row">
						<div class="col-12">	
                            
                        <div class="col-md-6">
                            <div class="form-group">
								<h5> Name <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"name="name" class="form control" required="">
								</div>
							</div>

							<div class="col-md-6">
                            <div class="form-group">
								<h5> Email <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"name="email" class="form control" required="">
								</div>
							</div>

							<div class="col-md-6">
                            <div class="form-group">
								<h5> Class <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"name="class" class="form control" required="">
								</div>
							</div>

							<div class="col-md-6">
                            <div class="form-group">
								<h5> Group <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"name="group" class="form control" required="">
								</div>
							</div>

							<div class="col-md-6">
                            <div class="form-group">
								<h5> Year <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"name="year" class="form control" required="">
								</div>
							</div>

							<div class="col-md-6">
                            <div class="form-group">
								<h5> Contact Number <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"name="mobile" class="form control" required="">
								</div>
							</div>

							<div class="col-md-6">
                            <div class="form-group">
								<h5> Address <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"name="address" class="form control" required="">
								</div>
							</div>

							<div class="col-md-6">
                            <div class="form-group">
								<h5> Gender <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"name="gender" class="form control" required="">
								</div>
							</div>

							<div class="col-md-6">
                            <div class="form-group">
								<h5> Father's Name <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"name="fname" class="form control" required="">
								</div>
							</div>

							<div class="col-md-6">
                            <div class="form-group">
								<h5> Mother's Name <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"name="mname" class="form control" required="">
								</div>
							</div>

						
						

							

							

							<div class="col-md-6">
                            <div class="form-group">
								<h5> Religion <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"name="religion" class="form control" required="">
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