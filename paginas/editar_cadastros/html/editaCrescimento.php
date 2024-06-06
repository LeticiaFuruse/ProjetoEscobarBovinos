<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
    <script src="../../../js/bootstrap.min.js"></script>
    <title>CB | Editar Crescimento do Animal </title>

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

            
            $cod_cresc = $_GET['cod_cresc'];

            $resultado = mysqli_query($conexao, "select * from cresc where cod_cresc = $cod_cresc");

            
            $mostra = mysqli_fetch_array($resultado);


            $codcresc = $mostra['cod_cresc'];

            $peso = $mostra['peso_medio'];

            $dt_cresc = $mostra['data_cresc'];

            $brinco = $mostra['brinco_bezerro'];
        ?>

<body style="background-color: #F0FFF0;">
        <nav class="navbar navbar-light" style="background-color: #58af9b;">
            <a href="../../../home.php"><img src="../../../img/logo2.png" style=" height: 40px; width: 50px;"></a>
            <a class="navbar-brand" style="margin-right: 1228px; font-weight: bold;"> Sistema de Controle de Bovinos - Cadastre e controle seu gado </a>
        </nav>
        <br>

        <br>

       
    <form method="POST" action="../php/phpeditacrescimento.php" enctype="multipart/form-data">
      <br><br><br>
       <div>
            <input type="hidden" name="codCresc" value="<?php echo ("$cod_cresc");?>"/>
          </div>

    <div class="container">
            <div class="content">

              <center>
                <br> <br>

                <h2 style="color: #58af9b; font-weight: bold;"> Editar Crescimento</h2>

                 <br>

              
        <div class="form-row" style="justify-content: center;">

       

        <div class="form-group col-md-4">
          <label for="inputCEP">Data da engorda</label>
          <input type="date" class="form-control" value="<?php echo ("$dt_cresc");?>" placeholder="Data" id="inputCEP" name="dataEN" >
        </div>

      </div>

        <div class="form-row" style="justify-content: center;">

        <div class="form-group col-md-4">
          <label for="inputCEP">Peso médio</label>
          <input type="text" class="form-control" value="<?php echo ("$peso");?>" placeholder="Peso" id="inputCEP" name="pesoME" >
        </div>


      </div>

       <div class="form-row" style="justify-content: center;">

        <div class="form-group col-md-4">
          <label for="inputCEP">Brinco do animal</label>
          <input type="number" class="form-control" value="<?php echo ("$brinco");?>" placeholder="Brinco" id="inputCEP" name="brincoA" >
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