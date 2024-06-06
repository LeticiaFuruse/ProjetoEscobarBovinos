<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
    <script src="../../../js/bootstrap.min.js"></script>
    <title>CB | Cadastrar animal</title>

<?php

     include("../../../banco/conexao.php");

    session_start();
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
      header ("location:../../../login.php");
    }
    

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

 <?php

           
            include ("../../../banco/conexao.php");

            
            $cod_animal = $_GET['cod_animal'];
            $resultado = mysqli_query($conexao, "select * from animal where cod_animal = $cod_animal");
            $tipos = mysqli_query($conexao, "select * from tipo");
            $racas = mysqli_query($conexao, "select * from raca");
            $mostra = mysqli_fetch_array($resultado);


            $cod = $mostra['cod_animal'];
            $brinco = $mostra['brinco'];
            $peso = $mostra['peso'];
            $dtnasc = $mostra['data_nasc'];
            $origem = $mostra['origem'];
            $codtipo = $mostra['cod_tipo'];
            $codraca = $mostra['cod_raca'];
            $codmae = $mostra['codMae'];
            $sexo = $mostra['sexo'];
        ?>

<body style="background-color: #F0FFF0;">
        <nav class="navbar navbar-light" style="background-color: #58af9b;">
            <a href="../../../home.php"><img src="../../../img/logo2.png" style=" height: 40px; width: 50px;"></a>
            <a class="navbar-brand" style="margin-right: 1228px; font-weight: bold;"> Sistema de Controle de Bovinos - Editar - Animal</a>
        </nav>
        <br>

        <br>

        <form method="POST" action="../php/phpeditaanimal.php" enctype="multipart/form-data">

<div class="container">
        <div class="content">

 <br> 
  <center>

      <h2 style="color: #58af9b; font-weight: bold;">  Editar campos do animal </h2>

       <br> 

        <div>
            <input type="hidden" name="cod_animal" value="<?php echo ("$cod_animal");?>"/>
          </div>
  
    
  

     <div class="form-group col-md-4">
      <label for="inputCEP">Brinco do animal</label>
      <input type="number" class="form-control" id="inputCEP" placeholder="Brinco" name="brinco" value="<?php echo ("$brinco"); ?>" required>
    </div>

    <div class="form-group col-md-4">
      <label for="inputCEP">Brinco da mãe</label>
      <input type="number" class="form-control" id="inputCEP" placeholder="Brinco da mãe" value="<?php echo ("$codmae"); ?>" name="brincoM">
    </div>


     <div class="form-group col-md-4">
      <label for="inputCEP">Data de nascimento</label>
      <input type="date" class="form-control" placeholder="Data" id="inputCEP" name="data" value="<?php echo ("$dtnasc"); ?>" required>
    </div>

    <div class="form-group col-md-4">
      <label for="inputCEP">Origem</label>
      <input type="text" class="form-control" id="inputCEP" placeholder="Origem" name="origem" value="<?php echo ("$origem"); ?>">
    </div>

    <div class="form-row" style="justify-content: center;">
    <div class="form-group col-md-2">
      <label for="inputCEP">Peso</label>
      <input type="text" class="form-control" id="inputCEP" placeholder="Peso" name="peso" value="<?php echo ("$peso"); ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="inputCEP">Sexo</label>
      <input type="text" class="form-control" id="inputCEP" placeholder="Sexo" name="sexo" value="<?php echo ("$sexo"); ?>">
    </div>

    </div>


   <div class="form-row" style="justify-content: center;">
    <div class="form-group col-md-4">
      <label class="form-group col-md-2">Tipo</label>
        <select name="tipo" class="form-control">

             <option> Escolher...</option>

             <?php 
             while($registro = mysqli_fetch_assoc($tipos)) { 

                 if($registro['cod_tipo'] == $mostra['cod_tipo']){
                 ?>
                    <option  value = "<?php echo $registro['cod_tipo'] ?>" selected> <?php echo $registro['tipo'] ?> </option>
                 <?php }else{ ?>
                      <option value = "<?php echo $registro['cod_tipo'] ?>"> <?php echo $registro['tipo'] ?> </option>
               <?php }
           } ?>
             </select>
    </div>
    
    <div class="form-group col-md-4">
      <label class="form-group col-md-2" >Raça</label>
      <select name="raca" class="form-control" >
        <option> Escolher...</option>

             <?php 
             while($registro = mysqli_fetch_assoc($racas)) { 

                 if($registro['cod_raca'] == $mostra['cod_raca']){
                 ?>
                    <option  value = "<?php echo $registro['cod_raca'] ?>" selected> <?php echo $registro['raca'] ?> </option>
                 <?php }else{ ?>
                      <option value = "<?php echo $registro['cod_raca'] ?>"> <?php echo $registro['raca'] ?> </option>
               <?php }
           } ?>
             </select>
 
    </div>
    </div>
     
   <button class="btn btn-success" type="submit" name="selecioneimagem">Editar</button>
    <p>



</div>

</div>

</center>
    

</form>

</body>
</html>