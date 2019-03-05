<?php 
	session_start();
?>

<html>
<head>
<meta charset="utf-8">
<title>RentNow</title>
	<link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    

</head>
<body>

<?php include 'header.php';?>

    
<div class="body" style="height:100%" >
	<div id="contentMain" style="height:100%">
		<div style="height: 45%;font-size: 20px" align="center">
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
			<h2 >I want to</h2>
		</div>
		<div style="height: 47%; width: 100%; display: flex">
				<div class="mainChoose" style="width: 50%;">
					<input class ="btn btn-success" type="button" value="Rent a Vehical" style="width: 130px;height: 50px;margin-left: 37%;margin-top: 20px"/>
					<div align="center" style="width: 80%;margin-left: 10%">
						<p class="chooseTxt">
							Have you a vehicle for rent? Then this section for you. Click the <strong>Rent a Vehicle</strong> Button.
						</p>
					</div>
				</div>
				<div class="mainChoose" style="width: 50%;" >
					<input class ="btn btn-info" type="button" value="Hire a Vehical" style="width: 130px;height: 50px;margin-left: 37%;margin-top: 20px"/>
					<div align="center" style="width: 80%;margin-left: 10%">
						<p class="chooseTxt">
							Are you want a vehicle for rent quickly. Click <strong>Hire a Vehicle</strong> Button.
						</p>
					</div>
				</div>
		</div>
	</div>
	<div class="right-col">
		<div align="center" style="margin-top: 40%">
			<h3 id="vehicleCount" style="margin-bottom: 0px">234,789</h3>
			<p style="margin-top: 0px"> Registered Vehicles</p>
		</div>
	</div>
</div>
</body>
<script src="js/func.js"></script>
<script src='js/formSubmit.js'></script>
<script src="js/bootstrap.min.js"></script>
</html>
