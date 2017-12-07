<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title> Jogo de Adivinhar Números </title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <!--materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

    <!-- estilo próprio -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">


</head>
<body class="center">
	<div class="row">
		<header id="cabecalho">
			<nav class="blue darken-2">
			
				<ul>
					<li><a href="index.php">Home</a></li>
				</ul>

			</nav>
		</header>

		<section>
			
			<h1 class="blue-text text-darken-2" id="nomeDoJogo">Jogo de Adivinhar Números</h1>
			<hr>

			
			<?php 
				if (isset($msgSorteio)) {
					echo "<p class='green-text text-darken-4 negrito'> $msgSorteio</p>";
				}

				// Da a dica pro jogador (se o número é maior ou menor que o palpite dele)
				if (isset($dica)) {
					echo "<p class='red-text text-accent-4 negrito'> $dica </p>";
				}


				// Mensagem 
				if (isset($msg)) {
					echo "<p class='green-text text-darken-4 negrito'> $msg </p>";
				}

				// Mensagem de erro
				if (isset($msgErro)) {
					echo "<p class='red-text text-accent-4 negrito'> $msgErro </p>";
				}


				//Diz qual é o número da tentativa para o jogador
				if (isset($_SESSION['tentativa'])) {
					echo "<p> Tentativa Nº" . $_SESSION['tentativa'] . " de 20</p><br><br>";
				}
			?>

			<form method="GET" name="frmJogo">
				
				<label class="blue-text text-darken-2">Palpite:</label>
				<input type="number" name="numero" id="numero" required>

				<a href="destroy.php" class="waves-effect orange darken-1 btn-large">Reiniciar</a>

				<input type="submit" name="enviar" class="waves-effect orange darken-1 btn-large">

			</form>

		</section>

		<footer class="orange darken-1">
			
			<p>Copyright© 2017</p>

		</footer>
	</div>



 
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>