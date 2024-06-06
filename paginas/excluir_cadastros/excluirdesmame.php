	<?php
		include("../../banco/conexao.php");

		$cod_desmame = $_GET['cod_desmame'];

		$resultado = mysqli_query ($conexao, "delete from desmame where cod_desmame = $cod_desmame");

		
			$redirecionar = "../listar_cadastros/listaDesmame.php";
			header("Location: $redirecionar", 1000);
			
		
		
	?>
