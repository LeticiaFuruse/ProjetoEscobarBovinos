<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
	<script src="../../../js/bootstrap.min.js"></script>
	<title>CB | Editar Desmame</title>

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

            
            $cod_desmame = $_GET['cod_desmame'];

            $resultado = mysqli_query($conexao, "select * from desmame where cod_desmame = $cod_desmame");

            


            
            $mostra = mysqli_fetch_array($resultado);


            $cod = $mostra['cod_desmame'];
            
            $dtDes = $mostra['data_desmame'];

            $peso = $mostra['peso_medio'];

            $brinco = $mostra['brinco_bezerro'];
        ?>


<body style="background-color: #F0FFF0;">
		<nav class="navbar navbar-light" style="background-color: #58af9b;">
			<a href="../../../home.php"><img src="../../../img/logo2.png" style=" height: 40px; width: 50px;"></a>
		 	<a class="navbar-brand" style="margin-right: 1120px; font-weight: bold;"> Sistema de Controle de Bovinos - Editar - Desmame </a>
		</nav>
		<br><br>

		

		<form method="POST" action="../php/phpeditadesmame.php" enctype="multipart/form-data">
      <br><br><br>

    <div class="container">
            <div class="content">

              <center>
                <br> <br> <br>

                 <div>
            <input type="hidden" name="cod_desmame" value="<?php echo ("$cod_desmame");?>"/>
          </div>

                <h2 style="color: #58af9b; font-weight: bold;"> Editar Desmame</h2>

                 <br>

                 <

     

        <div class="form-row" style="justify-content: center;">

        <div class="form-group col-md-4">
          <label for="inputCEP">Data do Desmame</label>
          <input type="date" class="form-control" placeholder="Data" id="inputCEP" name="data" value="<?php echo ("$dtDes"); ?>">
        </div>

        


      </div>

        <div class="form-row" style="justify-content: center;">

	                 
			    		<div class="form-group col-md-4">
		      <label for="inputCEP">Peso</label>
		      <input type="number" class="form-control" placeholder="Peso" id="inputCEP" name="peso" value="<?php echo ("$peso"); ?>">
		    </div>

		     </div>


         <div class="form-row" style="justify-content: center;">

                   
              <div class="form-group col-md-4">
          <label for="inputCEP">Brinco do Bezerro</label>
          <input type="number" class="form-control" placeholder="Brinco" id="inputCEP" name="brincoB" value="<?php echo ("$brinco"); ?>">
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