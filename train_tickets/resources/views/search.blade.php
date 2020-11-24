@extends('layouts.app')

@section('title')
Search Res
@endsection
@include('include.header')
@section('content')
<section >
<div class="s01">
                <form action="@{'/searchAll'}" method="get">

                    <div class="inner-form">
                    <div class="input-field second-wrap">
                            <div class="form-group ">
                                <label class="control-label requiredField" for="starts" >
                                    <span > City from :  </span>
                                    <span class="asteriskField">
        *
       </span>
                                </label>
                                <select class="select form-control"  name="city_from_id" >
                                <option value="">Select a location...</option>
                                                    @foreach ($cities as $c)
                                                    <option value="<?php echo $c->city_code?>">
                                                    {{$c->city_name}}
                                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="input-field second-wrap">
                            <div class="form-group ">
                                <label class="control-label requiredField" for="starts" >
                                    <span > City to :</span>
                                    <span class="asteriskField">
        *
       </span>
                                </label>
                                <select class="select form-control"  name="city_to_id" >
                                <option value="">Select a location...</option>
                                                    @foreach ($cities as $c)
                                                    <option value="<?php echo $c->city_code?>">
                                                    {{$c->city_name}}
                                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="input-field second-wrap">
                        <input name="deparure" type="date" id = "departure" class="form-control date" id="deparure" placeholder="Select date..." required="" onchange='this.form.()' name = "departure_date">
                        </div>
                    

                        <div class="input-field third-wrap">
                            <button class="btn-search" type="submit" > Search </button>
                        </div>
                    </div>
                </form>
        </div>
        <div class="container">
            <div class="row">
            @foreach($tickets as $t)
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="movie-ticket">
  <div class="container-fluid">
    <!-- Item -->
    <div class="ui-item">
      <!-- Head -->
      <div class="ui-head">
        <!-- Background Image -->
        <img src="https://via.placeholder.com/800x400/48D1CC/000000" alt="" class="img-responsive bg-img">
        <!-- Transparent Background -->
        <div class="ui-trans clearfix">
          <!-- Image -->
          <img src="https://via.placeholder.com/300x300/87CEFA/000000" alt="" class="img-responsive">
          <!-- Details -->
          <div class="ui-details clearfix">
            <!-- Movie Name -->
            <h2><a href="#">{{App\Models\City::find($t->from_city_id)->city_name}} - {{App\Models\City::find($t->to_city_id)->city_name}}</a></h2>
            
            <h4><span>Train</span>:</h4>
            <!-- Director Name -->
            <h5>{{App\Models\Train::find($t->train_id)->train_name}}</h5>
            <!-- Heading -->
            <h4><span>Price</span>:</h4>
            <!-- Writers -->
            <h5>{{$t->price}}</h5>
            <!-- Heading -->
            <h4><span>Trip info </span>:</h4>
            <!-- Stars -->
            <h5>{{$t->departure_time}} - {{$t->arrival_time}} </h5>
          
            <h5>{{$t->path_time}}</h5>
          </div>
    
        </div>
      </div>
        <!-- Review -->
        <div class="ui-review">
          <!-- Heading -->
          <h3>Duration</h3>
          <!-- Paragraph -->
          <p>{{$t->path_time}}</p>
          <!-- Buttons -->
          <a href="#" class="ui-btn bg-red"><i class="fa fa-ticket"></i> Buy Tickets</a>
          <a href="#" class="ui-btn bg-green"><i class="fa fa-dot-circle-o"></i> Buy DVDs</a>
        </div>
      </div>  
    </div>

</div> 
@endforeach
            </div>
        </div>
    </section>

@endsection



