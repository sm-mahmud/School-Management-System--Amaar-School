@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">List of the all Registrared Students</h3>
				  <a href="{{route('student.reg.add')}}"class="btn btn-rounded btn-success mb-5">New Registration</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>SL Number</th>
								
								<th>Name</th>
                                <th>Father's Name</th>
                                <th>Mother's Name</th>
                                <th>Class</th>
                                <th>Group</th>
                                <th>Year</th>
                                <th>Address</th>
                                <th>Contact Number</th>
                                <th>Gender</th>
                                <th>Religeon</th>
                                
								
								<th>Action</th>
					
							</tr>
						</thead>
						<tbody>
                            @foreach($allData as $key => $student)
                        <tr>
								<td>{{$key +1}}</td>
								
								<td>{{$student->name}} </td>
                                <td>{{$student->fname}} </td>
                                <td>{{$student->mname}} </td>
                                <td>{{$student->class}} </td>
                                <td>{{$student->group}} </td>
                                <td>{{$student->year}} </td>
                                <td>{{$student->address}} </td>
                                
                                <td>{{$student->mobile}} </td>
                                <td>{{$student->gender}} </td>
                                <td>{{$student->religion}} </td>
								
								<td>
                                    <a href="{{route('student.year.edit',$student->id)}}" class='btn btn-info'>Edit</a>
                                    <a href="{{route('student.year.delete',$student->id)}}" class='btn btn-danger'>Delete</a>
                                </td>
							</tr>
                            @endforeach
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