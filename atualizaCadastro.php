<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualiza Cadastro de Usuário</title>
    <link rel="stylesheet" href="paginaCadastro.css">
</head>
<body>

  <div class="box">
  
    <img src="img/SIAM3.png"/>
    <br>

    <?php
      require './Conexao.php';
      require './funcoes.php';
        
        $formDados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if(!empty($formDados['SendCaduser']))
        {
            $uouser = new Usuario();
            $uouser->formDados = $formDados;
            $upp = $uouser->upuser();

            if($upp)
            {
                echo '<script language="javascript">alert("Erro: Usuário não atualizado!");</script>';
            }else{
                echo '<script language="javascript">alert("Cadastro atualizado com sucesso!");</script>';
                
            }
        }

        $listuser = new Usuario();
        $list_usuario = $listuser->listar();

        foreach ($list_usuario as $row_usuario)
          {
              extract($row_usuario);
          }     
    ?>
   
 
        
    <form action="" METHOD="POST">
      <!-- <fieldset> -->
        <legend><b>Atualiza Cadastro</b></legend>
        <br>
        
        <div class="inputBox">
            <input type="hidden" name="Id" id="Id" class="inputUser" value="<?php echo $row_usuario['Id'] ;?>">
        </div>
        <div class="inputBox">
            </select>
            <input type="text" name="Nome" id="Nome" class="inputUser" value="<?php echo $row_usuario['Nome'] ;?>">
            <label for="Nome" class="labelInput">Nome completo</label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="number" name="CPF" id="CPF" class="inputUser" value="<?php echo $row_usuario['CPF'] ;?>">
            <label for="CPF" class="labelInput">CPF</label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="number" name="Telefone" id="Telefone" class="inputUser" value="<?php echo $row_usuario['Telefone'] ;?>">
            <label for="Telefone" class="labelInput">Telefone</label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="text" name="NomeUsuario" id="NomeUsuario" class="inputUser" value="<?php echo $row_usuario['NomeUsuario'] ;?>">
            <label for="Nome de usuario" class="labelInput">Nome de Usuario</label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="email" name="Email" id="Email" class="inputUser" value="<?php echo $row_usuario['Email'] ;?>">
            <label for="Email" class="labelInput">Email</label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="password" name="Senha" id="Senha" class="inputUser" value="<?php echo $row_usuario['Senha'] ;?>">
            <label for="Senha" class="labelInput">Senha</label>
        </div>
        <br><br>
        <br><br>
        <button type="submit" value="editar" name="SendCaduser" id="submit">Editar</button>
      <!-- </fieldset> -->
    </form>
  </div>

</body>
</html>