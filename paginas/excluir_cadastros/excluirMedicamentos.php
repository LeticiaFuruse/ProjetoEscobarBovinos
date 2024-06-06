
	<?php
		include("../../banco/conexao.php");

		$cod = $_GET['cod_lote'];

		$resultado = mysqli_query ($conexao, "delete from lote_medicamento where idlote_medic = $cod");

		
			$redirecionar = "../listar_cadastros/listaMedicamentos.php";
			header("Location: $redirecionar", 1000);
			
		
		
	?>
