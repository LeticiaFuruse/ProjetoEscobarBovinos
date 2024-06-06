<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
	<script src="../../../js/bootstrap.min.js"></script>
	<title>CB | Cadastrar Medicamentos</title>

<?php

	 include("../../../banco/conexao.php");

    session_start();
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
      header ("location:../../../login.php");
    }
    
        //puxar todos os medicamentos cadastrado no banco 
        $categorias = mysqli_query ($conexao, "select * from medicamentos");
       


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
			<a href="home.php"><img src="../../img/logo2.png" style=" height: 40px; width: 50px;"></a>
		 	<a class="navbar-brand" style="margin-right: 980px; font-weight: bold;"> Sistema de Controle de Bovinos - Cadastre e controle seu gado - Medicamentos e Vacinas </a>
		</nav>
		<br>

		

		<form method="POST" action="../php/cadmed.php" enctype="multipart/form-data">
      <br><br><br>

    <div class="container">
            <div class="content">

              <center>
                <br> <br>

                <h2 style="color: #58af9b; font-weight: bold;"> Cadastro de Medicamentos</h2>

                 <br>

                 <div class="form-row" style="justify-content: center;">

                      <div class="form-group col-md-4">
          <label class="form-group col-md-2">Medicamentos</label>
          <select name="med" class="form-control">
            <option selected>Escolher ...</option>
                <?php 
                //puxa as inf da tabela medicamentos para o select
                 while($registro = mysqli_fetch_assoc($categorias)) { ?>
                 <option value = "<?php echo $registro['cod_med'] ?>"> <?php echo $registro['nome'] ?> </option>
                <?php } ?>
          </select>
        </div>

        


        </div>

        <div class="form-row" style="justify-content: center;">

        <div class="form-group col-md-4">
          <label for="inputCEP">Data de chegada</label>
          <input type="date" class="form-control" placeholder="Data" id="inputCEP" name="dataCm" >
        </div>

        


      </div>
        <div class="form-row" style="justify-content: center;">

	                 
			    		<div class="form-group col-md-4">
		      <label for="inputCEP">Data de validade</label>
		      <input type="date" class="form-control" placeholder="Data" id="inputCEP" name="dataVm" >
		    </div>

       

      </div>
      <div class="form-row" style="justify-content: center;">


        <div class="form-group col-md-4">
          <label for="inputCEP">Fabricante</label>
          <input type="text" class="form-control" placeholder="Fabricante" id="inputCEP" name="fabm" >
        </div>




      </div>
      <div class="form-row" style="justify-content: center;">

        <div class="form-group col-md-4">
          <label for="inputCEP">Nº do lote</label>
          <input type="text" class="form-control" placeholder="Lote" id="inputCEP" name="lotem" >
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