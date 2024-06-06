<?php
	$servidor = "localhost";
	$usuario = "root";
	$senhaB = "";
	$banco = "bovinos";

	//para se conectar ao servidor do banco
	$conexao = mysqli_connect($servidor, $usuario, $senhaB, $banco);

	if (!$conexao){
		echo "Erro. Falha na conexão ao Servidor" .PHP_EOL;
		echo "Debungando Erro" .mysqli_connect_errno() .PHP_EOL;
		echo "Debungando Erro" .mysqli_connect_error() .PHP_EOL;
		exit;
	}

?>