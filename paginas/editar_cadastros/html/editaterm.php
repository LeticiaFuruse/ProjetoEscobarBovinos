<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
    <script src="../../../js/bootstrap.min.js"></script>
    <title>CB | Editar Terminação</title>

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

            
            $cod_term = $_GET['cod_term'];

            $resultado = mysqli_query($conexao, "select * from term where cod_term = $cod_term");

            

            


            
            $mostra = mysqli_fetch_array($resultado);


           
            $cod_term = $mostra['cod_term'];

            $pesoe = $mostra['peso_entrada'];

            $pesos = $mostra['peso_saida'];

            $dt_abate = $mostra['data_abate'];

            $brinco = $mostra['brinco_term'];

        ?>

<body style="background-color: #F0FFF0;">
        <nav class="navbar navbar-light" style="background-color: #58af9b;">
            <a href="../../../home.php"><img src="../../../img/logo2.png" style=" height: 40px; width: 50px;"></a>
            <a class="navbar-brand" style="margin-right: 1228px; font-weight: bold;"> Sistema de Controle de Bovinos - Cadastre e controle seu gado </a>
        </nav>
        <br>

        <br>

          <form method="POST" action="../php/phpeditaterminacao.php" enctype="multipart/form-data">
      <br><br><br>

        <div>
            <input type="hidden" name="cod_term" value="<?php echo ("$cod_term");?>"/>
          </div>

    <div class="container">
            <div class="content">

              <center>
                <br> <br>

                <h2 style="color: #58af9b; font-weight: bold;"> Cadastro da Terminação</h2>

                 <br>
              
        <div class="form-row" style="justify-content: center;">
        <div class="form-group col-md-4">
          <label for="inputCEP">Data do abate</label>
          <input type="date" class="form-control" value="<?php echo ("$dt_abate"); ?>" placeholder="Data" id="inputCEP" name="dataA" >
        </div>


      </div>

        <div class="form-row" style="justify-content: center;">
  

        <div class="form-group col-md-4">
          <label for="inputCEP">Peso de entrada</label>
          <input type="text" class="form-control" value="<?php echo ("$pesoe"); ?>" placeholder="Peso" id="inputCEP" name="pesoE" >
        </div>

      </div>

        <div class="form-row" style="justify-content: center;">

                     
        <div class="form-group col-md-4">
          <label for="inputCEP">Peso de saída</label>
          <input type="text" class="form-control" value="<?php echo ("$pesos"); ?>" placeholder="Peso" id="inputCEP" name="pesoS" >
        </div>

      </div>
      
       <div class="form-row" style="justify-content: center;">

        <div class="form-group col-md-4">
          <label for="inputCEP">Brinco do animal</label>
          <input type="number" class="form-control" value="<?php echo ("$brinco"); ?>" placeholder="Brinco" id="inputCEP" name="brincoTA" >
        </div>
      </div>                
              
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