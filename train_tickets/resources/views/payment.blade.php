@extends('layouts.app')

@section('title')
Payment
@endsection
@include('include.header')
@section('content')

<style>
/* If you like this, please check my blog at codedgar.com.ve */
@import url('https://fonts.googleapis.com/css?family=Work+Sans');
body{
font-family: 'Work Sans', sans-serif;
background-color: #F3F2F3; 
background: -webkit-linear-gradient(to right, #F3F2F3, #F3F2F3); 
background: linear-gradient(to right, #F3F2F3, #F3F2F3); 
  /* Thanks to uigradients :) */
}

.card{
  background:#16181a;  border-radius:14px; max-width: 300px; display:block; margin:auto;
  padding:60px; padding-left:20px; padding-right:20px;box-shadow: 2px 10px 40px black; z-index:99;
}

.logo-card{max-width:50px; margin-bottom:15px; margin-top: -19px;}

label{display:flex; font-size:10px; color:white; opacity:.4;}

input{font-family: 'Work Sans', sans-serif;background:transparent; border:none; border-bottom:1px solid transparent; color:#dbdce0; transition: border-bottom .4s;}
input:focus{border-bottom:1px solid #1abc9c; outline:none;}

.cardnumber{display:block; font-size:20px; margin-bottom:8px; }

.name{display:block; font-size:15px; max-width: 200px; float:left; margin-bottom:15px;}

.toleft{float:left;}
.ccv{width:50px; margin-top:-5px; font-size:15px;}

.receipt{background: #dbdce0; border-radius:4px; padding:5%; padding-top:200px; max-width:600px; display:block; margin:auto; margin-top:-180px; z-index:-999; position:relative;}

.col{width:50%; float:left;}
.bought-item{background:#f5f5f5; padding:2px;}
.bought-items{margin-top:-3px;}

.cost{color:#3a7bd5;}
.seller{color: #3a7bd5;}
.description{font-size: 13px;}
.price{font-size:12px;}
.comprobe{text-align:center;}
.proceed{position:absolute; transform:translate(300px, 10px); width:50px; height:50px; border-radius:50%; background:#1abc9c; border:none;color:white; transition: box-shadow .2s, transform .4s; cursor:pointer;}
.proceed:active{outline:none; }
.proceed:focus{outline:none;box-shadow: inset 0px 0px 5px white;}
.sendicon{filter:invert(100%); padding-top:2px;}

@media (max-width: 600px){
  .proceed{transform:translate(250px, 10px);}
  .col{display:block; margin:auto; width:100%; text-align:center;}
}
</style>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container" style="margin-top:10px;">
  <div class="card">
       <form id="form-submit" action="{{url('/buy')}}" method="get">
<input type="hidden" value="<?php echo $ticket->ticket_id?>" name="ticket_id">
    <button class="proceed"><svg class="sendicon" width="24" height="24" viewBox="0 0 24 24">
   
  <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
</svg></button>
   <img src="https://seeklogo.com/images/V/VISA-logo-62D5B26FE1-seeklogo.com.png" class="logo-card">
 <label>Card number:</label>
 <input id="user" type="text" class="input cardnumber"  placeholder="1234 5678 9101 1121" required>
 <label>Name:</label>
 <input class="input name"  placeholder="Edgar Pérez" value = "<?php echo $current_user->name;?>" >
 <label class="toleft">CCV:</label>
 <input class="input toleft ccv" placeholder="321" required>
 </form>
  </div>

  <div class="receipt">
    <div class="col"><p>Cost:</p>
    <h2 class="cost"><?php echo $ticket->price;?> KZT</h2><br>
    <p> Train Name:</p>
    <h2 class="seller"><?php echo App\Models\Train::find($ticket->train_id)->train_name?></h2>
    </div>
    <div class="col">
      <p>Bought Ticket:</p>
      <h3 class="bought-items"><?php echo App\Models\City::find($ticket->from_city_id)->city_name?> - <?php echo App\Models\City::find($ticket->to_city_id)->city_name?> </h3>
 
      <p class="bought-items price">Departure time : {{$ticket->departure_time}}</p>
      <p class="bought-items price">Arrival time : {{$ticket->arrival_time}}</p>
      
    </div>
    <p class="comprobe">This information will be sended to your email</p>
  </div>
</div>

<br>
<br>
@endsection


