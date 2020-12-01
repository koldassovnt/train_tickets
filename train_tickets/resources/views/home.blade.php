@extends('layouts.app')

@section('title')
Trainiata
@endsection
@include('include.header')
@section('content')
<section class="banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <div class="submit-form">
                                <h4>Check availability for <em>direction</em>:</h4>
                                <form id="form-submit" action="{{url('/search')}}" method="get">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="from">From:</label>
                                                <select required name='from' onchange='this.form.()' name = "city_from_code">
                                                    <option value="">Select a location...</option>
                                                    @foreach ($cities as $c)
                                                    <option value="<?php echo $c->city_id?>">
                                                    {{$c->city_name}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="to">To:</label>
                                                <select required name='to' onchange='this.form.()' name = "city_to_code">
                                                    <option value="">Select a location...</option>
                                                    @foreach ($cities as $c)
                                                    <option value="<?php echo $c->city_id?>">
                                                    {{$c->city_name}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="departure">Departure date:</label>
                                                <input  type="date" id = "departure"   placeholder="Select date..."  name = "departure_date">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="return">Return date:</label>
                                                <input type="date"  id="return" placeholder="Select date..."   name = "arrival_date">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="radio-select">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <label for="round">Round</label>
                                                        <input type="radio" name="trip" id="round" value="round" required="required"onchange='this.form.()'>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <label for="oneway">Oneway</label>
                                                        <input type="radio" name="trip" id="oneway" value="one-way" required="required"onchange='this.form.()'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="btn">Order Ticket Now</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>


    <div class="tabs-content" id="weather">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Current Weather in Kazakhstan</h2>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="col-md-12">
                        <div class="weather-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="tabs clearfix" data-tabgroup="second-tab-group">
                                        <li><a href="#monday" class="active">South</a></li>
                                        <li><a href="#tuesday">North</a></li>
                                        <li><a href="#wednesday">West</a></li>
                                        <li><a href="#thursday">East</a></li>
                                        <li><a href="#friday">Middle</a></li>
                                    </ul>    
                                </div>
                                <div class="col-md-12">
                                    <section id="second-tab-group" class="weathergroup">
                                        <div id="monday">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="weather-item">
                                                        <h6><?php echo $almaty['location']['name']?></h6>
                                                        <div class="weather-icon">
                                                            <img src="<?php echo $almaty['condition']['icon']?>" alt="">
                                                        </div>
                                                        <span><?php echo $almaty['forecast']['temp']?>&deg;C</span>
                                                        <ul class="time-weather">
                                                            <li>MAX <span><?php echo $almaty['forecast']['temp_max']?>&deg;</span></li>
                                                            <li>MIN <span><?php echo $almaty['forecast']['temp_min']?>&deg;</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="weather-item">
                                                        <h6><?php echo $shymkent['location']['name']?></h6>
                                                        <div class="weather-icon">
                                                            <img src="<?php echo $shymkent['condition']['icon']?>" alt="">
                                                        </div>
                                                        <span><?php echo $shymkent['forecast']['temp']?>&deg;C</span>
                                                        <ul class="time-weather">
                                                            <li>MAX <span><?php echo $shymkent['forecast']['temp_max']?>&deg;</span></li>
                                                            <li>MIN <span><?php echo $shymkent['forecast']['temp_min']?>&deg;</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="weather-item">
                                                        <h6><?php echo $taraz['location']['name']?></h6>
                                                        <div class="weather-icon">
                                                            <img src="<?php echo $taraz['condition']['icon']?>" alt="">
                                                        </div>
                                                        <span><?php echo $taraz['forecast']['temp']?>&deg;C</span>
                                                        <ul class="time-weather">
                                                            <li>MAX <span><?php echo $taraz['forecast']['temp_max']?>&deg;</span></li>
                                                            <li>MIN <span><?php echo $taraz['forecast']['temp_min']?>&deg;</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tuesday">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="weather-item">
                                                        <h6><?php echo $astana['location']['name']?></h6>
                                                        <div class="weather-icon">
                                                            <img src="<?php echo $astana['condition']['icon']?>" alt="">
                                                        </div>
                                                        <span><?php echo $astana['forecast']['temp']?>&deg;C</span>
                                                        <ul class="time-weather">
                                                            <li>MAX <span><?php echo $astana['forecast']['temp_max']?>&deg;</span></li>
                                                            <li>MIN <span><?php echo $astana['forecast']['temp_min']?>&deg;</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="weather-item">
                                                        <h6><?php echo $kokshetau['location']['name']?></h6>
                                                        <div class="weather-icon">
                                                            <img src="<?php echo $kokshetau['condition']['icon']?>" alt="">
                                                        </div>
                                                        <span><?php echo $kokshetau['forecast']['temp']?>&deg;C</span>
                                                        <ul class="time-weather">
                                                            <li>MAX <span><?php echo $kokshetau['forecast']['temp_max']?>&deg;</span></li>
                                                            <li>MIN <span><?php echo $kokshetau['forecast']['temp_min']?>&deg;</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="weather-item">
                                                        <h6><?php echo $qostanay['location']['name']?></h6>
                                                        <div class="weather-icon">
                                                            <img src="<?php echo $qostanay['condition']['icon']?>" alt="">
                                                        </div>
                                                        <span><?php echo $qostanay['forecast']['temp']?>&deg;C</span>
                                                        <ul class="time-weather">
                                                            <li>MAX <span><?php echo $qostanay['forecast']['temp_max']?>&deg;</span></li>
                                                            <li>MIN <span><?php echo $qostanay['forecast']['temp_min']?>&deg;</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="wednesday">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="weather-item">
                                                        <h6><?php echo $oral['location']['name']?></h6>
                                                        <div class="weather-icon">
                                                            <img src="<?php echo $oral['condition']['icon']?>" alt="">
                                                        </div>
                                                        <span><?php echo $oral['forecast']['temp']?>&deg;C</span>
                                                        <ul class="time-weather">
                                                            <li>MAX <span><?php echo $oral['forecast']['temp_max']?>&deg;</span></li>
                                                            <li>MIN <span><?php echo $oral['forecast']['temp_min']?>&deg;</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="weather-item">
                                                        <h6><?php echo $aktau['location']['name']?></h6>
                                                        <div class="weather-icon">
                                                            <img src="<?php echo $aktau['condition']['icon']?>" alt="">
                                                        </div>
                                                        <span><?php echo $aktau['forecast']['temp']?>&deg;C</span>
                                                        <ul class="time-weather">
                                                            <li>MAX <span><?php echo $aktau['forecast']['temp_max']?>&deg;</span></li>
                                                            <li>MIN <span><?php echo $aktau['forecast']['temp_min']?>&deg;</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="weather-item">
                                                        <h6><?php echo $aktobe['location']['name']?></h6>
                                                        <div class="weather-icon">
                                                            <img src="<?php echo $aktobe['condition']['icon']?>" alt="">
                                                        </div>
                                                        <span><?php echo $aktobe['forecast']['temp']?>&deg;C</span>
                                                        <ul class="time-weather">
                                                            <li>MAX <span><?php echo $aktobe['forecast']['temp_max']?>&deg;</span></li>
                                                            <li>MIN <span><?php echo $aktobe['forecast']['temp_min']?>&deg;</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="thursday">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="weather-item">
                                                        <h6><?php echo $oskemen['location']['name']?></h6>
                                                        <div class="weather-icon">
                                                            <img src="<?php echo $oskemen['condition']['icon']?>" alt="">
                                                        </div>
                                                        <span><?php echo $oskemen['forecast']['temp']?>&deg;C</span>
                                                        <ul class="time-weather">
                                                            <li>MAX <span><?php echo $oskemen['forecast']['temp_max']?>&deg;</span></li>
                                                            <li>MIN <span><?php echo $oskemen['forecast']['temp_min']?>&deg;</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="weather-item">
                                                        <h6><?php echo $pavlodar['location']['name']?></h6>
                                                        <div class="weather-icon">
                                                            <img src="<?php echo $pavlodar['condition']['icon']?>" alt="">
                                                        </div>
                                                        <span><?php echo $pavlodar['forecast']['temp']?>&deg;C</span>
                                                        <ul class="time-weather">
                                                            <li>MAX <span><?php echo $pavlodar['forecast']['temp_max']?>&deg;</span></li>
                                                            <li>MIN <span><?php echo $pavlodar['forecast']['temp_min']?>&deg;</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="weather-item">
                                                        <h6><?php echo $semey['location']['name']?></h6>
                                                        <div class="weather-icon">
                                                            <img src="<?php echo $semey['condition']['icon']?>" alt="">
                                                        </div>
                                                        <span><?php echo $semey['forecast']['temp']?>&deg;C</span>
                                                        <ul class="time-weather">
                                                            <li>MAX <span><?php echo $semey['forecast']['temp_max']?>&deg;</span></li>
                                                            <li>MIN <span><?php echo $semey['forecast']['temp_min']?>&deg;</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="friday">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="weather-item">
                                                        <h6><?php echo $zhezqazghan['location']['name']?></h6>
                                                        <div class="weather-icon">
                                                            <img src="<?php echo $zhezqazghan['condition']['icon']?>" alt="">
                                                        </div>
                                                        <span><?php echo $zhezqazghan['forecast']['temp']?>&deg;C</span>
                                                        <ul class="time-weather">
                                                            <li>MAX <span><?php echo $zhezqazghan['forecast']['temp_max']?>&deg;</span></li>
                                                            <li>MIN <span><?php echo $zhezqazghan['forecast']['temp_min']?>&deg;</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="weather-item">
                                                        <h6><?php echo $qaraghandy['location']['name']?></h6>
                                                        <div class="weather-icon">
                                                            <img src="<?php echo $qaraghandy['condition']['icon']?>" alt="">
                                                        </div>
                                                        <span><?php echo $qaraghandy['forecast']['temp']?>&deg;C</span>
                                                        <ul class="time-weather">
                                                            <li>MAX <span><?php echo $qaraghandy['forecast']['temp_max']?>&deg;</span></li>
                                                            <li>MIN <span><?php echo $qaraghandy['forecast']['temp_min']?>&deg;</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="weather-item">
                                                        <h6><?php echo $qyzilorda['location']['name']?></h6>
                                                        <div class="weather-icon">
                                                            <img src="<?php echo $qyzilorda['condition']['icon']?>" alt="">
                                                        </div>
                                                        <span><?php echo $qyzilorda['forecast']['temp']?>&deg;C</span>
                                                        <ul class="time-weather">
                                                            <li>MAX <span><?php echo $qyzilorda['forecast']['temp_max']?>&deg;</span></li>
                                                            <li>MIN <span><?php echo $qyzilorda['forecast']['temp_min']?>&deg;</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item first-service">
                        <div class="service-icon"></div>
                        <h4>Easy Tooplate</h4>
                        <p>
                            Nullam pellentesque mattis dictum. Mauris non velit vitae libero scelerisque elementum sagittis euismod velit.
                        </p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item second-service">
                        <div class="service-icon"></div>
                        <h4>Unique Ideas</h4>
                        <p>
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In vitae efficitur ante, vitae facilisis nulla.
                        </p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item third-service">
                        <div class="service-icon"></div>
                        <h4>Best Support</h4>
                        <p>
                            Vestibulum hendrerit mi vitae nibh vehicula gravida. Nam at iaculis orci. Mauris suscipit enim quis dolor lacinia ornare.
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="most-visited">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Most Visited Places</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="owl-mostvisited" class="owl-carousel owl-theme">
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img width="270" height="230" src="img/almaty-img.jpg" alt="">
                                <div class="text-content">
                                    <h4>Ritz Carlton</h4>
                                    <span>Almaty</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img width="270" height="230" src="img/aktau-img.webp" alt="">
                                <div class="text-content">
                                    <h4>Vestibulum</h4>
                                    <span>Aktau</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img width="270" height="230"  src="img/aktobe-img.jpg" alt="">
                                <div class="text-content">
                                    <h4>Nulla nec eros</h4>
                                    <span>Aktobe</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img width="270" height="230" src="img/almaty2-img.jpg" alt="">
                                <div class="text-content">
                                    <h4>Nam at iaculis</h4>
                                    <span>Almaty</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img width="270" height="230" src="img/astana-img.jpg" alt="">
                                <div class="text-content">
                                    <h4>Mauris</h4>
                                    <span>Astana</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img width="270" height="230" src="img/kokshetau-img.jpg" alt="">
                                <div class="text-content">
                                    <h4>Vivamus</h4>
                                    <span>Kokshetau</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img width="270" height="230" src="img/astana2-img.jpg" alt="">
                                <div class="text-content">
                                    <h4>Etiam ut nibh</h4>
                                    <span>Astana</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img width="270" height="230" src="img/semey-img.jpg" alt="">
                                <div class="text-content">
                                    <h4>In in quam efficitur</h4>
                                    <span>Semey</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img width="270" height="230" src="img/shymkent-img.jpg" alt="">
                                <div class="text-content">
                                    <h4>Sed faucibus odio</h4>
                                    <span>Shymkent</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img width="270" height="230" src="img/ust-kamenogorsk-img.jpg" alt="">
                                <div class="text-content">
                                    <h4>Donec varius porttitor</h4>
                                    <span>Ust-Kamenogorsk</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>

  var x = document.getElementById("departure");
  
  var currentVal = x.value;
  
    x.value = "GET OUT OF MY SWAMP";
  

</script>
@endsection



