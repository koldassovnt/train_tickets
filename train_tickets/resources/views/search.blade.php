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
            @foreach($tickets as $ticket)
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
            <h2><a href="#">Final destination</a></h2>
            <!-- Labels -->
            <a href="#" class="label">2014</a>
            <a href="#" class="label">PG - 13</a>
            <a href="#" class="label">143 min</a>
            <a href="#" class="label">Action</a>
            <a href="#" class="label">Adventures</a>
            <!-- Paragraph -->
            <p>Nemo enim ipsam volup tatem quia volup tas sit asper natur aut odit aut fugit volup quia volup tas sit asper natur aut odit aut fugit volup tatem sequi nesc iunt.</p>
            <!-- Heading -->
            <h4><span>Director</span>:</h4>
            <!-- Director Name -->
            <h5><a href="#">Joss Whedon</a></h5>
            <!-- Heading -->
            <h4><span>Writers</span>:</h4>
            <!-- Writers -->
            <h5><a href="#"> Joss Whedon (screenplay), Zak Penn (story)</a></h5>
            <!-- Heading -->
            <h4><span>Stars</span>:</h4>
            <!-- Stars -->
            <h5><a href="#">Slorm Mckency. ,</a> <a href="#">Maring lawyent ,</a> <a href="#">Lowin cleanting</a></h5>
          </div>
        </div>
      </div>
        <!-- Review -->
        <div class="ui-review">
          <!-- Heading -->
          <h3>Final destination</h3>
          <!-- Paragraph -->
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
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



