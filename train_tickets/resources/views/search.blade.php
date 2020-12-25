@extends('layouts.app')

@section('title')
Search Res
@endsection
@include('include.header')
@section('content')
<section >
<style>
a{
  color:white;
  
}
.center {
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 margin-top: 50px;
}
 button.fancy {
	 -webkit-appearance: button;
	 background-color: transparent;
	 border: 2px solid #000;
	 border-radius: 0;
	 box-sizing: border-box;
	 color: #fff;
	 cursor: pointer;
	 display: inline-block;
	 float: right;
	 font-weight: 700;
	 letter-spacing: 0.05em;
	 margin: 0;
	 outline: none;
	 overflow: visible;
	 padding: 1.25em 2em;
	 position: relative;
	 text-align: center;
	 text-decoration: none;
	 text-transform: none;
	 transition: all 0.3s ease-in-out;
	 user-select: none;
	 width: 16.8125rem;
}
 button.fancy::before {
	 content: " ";
	 width: 1.5625rem;
	 height: 2px;
	 background: black;
	 top: 50%;
	 left: 1.5em;
	 position: absolute;
	 -webkit-transform: translateY(-50%);
	 transform: translateY(-50%);
	 -webkit-transform-origin: center;
	 transform-origin: center;
	 -webkit-transition: background 0.3s linear, width 0.3s linear;
	 transition: background 0.3s linear, width 0.3s linear;
}
 button.fancy a {
	 font-size: 1.125em;
	 line-height: 1.33333em;
	 padding-left: 2em;
	 display: block;
	 text-align: left;
	 -webkit-transition: all 0.3s ease-in-out;
	 transition: all 0.3s ease-in-out;
	 text-transform: uppercase;
	 text-decoration: none;
	 color: black;
}
 button.fancy .top-key {
	 height: 2px;
	 width: 1.5625rem;
	 top: -2px;
	 left: 0.625rem;
	 position: absolute;
	 background: white;
	 -webkit-transition: width 0.5s ease-out, left 0.3s ease-out;
	 transition: width 0.5s ease-out, left 0.3s ease-out;
}
 button.fancy .bottom-key-1 {
	 height: 2px;
	 width: 1.5625rem;
	 right: 1.875rem;
	 bottom: -2px;
	 position: absolute;
	 background: white;
	 -webkit-transition: width 0.5s ease-out, right 0.3s ease-out;
	 transition: width 0.5s ease-out, right 0.3s ease-out;
}
 button.fancy .bottom-key-2 {
	 height: 2px;
	 width: 0.625rem;
	 right: 0.625rem;
	 bottom: -2px;
	 position: absolute;
	 background: white;
	 -webkit-transition: width 0.5s ease-out, right 0.3s ease-out;
	 transition: width 0.5s ease-out, right 0.3s ease-out;
}
 button.fancy:hover {
	 color: white;
	 background: #529752;
}
 button.fancy:hover::before {
	 width: 0.9375rem;
	 background: white;
}
 button.fancy:hover a {
	 color: white;
	 padding-left: 1.5em;
}
 button.fancy:hover .top-key {
	 left: -2px;
	 width: 0px;
}
 button.fancy:hover .bottom-key-1, button.fancy:hover .bottom-key-2 {
	 right: 0;
	 width: 0;
}
 
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="s01">
<form id="form-submit" action="{{url('/search')}}" method="get">
                    <div class="inner-form">
                    <div class="input-field second-wrap" style="margin-bottom:50px">
                            <div class="form-group ">
                              
                                <label class="control-label requiredField" for="starts" >
                                    <span > City from :  </span>
                                    <span class="asteriskField">
        *
       </span>
                                </label>
                                                <select required name='fromC' class="select form-control" onchange='this.form.()'  style="height:70px">
                                                    <option value="">Select a location...</option>
                                                    @foreach ($cities as $c)
                                                    <option value="<?php echo $c->city_id?>">
                                                    {{$c->city_name}}
                                                    </option>
                                                    @endforeach
                                                </select>
                            </div>
                        </div>
                        <div class="input-field second-wrap" style="margin-bottom:50px">
                            <div class="form-group ">
                              
                                <label class="control-label requiredField" for="starts" >
                                    <span > City to :</span>
                                    <span class="asteriskField">
        *
       </span>
                                </label>
                                                <select required name='toC' class="select form-control" onchange='this.form.()'  style="height:70px">
                                                    <option value="">Select a location...</option>
                                                    @foreach ($cities as $c)
                                                    <option value="<?php echo $c->city_id?>">
                                                    {{$c->city_name}}
                                                    </option>
                                                    @endforeach
                                                </select>
                            </div>
                        </div>
                        <div class="input-field second-wrap">
                        
                            <input  type="date" id = "departure"   class="input form-control"  placeholder="Select date..."  name = "departure_date">
                        </div>
                    

                        <div class="input-field third-wrap">
                            <button class="btn-search" type="submit" > Search </button>
                        </div>
                    </div>
                </form>
        </div>
        <div class="container">
        <div class="card-group">
        <div class="card text-white bg-primary mb-3"  >
  <div class="card-body">
    <i class="far fa-calendar-alt"></i> Prices to nearest dates
    </div>
    </div>
    @if(count($before_date) < 3)

    @foreach($before_date as $t)

    <div class="card text-white bg-info mb-3">
  <div class="card-body">
    <div class="">
    <a href="http://127.0.0.1:8001/search?fromC=<?php echo $t->from_city_id?>&toC=<?php echo $t->to_city_id?>&departure_date=<?php echo $t->departure_time?>&arrival_date=2020-12-27&trip=round" style="font-weight: bold;">
<?php echo $t->departure_time; ?>
</a>
<span>
<?php echo $t->price; ?> KZT
</span>
    </div>
    </div>
    </div>
    @endforeach

@endif
@if(count($before_date) > 3)
@foreach(array_slice($before_date, -3, 3, true) as $t)
<div class="card text-white bg-info mb-3">
  <div class="card-body">
    <div class="">
    <a href="http://127.0.0.1:8001/search?fromC=<?php echo $t->from_city_id?>&toC=<?php echo $t->to_city_id?>&departure_date=<?php echo $t->departure_time?>&arrival_date=2020-12-27&trip=round" style="font-weight: bold;">
<?php echo $t->departure_time ;?>
</a>
<span>
<?php echo $t->price ;?> KZT
</span>
    </div>
    </div>
    </div>

@endforeach

@endif
    <div class="card text-white bg-success mb-3">
  <div class="card-body">
    <div class="">
    <p style="font-weight: bold;">
<?php echo $tickets[0]->departure_time ;?>
</p>
<span>
<?php echo $tickets[0]->price; ?> KZT
</span>
    </div>
    </div>
    </div>
    @if(count($after_date) < 3)
    @foreach($after_date as $t)
    <div class="card text-white bg-info mb-3">
  <div class="card-body">
    <div class="">
    <a href="http://127.0.0.1:8001/search?fromC=<?php echo $t->from_city_id?>&toC=<?php echo $t->to_city_id?>&departure_date=<?php echo $t->departure_time?>&arrival_date=2020-12-27&trip=round" style="font-weight: bold;">
<?php echo $t->departure_time ;?>
</a>
<span>
<?php echo $t->price ;?>KZT
</span>
    </div>
    </div>
    </div>
    @endforeach
    </div>
@endif

@if(count($after_date) > 3)

@foreach(array_slice($after_date, 0, 3) as $t)
<div class="card text-white bg-info mb-3">
  <div class="card-body">
    <div class="">
    <a href="http://127.0.0.1:8001/search?fromC=<?php echo $t->from_city_id?>&toC=<?php echo $t->to_city_id?>&departure_date=<?php echo $t->departure_time?>&arrival_date=2020-12-27&trip=round" style="font-weight: bold;">
<?php echo $t->departure_time ;?>
</a>
<span>
<?php echo $t->price; ?> KZT
</span>
    </div>
    </div>
    </div>

@endforeach
</div>
@endif



            @foreach($tickets as $t)
       
           
<div class="movie-ticket">
  <div class="container-fluid">
    <!-- Item -->
    <div class="ui-item">
      <!-- Head -->
      <div class="ui-head">
        <!-- Background Image -->
        <img src="https://www.solidbackgrounds.com/images/1920x1080/1920x1080-light-steel-blue-solid-color-background.jpg" alt="" class="img-responsive bg-img">
        <!-- Transparent Background -->
        <div class="ui-trans clearfix">
       
          <!-- Details -->
          <div class="ui-details clearfix">
            <!-- Movie Name -->
            <h2><a href="#">{{App\Models\City::find($t->from_city_id)->city_name}} - {{App\Models\City::find($t->to_city_id)->city_name}}</a></h2>
            
            <h4><span>Train</span>:</h4>
            <!-- Director Name -->
            <h5 style="color:white">{{App\Models\Train::find($t->train_id)->train_name}}</h5>
            <!-- Heading -->
            <h4><span >Duration</span>:</h4>
            <!-- Writers -->
            <h5><span style="color:white">{{$t->path_time}}</span></h5>
            <!-- Heading -->
            <h4><span>Trip info </span>:</h4>
            <!-- Stars -->
            <h5><span style="color:white">{{$t->departure_time}} - {{$t->arrival_time}}</span> </h5>
        
          </div>
    
        </div>
      </div>
        <!-- Review -->
        <div class="ui-review">
          <!-- Heading -->
          <h2>Price:</h2>
          <!-- Paragraph -->
          <h3>{{$t->price}} KZT</h3>
          <div class="center">
          <form id="form-submit" action="{{url('/payment')}}" method="get">
          <input type="hidden" value="<?php echo $t->ticket_id?>" name="ticket_id">  
<button class="fancy" type="submit">

  <span class="top-key"></span>
  <p target="_blank" class="" style="color:black;">Buy Tickets</p>
  <span class="bottom-key-1"></span>
  <span class="bottom-key-2"></span>
</button>
</form>
</div>

          <!-- Buttons -->
          <!-- <form id="form-submit" action="{{url('/buy')}}" method="get">
<input type="hidden" value="<?php echo $t->ticket_id?>" name="ticket_id">
<input type="hidden" value = "https://rasp.yandex.kz/search/train/?fromId=<?php echo App\Models\City::find($t->from_city_id)->city_code?>&fromName=<?php echo App\Models\City::find($t->from_city_id)->city_name?>&toId=<?php echo App\Models\City::find($t->to_city_id)->city_code?>&toName=<?php echo App\Models\City::find($t->to_city_id)->city_name?>+&when=<?php echo substr($t->departure_time , -2)?>" name="externalURL">
          <button type="submit" class="ui-btn bg-red"><i class="fa fa-ticket"></i> </button>
          </form> -->
        </div>
      </div>  
    </div>

</div> 

@endforeach
            </div>
        </div>
    </section>
    
@endsection



