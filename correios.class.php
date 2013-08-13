<?php

class Correios {

	private
	$empresa = '',
	$senha = '',
	$servico = '',
	$cepOrigem = '',
	$cepDestino = '',
	$peso = '',
	$formato = '',
	$comprimento = '',
	$altura = '',
	$largura = '',
	$diametro = '',
	$maoPropria = '',
	$valorDeclarado = '0',
	$avisoRecebimento = 'N',
	$retorno = 'xml';

	public function calculo() {

		$cURL = curl_init(sprintf(
				'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=%s&sDsSenha=%s&nCdServico=%s&sCepOrigem=%s&sCepDestino=%s&nVlPeso=%s&nCdFormato=%s&nVlComprimento=%s&nVlAltura=%s&nVlLargura=%s&nVlDiametro=%s&sCdMaoPropria=%s&nVlValorDeclarado=%s&sCdAvisoRecebimento=%s&StrRetorno=%s',
				$this->empresa,
				$this->senha,
				$this->servico,
				$this->cepOrigem,
				$this->cepDestino,
				$this->peso,
				$this->formato,
				$this->comprimento,
				$this->altura,
				$this->largura,
				$this->diametro,
				$this->maoPropria,
				$this->valorDeclarado,
				$this->avisoRecebimento,
				$this->retorno
		));

		curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
		$string	= curl_exec($cURL);
		curl_close($cURL);
		$xml = simplexml_load_string($string);
		return $xml;
	}
} // endclass
