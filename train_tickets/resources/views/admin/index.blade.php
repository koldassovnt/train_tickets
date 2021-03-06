

@extends('admin.layout.app')

@section('title')
Admin Panel
@endsection

@section('content')
	<div class="wrapper" style="margin-top: 20px; ">
		<div class="row">
			<div class="col-3 col-m-6 col-sm-6">
				<a  data-toggle="modal" href="#toDoList">
				<div class="counter bg-primary">
					<p>
						<i class="fas fa-tasks"></i>
					</p>
					<h3>3</h3>
					<p>To do</p>
				</div>
				</a>



<!-- The Modal -->
<div class="modal fade" id="toDoList" >
	<div class="modal-dialog modal-xl" >
	  <div class="modal-content "style="width: 1000px;" >
  
		<!-- Modal Header -->
		<div class="modal-header">
		  <h4 class="modal-title">To Do List</h4>
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
  
		<!-- Modal body -->
		<div class="modal-body">
			<div class="col-8 col-m-12 col-sm-12" style="width: 100%;">
				<div class="card">
					<div class="card-header">
						<h3>
							Tasks
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>#</th>
									<th>Task</th>
									<th>Manager</th>
									<th>Action</th>
									<th>Added date</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Add new unique feature</td>
									<td>Ayan N.</td>
									<td>
										
											
								<button type="button" class="btn btn-success"><i class="bg-success"></i>Set In Progress</button>
								<button type="button" class="btn btn-danger"><i class="bg-danger"></i>Delete Task</button>
									</td>
									<td>17/10/2020</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Change the design of ticket order form</td>
									<td>Nurlan K.</td>
									<td>
										
											<button type="button" class="btn btn-success"><i class="bg-success"></i>Set In Progress</button>
								<button type="button" class="btn btn-danger"><i class="bg-danger"></i>Delete Task</button>
									
									</td>
									<td>17/10/2020</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Make background of ticket ordering form a video </td>
									<td>Nurlan K.</td>
									<td>
										
										
											<button type="button" class="btn btn-success"><i class="bg-success"></i>Set In Progress</button>
								<button type="button" class="btn btn-danger"><i class="bg-danger"></i>Delete Task</button>
									
									</td>
									<td>17/10/2020</td>
								</tr>
								
							</tbody>
						</table>
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

			
			<div class="col-3 col-m-6 col-sm-6">
				<a  data-toggle="modal" href="#inProgress">
				<div class="counter bg-warning">
					<p>
						<i class="fas fa-spinner"></i>
					</p>
					<h3>3</h3>
					<p>In progress</p>
				</div>
			</div>
			</a>





<!-- The Modal -->
<div class="modal fade" id="inProgress" >
	<div class="modal-dialog modal-xl" >
	  <div class="modal-content "style="width: 1000px;" >
  
		<!-- Modal Header -->
		<div class="modal-header">
		  <h4 class="modal-title">Tasks in Progress</h4>
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
  
		<!-- Modal body -->
		<div class="modal-body">
			<div class="col-8 col-m-12 col-sm-12" style="width: 100%;">
				<div class="card">
					<div class="card-header">
						<h3>
							Tasks
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>#</th>
									<th>Task</th>
									<th>Manager</th>
									<th>Action</th>
									<th>Started date</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Add new unique feature</td>
									<td>Ayan N.</td>
									<td>
										
											
								<button type="button" class="btn btn-success"><i class="bg-success"></i>Complete</button>
								<button type="button" class="btn btn-danger"><i class="bg-danger"></i>Stop </button>
									</td>
									<td>17/10/2020</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Change the design of ticket order form</td>
									<td>Nurlan K.</td>
									<td>
										
											<button type="button" class="btn btn-success"><i class="bg-success"></i>Complete</button>
								<button type="button" class="btn btn-danger"><i class="bg-danger"></i>Stop</button>
									
									</td>
									<td>17/10/2020</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Make background of ticket ordering form a video </td>
									<td>Nurlan K.</td>
									<td>
										
										
											<button type="button" class="btn btn-success"><i class="bg-success"></i>Complete</button>
								<button type="button" class="btn btn-danger"><i class="bg-danger"></i>Stop</button>
									
									</td>
									<td>17/10/2020</td>
								</tr>
								
							</tbody>
						</table>
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










			








			<div class="col-3 col-m-6 col-sm-6">
				<a  data-toggle="modal" href="#Completed">
				<div class="counter bg-success">
					<p>
						<i class="fas fa-check-circle"></i>
					</p>
					<h3>3</h3>
					<p>Completed</p>
				</div>
				</a>





<!-- The Modal -->
<div class="modal fade" id="Completed" >
	<div class="modal-dialog modal-xl" >
	  <div class="modal-content "style="width: 1000px;" >
  
		<!-- Modal Header -->
		<div class="modal-header">
		  <h4 class="modal-title">Completed Tasks </h4>
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
  
		<!-- Modal body -->
		<div class="modal-body">
			<div class="col-8 col-m-12 col-sm-12" style="width: 100%;">
				<div class="card">
					<div class="card-header">
						<h3>
							Tasks
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>#</th>
									<th>Task</th>
									<th>Manager</th>
									<th>Action</th>
									<th>Completed date</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Add new unique feature</td>
									<td>Ayan N.</td>
									<td>
								<button type="button" class="btn btn-danger"><i class="bg-danger"></i>Delete Task </button>
									</td>
									<td>17/10/2020</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Change the design of ticket order form</td>
									<td>Nurlan K.</td>
									<td>
										
										<button type="button" class="btn btn-danger"><i class="bg-danger"></i>Delete Task </button>
									
									</td>
									<td>17/10/2020</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Make background of ticket ordering form a video </td>
									<td>Nurlan K.</td>
									<td>
										
										
										<button type="button" class="btn btn-danger"><i class="bg-danger"></i>Delete Task </button>
									
									</td>
									<td>17/10/2020</td>
								</tr>
								
							</tbody>
						</table>
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

	
		</div>
		<div class="row">
			<div style="padding: 30px;">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTask">+ ADD TASK</button>






			<!-- The Modal -->
<div class="modal fade" id="addTask" >
	<div class="modal-dialog modal-xl" >
	  <div class="modal-content "style="width: 1000px;" >
  
		<!-- Modal Header -->
		<div class="modal-header">
		  <h4 class="modal-title">Adding Task </h4>
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
					 Task
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
							All Tasks 
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>#</th>
									<th>Project</th>
									<th>Manager</th>
									<th>Status</th>
									<th>Due date</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Add new unique feature</td>
									<td>Ayan N.</td>
									<td>
										<div class="dot">
								<span>
									
									<i class="bg-success">
									</i>
									Completed
								
								</span>
							</div>
									</td>
									<td>17/10/2020</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Change the design of ticket order form</td>
									<td>Nurlan K.</td>
									<td>
										
										<div class="dot">
											<span>
												
												<i class="bg-danger">
												</i>
												To Do
											
											</span>
										</div>
									
									</td>
									<td>17/10/2020</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Make background of ticket ordering form a video </td>
									<td>Nurlan K.</td>
									<td>
										
										
										<div class="dot">
											<span>
												
												<i class="bg-warning">
												</i>
												In Progress
											
											</span>
										</div>
									
									</td>
									<td>17/10/2020</td>
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
	<script src="/js/index.js"></script>
    <!-- end import script -->
    @endsection

