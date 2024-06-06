<?php 

	require("../../../banco/conexao.php");


      

  			
  			$vac = $_POST['vac'];
  			
  			$dataCv = $_POST['dataCv'];
        
        $dataVv = $_POST['dataVv'];
        
        $fabv = $_POST['fabv'];
        
        $lotev = $_POST['lotev'];



         $resultado = mysqli_query($conexao,"insert into lote_vacina (data_validade, fabricante, num_lote, cod_vac, data_chegada)
                          values ('$dataVv', '$fabv', '$lotev', '$vac', '$dataCv')");



  		
  			if(mysqli_affected_rows($conexao) > 0){
  				echo ("$nome cadastrado com sucesso!!");
  				$redirecionar = "../../listar_cadastros/listaVac.php";
  				header("Location: $redirecionar", 3000);

  			}else{
  				echo ("Falha na inclusão!!");
  			}
  			
  			
  			mysqli_close($conexao);
  		?>

?>