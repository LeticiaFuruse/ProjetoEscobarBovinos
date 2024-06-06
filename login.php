<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/cadstyle.css" rel="stylesheet">
	<title>CB | Login </title>
    <!-- pagina de login -->
</head>
<body>
	<div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem-vindo!</h2>
                <p class="description description-primary">Para se manter conectado conosco</p>
                <p class="description description-primary">por favor faça o login com suas informações pessoais</p>
                <form action="cadastro.php">
                <button id="signin" class="btnc btn-l">Cadastrar</button>
            </form>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Entrar</h2>
                <div class="social-media">
                </div>

				<form class="form" method="POST" action="banco/autentica.php"> 

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" placeholder="E-mail" required>
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha" required>
                    </label>

                    <button class="btn btn-second">Entrar</button>

                </form>
   

            </div>
        </div>
    </div>

</body>
</html>