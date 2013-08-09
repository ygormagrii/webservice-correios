<?php
	
	# Codificacao para UTF-8
	ini_set('default_charset', 'UTF-8');

	#Importacao da classe dos correios
	include_once('class/correios.class.php');

	#Utilizacao da classe

	$frete = new Correios();
	$frete->servico     = '40010';
	$frete->cepOrigem   = '03061030';
	$frete->cepDestino  = '83411040';
	$frete->peso        = '2';
	$frete->formato     = '1';
	$frete->comprimento = '30';
	$frete->altura      = '11';
	$frete->largura     = '11';
	$frete->diametro    = '30';
	$frete->maoPropria  = 'N';

	$frete->calc();
