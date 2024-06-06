<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
    <script src="../../../js/bootstrap.min.js"></script>
    <title>CB | Editar Medicamento</title>

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

            
            $cod = $_GET['cod_lote'];

            $resultado = mysqli_query($conexao, "select * from lote_medicamento where idlote_medic = $cod");

            $medic = mysqli_query ($conexao, "select * from medicamentos");

            $mostra = mysqli_fetch_array($resultado);
            
            $cod_lote = $mostra['idlote_medic'];

            $cod_med = $mostra['cod_med'];

            $dt_valid = $mostra['data_validade'];

            $dt_cheg = $mostra['data_chegada'];

            $fabric = $mostra['fabricante'];

            $num_lote = $mostra['num_lote'];



        ?>

<body style="background-color: #F0FFF0;">
        <nav class="navbar navbar-light" style="background-color: #58af9b;">
            <a href="home.php"><img src="../../../img/logo2.png" style=" height: 40px; width: 50px;"></a>
            <a class="navbar-brand" style="margin-right: 1228px; font-weight: bold;"> Sistema de Controle de Bovinos - Cadastre e controle seu gado </a>
        </nav>
        <br> <br>

        <form method="POST" action="../php/phpeditamedica.php" enctype="multipart/form-data">
      <br><br><br>

        <div>
            <input type="hidden" name="cod_lote" value="<?php echo ("$cod_lote");?>"/>
          </div>

    <div class="container">
            <div class="content">

              <center>
                <br> <br>
                <h2 style="color: #58af9b; font-weight: bold;">Editar de Medicamentos</h2>
                 <br>
                 <div class="form-row" style="justify-content: center;">

                      <div class="form-group col-md-4">
          <label>Medicamentos</label>
          <select name="med" class="form-control" >
        <option> Escolher...</option>

             <?php 
             while($registro = mysqli_fetch_assoc($medic)) { 

                 if($registro['cod_med'] == $mostra['cod_med']){
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
          <label for="inputCEP">Data de chegada</label>
          <input type="date" class="form-control" value="<?php echo ("$dt_cheg"); ?>" placeholder="Data" id="inputCEP" name="dataCm" >
        </div>

      </div>
        <div class="form-row" style="justify-content: center;">
                   
              <div class="form-group col-md-4">
          <label for="inputCEP">Data de validade</label>
          <input type="date" class="form-control" value="<?php echo ("$dt_valid"); ?>" placeholder="Data" id="inputCEP" name="dataVm" >
        </div>

      </div>
      <div class="form-row" style="justify-content: center;">

        <div class="form-group col-md-4">
          <label for="inputCEP">Fabricante</label>
          <input type="text" class="form-control" value="<?php echo ("$fabric"); ?>" placeholder="Fabricante" id="inputCEP" name="fabm" >
        </div>
      </div>
      <div class="form-row" style="justify-content: center;">

        <div class="form-group col-md-4">
          <label for="inputCEP">Nº do lote</label>
          <input type="text" class="form-control" value="<?php echo ("$num_lote"); ?>" placeholder="Lote" id="inputCEP" name="lotem" >
        </div>
      </div>
            
         <br> <br>      
  
     
  <button class="btn btn-success" type="submit" name="">-- Editar --</button>
</center>
  <p> 
        </div>
      </div> 
</form>


</body>
</html>