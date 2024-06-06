<html>
  		<?php


  			include ("banco/conexao.php");

        $email = $_POST['email'];
        $senha = $_POST['senha'];
  			$nome = $_POST['nome'];
        $senhaR = $_POST['senhaR'];


       
  			if ($senha != $senhaR){
        
        $redirecionar = "cadastro.php";
        header("Location: $redirecionar", 3000);


      }else{

        //criptografia da senha
        $string = $senha;
        $algoritmo = "AES-256-CBC";
        $chave = "chave_privada";
        $iv = "wNYtCnelXfOa6uiJ";
        $mensagem = openssl_encrypt($string, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);
        $senha = utf8_decode($mensagem);

        //cadastro do usuario
        $resultado = mysqli_query($conexao,"insert into usuario (email, senha, nome_usuario)
                          values ('$email', '$senha', '$nome')");
        
          echo (mysqli_affected_rows($conexao) > 0);
          echo ("$nome cadastrado com sucesso!!");
          $redirecionar = "login.php";
          header("Location: $redirecionar", 3000);
  			
      }

  			mysqli_close($conexao);
  		?>

</html>