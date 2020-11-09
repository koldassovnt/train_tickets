

@extends('admin.layout.app')

@section('title')
Admin Panel
@endsection

@section('content')
<div class="wrapper" style="margin-top: 20px; ">
		<div class="row">
			<div style = "padding: 30px;">
			<h1>Trains</h1>
		</div>
			<div style="padding: 30px;">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTask">+ ADD Train</button>






			<!-- The Modal -->
<div class="modal fade" id="addTask" >
	<div class="modal-dialog modal-xl" >
	  <div class="modal-content "style="width: 1000px;" >
  
		<!-- Modal Header -->
		<div class="modal-header">
		  <h4 class="modal-title">Adding Train </h4>
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
  
		<!-- Modal body -->
		<div class="modal-body">
			<div class="container-fluid">
				<div class="row">
				 <div class="col-md-6 col-sm-6 col-xs-12">
				  <form method="post">
				   <div class="form-group ">
					<label class="control-label requiredField" for="name">
					 Train
					 <span class="asteriskField">
					  *
					 </span>
					</label>
					<div class="input-group">
					 <div class="input-group-addon">
					  <i class="fa fa-tasks">
					  </i>
					 </div>
					 <input class="form-control" id="name" name="name" type="text"/>
					</div>
				   </div>
				   <div class="form-group">
					<div>
					 <button class="btn btn-primary " name="submit" type="submit">
					  Submit
					 </button>
					</div>
				   </div>
				  </form>
				 </div>
				</div>
			   </div>
		</div>
  
		<!-- Modal footer -->
		<div class="modal-footer">
		  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>
  
	  </div>
	</div>




</div>



			</div>
			<div class="col-8 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							All Trains
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>#</th>
									<th>Train Name</th>
									<th>Action</th>
								
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>High Speed Train</td>
									<td>
										
										
										<button type="button" class="btn btn-primary"><i class="bg-success"></i>Edit</button>
							<button type="button" class="btn btn-danger"><i class="bg-danger"></i>Delete</button>
								
								</td>
							</div>
									
								</tr>
								<tr>
									<td>2</td>
									<td>Light Train</td>
									<td>
										
										
										<button type="button" class="btn btn-primary"><i class="bg-success"></i>Edit</button>
										<button type="button" class="btn btn-danger"><i class="bg-danger"></i>Delete</button>
								</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Electric Train </td>
									<td>
										
										
										<button type="button" class="btn btn-primary"><i class="bg-success"></i>Edit</button>
										<button type="button" class="btn btn-danger"><i class="bg-danger"></i>Delete</button>
								</td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		
		</div>
	
	</div>
	<!-- end main content -->
	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="js/index.js"></script>
	<!-- end import script -->
    @endsection
