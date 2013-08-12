<?php

class Correios {

	public
	$empresa = '',
	$senha = '',
	$servico,
	$cepOrigem,
	$cepDestino,
	$peso,
	$formato,
	$comprimento,
	$altura,
	$largura,
	$diametro,
	$maoPropria,
	$valorDeclarado = '0',
	$avisoRecebimento = 'N',
	$retorno = 'xml';

// 	public $shouldBe = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=&sDsSenha=&sCepOrigem=70002900&sCepDestino=71939360&nVlPeso=1&nCdFormato=1&nVlComprimento=20&nVlAltura=5&nVlLargura=15&sCdMaoPropria=n&nVlValorDeclarado=0&sCdAvisoRecebimento=n&nCdServico=40010&nVlDiametro=0&StrRetorno=xml';

	public function calc() {

		$cURL =/* curl_init(*/sprintf(
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
		/*)*/);
		
				var_dump($cURL);
				echo "<p>";
				echo "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=09146920&sDsSenha=123456&sCepOrigem=70002900&sCepDestino=71939360&nVlPeso=1&nCdFormato=1&nVlComprimento=30&nVlAltura=30&nVlLargura=30&sCdMaoPropria=n&nVlValorDeclarado=0&sCdAvisoRecebimento=n&nCdServico=40010&nVlDiametro=0&StrRetorno=xml";
//  			curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
 		//	$string	= curl_exec($cURL);
 		//var_dump($string);
// 			curl_close($cURL);
// 			$xml = simplexml_load_string($string);
// 			var_dump($xml);
	}

public $error;

public function error() {
if (is_null($this->error))
	return false;
	else
	return $this->error;
}
} // endclass
