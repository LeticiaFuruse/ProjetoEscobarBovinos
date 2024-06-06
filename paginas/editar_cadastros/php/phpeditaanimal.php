
		<?php

					include("../../../banco/conexao.php");

			$codAnimal = $_POST['cod_animal'];

			$brinco = $_POST['brinco'];

			$brincoM = $_POST['brincoM'];

			$dtnasc = $_POST['data'];

			$origem = $_POST['origem'];

			$peso = $_POST['peso'];

			$sexo = $_POST['sexo'];

			$tipo = $_POST['tipo'];
			
			$raca = $_POST['raca'];


			//fazendo o SQL de alteração de registro na tabela de aluno
			//LEMBRANDO: em um update nunca se esqueça de colocar o where

			$resultado = mysqli_query ($conexao, "update animal a set
			codMae='$brincoM',
			sexo='$sexo',
			brinco='$brinco',
			peso='$peso',
			data_nasc='$dtnasc',
			origem='$origem',
			cod_tipo='$tipo',
			cod_raca='$raca'
			where cod_animal = $codAnimal;");





			
			//verificando se houve alteração na base de dados
			if (mysqli_affected_rows($conexao) > 0)
			{
				echo "ALTERAÇÃO REALIZADA COM SUCESSO";
				//redirecionando para a pagina do formulario com o codigo do aluno (PK) e mais um
				//parametro que ? o realizada
				$redirecionar = "../../listar_cadastros/listaAnimal.php";
				header("Location: $redirecionar", 1000);
			}
			else
			{
				$redirecionar = "../../listar_cadastros/listaAnimal.php";
				header("Location: $redirecionar", 1000);

			}

			mysqli_close($conexao);
			?>
