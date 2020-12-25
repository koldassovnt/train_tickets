<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*, *::after {
	 box-sizing: border-box;
	 margin: 0;
}
 body {
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 min-height: 100vh;
	 color: #454f54;
	 background-color: #f4f5f6;
	 background-image: linear-gradient(to bottom left, #abb5ba, #d5dadd);
}
 .ticket {
	 display: grid;
	 grid-template-rows: auto 1fr auto;
	 max-width: 24rem;
}
 .ticket__header, .ticket__body, .ticket__footer {
	 padding: 1.25rem;
	 background-color: #fff;
	 border: 1px solid #abb5ba;
	 box-shadow: 0 2px 4px rgba(41, 54, 61, 0.25);
}
 .ticket__header {
	 font-size: 1.5rem;
	 border-top: 0.25rem solid #dc143c;
	 border-bottom: none;
	 box-shadow: none;
}
 .ticket__wrapper {
	 box-shadow: 0 2px 4px rgba(41, 54, 61, 0.25);
	 border-radius: 0.375em 0.375em 0 0;
	 overflow: hidden;
}
 .ticket__divider {
	 position: relative;
	 height: 1rem;
	 background-color: #fff;
	 margin-left: 0.5rem;
	 margin-right: 0.5rem;
}
 .ticket__divider::after {
	 content: '';
	 position: absolute;
	 height: 50%;
	 width: 100%;
	 top: 0;
	 border-bottom: 2px dashed #e9ebed;
}
 .ticket__notch {
	 position: absolute;
	 left: -0.5rem;
	 width: 1rem;
	 height: 1rem;
	 overflow: hidden;
}
 .ticket__notch::after {
	 content: '';
	 position: relative;
	 display: block;
	 width: 2rem;
	 height: 2rem;
	 right: 100%;
	 top: -50%;
	 border: 0.5rem solid #fff;
	 border-radius: 50%;
	 box-shadow: inset 0 2px 4px rgba(41, 54, 61, 0.25);
}
 .ticket__notch--right {
	 left: auto;
	 right: -0.5rem;
}
 .ticket__notch--right::after {
	 right: 0;
}
 .ticket__body {
	 border-bottom: none;
	 border-top: none;
}
 .ticket__body > * + * {
	 margin-top: 1.5rem;
	 padding-top: 1.5rem;
	 border-top: 1px solid #e9ebed;
}
 .ticket__section > * + * {
	 margin-top: 0.25rem;
}
 .ticket__section > h3 {
	 font-size: 1.125rem;
	 margin-bottom: 0.5rem;
}
 .ticket__header, .ticket__footer {
	 font-weight: bold;
	 font-size: 1.25rem;
	 display: flex;
	 justify-content: space-between;
}
 .ticket__footer {
	 border-top: 2px dashed #e9ebed;
	 border-radius: 0 0 0.325rem 0.325rem;
}
 
</style>
</head>
<body>
<div class="ticket__divider">
      <div class="ticket__notch"></div>
      <div class="ticket__notch ticket__notch--right"></div>
    </div>
    <div class="ticket__body">
      <div class="ticket__section">
      <h3>
      Owner : <?php echo$user->name ?>
      </h3>
        <h3>Your Ticket Info :</h3>
        <p>Departure time :<?php echo $ticket->departure_time?></p>
        <p>Arrival Time : <?php echo $ticket->arrival_time?></p>
        <p>Trip Duration : <?php echo$ticket->path_time ?></p>

      </div>
      <div class="ticket__section">
        <h3>Train Path</h3>
        <p>From City Code: <?php echo $from_city->city_code?> </p>
        <p>To City Code: <?php echo $to_city->city_code?> </p>
      </div>
      <div class="ticket__section">
        <h3>Payment Method</h3>
        <p>Mastercard **** 8765</p>
      </div>
      <h3>Barcode</h3>
  
       <div>{!! DNS2D::getBarcodeHTML('4445645656', 'QRCODE') !!}</div><br>
    </div>
    <div class="ticket__footer">
      <span>Total Paid</span>
      <span><?php echo $ticket->price?> KZT</span>
    </div>

</body>
</html>