<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
	<link rel="stylesheet" type="text/css" href="../../css/styleLista.css">
	<title>CB | Lista de Gestação</title>



</head>
<body>
<?php
	
	include("../../banco/conexao.php");

	$resultado = mysqli_query($conexao, "select * from gestacao g inner join medicamentos m ON g.medicamentos = m.cod_med INNER join vacinas v on g.vacinas = m.cod_med");

?>


<script type="text/javascript">
    

function confirmacao(id) {
     var resposta = confirm("Deseja remover esse registro?");
     
     if (resposta == true) {
          window.location.href = "../excluir_cadastros/excluirgestacao.php?cod_gestacao="+id;
     }else if (resposta == false){
      window.location.href = "listaGestacao.php";
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
				<li><a href="listaMedicamentos.php">Listas de Medicamentos</a></li>
				</li>
			</ul>
		</li>
		<li><a href="../../logout.php" style="color: red;">Sair</a></li>
	</ul>
</nav>  


	
	<br><br>
<nav class="accordion arrows">
	<header class="box">
      <label for="acc-close" class="box-title">Lista de Gestações</label>
    </header>

    <?php  
  				
  				for($i=0; $i<mysqli_num_rows($resultado); $i++){
  					
  					$mostra = mysqli_fetch_array($resultado);

  					$cod_gestacao = $mostra['cod_gestacao'];

  					$dtCobert = $mostra['data_cobertura'];

  					$med = $mostra['medicamentos'];

  					$brincoMae = $mostra['brinco_mae'];

  					$vacinas = $mostra['nome'];

           
                    $id = "cb".($i+1);

  			?>



  	<nav class="accordion arrows">
    <input type="radio" name="accordion" id="<?php echo $id; ?>"/> 
    <section class="box">
      <label class="box-title" for="<?php echo $id; ?>" ><font>Gestação | Brinco da Mãe: <?php echo("$brincoMae");?></font></label>
      <label class="box-close" for="acc-close"></label>
      <div class="box-content">

      	<font>Data de Cobertura: <?php echo("$dtCobert");?></font>
      	<br>

      	<font>Medicamentos: <?php echo("$med");?></font>
      	<br>

      	<font>Vacinas: <?php echo("$vacinas");?></font>
      	<br>

      	<br>	<br>

				<a class="btn btn-primary" href="../editar_cadastros/html/editagestacao.php?cod_gestacao=<?php echo("$cod_gestacao"); ?>"  style="background-color: rgba(30, 100, 200, 0.8); color: white; border-radius: 2px; cursor: pointer; padding: 6px; text-decoration: none; border-radius: 3px; margin-left: 6px; justify-content: center;"role="button">Editar</a>

		
				<a class="btn btn-primary" href="#" style="background-color: rgba(255, 20, 30, 0.8); color: white; border-radius: 2px; cursor: pointer; padding: 6px; text-decoration: none;  border-radius: 3px; margin-left: 6px;  justify-content: center;"role="button" onclick="confirmacao(<?php echo("$cod_gestacao"); ?>)">Excluir</a> <br>

        
				
 
      </div>
    </section>
    

    <input type="radio" name="accordion" id="acc-close" />

      </nav> 

		<?php
			
  				}

  				?>

</body>
</html>