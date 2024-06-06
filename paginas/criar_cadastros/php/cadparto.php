<?php 

	require("../../../banco/conexao.php");




  			$dataP = $_POST['dataP'];
  			
  			$pesoN = $_POST['pesoN'];

        $brinco = $_POST['brincoBe'];
  			
            $vivo_morto = $_POST['VM'];
            
            
        

  			 $resultado = mysqli_query($conexao,"insert into parto (data_parto, brinco_bezerro, peso, vivo_morto)
  												values ('$dataP', '$brinco', '$pesoN', '$vivo_morto')");

         


  		
  			if(mysqli_affected_rows($conexao) > 0){
  				echo ("$dataP cadastrado com sucesso!!");
  				$redirecionar = "../../listar_cadastros/listaParto.php";
  				header("Location: $redirecionar", 3000);

  			}else{
  				echo ("Falha na inclusão!!");
  			}
  			
  			
  			mysqli_close($conexao);
  		?>

?>