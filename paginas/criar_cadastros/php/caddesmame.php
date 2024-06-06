<?php 

	require("../../../banco/conexao.php");




  			$dataD = $_POST['dataD'];
  			
  			$brincoBD = $_POST['brincoBD'];
  			
            $peso = $_POST['peso'];
            
            
        

  			 $resultado = mysqli_query($conexao,"insert into desmame (data_desmame, peso_medio, brinco_bezerro)
  												values ('$dataD', '$peso', '$brincoBD')");

         


  		
  			if(mysqli_affected_rows($conexao) > 0){
  				echo ("$dataD cadastrado com sucesso!!");
  				$redirecionar = "../../listar_cadastros/listaDesmame.php";
  				header("Location: $redirecionar", 3000);

  			}else{
  				echo ("Falha na inclusão!!");
  			}
  			
  			
  			mysqli_close($conexao);
  		?>

?>