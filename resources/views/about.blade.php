@extends('layout')

@section('content')

<h1>About Us</h1>
<p>The House of Pares is open from Tuesday to Sunday morning until lunch time.<br>We deliver around Badoc Poblacion only. See you KAPARES!<br>
		<ul class="address">
			<li><p class="p.contact">
			<img src="https://cdn.onlinewebfonts.com/svg/img_93271.png" alt="location icon" style="float: center; width: 130px; height: 130px; margin-top:-70px;">
			<br><b>ADDRESS<br><br>The House of Pares</b><br>Brgy. 3 Alogoog <br> Badoc, Ilocos Norte<br>Philippines, 2904</p>
			<li><p class="p.phone">
			<img src="http://cdn.onlinewebfonts.com/svg/img_489303.png" alt="phone icon" style="float: center; width: 130px; height: 130px; margin-top:-70px;">
			<br><b>PHONE<br><br>Contact Us for Delivery</b><br>Smart: 09085831951<br>Globe: 09365589398</p>
			<li><p class="p.email">
			<img src="https://freepngimg.com/download/symbol/64785-icons-envelope-computer-mail-message-email.png" alt="mail icon" style="float: center; width: 130px; height: 130px; margin-top:-70px;">
			<br><b>EMAIL<br><br>For other concerns</b><br>thehouseofpares@gmail.com></p>
		</ul>
<style>
    p{
        text-align: center;
    }
    h1{
	    font-size: 50px;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
	    color: black;
	    font-family: cambria;
	    text-align: center;
	    margin-top: auto;
    }
    .address li{
	    justify-content: flex-end;
	    font-size: 16px;
	    float: left;
	    text-align: center;
	    display: inline-block;
	    padding: 25px 70px;
	    margin-top: 10%;
	    margin-left: 5%;
	    position: relative;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
    }
</style>

@stop