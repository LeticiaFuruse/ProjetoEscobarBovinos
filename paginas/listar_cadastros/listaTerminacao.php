<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/styleLista.css">
	<title>CB | Lista de Terminações </title>



</head>
<body>

	<?php

	include("../../banco/conexao.php");

	$resultado = mysqli_query($conexao, "select * from term");





	?>

<script type="text/javascript">
    

function confirmacao(id) {
     var resposta = confirm("Deseja remover esse registro?");
     console.log(resposta);
     if (resposta == true) {
          window.location.href = "../excluir_cadastros/excluirTerminacao.php?cod_term="+id;
     }else if (resposta == false){
      window.location.href = "listaTerminacao.php";
     }
}
</script>



<nav>
	<ul>
		<li><a href="home.php">Home</a></li>
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
      <label for="acc-close" class="box-title">Lista de Terminação </label>
    </header>

    <?php  
  				
  				for($i=0; $i<mysqli_num_rows($resultado); $i++){
  					
  					$mostra = mysqli_fetch_array($resultado);

  					$cod_term = $mostra['cod_term'];

            $pesoe = $mostra['peso_entrada'];

            $pesos = $mostra['peso_saida'];

            $dt_abate = $mostra['data_abate'];

  					$brinco = $mostra['brinco_term'];

  			    $id = "cb".($i+1);

  			?>




  	<nav class="accordion arrows">
    <input type="radio" name="accordion" id="<?php echo $id; ?>"/> 
    <section class="box">
      <label class="box-title" for="<?php echo $id; ?>" ><font>Gado | Brinco: <?php echo("$brinco");?></font></label>
      <label class="box-close" for="acc-close"></label>
      <div class="box-content">

      	<font>Data de Abate: <?php echo("$dt_abate");?></font>
      	<br>

      	<font>Peso de Entrada: <?php echo("$pesoe");?></font>
      	<br>

      	<font>Peso de Saída: <?php echo("$pesos");?></font>
      	<br>

      	<br>	<br>


				<a class="btn btn-primary" href="../editar_cadastros/html/editaterm.php?cod_term=<?php echo("$cod_term"); ?>"  style="background-color: rgba(30, 100, 200, 0.8); color: white; border-radius: 2px; cursor: pointer; padding: 6px; text-decoration: none; border-radius: 3px; margin-left: 6px; justify-content: center;"role="button">Editar</a>

		
				<a class="btn btn-primary" href="#" style="background-color: rgba(255, 20, 30, 0.8); color: white; border-radius: 2px; cursor: pointer; padding: 6px; text-decoration: none;  border-radius: 3px; margin-left: 6px;  justify-content: center;"role="button" onclick="confirmacao(<?php echo("$cod_term"); ?>)">Excluir</a> <br>

        
				
 
      </div>
    </section>
    

    <input type="radio" name="accordion" id="acc-close" />

      </nav> 
		<?php
			
  				}

  				?>
</body>
</html>