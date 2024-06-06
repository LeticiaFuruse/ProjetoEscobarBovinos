<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
	<script src="../../../js/bootstrap.min.js"></script>
	<title>CB | Editar Gestação</title>

<?php

	 include("../../../banco/conexao.php");

    session_start();
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
      header ("location:../../../login.php");
    }
    

       
       


?>
</head>

<style type="text/css">
	
	.container {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;

}

.content {

    background-color: #F0FFF0;
    border-radius: 35px;
    width: 1150px;
    height: 80%;
    justify-content: space-between;
    align-items: center;
    position: relative;
    box-shadow: 10px 8px 8px 8px #3d7a6c;
}

</style>


  <?php

           
            include ("../../../banco/conexao.php");

            
            $cod_gestacao = $_GET['cod_gestacao'];
            
            $resultado = mysqli_query($conexao, "select * from gestacao where cod_gestacao = $cod_gestacao");
            $medi = mysqli_query($conexao, "select * from medicamentos");
            $vac = mysqli_query($conexao, "select * from vacinas");

            $mostra = mysqli_fetch_array($resultado);
            $cod = $mostra['cod_gestacao'];
            $dtCobert = $mostra['data_cobertura'];
            $med = $mostra['medicamentos'];
            $brincoMae = $mostra['brinco_mae'];
            $vacinas = $mostra['vacinas'];
        ?>


<body style="background-color: #F0FFF0;">
		<nav class="navbar navbar-light" style="background-color: #58af9b;">
			<a href="../../../home.php"><img src="../../../img/logo2.png" style=" height: 40px; width: 50px;"></a>
		 	<a class="navbar-brand" style="margin-right: 1120px; font-weight: bold;"> Sistema de Controle de Bovinos - Editar - Gestação </a>
		</nav>
		<br><br>

		

		<form method="POST" action="../php/phpeditagestacao.php" enctype="multipart/form-data">
      <br><br><br>

    <div class="container">
            <div class="content">

              <center>
                <br> <br> <br>

                 <div>
            <input type="hidden" name="cod_gestacao" value="<?php echo ("$cod_gestacao");?>"/>
          </div>

                <h2 style="color: #58af9b; font-weight: bold;"> Editar Gestação</h2>

                 <br>

                 <div class="form-row" style="justify-content: center;">

    <div class="form-group col-md-4">
      <label class="form-group col-md-2" >Vacinas</label>
      <select name="vac" class="form-control" >
        <option> Escolher...</option>

             <?php 
             while($registro = mysqli_fetch_assoc($vac)) { 

                 if($registro['cod_vac'] == $mostra['vacinas']){
                 ?>
                    <option  value = "<?php echo $registro['cod_vac'] ?>" selected> <?php echo $registro['nome'] ?> </option>
                 <?php }else{ ?>
                      <option value = "<?php echo $registro['cod_vac'] ?>"> <?php echo $registro['nome'] ?> </option>
               <?php }
           } ?>
             </select>
 
    </div>


    <div class="form-group col-md-4">
      <label class="form-group col-md-2" >Medicamentos</label>
      <select name="med" class="form-control" >
        <option> Escolher...</option>

             <?php 
             while($registro = mysqli_fetch_assoc($medi)) { 

                 if($registro['cod_med'] == $mostra['medicamentos']){
                 ?>
                    <option  value = "<?php echo $registro['cod_med'] ?>" selected> <?php echo $registro['nome'] ?> </option>
                 <?php }else{ ?>
                      <option value = "<?php echo $registro['cod_med'] ?>"> <?php echo $registro['nome'] ?> </option>
               <?php }
           } ?>
             </select>
 
    </div>


        
        </div>

     

        <div class="form-row" style="justify-content: center;">

        <div class="form-group col-md-4">
          <label for="inputCEP">Data de cobertura</label>
          <input type="date" class="form-control" placeholder="Data" id="inputCEP" name="data" value="<?php echo ("$dtCobert"); ?>">
        </div>

        


      </div>

        <div class="form-row" style="justify-content: center;">

	                 
			    		<div class="form-group col-md-4">
		      <label for="inputCEP">Brinco da mãe</label>
		      <input type="number" class="form-control" placeholder="Brinco" id="inputCEP" name="brincoM" value="<?php echo ("$brincoMae"); ?>">
		    </div>

		     </div>

     
              
         <br>

        

         <br> 
        
  </center>
     
  <button class="btn btn-success" type="submit" name="">-- Editar --</button>

  <p> 


        </div>
      </div>
	 


</form>

</body>
</html>