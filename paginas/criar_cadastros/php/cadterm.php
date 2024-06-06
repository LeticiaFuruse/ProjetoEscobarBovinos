<?php 

	require("../../../banco/conexao.php");




  			$dataA = $_POST['dataA'];
  			
  			$brincoTA = $_POST['brincoTA'];
  			
            $pesoS = $_POST['pesoS'];

            $pesoE = $_POST['pesoE'];
            
            
        

  			 $resultado = mysqli_query($conexao,"insert into term (data_abate, peso_saida, peso_entrada, brinco_term)
  												values ('$dataA', '$pesoS', '$pesoE', '$brincoTA')");

         


  		
  			if(mysqli_affected_rows($conexao) > 0){
  				echo ("$dataA cadastrado com sucesso!!");
  				$redirecionar = "../../listar_cadastros/listaTerminacao.php";
  				header("Location: $redirecionar", 3000);

  			}else{
  				echo ("Falha na inclusão!!");
  			}
  			
  			
  			mysqli_close($conexao);
  		?>

?>