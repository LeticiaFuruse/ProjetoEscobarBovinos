<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
    <script src="../../../js/bootstrap.min.js"></script>
    <title>CB | Editar Parto</title>

<?php

     include("../../../banco/conexao.php");

    session_start();
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
      header ("location:../../../login.php");
    }
    

        $parto = mysqli_query ($conexao, "select * from parto");
        

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

            
            $cod_parto = $_GET['cod_parto'];

            $resultado = mysqli_query($conexao, "select * from parto where cod_parto = $cod_parto");


            
            $mostra = mysqli_fetch_array($resultado);

              $cod_parto = $mostra['cod_parto'];

              $dt_parto = $mostra['data_parto'];

              $cod_animal = $mostra['cod_animal'];

              $cod_gestacao = $mostra['cod_gestacao'];

              $vivo_morto = $mostra['vivo_morto'];

              $brinco_bezerro = $mostra['brinco_bezerro'];

              $peso_bezerro = $mostra['peso'];
         
        ?>

<body style="background-color: #F0FFF0;">
        <nav class="navbar navbar-light" style="background-color: #58af9b;">
            <a href="home.php"><img src="../../../img/logo2.png" style=" height: 40px; width: 50px;"></a>
            <a class="navbar-brand" style="margin-right: 1228px; font-weight: bold;"> Sistema de Controle de Bovinos - Cadastre e controle seu gado </a>
        </nav>
        <br>

        <br>

        <form method="POST" action="../php/phpeditaparto.php" enctype="multipart/form-data">

          <br><br><br>

    <div class="container">
            <div class="content">

              <center>
                <br> <br>

                <h2 style="color: #58af9b; font-weight: bold;"> Editar Parto</h2>

                 <br>

              
        <div class="form-row" style="justify-content: center;">

        <div>
            <input type="hidden" name="cod_parto" value="<?php echo ("$cod_parto");?>"/>
          </div>

        <div class="form-group col-md-4">
          <label for="inputCEP">Data do parto</label>
          <input type="date" class="form-control" placeholder="Data" id="inputCEP" value="<?php echo ("$dt_parto"); ?>" name="dataP" >
        </div>


      </div>
        <div class="form-row" style="justify-content: center;">

  
        <div class="form-group col-md-4">
          <label for="inputCEP">Peso do Bezerro</label>
          <input type="number" class="form-control" placeholder="Peso" value="<?php echo ("$peso_bezerro"); ?>" id="inputCEP" name="pesoB" >
        </div>

      </div>
        
        <div class="form-group col-md-4">
          <label for="inputCEP">Brinco </label>
          <input type="text" class="form-control" placeholder="Brinco" id="inputCEP" value="<?php echo ("$brinco_bezerro"); ?>" name="brincoB" >
                </div>
            <div class="form-group col-md-4">
        <label class="form-group col-md-6">Vivo ou morto</label>

      <select name="VM" class="form-control">
        <option selected> Escolher...</option>
        <option value="vivo">Vivo</option>
        <option value="morto">Morto</option>
      </select>


         <br>
         <br>       
 
  <button class="btn btn-success" type="submit" name="">-- Editar --</button>
   </center>   
  <p> 
        </div>
      </div>


</form>

</body>
</html>

