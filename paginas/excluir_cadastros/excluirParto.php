
	<?php
		include("../../banco/conexao.php");

		$cod_parto = $_GET['cod_parto'];

		$resultado = mysqli_query ($conexao, "delete from parto where cod_parto = $cod_parto");

		
			$redirecionar = "../listar_cadastros/listaParto.php";
			header("Location: $redirecionar", 1000);
			
		
		
	?>
