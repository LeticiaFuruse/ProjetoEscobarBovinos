<html>
<head>
    <title>CB | Comece sua Jornada</title>
    <link href="css/cadstyle.css" rel="stylesheet">
  

</head>
<body>

   

    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem-vindo!</h2>
                <p class="description description-primary">Para se manter conectado conosco</p>
                <p class="description description-primary">por favor faça o login com suas informações pessoais</p>
                <form action="login.php">
                <button id="signin" class="btnc btn-l">Login</button>
                </form>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Cadastro</h2>

                <p class="description description-second">Insira seus dados</p>
                <div class="social-media">
                </div>

                <form class="form" id="frmLogin" method="POST" action="cadusu.php">


                     <div class="alert alert-success" id="msgSucesso" role="alert">

    </div>
   
    <div class="alert alert-danger" id="msgErro" role="alert">
    </div>


                <label class="label-input" for="">   
                    <input type="text" name="nome" placeholder="Nome" required>
                </label>

                <label class="label-input" for="">
                    <input type="email" name="email" placeholder="E-mail" required>
                </label>

                <label class="label-input" for="">
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                </label>

                <label class="label-input" for="">
                    <input type="password" name="senhaR" id="senhaR" placeholder="Repita Senha" required>
                </label>

                    <button class="btn btn-second" id="btnCadastrar">Cadastrar</button>        
                </form>

                
            </div>
        </div>
    </div>
    
</body>
</html>