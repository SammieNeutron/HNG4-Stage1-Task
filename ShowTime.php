<!DOCTYPE html>
<html>
<head>
	<title>Show Time</title>
</head>

<style>
	.row{
		/*position: absolute;*/
		width: 100%;
		height: 100px;
		left: 0px;
		top: 0px;

		background: #FFFFFf;
		box-shadow: 0px 0px 0px rgba(112, 105, 105, 0.7);

		margin: 0;
		border: 0;
	}

	.figma {
		position: absolute;
		width: 101px;
		height: 50px;
		left: 60px;
		top: 35px;

		font-family: Open Sans;
		font-style: normal;
		font-weight: normal;
		line-height: normal;
		font-size: 36px;
		text-align: center;

		color: #000000;
	}	
	.links {

		/*position: absolute;*/
		width: 472px;
		height: 50px;
		left: 917px;
		top: 52px;

		font-family: Open Sans;
		font-style: normal;
		font-weight: normal;
		line-height: normal;
		font-size: 30px;
		text-align: center;

		color: #000000;

		display: inline;
		float: right;

	}
	li {
		display: inline;
	}
	.button {
		width: 180px;
		height: 60px;
		background-color: white;
		border-radius: 30px;

		position: absolute;


	   
	}
	.card {
		top: 3%;
		width: 250px;
		height: 250px;
		background-color: white;
		border-radius: 50%;
	}
	.footer {
		width: 100%;
		height: 100px;
		/*right: 0px;*/
		bottom: 0px;
		padding-bottom: 0;
		background: #FFFFFf;
		box-shadow: 0px 0px 0px rgba(112, 105, 105, 0.7);

		margin: 0;
		border: 0;
	}
</style>

<body style="background: url(img_bg_2.jpg); background-repeat: no-repeat;">

	<div class="row">
		<div class="figma">
			Figma
		</div>

		<div class="links">
			<ul>
				<li style="">Home |</li>
				<li style="">About |</li>
				<li style="">Gallery |</li>
				<li>Contact</li>
			</ul>
		</div>
	</div>

	<br><br><br>

	<div style="width: 100%; height: 500px;">
		<div style="padding-left: 41%;">
			<div class="button" style="">
				<h3 style="text-align: center; font-size: 20px;">Current Time</h3>
			</div>
		</div>

		<br><br>

		<div style="padding: 5% 0 0 38%">
			<div class="card"> 
				<div style="padding: 45% 0 0 35%; font-weight: bold;"><?php date_default_timezone_set("Africa/Lagos"); 
						echo date("h:i:sa"); ?>					
				</div>
			</div>
		</div>
	</div>

	<div style="bottom: 0; padding-bottom: 0">
		<div class="footer">
			<div style="text-align: center; padding-top: 40px"><b>&copy; Copyright <?php echo date("Y") ?></b></div>
		</div>
	</div>

</body>
</html>