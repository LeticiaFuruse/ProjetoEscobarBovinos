<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
	<script src="../../../js/bootstrap.min.js"></script>
	<title>CB | Cadastrar Vacinas</title>

<?php

	 include("../../../banco/conexao.php");

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
			<a href="../../../home.php"><img src="../../../img/logo2.png" style=" height: 40px; width: 50px;"></a>
		 	<a class="navbar-brand" style="margin-right: 980px; font-weight: bold;"> Sistema de Controle de Bovinos - Cadastre e controle seu gado - Medicamentos e Vacinas </a>
		</nav>
		<br>

		

		<form method="POST" action="../php/cadvac.php" enctype="multipart/form-data">
      <br><br><br>

    <div class="container">
            <div class="content">

              <center>
                <br> <br>

                <h2 style="color: #58af9b; font-weight: bold;"> Cadastro de Vacinas </h2>

                 <br>

                 <div class="form-row" style="justify-content: center;">

                      

        <div class="form-group col-md-4">
          <label class="form-group col-md-2">Vacinas</label>
          <select name="vac" class="form-control">
            <option selected>Escolher ...</option>
                <?php 
                 while($registro = mysqli_fetch_assoc($categoria)) { ?>
                 <option value = "<?php echo $registro['cod_vac'] ?>"> <?php echo $registro['nome'] ?> </option>
                <?php } ?>
          </select>
        </div>


        </div>

        <div class="form-row" style="justify-content: center;">

       

        <div class="form-group col-md-4">
          <label for="inputCEP">Data de chegada</label>
          <input type="date" class="form-control" placeholder="Data" id="inputCEP" name="dataCv" >
        </div>


      </div>
        <div class="form-row" style="justify-content: center;">

	                 
			    		

        <div class="form-group col-md-4">
          <label for="inputCEP">Data de validade</label>
          <input type="date" class="form-control" placeholder="Data" id="inputCEP" name="dataVv" >
        </div>


      </div>
      <div class="form-row" style="justify-content: center;">


       

         <div class="form-group col-md-4">
          <label for="inputCEP">Fabricante</label>
          <input type="text" class="form-control" placeholder="Fabricante" id="inputCEP" name="fabv" >
        </div>



      </div>
      <div class="form-row" style="justify-content: center;">

       

        <div class="form-group col-md-4">
          <label for="inputCEP">Nº do lote</label>
          <input type="text" class="form-control" placeholder="Lote" id="inputCEP" name="lotev" >
        </div>
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