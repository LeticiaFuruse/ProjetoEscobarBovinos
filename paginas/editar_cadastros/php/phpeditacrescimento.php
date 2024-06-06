
		<?php

					include("../../../banco/conexao.php");

			$codCresc = $_POST['codCresc'];

			$dt = $_POST['dataEN'];

			$peso = $_POST['pesoME'];

			$brinco = $_POST['brincoA'];
		


			//fazendo o SQL de alteração de registro na tabela de aluno
			//LEMBRANDO: em um update nunca se esqueça de colocar o where

			$resultado = mysqli_query ($conexao, "update cresc set
			data_cresc='$dt',
			peso_medio='$peso',
			brinco_bezerro='$brinco'
			where cod_cresc = $codCresc;"); 





			
			//verificando se houve alteração na base de dados
			if (mysqli_affected_rows($conexao) > 0)
			{
				echo "ALTERAÇÃO REALIZADA COM SUCESSO";
				//redirecionando para a pagina do formulario com o codigo do aluno (PK) e mais um
				//parametro que ? o realizada
				$redirecionar = "../../listar_cadastros/listaCrescimento.php";
				header("Location: $redirecionar", 1000);
			}
			else
			{
				print_r($_POST);
				header("Location: $redirecionar", 1000);

			}

			mysqli_close($conexao);
			?>
