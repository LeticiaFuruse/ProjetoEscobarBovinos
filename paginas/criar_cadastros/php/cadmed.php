<?php 

	require("../../../banco/conexao.php");




  			$med = $_POST['med'];
  			
  			$dataCm = $_POST['dataCm'];
  			
        $dataVm = $_POST['dataVm'];
        
        $fabm = $_POST['fabm'];
        
        $lotem = $_POST['lotem'];
        

  			 $resultado = mysqli_query($conexao,"insert into lote_medicamento (data_validade, fabricante, num_lote, cod_med, data_chegada)
  												values ('$dataVm', '$fabm', '$lotem', '$med', '$dataCm')");

         


  		
  			if(mysqli_affected_rows($conexao) > 0){
  				echo ("$nome cadastrado com sucesso!!");
  				$redirecionar = "../../listar_cadastros/listaMedicamentos.php";
  				header("Location: $redirecionar", 3000);

  			}else{
  				echo ("Falha na inclusão!!");
  			}
  			
  			
  			mysqli_close($conexao);
  		?>

?>