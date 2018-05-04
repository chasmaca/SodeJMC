<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Sodexo</title>
        <meta name="description" content="Aplicacion de Sodexo para la universidad Francisco de Vitoria." />
        <meta name="keywords" content="Francisco de Vitoria, catering, Sodexo" />
        <link rel="shortcut icon" href="images/favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/public/modernizr-custom.js"></script>
		<script src="js/public/jquery.min.js"></script>
		<script src="js/application/login.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			
		</style>
    </head>
    <body>
        <div class="container">
			
			<header>
				<img id="logo" src="https://es.sodexo.com/files/live/sites/sdxcom-es/files/Resources/Images/Logo-Sodexo-158x46.png" alt="Sodexo">
				<h2>Aplicación Sodexo para la Universidad Francisco de Vitoria</h2>
				<div class="support-note">
					<span class="note-ie">Perdon, unicamente esta soportado por navegadores modernos.</span>
				</div>

			</header>
			
			<section class="main">
				<form class="form-1">
					<p class="field">
						<input type="text" name="login" placeholder="Usuario o email">
						<i class="icon-user icon-large"></i>
					</p>
						<p class="field">
							<input type="password" name="password" placeholder="Password">
							<i class="icon-lock icon-large"></i>
					</p>
					<p class="submit">
						<button type="button" name="submit" id="submit"><i class="icon-arrow-right icon-large"></i></button>
					</p>
				</form>
			</section>
        </div>
    </body>
</html>