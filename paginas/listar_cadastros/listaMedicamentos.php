<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
	<link rel="stylesheet" type="text/css" href="../../css/styleLista.css">
	<title>CB | Lista de Lote de Medicamentos</title>



</head>
<body>

	<?php

	include("../../banco/conexao.php");

	$resultado = mysqli_query($conexao, "select * from lote_medicamento lm inner join medicamentos m on m.cod_med = lm.cod_med");





	?>

<script type="text/javascript">
    

function confirmacao(id) {
     var resposta = confirm("Deseja remover esse registro?");
     console.log(resposta);
     debugger;
     if (resposta == true) {
          window.location.href = "../excluir_cadastros/excluirMedicamentos.php?cod_lote="+id;
     }else if (resposta == false){
      window.location.href = "listaMedicamentos.php";
     }
}
</script>



<nav>
	<ul>
		<li><a href="../../home.php">Home</a></li>
		
		<li><a href="#">Cadastros</a>
			<ul>
				<li><a href="../criar_cadastros/html/cadastroAnimal.php">Cadastro de Animal</a></li>
				<li><a href="../criar_cadastros/html/cadastroGestacao.php">Cadastro de Gestação</a></li>
				<li><a href="../criar_cadastros/html/cadastroParto.php">Cadastro de Parto</a></li>
				<li><a href="../criar_cadastros/html/cadastroDesmame.php">Cadastro de Desmame</a></li>
				<li><a href="../criar_cadastros/html/cadastroCresc.php">Cadastro de Crescimento</a>
				<li><a href="../criar_cadastros/html/cadastroTerm.php">Cadastro de Terminação</a></li>
				</li>
			</ul>
		</li>


		<li><a href="#">Listas</a>
			<ul>
				<li><a href="listaAnimal.php">Lista de Animal</a></li>
				<li><a href="listaGestacao.php">Lista de Gestação</a></li>
				<li><a href="listaParto.php">Lista de Parto</a></li>
				<li><a href="listaDesmame.php">Lista de Desmame</a></li>
				<li><a href="listaCrescimento.php">Lista de Crescimento</a>
				<li><a href="listaTerminacao.php">Lista de Terminação</a></li>
				</li>
			</ul>
		</li>

		<li><a href="#">Vacinas e Medicamentos</a>
			<ul>
			<li><a href="../criar_cadastros/html/cadastroVac.php">Lotes de Vacinas</a></li>
			<li><a href="../criar_cadastros/html/cadastroMed.php">Lotes de Medicamentos</a></li>
			</ul>
		</li>
		<li><a href="#">Listas</a>
			<ul>
				<li><a href="listaVac.php">Lista de Vacinas</a></li>
				<li><a href="listaMedicamentos.php">Lista de Medicamentos</a></li>
				</li>
			</ul>
		</li>
		<li><a href="../../logout.php" style="color: red;">Sair</a></li>
	</ul>
</nav>  
 
  <br>
<nav class="accordion arrows">
	<header class="box">
      <label for="acc-close" class="box-title">Lista de Lote de Medicamentos</label>
    </header>

    <?php  
  				
  				for($i=0; $i<mysqli_num_rows($resultado); $i++){
  					
  					$mostra = mysqli_fetch_array($resultado);

  					$cod_lote = $mostra['idlote_medic'];

            $dt_valid = $mostra['data_validade'];

            $dt_cheg = $mostra['data_chegada'];

            $fabric = $mostra['fabricante'];

            $num_lote = $mostra['num_lote'];

            $nome_med = $mostra['nome'];
           
                    $id = "cb".($i+1);

  			?>




  	<nav class="accordion arrows">
    <input type="radio" name="accordion" id="<?php echo $id; ?>"/> 
    <section class="box">
      <label class="box-title" for="<?php echo $id; ?>" ><font>Medicamento | Lote: <?php echo("$num_lote");?></font></label>
      <label class="box-close" for="acc-close"></label>
      <div class="box-content">

      	<font>Data de Chegada: <?php echo("$dt_cheg");?></font>
      	<br>

        <font>Data de Vencimento: <?php echo("$dt_valid");?></font>
        <br>

      	<font>Fabricante: <?php echo("$fabric");?></font>
      	<br>

      	<font>Nome do Medicamento: <?php echo("$nome_med");?></font>
      	<br>

      	

      	<br>	<br>


				<a class="btn btn-primary" href="../editar_cadastros/html/editalotemedica.php?cod_lote=<?php echo("$cod_lote"); ?>"  style="background-color: rgba(30, 100, 200, 0.8); color: white; border-radius: 2px; cursor: pointer; padding: 6px; text-decoration: none; border-radius: 3px; margin-left: 6px; justify-content: center;"role="button">Editar</a>

		
				<a class="btn btn-primary" href="#" style="background-color: rgba(255, 20, 30, 0.8); color: white; border-radius: 2px; cursor: pointer; padding: 6px; text-decoration: none;  border-radius: 3px; margin-left: 6px;  justify-content: center;"role="button" onclick="confirmacao(<?php echo("$cod_lote"); ?>)">Excluir</a> <br>

        
				
 
      </div>
    </section>
    

    <input type="radio" name="accordion" id="acc-close" />

      </nav> 

		<?php
			
  				}

  				?>

		
     

</body>
</html>