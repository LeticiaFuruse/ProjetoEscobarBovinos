<?php

					include("../../../banco/conexao.php");

			$cod = $_POST['cod_desmame'];
            
            $dtDes = $_POST['data'];

            $peso = $_POST['peso'];

            $brinco = $_POST['brincoB'];


			$resultado = mysqli_query ($conexao, "update desmame set
			data_desmame='$dtDes',
			peso_medio='$peso',
			brinco_bezerro='$brinco'
			where cod_desmame = $cod;");





			
			//verificando se houve alteração na base de dados
			if (mysqli_affected_rows($conexao) > 0)
			{
				echo "ALTERAÇÃO REALIZADA COM SUCESSO";
				//redirecionando para a pagina do formulario com o codigo do aluno (PK) e mais um
				//parametro que ? o realizada
				$redirecionar = "../../listar_cadastros/listaDesmame.php";
				header("Location: $redirecionar", 1000);
			}
			else
			{
				
				header("Location: $redirecionar", 1000);

			}

			mysqli_close($conexao);
			?>