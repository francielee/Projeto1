<?php
	try {
		$conexao = new \PDO("mysql:host=projeto2;dbname=pdo","root","root");
	} catch (\PDOException $e) {
		die("Erro código: ".$e->getCode().": ".$e->getMessage());
	}
?>