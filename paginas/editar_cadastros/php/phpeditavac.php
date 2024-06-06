
		<?php

					include("../../../banco/conexao.php");

			$cod_lote = $_POST['cod_lote'];

			$cod_vac = $_POST['vac'];

			$dt_c = $_POST['dataCm'];

			$dt_v = $_POST['dataVm'];

			$fabric = $_POST['fabm'];

			$num_lote = $_POST['lotem'];

			
			//fazendo o SQL de alteração de registro na tabela de aluno
			//LEMBRANDO: em um update nunca se esqueça de colocar o where

			$resultado = mysqli_query ($conexao, "update lote_vacina set
			cod_vac = '$cod_vac',
			data_chegada='$dt_c',
			data_validade='$dt_v',
			fabricante='$fabric',
			num_lote='$num_lote'
			where idlote_vacina = $cod_lote;");





			
			//verificando se houve alteração na base de dados
			if (mysqli_affected_rows($conexao) > 0)
			{
				echo "ALTERAÇÃO REALIZADA COM SUCESSO";
				//redirecionando para a pagina do formulario com o codigo do aluno (PK) e mais um
				//parametro que ? o realizada
				$redirecionar = "../../listar_cadastros/listaVac.php";
				header("Location: $redirecionar", 1000);
			}
			else
			{
				

			header("Location: $redirecionar", 1000);

			}

			mysqli_close($conexao);
			?>
