<?php
	function rotas( $rota ){
		
		$rotas = array(
			'home'    => 'home',
			'empresa' => 'empresa',
			'servico' => 'servico',
			'contato' => 'contato'

		);

		if (array_key_exists($rota, $rotas)) {
			require_once($rotas[$rota].".php");		
		}else{
			echo "<div id='erro'>
			STATUS CODE 404
			</div>";
		}
	}


	$url = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	//$path = str_replace("/projeto1e2-php", "", $rota['path']);
	$rota = explode('/', substr( $url['path'], 1 ) );

	//var_dump($url['path']);

	//var_dump($rota);

	rotas($rota[0]);
?>