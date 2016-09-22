<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Генератор htpaswd</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
	
</head>
<body>
<nav class="teal darken-4" role="navigation">
	<div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Promedia</a>
		<ul class="right hide-on-med-and-down">
			<li><a href="#">Владимир</a></li>
		</ul>
		<ul id="nav-mobile" class="side-nav" style="transform: translateX(-100%);">
			<li><a href="#">Красносельских</a></li>
		</ul>
		<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
	</div>
</nav>
<div class="section no-pad-bot" id="index-banner">
	<div class="container">
		<br><br>
		<h1 class="header center orange-text">Crypt.htapasswd</h1>
		<div class="row center">
			<h5 class="header col s12 light">Генератор паролей для .htapasswd</h5>
		</div>
		<div class="row center">
			<div class="col offset-s2 s8">
				<div class="row center">
					<input class="col s6" type="text" id="clearName" placeholder="Имя пользователя">
					<input class="col s6" type="text" id="clearPassword" placeholder="Пароль">
				</div>
			</div>
		</div>		
		<br><br>
		<div class="row center">
			<p id="result"></p>
		</div>
		<br><br>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>	
<script>
	$(document).ready(function(){
		$('#clearPassword').add('#clearName').change(function(){
			$.ajax({
				url: "crypt.php",
				type: "POST",
				data: {
					pwd: $('#clearPassword').val(),
					name: $('#clearName').val()
				}
			}).done(function(xhr){
				$('#result').html(xhr);
				Materialize.toast('Пароль сгенерирован', 4000)
			})
		})
	})
</script>
	
</body>
</html>