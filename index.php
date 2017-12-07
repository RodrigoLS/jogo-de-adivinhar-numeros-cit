<?php 


session_start();

if (!isset($_SESSION['tentativa'])) {

	$_SESSION['tentativa'] = 1;
	$_SESSION['sorteio'] = rand(0,250);
	$msgSorteio = "Seu número já foi sorteado. Tente adivinha-lo.";

}


if (isset($_GET['numero'])) {

	$numero = intval($_GET['numero']);

	if (is_numeric($numero) && is_int($numero)) {
	
		if ($_SESSION['tentativa'] <= 20) {

			if ($numero == $_SESSION['sorteio']) {
				
				$msg = "Parabéns, você acertou meu número em " . $_SESSION['tentativa'] . " tentativa(s).<br>";

				
				if ($_SESSION['tentativa'] == 1) {
					
					$msg .= "Que sorte! <br>";

				} elseif ($_SESSION['tentativa'] > 1 && $_SESSION['tentativa'] <= 10) {

					$msg .= "Muito bem! <br>";

				}

				$msg .= "Reinicie para jogar novamente.";

				$_SESSION['tentativa']++;

			} else {

				if ($numero > $_SESSION['sorteio']) {
					
					$dica = "O meu número é menor. Tente de novo.";

				} else {

					$dica = "O meu número é maior. Tente de novo.";

				}

				$_SESSION['tentativa']++;

			}

		} else {

			unset($_SESSION['tentativa']);
			unset($msgSorteio);
			$msgErro = "Infelizmente você perdeu, meu número foi " . $_SESSION['sorteio'] . ". <br> Reinicie o jogo e tente novamente.";

		} 
	} else {

		$msgErro = "O formato do dado que você inseriu não foi aceito. Insira um número inteiro positivo.";

	}
}


require("template.php");


 ?>