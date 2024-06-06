<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/styleh.css" rel="stylesheet">
	<title>CB | Login </title>

    <?php
    session_start();
    //verifica se o usuario esta logado
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
      header("location:login.php");
    }
    
    ?>

</head>
<body>
	<div class="container">
        <div class="content">
    
        <ul class="nav">
            <li><a href="paginas/listar_cadastros/listaAnimal.php">Lista de animais</a></li>
        </ul>

        <div class="divimg">
            <img id="css-element" class="img" src="img/bovinos3.jpg">
        </div>

        <div class="divform">
        <form class="form" method="POST" action="paginas/criar_cadastros/html/cadastroAnimal.php">

            <h1><p>Bem-vindo(a) ao CB!!<br></p></h1>
                <p>Controle seu gado, 
                    <br>Cadastre seu animal abaixo</p>
           

                <button class="btn btn-second">  Cadastrar animal </button>

        </form>

        <a href="logout.php">
            <input type="submit" name="" class="botao" value="Sair" src=""/>
        </a>

            </div>
        </div>
    </div>

</body>
</html>