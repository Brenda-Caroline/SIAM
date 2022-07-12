<!DOCTYPE html>
  <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="index.css">
      <title>Login SIAM</title>
  </head>
  <body>

  <?php
    require './Conexao.php';
    require './funcoes.php';

    $formDados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($formDados['SendLogin']))
    {
        $ValLogin = new Login();
        $ValLogin->formDados = $formDados;
        $valor = $ValLogin->validar();
        if($valor)
        {
            $login = $_POST['Email'];
            header("Location:home.php?nome=$login");
            die();
        }else 
        {
            echo '<script language="javascript">alert("Login e/ou senha incorretos");</script>';
        }
    }
  ?>

  <div class="box">
      <img src="img/SIAM3.png" height="170" width="400"/>
      <br>
      <form name="Login" action="" method="post">
         <!--  <fieldset>-->
              <legend><b>Login</b></legend>
              <br>
              <div class="inputBox">
                <input type="text" name="Email" id="Email" class="inputUser" required>
                <label for="Email" class="labelInput">Email</label>
                </div>
              <br><br>
              <div class="inputBox">
                  <input type="password" name="Senha" id="Senha" class="inputUser" required>
                  <label for="password" class="labelInput">Senha</label>
              </div>
          <!-- </fieldset> -->
          <br>
          <a href="home.php"><button type="submit" value="entrar" name="SendLogin">Entrar</button></a>
      </form>
        
        <a href="cadastroUsuario.php"><button>Cadastrar</button></a>
  </div>
  </body>
</html> 