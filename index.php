<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>RentNow</title>

	<style>
		body{
			font-family: Arial,Georgia,"Times New Roman";

		}
		li {
			margin-left: 5%;
		}

	</style>

</head>

<body style="margin: 0px">
	<?php require('header.php'); ?>
<div style="width: 100% ; display: flex">
	<div id="contentMain" style="width: 80%;height: 100%;background-color: mediumturquoise">
		<div style="height: 350px;font-size: 20px" align="center">
			<h2 style="margin: 50px">RentNow</h2>
			<p>Now you can find a vehicle to get rent and give your vehicle rent in one place</p>
			<div style="width: 100%">
				<ul style="display: flex ; margin-left: 18%">
					<li >Any Vehicle</li>
					<li >Any time</li>
					<li >Save Time</li>
					<li >Save money</li>
				</ul>
			</div>
			<h2 style="margin-top: 15%">I want to</h2>
		</div>

		<div style="height: 300px; width: 100%; display: flex">
		  <div style="width: 50%; background-color: aqua">
				<input type="button" value="Rent a Vehical" style="width: 130px;height: 50px;margin-left: 37%;margin-top: 20px"/>
				<div align="center" style="width: 80%;margin-left: 10%">
					<p>
						Have you a vehicle for rent? Then this section for you. Click the <strong>Rent a Vehicle</strong> Button.
					</p>
				</div>
		  </div>
			<div style="width: 50%; background-color: deepskyblue" >
				<input type="button" value="Hire a Vehical" style="width: 130px;height: 50px;margin-left: 37%;margin-top: 20px"/>
				<div align="center" style="width: 80%;margin-left: 10%">
					<p>
						Are you want a vehicle for rent quickly. Click <strong>Hire a Vehicle</strong> Button.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div style="width: 20%; background-color: bisque">
		<div align="center" style="margin-top: 40%">
			<h3 id="vehicleCount" style="margin-bottom: 0px">234,789</h3>
			<p style="margin-top: 0px"> Registered Vehicles</p>
		</div>

	</div>
</div>
</body>
<script src="js/func.js"></script>
</html>
