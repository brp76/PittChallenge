<html>
	<head>
		<title>Video Chat - 24/7 PharmaSee</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	</head>
	<body class="text-center">
		<div class="container-fluid">
			<h1>24/7 PharmaSee</br>
			<small>Professional advice at the touch of a button</small></h1>
		</div>
		<div>
			<video id="localVideo" autoplay></video>
			<video id="remoteVideo" autoplay></video>
		</div>
		<div class="container-fluid">
		    <button id="startButton">Start</button>
		    <button id="callButton">Call</button>
		    <button id="hangupButton">Hang Up</button>
		</div>
		<div class="container-fluid">
			<div class="panel panel-default">
				<div class="panel-body">
					Pharmacist? <a href="login.php">Log in.</a>
				</div>
			</div>
		</div>
		<script src="js/lib/adapter.js"></script>
  		<script src="js/main.js"></script>
	</body>
</html>
