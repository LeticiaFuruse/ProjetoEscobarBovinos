
		<?php

					include("../../../banco/conexao.php");

			$codt = $_POST['cod_term'];

			$brinco = $_POST['brincoTA'];

			$pesos = $_POST['pesoS'];

			$pesoe = $_POST['pesoE'];

			$dt = $_POST['dataA'];


			//fazendo o SQL de alteração de registro na tabela de aluno
			//LEMBRANDO: em um update nunca se esqueça de colocar o where

			$resultado = mysqli_query ($conexao, "update term set
			data_abate='$dt',
			peso_saida='$pesoe',
			peso_entrada='$pesos',
			brinco_term='$brinco'
			where cod_term = $codt;");





			
			//verificando se houve alteração na base de dados
			if (mysqli_affected_rows($conexao) > 0)
			{
				echo "ALTERAÇÃO REALIZADA COM SUCESSO";
				//redirecionando para a pagina do formulario com o codigo do aluno (PK) e mais um
				//parametro que ? o realizada
				$redirecionar = "../../listar_cadastros/listaTerminacao.php";
				header("Location: $redirecionar", 1000);
			}
			else
			{
				header("Location: $redirecionar", 1000);

			}

			mysqli_close($conexao);
			?>
