

@extends('admin.layout.app')

@section('title')
Admin Panel
@endsection

@section('content')
	<!-- main content -->
	<div class="wrapper" style="margin-top: 20px; ">
		<div class="row">
			<div style = "padding: 30px;">
			<h1>Available Tickets</h1>
		</div>
			<div style="padding: 30px;">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTask">+ ADD a Ticket</button>
		






			<!-- The Modal -->
<div class="modal fade" id="addTask" >
	<div class="modal-dialog modal-xl" >
	  <div class="modal-content "style="width: 1000px;" >
  
		<!-- Modal Header -->
		<div class="modal-header">
		  <h4 class="modal-title">Adding a Ticket </h4>
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
  
		<!-- Modal body -->
		<div class="modal-body">
		<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 	<div class="container-fluid">
  		<div class="row">
   			<div class="col-md-6 col-sm-6 col-xs-12">
				<form method="POST" action="{{ route('admin-tickets.store') }}">
					@csrf
					<div class="form-group ">
						<label class="control-label requiredField" for="from_city">
						 From City
							<span class="asteriskField">
							*
							</span>
						</label>
						<select class="select form-control" id="from_city" name="from_city_id">
							@foreach ($cities as $c)
							<option value="{{$c->city_id}}">
								{{$c->city_name}}
								</option>
							@endforeach
						</select>
					   </div>

					   <div class="form-group ">
						<label class="control-label requiredField" for="to_city">
						 To City:
							<span class="asteriskField">
							*
							</span>
						</label>
						<select class="select form-control" id="to_city" name="to_city_id">
							@foreach ($cities as $c)
							<option value="{{$c->city_id}}">
								{{$c->city_name}}
								</option>
							@endforeach
						</select>
					   </div>

					   <div class="form-group ">
						<label class="control-label requiredField" for="price">
						 Price :
							<span class="asteriskField">
							*
							</span>
						</label>
						<input class="form-control" id="price" name="price" type="number"/>
					   </div>

					   <div class="form-group ">
						<label class="control-label requiredField" for="train">
						 Train :
							<span class="asteriskField">
							*
							</span>
						</label>
						<select class="select form-control" id="train" name="train_id">
							@foreach ($trains as $t)
							<option value="{{$t->train_id}}">
								{{$t->train_name}}
							</option>
							@endforeach
						</select>
					   </div>

					   <div class="form-group">
							<label class="control-label requiredField" for="departure">
							Departure Time :
							<input type="time" name= "departure_time" id="departure">
						</div>

						<div class="form-group">
							<label class="control-label requiredField" for="arrival">
							  Arrival Time :
							<input type="time" name= "arrival_time" id="arrival">
						</div>

						<div class="form-group">
							<label class="control-label requiredField" for="duration">
							  Trip Duration :
							<input type="time" name= "path_time">
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
		</div>
	
			<div class="col-8 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							All available Tickets
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<table>
							<thead>
								<tr>
									<th>#</th>
									<th>From: </th>
									<th>To: </th>
									<th>Train:</th>
									<th>Cost:</th>
									<th>Action </th>
								</tr>
							</thead>
							<tbody>
								@foreach ($tickets as $t)
								<tr>
									<td>{{$t->ticket_id}}</td>
									<td>{{App\Models\City::find($t->from_city_id)->city_name}}</td>
									<td>{{App\Models\City::find($t->to_city_id)->city_name}}</td>
									<td>{{App\Models\Train::find($t->train_id)->train_name}}</td>
									<td>{{$t->price}}</td>
									<td style="display: flex;">
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editTicket<?php echo $t->ticket_id?>"><i class="bg-success"></i>Edit</button>

										<!-- The Modal -->
									<div class="modal fade" id="editTicket<?php echo $t->ticket_id?>" >
										<div class="modal-dialog modal-xl" >
										<div class="modal-content "style="width: 1000px;" >
	
										<!-- Modal Header -->
										<div class="modal-header">
										<h4 class="modal-title">Editing Ticket </h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
	
										<!-- Modal body -->
										<div class="modal-body">
										<div class="container-fluid">
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-12">
													<form method="POST" action="{{ route('admin-tickets.update', $t->ticket_id) }}">
														@method('PATCH') 
														@csrf
														<div class="form-group ">
															<label class="control-label requiredField" for="from_city">
																From City
																   <span class="asteriskField">
																   *
																   </span>
															   </label>
															   <select class="select form-control" id="from_city" name="from_city_id">
																   @foreach ($cities as $c)
																   <option value="{{$c->city_id}}">
																	   {{$c->city_name}}
																	   </option>
																   @endforeach
															   </select>
															  </div>
									   
															  <div class="form-group ">
															   <label class="control-label requiredField" for="to_city">
																To City:
																   <span class="asteriskField">
																   *
																   </span>
															   </label>
															   <select class="select form-control" id="to_city" name="to_city_id">
																   @foreach ($cities as $c)
																   <option value="{{$c->city_id}}">
																	   {{$c->city_name}}
																	   </option>
																   @endforeach
															   </select>
															  </div>
									   
															  <div class="form-group ">
															   <label class="control-label requiredField" for="price">
																Price :
																   <span class="asteriskField">
																   *
																   </span>
															   </label>
																<input class="form-control" id="price" name="price" type="number" value="{{$t->price}}"/>
															  </div>
									   
															  <div class="form-group ">
															   <label class="control-label requiredField" for="train">
																Train :
																   <span class="asteriskField">
																   *
																   </span>
															   </label>
															   <select class="select form-control" id="train" name="train_id">
																   @foreach ($trains as $tr)
																   <option value="{{$tr->train_id}}">
																	   {{$tr->train_name}}
																   </option>
																   @endforeach
															   </select>
															  </div>
									   
															  <div class="form-group">
																   <label class="control-label requiredField" for="departure">
																   Departure Time :
																   <input type="time" name= "departure_time" id="departure" value="{{$t->departure_time}}">
															   </div>
									   
															   <div class="form-group">
																   <label class="control-label requiredField" for="arrival">
																	 Arrival Time :
																   <input type="time" name= "arrival_time" id="arrival" value="{{$t->arrival_time}}">
															   </div>
									   
															   <div class="form-group">
																   <label class="control-label requiredField" for="duration">
																	 Trip Duration :
																   <input type="time" name= "path_time" value="{{$t->path_time}}">
															   </div>
															</div>
															<div class="form-group">
																<button class="btn btn-primary " name="submit" type="submit">
																Update
																</button>
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

										<form style="margin-left: 8px;" action="{{ route('admin-tickets.destroy', $t->ticket_id)}}" method="POST">
											@method('DELETE')
											@csrf
											<button type="submit" class="btn btn-danger">Delete</button>
										</form>								
									</td>
								</tr>
								@endforeach
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

