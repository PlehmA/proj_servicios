<!DOCTYPE html>
<html lang="en">
<head>
	<meta author="Andres Plehm">
	<meta charset="UTF-8">
	<title>Servicios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

</head>
<body>
<div class="container">
<h2 class="jumbotron text-center" style="font-family: 'Lobster', cursive; font-size: 40px;"> Bienvenido </h2>
	<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="text-center">Ingreso al sistema</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>
  <div class="col-md-4">
  <input id="username" name="textinput" placeholder="Usuario" class="form-control input-md text-center" type="text">
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput"></label>
  <div class="col-md-4">
    <input id="password" name="passwordinput" placeholder="Contraseña" class="form-control input-md text-center" type="password">
  </div>
</div>

<!-- Button -->
<div class="form-group center-block">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4 cent">
    <button id="ingresar" name="singlebutton" class="btn btn-success active center-block">Ingresar</button>
  </div>
</div>

</fieldset>
</form>
<footer class="modal-footer">
	<p class="text-center"> Copiright &copy<?php echo date('Y', time()) ?> Andres Plehm...</p>
</footer>
</div>
	

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
</body>
</html>