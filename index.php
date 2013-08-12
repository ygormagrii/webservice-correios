<html>

<head><title>Calculo frete</title></head>
<body>
<form method="POST" action="index.php">
Origem: <input type="text" name="origem" maxlegth="8">
Destino: <input type="text" name="destino" maxlegth="8">
<input type="submit" value="ok">
</form>
</body>

</html>

<?php
	if (isset($_POST['origem'])) $origem = $_POST['origem'];
	if (isset($_POST['destino'])) $destino = $_POST['destino'];
	
	# Codificacao para UTF-8
	ini_set('default_charset', 'UTF-8');

	#Importacao da classe dos correios
	include_once('class/correios.class.php');

	#Utilizacao da classe

	$frete = new Correios();
	$frete->servico     = '40010';
	$frete->cepOrigem   = $origem;
	$frete->cepDestino  = $destino;
	$frete->peso        = '2';
	$frete->formato     = '1';
	$frete->comprimento = '30';
	$frete->altura      = '11';
	$frete->largura     = '11';
	$frete->diametro    = '30';
	$frete->maoPropria  = 'N';

	$frete->calc();

