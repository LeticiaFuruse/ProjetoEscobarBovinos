<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
	<script src="../../../js/bootstrap.min.js"></script>
	<title>CB | Cadastrar Parto</title>

<?php

	 include("../../../banco/conexao.php");
    //verifica se o usuario esta logado
    session_start();
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
      header ("location:../../../login.php");
    }
    

      
        $categoria = mysqli_query ($conexao, "select * from vacinas");


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

<body style="background-color: #F0FFF0;">
		<nav class="navbar navbar-light" style="background-color: #58af9b;">
			<a href="home.php"><img src="../../../img/logo2.png" style=" height: 40px; width: 50px;"></a>
		 	<a class="navbar-brand" style="margin-right: 1150px; font-weight: bold;"> Sistema de Controle de Bovinos - Cadastre e controle seu gado - Parto </a>
		</nav>
		<br>

		

		<form method="POST" action="../php/cadparto.php" enctype="multipart/form-data">
      <br><br><br>

    <div class="container">
            <div class="content">

              <center>
                <br> <br>

                <h2 style="color: #58af9b; font-weight: bold;"> Cadastro do Parto</h2>

                 <br>

              
        <div class="form-row" style="justify-content: center;">

       

        <div class="form-group col-md-4">
          <label for="inputCEP">Data do parto</label>
          <input type="date" class="form-control" placeholder="Data" id="inputCEP" name="dataP" >
        </div>


      </div>
        <div class="form-row" style="justify-content: center;">

	                 
			    		

        <div class="form-group col-md-4">
          <label for="inputCEP">Peso do Bezerro</label>
          <input type="number" class="form-control" placeholder="Peso" id="inputCEP" name="pesoN" >
        </div>


      </div>
        
        <div class="form-group col-md-4">
          <label for="inputCEP">Brinco </label>
          <input type="text" class="form-control" placeholder="Brinco" id="inputCEP" name="brincoBe" >
        </div>


     


       
        <div class="form-group col-md-4">
        <label class="form-group col-md-6">Vivo ou morto</label>

      <select name="VM" class="form-control">
        <option selected>Escolher ...</option>
        <option value="vivo">Vivo</option>
        <option value="morto">Morto</option>
      </select>
      </div>    
         <br>
         <br> 
  </center>
     
  <button class="btn btn-success" type="submit" name="">-- Salvar --</button>

  <p> 


        </div>
      </div>
	 


</form>

</body>
</html>