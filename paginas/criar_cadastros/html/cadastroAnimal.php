<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<title>CB | Cadastrar animal</title>

<?php

	 include("../../../banco/conexao.php");
    //verifica se o usuario esta logado
    session_start();
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
      header ("location:../../../login.php");
    }
    
        //cria um variavel para selecionar os dados
        $categorias = mysqli_query ($conexao, "select * from tipo");
        $categ = mysqli_query ($conexao, "select * from raca");

?>
</head>

<style type="text/css">
	
	.container {
    display: flex;
    justify-content: center;
    align-items: center;
 
}

.content {
    background-color: #F0FFF0;
    border-radius: 35px;
    width: 900px;
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
		 	<a class="navbar-brand" style="margin-right: 1228px; font-weight: bold;"> Sistema de Controle de Bovinos - Cadastre e controle seu gado </a>
		</nav>
		<br>

		<br>

		<form method="POST" action="../php/cadAnimal.php" enctype="multipart/form-data">

<div class="container">
        <div class="content">

 <br> 
  <center>

      <h2 style="color: #58af9b; font-weight: bold;"> Cadastre seu animal </h2>

       <br> 
    

     <div class="form-group col-md-4">
      <label for="inputCEP">Brinco do animal</label>
      <input type="number" class="form-control" id="inputCEP" placeholder="Brinco" name="brinco" required>
    </div>

    <div class="form-group col-md-4">
      <label for="inputCEP">Brinco da mãe</label>
      <input type="number" class="form-control" id="inputCEP" placeholder="Brinco da mãe" name="brincoM">
    </div>


     <div class="form-group col-md-4">
      <label for="inputCEP">Data de nascimento</label>
      <input type="date" class="form-control" placeholder="Data" id="inputCEP" name="data" required>
    </div>

    <div class="form-group col-md-4">
      <label for="inputCEP">Origem</label>
      <input type="text" class="form-control" id="inputCEP" placeholder="Origem" name="origem">
    </div>

    <div class="form-row" style="justify-content: center;">
    <div class="form-group col-md-2">
      <label for="inputCEP">Peso</label>
      <input type="text" class="form-control" id="inputCEP" placeholder="Peso" name="peso">
    </div>

    <div class="form-group col-md-2">
      <label for="inputCEP">Sexo</label>
      <input type="text" class="form-control" id="inputCEP" placeholder="Sexo" name="sexo">
    </div>

    </div>


   <div class="form-row" style="justify-content: center;">
    <div class="form-group col-md-4">
      <label class="form-group col-md-2">Tipo</label>
      <select name="tipo" class="form-control">
        <option selected>Escolher...</option>
        		<?php 
            //cria um select referente aos dados do banco para tipo
		         while($registro = mysqli_fetch_assoc($categorias)) { ?>
		         <option value = "<?php echo $registro['cod_tipo'] ?>"> <?php echo $registro['tipo'] ?> </option>
		        <?php } ?>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label class="form-group col-md-2" >Raça</label>
      <select name="raca" class="form-control" >
        <option selected>Escolher...</option>
        
		        <?php 
            //cria um select referente aos dados do banco para raca
		         while($registro = mysqli_fetch_assoc($categ)) { ?>
		         <option value = "<?php echo $registro['cod_raca'] ?>"> <?php echo $registro['raca'] ?> </option>
		        <?php } ?>

      </select>
    </div>
    </div>
 	 
   <button class="btn btn-success" type="submit" name="selecioneimagem">  Salvar  </button>
    <p>



</div>

</div>

</center>
	

</form>

</body>
</html>