<?php

					include("../../../banco/conexao.php");

			$cod = $_POST['cod_gestacao'];
            
            $dtCobert = $_POST['data'];

            $med = $_POST['med'];

            $brincoMae = $_POST['brincoM'];

            $vacinas = $_POST['vac'];



			$resultado = mysqli_query($conexao, "update gestacao set
			data_cobertura='$dtCobert',
			medicamentos='$med',
			brinco_mae='$brincoMae',
			vacinas='$vacinas'
			where cod_gestacao = $cod;");





			
			//verificando se houve alteração na base de dados
			if (mysqli_affected_rows($conexao) > 0)
			{
				echo "ALTERAÇÃO REALIZADA COM SUCESSO";
				//redirecionando para a pagina do formulario com o codigo do aluno (PK) e mais um
				//parametro que ? o realizada
				$redirecionar = "../../listar_cadastros/listaGestacao.php";
				header("Location: $redirecionar", 1000);
			}
			else
			{
				$redirecionar = "../../listar_cadastros/listaGestacao.php";
				header("Location: $redirecionar", 1000);

			}

			mysqli_close($conexao);
			?>