<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
	<link rel="stylesheet" type="text/css" href="../../css/styleLista.css">
	<title>CB | Lista de animais</title>



</head>
<body>

	<?php

	include("../../banco/conexao.php");

	$resultado = mysqli_query($conexao, "select * from animal a inner join tipo t on a.cod_tipo = t.cod_tipo inner join raca r on a.cod_raca = r.cod_raca");





	?>

<script type="text/javascript">
    

function confirmacao(id) {
     var resposta = confirm("Deseja remover esse registro?");
     
     if (resposta == true) {
          window.location.href = "../excluir_cadastros/excluiranimal.php?cod_animal="+id;
     }else if (resposta == false){
      window.location.href = "listaAnimal.php";
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

	
	<br><br>
<nav class="accordion arrows">
	<header class="box">
      <label for="acc-close" class="box-title">Lista de Gados</label>
    </header>

    <?php  
  				
  				for($i=0; $i<mysqli_num_rows($resultado); $i++){
  					
  					$mostra = mysqli_fetch_array($resultado);

  					$cod_animal = $mostra['cod_animal'];

  					$brinco = $mostra['brinco'];

  					$peso = $mostra['peso'];

  					$dtnasc = $mostra['data_nasc'];

  					$origem = $mostra['origem'];

  					$tipo = $mostra['tipo'];

  					$raca = $mostra['raca'];

  					$codmae = $mostra['codMae'];

  					$sexo = $mostra['sexo'];
           
                    $id = "cb".($i+1);

  			?>



  	<nav class="accordion arrows">
    <input type="radio" name="accordion" id="<?php echo $id; ?>"/> 
    <section class="box">
      <label class="box-title" for="<?php echo $id; ?>" ><font>Gado | Brinco: <?php echo("$brinco");?></font></label>
      <label class="box-close" for="acc-close"></label>
      <div class="box-content">

      	<font>Data de Nascimento: <?php echo("$dtnasc");?></font>
      	<br>

      	<font>Origem: <?php echo("$origem");?></font>
      	<br>

      	<font>Sexo: <?php echo("$sexo");?></font>
      	<br>

      	<font>Brinco da mãe: <?php echo("$codmae");?></font>
      	<br>

      	<font>Tipo: <?php echo("$tipo");?></font>
      	<br>

      	<font>Raça: <?php echo("$raca");?></font>

      	<br><br>
				<a class="btn btn-primary" href="../editar_cadastros/html/editaanimal.php?cod_animal=<?php echo("$cod_animal"); ?>"  style="background-color: rgba(30, 100, 200, 0.8); color: white; border-radius: 2px; cursor: pointer; padding: 6px; text-decoration: none; border-radius: 3px; margin-left: 6px; justify-content: center;"role="button">Editar</a>

				<a class="btn btn-primary" href="#" style="background-color: rgba(255, 20, 30, 0.8); color: white; border-radius: 2px; cursor: pointer; padding: 6px; text-decoration: none;  border-radius: 3px; margin-left: 6px;  justify-content: center;"role="button" onclick="confirmacao(<?php echo("$cod_animal"); ?>)">Excluir</a> <br>

        
				
 
      </div>
    </section>
    

    <input type="radio" name="accordion" id="acc-close" />

      </nav> 

		<?php
			
  				}

  				?>
</body>
</html>