
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
	<script src="../../../js/bootstrap.min.js"></script>
	<title>CB | Cadastrar Gestação</title>
  <?php
	  include("../../../banco/conexao.php");

    session_start();
    //verifica se o usuario esta logado
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
      header ("location:../../../login.php");
    }

      //cria uma variavel para receber os dados
      $categorias = mysqli_query ($conexao, "select * from medicamentos");
      $categoria = mysqli_query ($conexao, "select * from vacinas");
      $categ = mysqli_query($conexao, "select * from animal");
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
		 	<a class="navbar-brand" style="margin-right: 1120px; font-weight: bold;"> Sistema de Controle de Bovinos - Cadastre e controle seu gado - Gestação </a>
		</nav>
    
		<br>
    <br>

		<form method="POST" action="../php/cadgestacao.php" enctype="multipart/form-data">
      <br>
      <br>
      <br>

      <div class="container">
        <div class="content">
            <center>
              <br>
              <br>
              <br>
              <h2 style="color: #58af9b; font-weight: bold;"> Cadastro de Gestação</h2>
              <br>

              <div class="form-row" style="justify-content: center;">
                <div class="form-group col-md-4">
                  <label class="form-group col-md-2">Medicamento gestação</label>
                  <select name="medG" class="form-control">
                    <option selected>Escolher ...</option>
                    <?php 
                      //cria um option de select para a tabela medicamentos
                      while($registro = mysqli_fetch_assoc($categorias)) { ?>
                      <option value = "<?php echo $registro['cod_med'] ?>"> <?php echo $registro['nome'] ?> </option>

                    <?php 
                      } 
                      ?>
                  </select>
                </div>

                <div class="form-group col-md-4">
                  <label class="form-group col-md-2">Vacinas gestação</label>
                  <select name="vacG" class="form-control">
                    <option selected>Escolher ...</option>
                    <?php 
                    //cria um option de select para a tabela vacinas
                      while($registro = mysqli_fetch_assoc($categoria)) { ?>
                      <option value = "<?php echo $registro['cod_vac'] ?>"> <?php echo $registro['nome'] ?> </option>
                    <?php 
                      } 
                      ?>
                  </select>
                </div>
              </div>
              <div class="form-row" style="justify-content: center;">
                <div class="form-group col-md-4">
                  <label for="inputCEP">Data de cobertura</label>
                  <input type="date" class="form-control" placeholder="Data" id="inputCEP" name="dataCb" >
                </div>
              </div>
              
              <div class="form-row" style="justify-content: center;">    
                <div class="form-group col-md-4">
                  <label for="inputCEP">Brinco da mãe</label>
                  <input type="number" class="form-control" placeholder="Brinco" id="inputCEP" name="brincoM" >
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