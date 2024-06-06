	<?php
		include("../../banco/conexao.php");

		$cod_gestacao = $_GET['cod_gestacao'];

		$resultado = mysqli_query ($conexao, "delete from gestacao where cod_gestacao = $cod_gestacao");

		
			$redirecionar = "../listar_cadastros/listaGestacao.php";
			header("Location: $redirecionar", 1000);
			
		
		
	?>
