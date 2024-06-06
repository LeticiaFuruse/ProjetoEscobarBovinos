
		<?php

					include("../../../banco/conexao.php");

			$codParto = $_POST['cod_parto'];

			$brincoB = $_POST['brincoB'];

			$dt_parto= $_POST['dataP'];

			$peso = $_POST['pesoB'];

			$vivomorto = $_POST['VM'];
			
			print_r($_POST);

			//fazendo o SQL de alteração de registro na tabela de aluno
			//LEMBRANDO: em um update nunca se esqueça de colocar o where


			$resultado = mysqli_query ($conexao, "update parto set
			data_parto='$dt_parto',
			brinco_bezerro='$brincoB',
			peso='$peso',
			vivo_morto='$vivomorto'
			where cod_parto = $codParto;");

			//verificando se houve alteração na base de dados
			if (mysqli_affected_rows($conexao) > 0)
			{
				echo "ALTERAÇÃO REALIZADA COM SUCESSO";
				//redirecionando para a pagina do formulario com o codigo do aluno (PK) e mais um
				//parametro que ? o realizada
				$redirecionar = "../../listar_cadastros/listaParto.php";
				header("Location: $redirecionar", 1000);
			}
			else
			{

				header("Location: $redirecionar", 1000);

			}

			mysqli_close($conexao);
			?>
